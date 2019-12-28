<?php
  //create table
include'conn.php';
	$qry=mysql_query("create table login1(username varchar(34) primary key,password varchar(50))");
	if($qry)
	{
		echo"Table is created";
	}
	else
	{
		die(mysql_error());
	}
	mysql_close($conn);
?>
