<?php
require "cart.class.php";
session_start();
 
if(isset($_GET['remove_item']))
{
	$_SESSION['cart_'.$_GET['remove_item']]=0;
}
if(isset($_GET['add']))
{
	$_SESSION['cart_'.$_GET['add']]+=1;
}
$cat = new Scart();
$answer = $cat->cart($_SESSION);
$totalAmt =$cat->totalPay();

if(isset($_GET['removeAll'])&&isset($_GET['removeAll'])=="empty")
{
	session_destroy();
	header("Location: home.php");
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
.style15 {font-family: "monotype Corsiva";
	font-size: xx-large;
}
-->
</style>
<title>cart</title><table width="1351" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="style14"  >
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
    <td valign="top" bgcolor="#FFFFFF"   ><div align="center">Home | Register | <a href="products.php">Products</a> | About Us | Contact Us</div>
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
    <td valign="top" bgcolor="#FFFFFF" class="style13"   >
      <div align="left">
        <p>&nbsp;</p>
        <table width="1030" border="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="665" height="33"></td>
            <td colspan="2" valign="top"><?php echo $totalAmt;?></td>
            </tr>
          <tr>
            <td height="23"></td>
            <td colspan="2" valign="top"><a href="userLogin.php">Confirm</a></td>
          </tr>
          <tr>
            <td height="29"></td>
            <td width="201" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="142">&nbsp;</td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <table width="999" border="0">
          <!--DWLayoutTable-->
          <tr>
            <td height="216" colspan="4" valign="top"><table width="851" height="59" border="1">
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
            </tr>
          <tr>
            <td height="31" colspan="3" valign="top"><a href=cart.php?removeAll=empty>Clear Cart </a></td>
            <td width="1">&nbsp;</td>
          </tr>
          <tr>
            <td width="438" height="188">&nbsp;</td>
            <td width="331">&nbsp;</td>
            <td width="211">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          
          
          
          
          
          
          
          
          
          
          
          
          <tr>
            <td height="23"></td>
            <td valign="top">Home | <a href="products.php">Products</a> | About Us | Contact Us </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
      </div>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </td>
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
