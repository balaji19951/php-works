<?php
	$conn=mysql_connect("localhost","root","mysql");
	if(!$conn)
	{
		die("could not connect: ".mysql_error());
	}
	$db=mysql_query("create database balajiweb1");
	if(!$db)
	{
		die("can't create database: ".mysql_error());
	}
	else
	{
		echo("Database is created");
	}
	mysql_close();
?>
