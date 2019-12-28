<?php
  //create table
include'conn.php';
	$qry=mysql_query("create table reg1(Id varchar(10) primary key,Name varchar(50),Father_Name varchar(25),Gender varchar(10),DOB date,Educational_qualification varchar(15),phone_no bigint,Email varchar(50),Address varchar(50))");
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
