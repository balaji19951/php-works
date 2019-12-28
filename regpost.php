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
$Id=$_POST['Id'];
$username=$_POST['name'];
$Fathername=$_POST['fname'];
$Gender=$_POST['gen'];
$DOB=$_POST['year'].'-'.$_POST['month'].'-'.$_POST['date'];
$Educational=$_POST['eq'];
$phone=$_POST['phno'];
$Email=$_POST['email'];
$address=$_POST['addr'];
echo "Id: ".$Id."<br>";
echo "NAME: ".$username."<br>";
echo "Fathername: ".$Fathername."<br>";
echo "Gender: ".$Gender."<br>";
echo "DOB: ".$DOB."<br>";
echo "Educational qualification: ".$Educational."<br>";
echo "phone no: ".$phone."<br>";
echo "Email: ".$Email."<br>";
echo "Address: ".$address."<br>";

$conn=mysql_connect("localhost","root","mysql");
	if(!$conn)
	{
		die('could not connect: '.mysql_error());
	}
	$db1=mysql_query("use balajiweb1",$conn);
$ins_qry=mysql_query("insert into reg1 values('$Id','$username','$Fathername','$Gender','$DOB','$Educational','$phone','$Email','$address')");
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

