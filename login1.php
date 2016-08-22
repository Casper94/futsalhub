<?php

session_start();
$username=$_POST['username'];
$password=$_POST['password'];

if($username&&$password)
{
	$connect=mysql_connect("localhost","root","") or die ("couldn't connect to the database ");
	mysql_select_db("login") or die("couldn't find database");
	
	$query = mysql_query(SELECT * FROM users WHERE username='$username');
	$numrows=mysql_num_rows($query);
	
	if($numrows!==0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbusername =$row['username'];
			$dbpassword =$row['password'];
		}
		if($username==$dbusername&&md5($password)==$dbpassword)
		{
			echo "you are logged in";
			$_SESSION['username']=$username;
		}
		else
			echo "your password is incorrect";
		
	}
	else
		die("this user doenst exist");
	
}
else
	die("please enter a username and password");
?>