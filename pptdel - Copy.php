<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title> delete</title>
</head>
<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
<body background="images/03.jpg" bgcolor="white" > 

<form action="#"  method="post" >

<table  width="1350" border="0" cellpadding="0" cellspacing="4" bgcolor="white">
<tr>
 <td>
 <center><img src="images/vc.png" width="1250" height="150" ></center>
</td>
</tr><tr></tr><tr></tr><tr></tr>
<tr>
<td align="left" style="word-spacing:6px;font-size:120%;padding-right:30px;color:purple;white-space:nowrap;">
<a href="student.php" title="student">Student </a>  | 
<a href="faculty.php" title="faculty"> Faculty </a>  | 
<a href="pptup.php" title="faculty"> PPT(upload) </a>  | 
<a href="pptdel.php" title="faculty"> PPT(del) </a>  |
<a href="que1.php" title="faculty"> Question </a>  |
<a href="ans1.php" title="faculty"> Ans </a>  |
<td>   <a href="index.php" title="faculty"> Logout </a>  

</td></tr>
</table>
<br>
<br>
 <b><font size=4%>PPT id</font></b><input type="text" value="" name="pptid"> &emsp; &emsp; 
 <input type="submit" value="DELETE" name="submit"   >
<br>
<br>
</form>
<center>
<table  width="960" cellpadding="0" cellspacing="4" border="2">
<?php
	include("conn.php");
	$sql="select * from upload";
	$rs= mysql_query($sql);
?>
<tr>
<td><b>NAME</b></td>
<td><b>IB</b></td> 
</tr>
				<tr>
		<?php		
			while($row=mysql_fetch_array($rs))
			{
		?>
				<td><?php echo $row["name"]; ?></td>
				<td><?php	echo $row["id"]; ?> </td>
				</tr>
				<?php
			}
				?>
</table>
<?php 
 if(isset($_POST['submit']))
 {
		$ppt=$_POST['pptid'];
		echo $ppt;
	//	if($ppt!=null)
		//{	
		$sql="delete from upload where id=$ppt";
		echo "QUERY".$sql;
			mysql_query($sql) or die(mysql_error());
//		}
	
  }	
 ?></center>
</body>
</html>
