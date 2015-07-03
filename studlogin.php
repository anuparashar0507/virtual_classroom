<?php include("conn.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>student login</title>
</head>
<!--<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
!-->

<body background="images/03.jpg" bgcolor="white" > 
<!--<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>!-->
<form action="studlogin.php"  method="post" >
<img src="images/s1.png" height="100" width="700">


<marquee  ONMOUSEOVER="this.stop();" ONMOUSEOUT="this.start();"  scrollamount="20"  >

	<H3> Virtual Class room </H3>
</MARQUEE>

<a href="index.php" title="home"><img src="images/h1.jpg"></a>


<TABLE border=0 cellspacing=2 cellpadding=2 width="100%"> 
<TR> 
   <TD width="34%"> 
      <TABLE border=0 cellspacing=2 cellpadding=2 width="100%"> 
      <TR> 
         <TD>
<!--	<marquee bgcolor="red"  style="position: relative;" behavior="scroll" " direction="up" scrollamount="8" scrolldelay="2" onmouseover="this.stop()" onmouseout="this.start()"width="450" height="500"><br>

<img src="images/3.jpg" width=250 height=250  title="ad " style="position: relative;" border="0"><br>

	<img src="images/3.jpg" width=250 height=250  title="ad " style="position: relative;" border="0"><br>
	<img src="images/3.jpg" width=250 height=250  title="ad  " style="position: relative;" border="0"><br>
	<img src="images/3.jpg" width=250 height=250  title="ad  " style="position: relative;" border="0"><br>
	<img src="images/3.jpg" width=250 height=250  title="ad  " style="position: relative;" border="0"><br>

	</marquee> !-->
	</TD> 
      </TR> 
      </TABLE> 
   </TD> 
   <TD> 
	<table cellpadding=2 cellspacing=0 border=0> 
 
 	<tr>  <td bgcolor="red"><table cellpadding=0 cellspacing=0 border=1 width=100%>   <tr>   <td bgcolor="green" align=center style="padding:2;padding-bottom:4">   <b><font size=-1 color="white" face="verdana,arial">STUDENT LOG IN</font></b></tr> 
	<tr><td bgcolor="white" style="padding:5"><br> 
	      <TABLE border=0 cellspacing=5 cellpadding=2 width="60%" bgcolor="white"> 
	      <TR> 
	         <TD>
		<tr><td>   <font face="verdana,arial" size=-1> Login:</font></td>    <td><input type="text" name="user" ></td></tr>
		<tr><td>   <font face="verdana,arial" size=-1> Password:</font></td>   <td><input type="password" name="pass"></td></tr>
		<tr><td>    <font face="verdana,arial" size=-1>&nbsp;</font></td>    <td><font face="verdana,arial" size=-1><input type="submit"  name="sub"value="login"></font></td></tr>
		<tr><td colspan=2><font face="verdana,arial" size=-1>&nbsp;</font></td>    </tr>
		<!--<tr><td colspan=2><font face="verdana,arial" size=-1>Lost your username or password? Find it <a href="G:\study\seminar\ppt\ppt_for_05].ppt">here</a>!</font></td></tr>!-->
		<tr><td colspan=2><font face="verdana,arial" size=-1>Not member yet? Click  <a href="studsignup.php" >here</a>    to register.</font></td></tr>

	  
     	</TABLE> 
  		 </TD> 
   		<TD>
		</table>
 
     
  	 </TD> 
	</TR> 
</TABLE> 
</TD>
</TR>
</TABLE>
</form>
<?php
$submit =@$_POST['sub'];
if($submit)
{
$str1=@$_POST['user'];
$str2=@$_POST['pass'];
$sql=mysql_query("select * from student");
while($rs=@mysql_fetch_array($sql))
{
			 $dbuser=$rs['user'];
			 $dbpass=$rs['pass'];
			 }
			 if($dbpass==$str2&&$dbuser==$str1)
			  {                                                                                                                               
			$_SESSION['user']=$str1;
		    header('location:profile.php');
				}	
			else
			echo "UserName/Password Not Valid";	
		
}
 ?>
</body>
</html>

