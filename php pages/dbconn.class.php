<?php
class DatabaseConnection
{
	public $queryResult;
	protected $dbHostname = "localhost";
	private $connectionHandle;
	
	
	function establishConnection()
	{
		$db=new mysqli("Localhost","root","1234","users");
		return $db;
	}
	
	function addUser($surname, $name, $username, $mail, $password)
	{
		
		$db=DatabaseConnection::establishConnection();
		
		$query="insert into users values(null,'".$surname."','".$name."','".$username."','".$mail."','".md5($password)."')";
		$result=$db->query($query);
	}
	
	function execute($username, $email)
	{
		$query = '
			SELECT * FROM users
			WHERE username="'. $username.'"
				AND email ="'. $mail.'"
		';
		$r = mysql_query($q);
		if(mysql_num_rows($r)==1)
		{
			return TRUE;
		}else
		{
			return FALSE;
		}		
	}
	
	/*function getPassword($username)
	{
		$db=DatabaseConnection::establishConnection();
		$password="";
		$query="select * from users where username='username'";
		$result =$db->query($query);
		$num_row=$result->num_rows;
		if($num_row>0)
		{	
			$row=$result->fetch_assoc();
			$password=$row['password'];
		}
		return $password;}*/
	
}

?>