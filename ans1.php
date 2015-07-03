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

<form action="ans1.php"  method="post" >

<table  width="1350" border="0" cellpadding="0" cellspacing="4" >
<tr>
 <td>
 <center><img src="new/images/vc.png" width="900" height="100" ></center>
</td>
</tr>
<tr></tr><tr></tr>
<tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td align="left" style="word-spacing:6px;font-size:120%;padding-right:30px;color:#888888;white-space:nowrap;">
<a href="student.php" title="student">Student </a>  | 
<a href="faculty.php" title="faculty"> Faculty </a>  | 
<a href="pptup.php" title="faculty"> PPT(upload) </a>  | 
<a href="pptdel.php" title="faculty"> PPT(del) </a>  |
<a href="que1.php" title="faculty"> Question </a>  |
<a href="ans1.php" title="faculty"> Ans </a>  |
<td><a href="index.php" title="faculty"> Logout </a>  
 </td></tr>
</table>
<br>
<br>
 <b>User Name   :  </b><input type="text" name="user"> &emsp; &emsp; <input type="submit" value="DELETE"  name="sub"  >
<br>
<br>
<table  width="960" border="0" cellpadding="0" cellspacing="4" border=2 background="images/vc343.jpg.jpg">
<tr>
 <td>
<tr><td><b>QUESTION ID</b><td><b>QUESTION</b><td><b>ASKED BY</b><td><b>SUBJECT</b><td></tr>
<?php
include('conn.php');
$sql="select * from answer";
$rs=mysql_query($sql);
while($row=mysql_fetch_array($rs))
{
?>
<tr>
<td>
<?php
echo $row["qid"];
?></td>
<td>
<?php
echo $row["ans"]
?>
</td>
<td>
<?php
echo $row["answerby"]
?>
</td>
</tr>
<?php
}
$answer=@$_POST["ans"];

$submit=@$_POST['sub'];
if($submit)
{
		
		if($answer!=null)
		{	
			/*$sql1="select * from student where user='".$user."'";
			$rs1= mysql_query($sql1);
		$row=mysql_fetch_array($rs1);
			echo "user :".$user;
			$sql1="insert into student values('$row[0]'.'$row[1]'.'$row[2]','$row[3]'.'$row[4]'.'$row[5]')"; 
			mysql_query($sql1);*/
		
			$sql="delete from answer where user='".$answer."'";
			mysql_query($sql);
			
		}
			
}		
?>
</table> 
</form>
</body>
</html>
