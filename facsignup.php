<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>faculty signup</title>
</head>
<body background="images/03.jpg" bgcolor="white" >


<script language="javascript">
function fun1(form)
	{
var l=form.pass.value.length;

	for(var i=0; i < l ; i++)
	{
		if(form.pass1.value.substr(i,1) != form.pass.value.substr(i,1) )
		{
			form.pass.value="";
			form.pass1.value="";
			alert('passwords Not Equal');
			break;
		}
	
	}
	}

function fun2(form)
	{

	var l=form.phno.value.length;
	for(var i=0; i < l ; i++)
	{
		if( (form.phno.value.substr(i,1)>= 'a' && form.phno.value.substr(i,1)>= 'z'  ) ||(form.phno.value.substr(i,1)>= 'A' && form.phno.value.substr(i,1)>= 'Z'  ) )
		{
			form.pass.value="";
			form.pass1.value="";
			alert('invalid phone no.');
			break;
		}
	
	}
	}

		
</script>
<form action="facsignup.php" method="post" >

<marquee  ONMOUSEOVER="this.stop();" ONMOUSEOUT="this.start();" bgcolor="grey" scrollamount=15 >
 <h3>  <font face="verdana,arial" size=4% > <a href="index.php">Click here</a> to return to home page .</font>
  </h3>      
</MARQUEE>
<br><br><br><br><br>

<table cellpadding=2 cellspacing=0 border=0 align=center>


<tr>  <td bgcolor="red"><table cellpadding=0 cellspacing=0 border=1 width=100%>   <tr>   <td bgcolor="green" align=center style="padding:2;padding-bottom:4">   <font size=3% color="white" face="verdana,arial"> <b> faculty Sign Up</b></font></tr>
<tr><td bgcolor="white" style="padding:5"><br>
<center><table>
	<tr><td>  <font face="verdana,arial" size=3%>  Name:</font></td>  <td>  <input type="text" name="name" value="">  </td>  </tr><tr></tr><tr></tr>
	
	<tr><td>  <font face="verdana,arial" size=3%>   User_name:</font></td>  <td>   <input type="text" name="username" value="" > </td>  </tr>
<tr></tr><tr></tr>
	
	<tr><td>  <font face="verdana,arial" size=3%>   Password:</font></td>  <td>   <input type="password" name="pass" value="">  </td>  </tr>
<tr></tr><tr></tr>
	
	<tr><td>  <font face="verdana,arial" size=3%>   Conform Password:</font></td>  <td>   <input type="password" name="pass1" value="">  </td>  </tr>
<tr></tr><tr></tr>
	<tr><td>  <font face="verdana,arial" size=3%>   Phone NO.:</font></td>  <td>   <input type="text" name="phno" value="" onBlur="fun1(this.form)">  </td>  </tr>
<tr></tr><tr></tr>
	
	<tr><td>   <font face="verdana,arial" size=3%> Subject:</font></td> <td>   <input type="text" name="subject" value="" onBlur="fun2(this.form)">  </td>  </tr>
<tr></tr><tr></tr>
	
	<tr><td>   <font face="verdana,arial" size=3%> Branch:</font></td>   <td><select name="branch" >

                <option value="none">----</option>
									<option value="it">CSE</option> 
									<option value="mech">ECE</option>
									<option value="entc">CIVIL</option>
									<option value="comp">MECH</option>
									</select></td></tr>
		<tr></tr><tr></tr>
    
	
	
	<tr><td><font face="verdana,arial" size=-1>&nbsp;</font></td><td><font face="verdana,arial" size=-1><input type="submit" value="Register" name="sub" onClick="fu(this.form)" ></font></td></tr>
<tr></tr><tr></tr>
	
</table></center>



</td></tr></table></td></tr></table>
 

<?php
$submit=@$_POST["sub"];
if($submit)
{
$name=@$_POST["name"];
$username=@$_POST["username"];
$pas=@$_POST["pass"];
$pas1=@$_POST["pass1"];
$branch=@$_POST["branch"];
$subject=@$_POST["subject"];
$phno=@$_POST["phno"];
  
			include("conn.php");
			$sql="insert into faculty values('$username','$pas','$name','$phno','$subject','$branch')"; 
			if($name!=""&&$name!=null)
			{
			mysql_query($sql);
			echo "registered sucessfully";
			}
			}
			?>
</form>

</body>
</html>
