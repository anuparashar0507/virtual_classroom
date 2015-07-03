<?php include("conn.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>profile</title>
</head>
<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
<body background="images/03.jpg" bgcolor="white" > 

<form action="profile.php"  method="post" >

<table  width="1350" border="0" cellpadding="0" cellspacing="4" bgcolor="white">
<tr>
 <td>
 <center><img src="images/vc.png" width="1260"height="150" ></center>
</td>
</tr><tr></tr><tr></tr><tr></tr>
<tr>
<td align="left" style="word-spacing:6px;font-size:120%;padding-right:30px;color:purple;white-space:nowrap;">
<a href="profile.php" title="Home">Home </a>  | 
<a href="update.php" title="update"> Edit Profile </a>  | 
<a href="new/frame.php" title="study">Study material</a>  | 
 
<a href="question.php" title="ask">Ask doubts</a>  | 
<!--<a href="ans.php" title="tell">Answers</a>!-->

</td>
<td align="right" style="word-spacing:6px;font-size:120%;padding-right:10px;color:#888888;white-space:nowrap;">
|<a href="index.php" title="tell">Logout</a>
</td>
</tr>
</table>
<?php
$user=@$_SESSION['user'];
//print "user name:".$user;
$sql="select * from student where user='".$user."'";
$rs= mysql_query($sql);
if(!$rs)
die("error");
$row=mysql_fetch_array($rs);
?>
<br>
<br>
<br>
 <table border=0 cellspacing=2 cellpadding=2 width="100%"> 
<tr>  <td bgcolor="white">
        <table cellpadding=0 cellspacing=0 border=1 width=100%>   <tr>   <td bgcolor="green" align=center style="padding:2;padding-bottom:4">   <font size=-1 color="white" face="verdana,arial"> <b>Profile</b></font></tr>
<TR> 
      <TD width="50%"> 
      <TABLE  cellspacing=2 cellpadding=2 width="100%"> 
      <TR>
      <td>
     
			<center> <img src="new/images/v1.jpg" width=100 height= 100 > </center>
		</td>
		</TR>
			<tr><td>Logged in as <input type="text" name="user" value="<?php echo $row['user'];?>"></td></tr> 
		
   
      </TABLE> 
   </TD> 
   <TD > 
      <TABLE border=0 cellspacing=2 cellpadding=2 width="100%" > 
      <TR> 
         <TD>
	<tr><td>  <font face="verdana,arial" size=-1> 
 Name: </font></td>  <td><div><input type="text" name="branch" value="<?php echo $row['name']; ?>"></div>  </td>  </tr>


	<tr><td>  <font face="verdana,arial" size=-1>   Branch:</font></td>  <td>   <input type="text" name="branch" value="<?php echo $row['branch']; ?>">  </td>  </tr>

	<tr><td>  <font face="verdana,arial" size=-1>   Year.:</font></td>  <td>   <input type="text" name="year" value="<?php echo $row['year']; ?>">  </td>  </tr>

	<tr><td>  <font face="verdana,arial" size=-1>   Contact No..:</font></td>  <td>   <input type="text" name="ph_no" value="<?php echo $row['ph_no']; ?>">  </td>  </tr>
 
	      </TABLE> 
   </TD> 
   <TD> 
   
</TABLE> 

</td>
</tr>
</table>

<?php
$branch=$row['branch'];
$year=$row['year'];
$_SESSION['branch']=$branch;
$_SESSION['year']=$year;
echo "branch =".$branch."and year =".$year;
?>


</form>
</body>
</html>

