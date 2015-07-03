<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Video delete</title>
</head>
<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
<body background="G:\Classroom1.jpg" bgcolor="red" > 

<form action="videodel.php"  method="post" >

<table  width="960" border="0" cellpadding="0" cellspacing="4" bgcolor="black">
<tr>
 <td>
 <center><img src="D:\New folder\Web Page Header.gif" width="1150" height="100" ></center>
</td>
</tr>
<tr>
<td align="left" style="word-spacing:6px;font-size:120%;padding-right:30px;color:#888888;white-space:nowrap;">
<a href="student.php" title="student">Student </a>  | 
<a href="faculty.php" title="faculty"> Faculty </a>  | 
<a href="pptup.php" title="faculty"> PPT(upload) </a>  | 
<a href="pptdel.php" title="faculty"> PPT(del) </a>  |
<a href="videoup.php" title="faculty"> Video(up) </a>  |
<a href="videodel.php" title="faculty"> Video(del) </a>  |
<a href="que1.php" title="faculty"> Question </a>  |
<a href="ans1.php" title="faculty"> Ans </a>  |
<td>   <a href="main.php" title="faculty"> Logout </a>  

</td></tr>
</table>
<br>
<br>
 <b>Video Name   :  </b><input type="text" value="" name="video"> &emsp; &emsp; <input type="submit" value="DELETE"   >
<br>
<br>
<center><table  width="960" border="0" cellpadding="0" cellspacing="4" border=2 background="G:\Classroom1.jpg">
<tr>
 <td>

 <?php
include("conn.php");
$sql="select * from video";
$rs= mysql_query($sql);
?>
<tr><td><b>SUBJECT</b><td><b>Video</b> 
<?php			
			while($row=mysql_fetch_array($rs))
			{
?>
				<tr><td>
<?php					
					echo $row["subject"];
?>
</td>
<td>
<?php				
		     		echo $row["video"];

			}	
		
		
		$video=@$_POST["video"];
		if($video!=null)
		{	
		$sql="delete from video where video='".$video."'";
			mysql_query($sql);
		}
		
?>
</td>
</tr>
</table> </center>
</form>
</body>
</html>
