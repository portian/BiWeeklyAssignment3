<?php
session_start();
require "cart.class.php";

/*if(!isset($_SESSION['user']))
{
	header("Location: home.php");
	session_destroy();
}*/
	if(isset($_POST['logout']))
	{
		header("Location: products.php");
		session_destroy();
	}
	if(isset($_POST['purchase']))
	{
		header("Location: order.php");
	}

	$sCart = new $Cart();
	$fill=$sCart->orders($cart_ses);
	$tot=$sCart->totalPay();
	$totC=$sCart->amount();
	
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
.style15 {font-family: "monotype Corsiva";
	font-size: xx-large;
}
-->
</style>
<title>checkout</title><table width="1351" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="style14"  >
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
    <td valign="top" bgcolor="#FFFFFF"   ><div align="center">Home | Register | Products | About Us | Contact Us</div>
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
        <p>&nbsp;</p>
        <table width="1030" border="1">
          <!--DWLayoutTable-->
          <tr>
            <td width="665" height="85"></td>
            <td width="349" valign="top"><p>TOTAL AMOUNT: <?php echo $totalPay; ?></p>
              <p>
                <input type="submit" name="purchase" value="Purchase" />
              </p>              <a href=" <?php echo "TOTAL AMOUNT : ".$totalAmt;?>"></a></td>
          </tr>
          <tr>
            <td height="5"></td>
            <td></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <table width="997" border="0">
          <!--DWLayoutTable-->
          <tr>
            <td height="99" colspan="3" valign="top"><table width="851" height="59" border="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="152" height="55" valign="top">BOOK</td>
                <td width="132" valign="top">DESCRIPTION</td>
                <td width="139" valign="top">AUTHOR</td>
                <td width="85" valign="top">PRICE</td>
                <td width="151" valign="top">QUANTITY</td>
                <td width="166" valign="top">ADD &amp; REMOVE </td>
              </tr>
              <?php echo $answer;?>
            </table>
              <p>&nbsp;</p></td>
          <td width="39"></td>
            <td width="54"></td>
            <td width="32"></td>
          </tr>
          <tr>
            <td width="389" height="25">&nbsp;</td>
            <td width="435">&nbsp;</td>
            <td width="22">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
          <tr>
            <td height="41">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td valign="top"><input type="submit" name="logout" value="Logout" /></td>
            <td></td>
          </tr>
          <tr>
            <td height="77">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
          <tr>
            <td height="116">&nbsp;</td>
            <td valign="top">Home | <a href="products.php">Products</a> | About Us | Contact Us </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
          <tr>
            <td height="16"></td>
            <td></td>
            <td></td>
            <td></td>
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
