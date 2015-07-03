<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>update</title>
</head>

<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
<body background="images/03.jpg" bgcolor="white" > 
<form  action="facupdate.php" method="post" >
<table  width="1350" border="0" cellpadding="0" cellspacing="4" bgcolor="white">
<tr>
 <td>
 <center><img src="images/vc.png" width="1250"height="150" ></center>
</td>
</tr>
<tr></tr><tr></tr>
<tr></tr><tr></tr>
<tr>
<td align="left" style="word-spacing:6px;font-size:120%;padding-right:30px;color:#888888;white-space:nowrap;">
<a href="facprofile.php" title="Home">Home </a>  | 
<a href="facupdate.php" title="update"> Edit Profile </a>  | 
<a href="fstudy.php" title="study">Study material</a>  | 
 
<a href="fquestion.php" title="ask">Ask doubts</a>  | 


</td>

<td align="right" style="word-spacing:6px;font-size:120%;padding-right:10px;color:#888888;white-space:nowrap;">
|<a href="index.php" title="tell">Logout</a>
</td>
</tr>
</table>
<br><br><br><br>
<center>
<table cellpadding=2 cellspacing=0 border=0>


<tr>  <td bgcolor="white">
<table cellpadding=0 cellspacing=0 border=1 width=100%>   <tr>   <td bgcolor="green" align=center style="padding:2;padding-bottom:4">   <b><font size=-1 color="white" face="verdana,arial"> Edit Profile</font></b></tr>
<tr><td bgcolor="white" style="padding:5"><br>
<TABLE border=0 cellspacing=2 cellpadding=2 width="100%"> 

<tr>  <td bgcolor="white"><table cellpadding=0 cellspacing=0 border=1 width=100%>   <tr>   <td bgcolor="green" align=center style="padding:2;padding-bottom:4">   <b><font size=-1 color="white" face="verdana,arial"> Profile picture</font></b><td bgcolor="green" align=center style="padding:2;padding-bottom:4"> <b><font size=-1 color="white" face="verdana,arial">Personal info</font></b>

<TR> 
   <TD width="50%"> 
      <TABLE  cellspacing=2 cellpadding=2 width="100%"> 
      <TR> 
         <TD>
	<center><img src="images/f1.jpg" width=150 height=150  ></center>
	<center>
	<div class="mybutton">
		<a href="main.html">
		<button style="width:160;height:24; background-color:#97cfc3">change picture 
		</button></a><br>
	</div>
	</center>
<?php
include("conn.php");	
$user=@$_SESSION["user"];
$name=@$_POST["name"];
$username=@$_POST["username"];
$pas=@$_POST["pass"];
$branch=@$_POST["branch"];
$subject=@$_POST["subject"];
$phno=@$_POST["ph_no"];

$sql="select * from faculty where user='".$user."'";
#out.println("select * from faculty where user='".$user."'");
$rs= mysql_query($sql);
$row=mysql_fetch_array($rs);
?>

	</TD> 
      </TR> 
      </TABLE> 
   </TD> 
   <TD> 
	<center><table>
	<tr><td>  <font face="verdana,arial" size=-1>  Name:</font></td>  <td>  <input type="text" name="name" value="<?php echo $row['name']; ?>">  </td>  </tr>
	
	<tr><td>  <font face="verdana,arial" size=-1>   User_name:</font></td>  <td>   <input type="text" name="user" value="<?php echo $row['user']; ?>">  </td>  </tr>
	
	<tr><td>  <font face="verdana,arial" size=-1>   Password:</font></td>  <td>   <input type="password" name="pass" value="<?php echo $row["pass"]; ?>">  </td>  </tr>
	
	<tr><td>   <font face="verdana,arial" size=-1> Branch:</font></td>   <td><select name="branch">
									<option value="cse">CSE</option> 
									<option value="mech">ECE</option>
									<option value="ece">MECH</option>
									<option value="eee">CIVIL</option>
									</select></td></tr>
	<tr><td>  <font face="verdana,arial" size=-1>   Subject:</font></td>  <td>   <input type="text" name="subject" value="<?php echo $row["subject"]; ?>" >  </td>  </tr>
		
		
	<tr><td>  <font face="verdana,arial" size=-1>   Contact No..:</font></td>  <td>   <input type="text" name="ph_no" value="<?php echo $row["ph_no"]; ?>">  </td>  </tr>
	
	<tr><td><font face="verdana,arial" size=-1>&nbsp;</font></td><td><font face="verdana,arial" size=-1><input type="submit" name="sub" value="Update"   ></font>	
	</table></center>
</table>
</td>
<?php	
if($name!=null &&$user!=null)
{
$sql1="update faculty set user='".$username."',pass='".$pas."',name='".$name."',ph_no='".$phno."',subject='".$subject."',branch='".$branch."' where user='".$user."'"; 
mysql_query($sql1);
$submit=$_POST["sub"];
if($submit)
header("location:facprofile.php");
}
else
echo " <font size=4% >enter the fields</font>";
?>
</table>
</table>
</td>
</tr>
</table>
</center>
</form>
</body>
</html>
