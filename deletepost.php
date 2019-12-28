<html>
<head><title>WEBPAGE</title></head>
<body bgcolor="pink" text="black">
<marquee bgcolor="gray" size=5><font size=5><strong><blink>WELCOME TO WEB</blink></font></strong></marquee>
<fieldset>
<legend align='center'>EMPLOYEE DETAILS</legend>
<br><br>
<form action='appl.php' method='POST'>
<table align='right' border='2' bgcolor='#C3CEFF'>
<tr>
<td align='center' colspan='2'>
&nbsp;&nbsp;&nbsp;
<a href='home.php'>Home page
</a>
&nbsp;&nbsp;&nbsp;
</td><td>
&nbsp;&nbsp;&nbsp;
<a href='login.php'>logout
</a>
&nbsp;&nbsp;&nbsp;&nbsp;
</td></tr>
<h2 align='center'>
<img src=images.png width=200 height=100 alt=lamp>
</table>
<?php
$Id=$_POST['Id'];
echo "Enter Id: ".$Id."<br>";
$conn=mysql_connect("localhost","root","mysql");
	if(!$conn)
	{
		die('could not connect: '.mysql_error());
	}
	$db1=mysql_query("use balajiweb1",$conn);
$ins_qry=mysql_query("delete from reg1 where Id=$Id");
if($ins_qry)
{
	echo"Record is deleted";
}
else
{
	die(mysql_error());
}
mysql_close($conn);

?>


