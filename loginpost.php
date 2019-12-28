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


</table>
<?php
$username=$_POST['username'];
$password=$_POST['password'];
echo "username: ".$username."<br>";
echo "password: ".$password."<br>";
$conn=mysql_connect("localhost","root","mysql");
	if(!$conn)
	{
		die('could not connect: '.mysql_error());
	}
	$db1=mysql_query("use balajiweb1",$conn);
$ins_qry=mysql_query("insert into login1 values('$username','$password')");
if($ins_qry)
{
	echo"Record is inserted";
}
else
{
	die(mysql_error());
}
mysql_close($conn);

?>
