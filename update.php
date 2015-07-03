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
<body background="images/03.jpg" > 
<form  action="update.php" method="post" >
<table  width="960" border="0" cellpadding="0" cellspacing="4" bgcolor="grey">
<tr>
 <td>
 <center><img src="D:\New folder\Web Page Header.gif" width="960"height="100" ></center>
</td>
</tr>
<tr>
<td align="left" style="word-spacing:6px;font-size:120%;padding-right:30px;color:#888888;white-space:nowrap;">
<a href="profile.php" title="Home">Home </a>  | 
<a href="update.php" title="update"> Edit Profile </a>  | 
<a href="new/frame.php" title="study">Study material</a>  | 
<!--<a href="videos.php" title="video">Video Lectures</a>  | !-->
<a href="question.php" title="ask">Ask doubts</a>  | 
<a href="ans.php" title="tell">Answers</a>

</td>

<td align="right" style="word-spacing:6px;font-size:120%;padding-right:10px;color:#888888;white-space:nowrap;">
|<a href="index.php" title="tell">Logout</a>
</td>
</tr>
</table>
<?php
include("conn.php");
$name=@$_POST["name"];
$user=@$_POST["user"];
$pass=@$_POST["pass"];
$branch=@$_POST["branch"];
$year=@$_POST["year"];
$phno=@$_POST["ph_no"];
echo "branch = ".$branch." and year = ".$year;
$user =@$_SESSION["user"];
$sql="select * from student where user='".$user."'";
$rs= mysql_query($sql);
if(!$rs)
die("error");
$row=mysql_fetch_array($rs);
?>
<center><table cellpadding=2 cellspacing=0 border=0>


<tr>  <td bgcolor="white"><table cellpadding=0 cellspacing=0 border=1 width=100%>   <tr>   <td bgcolor="green" align=center style="padding:2;padding-bottom:4">   <b><font size=-1 color="white" face="verdana,arial"> Edit Profile</font></b></tr>
<tr><td bgcolor="white" style="padding:5"><br>
<TABLE border=0 cellspacing=2 cellpadding=2 width="100%"> 

<tr>  <td bgcolor="white"><table cellpadding=0 cellspacing=0 border=1 width=100%>   <tr>   <td bgcolor="green" align=center style="padding:2;padding-bottom:4">   <b><font size=-1 color="white" face="verdana,arial"> Profile picture</font></b><td bgcolor="green" align=center style="padding:2;padding-bottom:4"> <b><font size=-1 color="white" face="verdana,arial">Personal info</font></b>

<TR> 
   <TD width="50%"> 
      <TABLE  cellspacing=2 cellpadding=2 width="100%"> 
      <TR> 
         <TD>
	<center><img src="new/images/v1.jpg" width=150 height=150  ></center>
	<center>
	<div class="mybutton">
		<a href="main.html">
		<!--<button style="width:160;height:24; background-color:#97cfc3">change picture 
		</button></a><br>!-->
	</div>
	</center>
	</TD> 
      </TR> 
      </TABLE> 
   </TD> 
   <TD> 
	<center><table>
	<tr><td>  <font face="verdana,arial" size=-1>  Name:</font></td>  <td>  <input type="text" name="name" value="<?php echo $row['name']; ?>">  </td>  </tr>
	
	<tr><td>  <font face="verdana,arial" size=-1>   User_name:</font></td>  <td>   <input type="text" name="user" value="<?php echo $row['user']; ?>">  </td>  </tr>
	
	<tr><td>  <font face="verdana,arial" size=-1>   Password:</font></td>  <td>   <input type="text" name="pass" value=" <?php echo $row['pass']; ?>">  </td>  </tr>
	

	<tr><td>   <font face="verdana,arial" size=-1> Branch:</font></td>   <td><select name="branch">
<option value="none">----</option> 
									<option value="it">CSE</option> 
									<option value="mech">MECH</option>
									<option value="comp">ECE</option>
									<option value="entc">CIVIL</option>
									</select></td></tr>
		
	<tr><td>   <font face="verdana,arial" size=-1> Year:</font></td>   <td><select name="year">
<option value="none">-----</option> 
									<option value="fe">I</option> 
									<option value="se">II</option>
									<option value="te">III</option>
									<option value="be">IV</option>
									</select></td></tr>
		
	<tr><td>  <font face="verdana,arial" size=-1>   Contact No..:</font></td>  <td>   <input type="text" name="ph_no" value="<?php echo $row['ph_no']; ?>">  </td>  </tr>
	
	<tr><td><font face="verdana,arial" size=-1>&nbsp;</font></td><td><font face="verdana,arial" size=-1><input type="submit" name="sub"value="Update"   ></font>	
	</table></center>
</table>
</td>

<?php		
$sql1="update student set user='.$user.',pass='.$pass.',name='.$name.',ph_no='.$phno.',year='.$year.',branch='.$branch.' where user='.$user.'"; 
mysql_query($sql1);
$sub=@$_POST['sub'];
if($sub)
header("location:profile.php");
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

