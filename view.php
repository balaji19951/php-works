<html>
<head><title>WEBPAGE</title></head>
<body bgcolor="pink" text="black">
<marquee bgcolor="gray" size=5><font size=5><strong><blink>WELCOME TO WEB</blink></font></strong></marquee>
<fieldset>
<legend align='center'>DETAILS</legend>
<br><br>
</table>
<table align='center' border='2' bgcolor='#C3CEFF'>
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

</html>
<?php
$conn=mysql_connect("localhost","root","mysql");
$use=mysql_query('use balajiweb1');
$ds=mysql_query("select * from reg1");
echo"<table border=1>";
echo"<tr><td>Id</td><td>NAME</td><td>Fathername</td><td>Gender</td><td>DOB</td><td>Educational qualification</td><td>phone no</td><td>Email</td><td>Address</td></tr>";
while($r=mysql_fetch_array($ds))
{
	echo"<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td><td>$r[4]</td><td>$r[5]</td><td>$r[6]</td><td>$r[7]</td><td>$r[8]</td></tr>";
}
mysql_close($conn);
?>	
