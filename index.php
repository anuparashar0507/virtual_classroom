<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>profile</title>
</head>
<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
<body background="images/03.jpg" height="1500" width="100"  > 
<table  width="1000" height="100" border="0" cellpadding="0" cellspacing="4" >

<tr>
 <td>
 <center> <img src ="images/7.jpg" width="1050"height="300" ></center>
</td>
</tr><tr></tr><tr></tr><tr></tr>
<tr>
<td align="left" style="word-spacing:6px;font-size:120%;padding-right:30px;">
<a href="studlogin.php" title="student" ><img src="images/ss.gif"</a> 
<a href="faclogin.php" title="faculty"> <img src="images/f2.png"> </a>  
 

</td></tr>
</table>

<form action="index.php" method="post">
<table>
	<tr><td>
	<tr><td>Admin Login
	<tr><td><input type="password" placeholder="password" name="pass" >
	<tr><td><input type="submit" name="sub" value="Login">
	</td></tr>	
</table>
</form
>
<?php
$submit = @$_POST['sub'];
if($submit)
{
$pass1=$_POST["pass"];
$Connection = mysql_connect("localhost", "root", "");
$db=mysql_select_db("virtualclass"); 
$sql=mysql_query("select * from admin ");
$res= @mysql_fetch_array($sql);
$dbpass=$res['pass'];
	if($dbpass==$pass1)
{
	header('location:admin.php');
		}
	
}

?>
</body>
</html>
