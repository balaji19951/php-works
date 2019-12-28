<?php
$conn=mysql_connect("localhost","root","mysql");
	if(!$conn)
	{
		die('could not connect: '.mysql_error());
	}
	$db1=mysql_query("use balajiweb1",$conn);
?>
	
