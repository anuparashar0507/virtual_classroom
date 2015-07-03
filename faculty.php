<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>faculty</title>
</head>
<body background="images/03.jpg" bgcolor="white" > 

<form action="faculty.php"  method="post" >

<table  width="1350" border="0" cellpadding="0" cellspacing="4" bgcolor="white">
<tr>
 <td>
 <center><img src="images/vc.png" width="1250" height="150" ></center>
</td>
</tr>
<tr></tr><tr></tr>
<tr></tr><tr></tr>
<tr>
<td align="left" style="word-spacing:6px;font-size:120%;padding-right:30px;color:#888888;white-space:nowrap;">
<a href="student.php" title="student">Student </a>  | 
<a href="faculty.php" title="faculty"> Faculty </a>  | 
<a href="fstudy.php" title="faculty"> PPT(upload) </a>  | 
<a href="pptdel.php" title="faculty"> PPT(del) </a>  |
<!--<a href="videoup.php" title="faculty"> Video(up) </a>  |
<a href="videodel.php" title="faculty"> Video(del) </a>  |!-->
<a href="que1.php" title="faculty"> Question </a>  |
<a href="ans1.php" title="faculty"> Ans </a>  |
<td>   <a href="index.php" title="faculty"> Logout </a>  
 
</td></tr>
</table>
<br>
<br>
 <b>User Name   :  </b><input type="text" name="user"> &emsp; &emsp; <input type="submit" value="DELETE"  name="sub"  >
<br>
<br>
<table  width="960" border="0" cellpadding="0" cellspacing="4" border=2 background="G:\Classroom1.jpg">
<tr>
 <td>
<tr><td><b>USERNAME</b><td><b>NAME</b><td><b>PHONE NO</b><td><b>SUBJECT</b><td><b>BRANCH</b> </td></tr>
<?php
include('conn.php');
$sql="select * from faculty";
$rs=mysql_query($sql);
while($row=mysql_fetch_array($rs))
{
?>
<tr>
<td>
<?php
echo $row["user"];
?></td>
<td>
<?php
echo $row["pass"]
?>
</td>
<td>
<?php
echo $row["name"]
?>
</td>
<td>
<?php
echo $row["ph_no"]
?>
</td>
<td>
<?php
echo $row["subject"]
?>
</td>
<td>
<?php
echo $row["branch"]
?>
</td>
</tr>
<?php
}
$user=@$_POST["user"];

$submit=@$_POST['sub'];
if($submit)
{
		
		if($user!=null)
		{	
			/*$sql1="select * from student where user='".$user."'";
			$rs1= mysql_query($sql1);
		$row=mysql_fetch_array($rs1);
			echo "user :".$user;
			$sql1="insert into student values('$row[0]'.'$row[1]'.'$row[2]','$row[3]'.'$row[4]'.'$row[5]')"; 
			mysql_query($sql1);*/
		
			$sql="delete from faculty where user='".$user."'";
			mysql_query($sql);
			
		}
			
}		
?>
</table> 
</form>
</body>
</html>
