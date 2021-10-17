
<?php
include("dbconnect.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="dbms.css">
</head>
<body>
	<section class="box">
		<h1><i><center>WELCOME TO ADMIN PORTAL</center></i></h1>
<center><form name="ADMIN-PORTALForm" method="post" action="Adminpage.html"style="margin-top: 100px;">
<label>Username:</label><br>
<input type="text" size=25 name="userid"><br>
<label>Password:</label><br>
	<input type="Password" size=25 name="pwd"><br>
<input  type="submit" onclick="return check(this.form)" value="Login">


</form></center>
</section>
<script language="javascript">
function check(form)
{

if(form.userid.value == "admin" && form.pwd.value == "1234")
{
	
	alert("LOGIN SUCSESFULL")
}
else
{
	alert("Error Password or Username")
	return false;
}
}
</script>

</body>
</html>

 