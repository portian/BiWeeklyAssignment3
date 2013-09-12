<?php
require "querying_db.class.php";
class Scart extends querying_db
{
	private $tot;
	private $q;
	
	function cart($cart_ses)
	{
		$details="";
		$q= new querying_db();
		foreach($cart_ses as $name =>$val)
		{
			if($val>0)
			{
				if(substr($name,0,5)=="cart_")
				{
					$prod_id=substr($name,5,(strlen($name)-5));
					//$details.=$q->cart_table($prod_id)."<td>".$val."</td><td><a href='cart.php?add=$prod_id'>Add</a> <a href='cart.php?remove=$prod_id'>Remove</a></td></tr>";
					$details.=$q->Scart($prod_id)."<td>".$val."</td><td><a href='cart.php?add=$prod_id'>Add</a> <a href='cart.php?remove=$prod_id'>Remove</a></td></tr>";
					$this->tot+=$q->total_price($prod_id, $val);
				}
			}
		}
		return $details;
	}
	
	function orders($cart_ses)
	{
		$info="";
		$q = new querying_db();
		foreach($cart_ses as $name=>$val)
		{
			if($val>0)
			{
				if(substr($name,0,5)=="cart_")
				{
					$prod_id=substr($name,5,(strlen($name)-5));
					$info.=$q->cart($prod_id)."<td>".$val."</td>";
					$this->tot+=$this->q->total_price($prod_id,$val);
				}	
			}
		}
		return $info;	
	}
	function totalPay()
	{
		$tota=$this->tot;
		return "<br/><br/>"."TOTAL AMOUNT : R".$this->tot."<br/>";
	}
	
	function amount()
	{
		return $this->tot;
	}
	
	function order($prod_id)
	{
		return $this->q->take_order($prod_id);
	}
	
	/*function items($prod_id,$cart_ses)
	{
		$this->q->items($prod_id, $cart_ses);
	}*/	
}
?>