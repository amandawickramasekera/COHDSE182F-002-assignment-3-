<html>
<head><title>Login</title></head>
<body>
<form method = "post" action= "#">
<pre>
<label>Username <input un =  "un" type="text" ></label><br />
<label>Password <input pw = "pw" type="text" ></label><br />
</pre>
<input type="submit" value="Login" >
<?php
if(isset($_post["un"]))
{ 



if($_Post["un"] == "admin" && $_post["pw"] == "abc123")

{
	$_session["un"];
	

	session_start();

	
	header("Location: welcome.php");
}
else
{
	echo"Invalid username or password";
}
}
$inactive = 10;
$_session_life = time()-$_session['timeout'];
if($_session_life > $inactive)
{
	session_destroy(); header("location: login.php");
}
$_session['timeout'] = time();


?>
</form></body></html>