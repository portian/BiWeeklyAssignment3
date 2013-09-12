<?php
require "dbconn.class.php";
class querying_db extends DatabaseConnection
{
	private $db;
	
	function select_books()
	{
		$ad="";
		$prod_id="";
		$product="";
		$price="";
		
		$db=DatabaseConnection::establishConnection();
		$query="select * from products";
		$result=$db->query($query);
		$num_row=$result->num_rows;
		if($num_row>0)
		{
			for($x=0; $x<$num_row; $x++)
			{
				$rows=$result->fetch_assoc();
				//$books=$rows['book'];
				$prod_id=$rows['prod_id'];
				$product=$rows['book_name'];
				$price=$rows['price'];
				$motive.='<table border="1" cellspacing="0" cellpadding="8">
				<tr>
					<td width="30%" valign="top"><a href="product.php?prod_id='.$prod_id.'"><img style="border:#666 1px solid;" src="pics/'.$prod_id.'.jpg" height="100" border="1" /></a></td>
					<td valign="top">'.$product.'<br/> R'.$price.'<br/>
					<a href="product.php?prod_id='.$prod_id.'">Full Details</a></td>
				</tr>
				
				</table>';	
			}
		}
		return $motive;
	}
	
	function view_product($prod_id)
	{
		$db=DatabaseConnection::establishConnection();
		$res="";
		$query="select * from products where prod_id='$prod_id'";
		$result=$db->query($query);
		$num_row=$result->num_rows;
		if($num_row>0)
		{
			for($x=0; $x<$num_rows; $x++)
			{
				$rows=$result->fetch_assoc();
				//$prod_id=$rows['prod_id'];
				$product=$rows['book_name'];
				$price=$rows['price'];
				$desc=$rows['descreption'];
				$author=$rows['author'];
				
				
				$res=$product."<br/> Description : ".$desc."<br/> Author : ".$author."<br/> Price : R".$price;
			}
		}
		return $res;
	}
	
	function Scart($prod_id)
	{
		$db=DatabaseConnection::establishConnection();
		$ress="";
		$query="select * from products where prod_id=$prod_id";
		$result=$db->query($query);
		$num_row=$result->num_rows;
		if($num_row>0)
		{
			for($x=0; $x<$num_row; $x++)
			{
				$rows=$result->fetch_assoc();
				$product=$rows['book_name'];
				$desc=$rows['description'];
				$author=$rows['author'];
				$price=$rows['price'];
				
				
				$ress.="<tr>";
				$ress.="<td><a href=./product.php?prod_id=$prod_id>$product</a><br/><img src=\"pics/$prod_id.jpg\" alt=\"$product\" width=\"40\" height=\"52\" border=\"1\" </td>";
				//$res2.="<tr>".$
				$ress.="<td>".$desc."</td>";
				$ress.="<td>".$author."</td>";
				$ress.="<td>".$price."</td>";
				
			}
		}
		return $res2;	
				
	}
	
	function total_price($prod_id, $val)
	{
		$db=DatabaseConnection::establishConnection();
		$res5="";
		$totalP="";
		$query="select * from products where prod_id=$prod_id";
		$result=$db->query($query);
		$num_row=$result->num_rows;
		
		if($num_row>0)
		{
			for($x=0; $x<$num_row; $x++)
			{
				$rows=$result->fetch_assoc();
				$price=$rows['price'];
				$totalP=$val*$price;
			}
		}
		return $totalP;
	}
	
	function find_product($find)
	{
		$db=DatabaseConnection::establishConnection();
		$searched=0;
		$query="select * from products where book_name='$find'";
		$result=$db->query($query);
		$num_row=$result->num_rows;
		
		for($x=0; $x<$num_row; $x++)
		{
			$rows=$result->fetch_assoc();
			$searched=$rows['prod_id'];
			//$product=$rows['book_name'];
			
		}
		return $searched;
	}
	
	
	/*function login_user($username, $password)
	{
		$db=DatabaseConnection::establishConnection();
		$prod_id=0;
		$query="select * from users where username='$username' and  password='$password' LIMIT 2";
		$result=$db->query($query);
		$num_row=$result->num_rows;
		if($num_row==1)
		{
			$row=$result->fetch_assoc();
			$user_id=$row['userID'];
		}
		return $user_id;
		
	}*/
	
	function store_order($prod_id)
	{
		$db=DatabaseConnection::establishConnection();
		$query="insert into orders values(null,'".$prod_id."')";
		$result=$db->query($query);
		return $order_id=mysql_insert_order_id($db);

	}
	
	
}
?>