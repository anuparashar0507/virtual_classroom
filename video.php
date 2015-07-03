<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>video</title>
</head>
<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
<body background="G:\Classroom1.jpg" bgcolor="red" > 
<form action="video.php" method="post" >
<?
include("conn.php");
$branch =$_SESSION["branch"];
$year=$_SESSION["year"];
		echo "branch= ".$branch." and year= ".$year); 
		$sql="select subject from subject where branch='".$branch+"' and year='".$year."' ";
		$rs= mysql_query($sql);
		$row=mysql_fetch_array($rs);
		?>
  
<table  width="960" border="0" cellpadding="0" cellspacing="4" bgcolor="black">
<tr>
 <td>
 <center><img src="D:\New folder\Web Page Header.gif" width="960"height="100" ></center>
</td>
</tr>
<tr>
<td align="left" style="word-spacing:6px;font-size:120%;padding-right:30px;color:#888888;white-space:nowrap;">
<a href="sub11.php" title="<?php  echo $row[1] ?> ">sub1 </a>  | 
<a href="sub22.php" title="<?php  echo $row[1] ?> "> sub2 </a>  | 
<a href="sub23.php" title="<?php  echo $row[1] ?> ">sub3</a>  |
<a href="sub44.php" title="<?php  echo $row[1] ?> ">sub4</a>  | 
<a href="sub55.php" title="<?php  echo $row[1] ?> ">sub5</a>  | 
<a href="profile.php" title="home">home</a>

</td>

<td align="right" style="word-spacing:6px;font-size:120%;padding-right:10px;color:#888888;white-space:nowrap;">
|<a href="index.php" title="tell">Logout</a>
</td>
</tr>
</table>
</form>
</body>
</html>
