<?php
require "dbconn.class.php";
class User
{
	public $surname;
	public $name;
	public $username;
	public $email;
	public $password;
	//public $conpassword;
	
	function __construct($surname, $name, $username, $email,$password)
	{
		$this -> surname = $surname;
		$this -> name = $name;
		$this -> username = $username;
		$this -> email = $email;
		$this -> password = $password;
		//$this -> conpassword = $conpassword;
	}
	
	function setPassword($password)
	{
		$password = md5($password);
	}
	
	function displayUserInfo($username)
	{ 
		return " You have successfully registered!! <br /> click here for your <a href=login_details.php>Login details</a>";  
	}
	
	function save()
	{
		$dbConn = new DatabaseConnection();
	
		$dbConn->addUser($this->surname,$this->name,$this->username,$this->email,$this->password,$this->conpassword);
	}
	
}
?>
