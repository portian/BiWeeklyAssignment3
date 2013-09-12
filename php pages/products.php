<?php
require "querying_db.class.php";
$q= new querying_db();
$message="";
$books=$q->select_books();
//$sear=$_POST['find'];
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$find=$_POST['search'];
	$answer=$q->find_product($find);
	if($answer>0)
	{
		$message="Book found!!</br>";
	}
	else
	{
		$message="Error! Book not found!!</br>";
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>products</title>
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
</head>

<body>
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
    <td valign="top" bgcolor="#FFFFFF" class="style13"   ><form method="post" action="products.php">
      <div align="left">
        <table width="997" border="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="124" height="113">&nbsp;</td>
            <td colspan="3" rowspan="2" valign="top"><p>&nbsp;</p>              <p>&nbsp;<?php echo $books;?></p></td>
            <td width="127" valign="top"><a href="cart.php">Cart</a></td>
            </tr>
          <tr>
            <td height="191">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          
          
          
          <tr>
            <td height="41">&nbsp;</td>
            <td width="277">&nbsp;</td>
            <td width="337">&nbsp;</td>
            <td width="110">&nbsp;</td>
            <td></td>
            </tr>
          <tr>
            <td height="105">&nbsp;</td>
            <td colspan="3" valign="top"><label>Book name  : </label>
              &nbsp;
              <input type="text" name="find" /> 
              <p>
                <input type="submit" name="search" value="Search" />
              </p>
              <p>&nbsp;<?php echo $message;?></p></td>
            <td></td>
            </tr>
          <tr>
            <td height="47">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td></td>
            </tr>
          
          
          <tr>
            <td height="23"></td>
            <td></td>
            <td valign="top">Home | <a href="products.php">Products</a> | About Us | Contact Us </td>
            <td>&nbsp;</td>
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
</body>
</html>
