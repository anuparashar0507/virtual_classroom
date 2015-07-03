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
<body background="new/images/03.jpg"  > 

<form action="que1.php"  method="post" >

<table  width="960" border="0" cellpadding="0" cellspacing="4" bgcolor="black">
<tr>
 <td>
 <center><img src="new/images/vc.png" width="1150" height="100" ></center>
</td>
</tr>
<tr>
<td align="left" style="word-spacing:6px;font-size:120%;padding-right:30px;color:#888888;white-space:nowrap;">
<a href="student.php" title="student">Student </a>  | 
<a href="faculty.php" title="faculty"> Faculty </a>  | 
<a href="pptup.php" title="faculty"> PPT(upload) </a>  | 
<a href="pptdel.php" title="faculty"> PPT(del) </a>  |
<!--<a href="../videoup.php" title="faculty"> Video(up) </a>  |
<a href="../videodel.php" title="faculty"> Video(del) </a>  |!-->
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
<tr><td><b>QUESTION ID</b><td><b>QUESTION</b><td><b>ASKED BY</b><td><b>SUBJECT</b><td></tr>
<?php
include('conn.php');
$sql="select * from question";
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
echo $row["que"]
?>
</td>
<td>
<?php
echo $row["askedby"]
?>
</td>
<td>
<?php
echo $row["subject"]
?>
</td>
</tr>
<?php
}
$question=@$_POST["que"];

$submit=@$_POST['sub'];
if($submit)
{
		
		if($question!=null)
		{	
			/*$sql1="select * from student where user='".$user."'";
			$rs1= mysql_query($sql1);
		$row=mysql_fetch_array($rs1);
			echo "user :".$user;
			$sql1="insert into student values('$row[0]'.'$row[1]'.'$row[2]','$row[3]'.'$row[4]'.'$row[5]')"; 
			mysql_query($sql1);*/
		
			$sql="delete from question where user='".$question."'";
			mysql_query($sql);
			
		}
			
}		
?>
</table> 
</form>
</body>
</html>
