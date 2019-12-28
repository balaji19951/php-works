<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	echo"username: ".$username."<br>";
	echo"password: ".$password."<br>";
	$conn=mysql_connect("localhost","root","mysql");
	$db=mysql_query("use balajiweb1",$conn);
	$q=mysql_query("select count(*) from login1 where username='$username' && password='$password' ");
	$fetch=mysql_fetch_array($q);
	if($fetch[0]!="0")
	{
		header("location:home.php");

	}
	else
	{
		header("location:error.php");

	}
?>
