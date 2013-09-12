<?php
require "querying_db.class.php";
session_start();
	$q= new querying_db();
	$product="";
	$prod_id=0;
	
	if(isset($_GET['prod_id']))
	{
		$prod_id=$_GET['prod_id'];
		$product=$q->view_product($prod_id);
	}
	if(isset($_POST['productID']))
	{
		$productID= $_POST['productID'];
		$_SESSION['Cart_'.$productID]+=1;
		header("Location: cart.php");
	}
?>
<style type="text/css">
<!--
.style12 {background-image:url(pics/3.jpg);
}
.style13 {background-image:url(pics/1600giviing_2007.jpg);
}
.style14 {background-image:url(pics/9.jpg);
border-radius:25px;
}
.style15 {	font-family: "monotype Corsiva";
	font-size: xx-large;
}
.style6 {font-size: 18px; font-family: "Times New Roman", Times, serif; }
-->
</style>
<table width="1351" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="style14"  >
  <!--DWLayoutTable-->
  <tr>
    <td width="137" height="14"></td>
    <td width="1043"></td>
    <td width="171"></td>
  </tr>
  <tr>
    <td height="76"></td>
    <td valign="centre" bgcolor="#FFFFFF"><h1 align="left" class="style15"> <img src="pics/cart.jpeg" width="120" height="62" /> Broadways Enterprise </h1></td>
    <td></td>
  </tr>
  <tr>
    <td height="3"></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="23"></td>
    <td valign="top" bgcolor="#FFFFFF"   ><div align="center">Home | Register |<a href="products.php"> Products</a> | About Us | Contact Us</div>
        <br /></td>
    <td></td>
  </tr>
  <tr>
    <td height="2"></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="445"></td>
    <td valign="top" bgcolor="#FFFFFF" class="style13"   ><form method="post" action="product.php">
      
        <div align="left">
          <table width="1036" border="0">
            <!--DWLayoutTable-->
            <tr>
              <td width="245" rowspan="4" valign="top"><p><img src="pics/<?php echo $prod_id;?>.jpg" width="219" height="240"  />
              </p>                <p><a href="pics/<?php echo $prod_id;?>.jpg"></a><a href="pics/<?php echo $prod_id;?>.jpg">
                  <input type="submit" value="AddToCart" />
              </a></p>
              <p>&nbsp;</p></td>
              <td colspan="2" rowspan="3" valign="top"><p><a href="pics/<?php echo $prod_id;?>.jpg">View Book </a></p>
                <p>&nbsp;</p>
                <p><?php echo $product;?></p>
                <p>&nbsp; </p>
                <p><input type="hidden" name="productID" value="<?php echo $prod_id;?>"/>
                <p>&nbsp;</p>
                              </p></td>
              <td width="230" height="11"></td>
              <td width="39"></td>
              <td width="128"></td>
              <td width="107"></td>
              <td width="11"></td>
            </tr>
            <tr>
              <td height="76"></td>
              <td></td>
              <td></td>
              <td valign="top"><a href="cart.php">Cart</a></td>
              <td></td>
            </tr>
            <tr>
              <td height="214"></td>
              <td></td>
              <td></td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
            <tr>
              <td width="152" height="28"></td>
              <td width="90"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td height="11"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td height="40" colspan="5" valign="top"><a href="products.php">PreviousPage</a> 
                </a></td>
              <td>&nbsp;</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td height="47">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td></td>
              <td></td>
            </tr>
            
            <tr>
              <td height="23"></td>
              <td>&nbsp;</td>
              <td colspan="2" valign="top">Home | <a href="products.php">Products</a> | About Us | Contact Us </td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td></td>
              <td></td>
            </tr>
          </table>
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </form></td>
    <td></td>
  </tr>
  <tr>
    <td height="4"></td>
    <td   ></td>
    <td></td>
  </tr>
  <tr>
    <td height="19"></td>
    <td valign="top"   ><div align="center" class="style12">
      <p><strong>&amp;copy 2013 PN MSIZA&nbsp;210127844</strong></p>
    </div></td>
    <td></td>
  </tr>
  <tr>
    <td height="4"></td>
    <td   ></td>
    <td></td>
  </tr>
</table>
