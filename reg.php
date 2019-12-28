<html>
<head><title>WEBPAGE</title></head>
<body bgcolor="pink" text="black">
<marquee bgcolor="gray" size=5><font size=5><strong><blink>WELCOME TO WEB</blink></font></strong></marquee>
<fieldset>
<legend align='center'>EMPLOYEE DETAILS</legend>
<br><br>
<form action='regpost.php' method='POST'>
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
<table align="left" width=100% bgcolor='#ABD5EC'>
<td bgcolor='#E0D7FD' colspan='2'>PERSONAL DETAILS</td><tr>
<td>Id<font color='red'>*</font></td><td><input type='text' name='Id'>
</td>
</tr>
<tr>
<td>Name<font color='red'>*</font></td><td><input type="text" name="name"></td></tr>
<tr>
<td>Father Name</td><td><input type="text" name="fname">
</td>
</tr>
<tr>
<td>Gender</td><td><input type='radio' name="gen" value="male">Male<input type='radio' name="gen" value="female">Female</td>
</tr>
<tr>
<td>DOB</td>
<td><select name='date' value=" ">

<?php
	for($i=1;$i<=31;$i++)
	{
	echo"<option value='$i'>$i</option>";
	}
	echo"</select><select name='month'>";
	for($i=1;$i<=12;$i++)
	{
	echo"<option value='$i'>$i</option>";
	}
	echo"</select><select name='year'>";
	for($i=1930;$i<=2019;$i++)
	{
	echo"<option value='$i'>$i</option>";
	}
?>
</select></td>
</tr>
<tr>
<td>Educational qualification</td><td>
<select name='eq'>
<option value='UG'>UG</option>
<option value='PG'>PG</option>
<option value='DIPLOMO'>DIPLOMO</option>
<option value='ITI'>ITI</option>
</select></td>
</tr>
<tr>
<td>phone no</td>
<td><input type='text' name='phno'></td>
</tr>
<tr>
<td>Email</td>
<td><input type='text' name='email'></td>
</tr>
<tr>
<td>ADDRESS</td><td><textarea rows=5 cols=10 name="addr"></textarea>
</td>
<tr>
<td colspan=2 align='center'>
<input type="submit" name="submit" value="save">
<input type="reset" name="reset" value="cancel">
</td>
</tr>
</fieldset>
</form>
</table>
</body>
</html>


