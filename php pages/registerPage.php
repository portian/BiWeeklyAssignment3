<?php	
require "user.class.php";
//Declaring this variables globally and initializing them 
/*$error_string="";
$error_string1="";
$error_string2="";
$error_string3="";
$error_string4="";
$error_string5="";
$error_string6="";
$error_string7="";
$error_string8="";
$error_string9="";
$error_string10="";
$error_string11="";*/
$msg="";

if($_SERVER['REQUEST_METHOD']=="POST")
   		{


       $name = trim($_POST['name']);
       $surname = trim($_POST['surname']);
       $email = trim($_POST['email']);
	   $username = trim($_POST['username']);
       $password = trim($_POST['password']);
	  // $conpassword = trim($_POST['conpassword']);
	   
	   

			if(empty($surname))
			{
				 $error_string1 .= '<br />Surname required';
			}
			 if(!preg_match('/^[A-Za-z \'-]+$/', $surname))
			{
				$error_string2 .= '<br />Surname can only contain letters.';
			}
      		 if(empty($name))
			{
				 $error_string3 .= '<br />Name required';
			}
			 if(!preg_match('/^[A-Za-z \'-]+$/', $name))
			{
				$error_string4 .= '<br />name can only contain letters.';
			}
			if(empty($username))
			{
				 $error_string5 .= '<br />Username required';
			}
		   
			if(empty($email)) 
			{
				 $error_string6 .= '<br />Email required';
			}
			
			if(!preg_match("/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/", $email)) 
      		{
               $error_string7 .=  '<br />The email you have entered is not valid';
      		}
			
			if(empty($password))
			{
				  $error_string8 .= '<br />Password required';
			}

			/*if(empty($conpassword))
			{
				  $error_string9 .= '<br />Confirmation password required';
			}*/
			if(strlen($password) >32 || strlen($password) < 8)
			{
				 $error_string10 .= '<br />Your password must be between 8 -32 characters';
			}
			/*if($password != $conpassword)
			{
				 $error_string11 .= '<br />The password you entered do not match please check';
			}*/
			
			if(!$name||!$surname||!$username||!$email||!$password)
			{
				
				$msg="Failed to register";
			}
			else
			{
					$reg = new User($surname, $name, $username, $email,$password);
					$msg =  $reg -> displayUserInfo($username,$password);
					$reg->save();
			}
		}
     
 ?>

<style type="text/css">
<!--
body {
	background-attachment:scroll;
background-image
; 	background-image: url(pics/5.jpg);	
	
}
.style6 {font-size: 18px; font-family: "Times New Roman", Times, serif; }
.style12 {
background-image:url(pics/3.jpg);
}
.style13 {
background-image:url(pics/1600giviing_2007.jpg);
}
.style14 {
background-image:url(pics/9.jpg);
border-radius:25px;
}
.style15 {
	font-family: "monotype Corsiva";
	font-size: xx-large;
}
-->
</style>
<title>register</title><table width="1351" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="style14"  >
  <!--DWLayoutTable-->
  <tr>
    <td width="137" height="14"></td>
    <td width="1043"></td>
    <td width="171"></td>
  </tr>
  <tr>
    <td height="76"></td>
    <td valign="centre" bgcolor="#FFFFFF"><h1 align="left" class="style15">  <img src="pics/cart.jpeg" width="120" height="62" /> Broadways Enterprise </h1>     </td>
    <td></td>
  </tr>
  <tr>
    <td height="3"></td>
    <td></td>
    <td></td>
  </tr>
  
  
  
  <tr>
    <td height="23"></td>
    <td valign="top" bgcolor="#FFFFFF"   > <div align="center">Home | Register |<a href="products.php"> Products</a> | About Us | Contact Us</div>      <br /></td>
    <td></td>
  </tr>
  <tr>
    <td height="2"></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="445"></td>
    <td valign="top" bgcolor="#FFFFFF" class="style13"   ><form id="form1" name="form1" method="post" action="registerPage.php">
      <p>
        <?php
            if($error_string)
                echo '<font color="red">'.$error_string.'</font>';
        ?>
        </p>
        <div align="center">
          <table width="692" border="0">
            <!--DWLayoutTable-->
            <tr>
              <td height="44" colspan="4"><label><span class="style6"> What is your surname?</span></label>
                <span class="style6"><br />
                <input name="surname" type="text" size="40" />
              </span></td>
              <td colspan="2"><span class="style6">
                <?php if($error_string1) echo '<font color="red">'.$error_string1.'</font>';
		  													 if($error_string2) echo '<font color="red">'.$error_string2.'</font>';	?>
              </span></td>
              <td width="5"></td>
            </tr>
            <tr>
              <td height="44" colspan="4"><span class="style6">
                <label>&nbsp;What is your name?</label>
                <br/>
                <input name="name" type="text" size="40" />
              </span></td>
              <td colspan="2"><span class="style6">
                <?php if($error_string3) echo '<font color="red">'.$error_string3.'</font>';
		  													 if($error_string4) echo '<font color="red">'.$error_string4.'</font>';	?>
              </span></td>
              <td></td>
            </tr>
            <tr>
              <td height="44" colspan="4"><span class="style6">
                <label>&nbsp;Please enter your email address</label>
                <br/>
                <input name="email" type="text" size="40" />
              </span></td>
              <td colspan="2"><span class="style6">
                <?php if($error_string6) echo '<font color="red">'.$error_string6.'</font>';
		  													 if($error_string7) echo '<font color="red">'.$error_string7.'</font>';	?>
              </span></td>
              <td></td>
            </tr>
            <tr>
              <td height="44" colspan="4"><span class="style6">
                <label>&nbsp;Please enter your username </label>
                <br/>
                <input name="username" type="text" size="40" />
              </span></td>
              <td colspan="2"><span class="style6">
                <?php if($error_string5) echo '<font color="red">'.$error_string5.'</font>';	?>
              </span></td>
              <td></td>
            </tr>
            <tr>
              <td height="44" colspan="4"><span class="style6">
                <label>&nbsp;Please enter your password</label>
                <br/>
                <input name="password" type="password" size="40" />
              </span></td>
              <td colspan="2"><span class="style6">
                <?php if($error_string8) echo '<font color="red">'.$error_string8.'</font>';	
		  													 if($error_string10) echo '<font color="red">'.$error_string10.'</font>';	?>
              </span></td>
              <td></td>
            </tr>
            <tr>
              <td width="183" height="26" valign="top" onmouseover="clicking"><input name="register" type="submit" id="Submit" value="Register" onmouseover="click to register" /></td>
              <td colspan="5" valign="top"><input type="reset" name="Submit2" value="Reset" /></td>
              <td></td>
            </tr>
            
            <tr>
              <td height="16"></td>
              <td width="11"></td>
              <td width="97"></td>
              <td width="11"></td>
              <td width="208"></td>
              <td width="147"></td>
              <td></td>
            </tr>
            <tr>
              <td height="21" colspan="3" valign="top"> <?php echo $msg;?></td>
              <td>&nbsp;</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td height="15"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td height="21"></td>
              <td></td>
              <td colspan="3" valign="top">Home | <a href="products.php">Products</a> | About Us | Contact Us </td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
            <tr>
              <td height="13"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
                  </table>
        </div>
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
      <p><strong>&copy 2013 PN MSIZA&nbsp;210127844</strong></p>
    </div></td>
    <td></td>
  </tr>
  <tr>
    <td height="4"></td>
    <td   ></td>
    <td></td>
  </tr>
</table>

