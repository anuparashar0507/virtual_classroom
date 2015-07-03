<html>
<head></head>
<body background="images/03.jpg">
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
<!--<a href="videoup.php" title="faculty"> Video(up) </a>  |
<a href="videodel.php" title="faculty"> Video(del) </a>  |!-->
<a href="que1.php" title="faculty"> Question </a>  |
<a href="ans1.php" title="faculty"> Ans </a>  |
<td>   <a href="index.php" title="faculty"> Logout </a>  
 
</td></tr>
</table>
<form method="post" enctype="multipart/form-data">
<table width="350" border="0" cellpadding="1"
cellspacing="1" class="box"><td>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr></td>
<tr>
<td><b><h3>please select a file</h3></b></td></tr>
<tr>
<td>
<input type="hidden" name="MAX_FILE_SIZE"
value="16000000">
<input name="userfile" type="file" id="userfile"> 
</td>
<td width="80"><input name="upload"
type="submit" class="box" id="upload" value=" Upload "></td>
</tr>
</table>
</form>
</body>
</html>
<?php
$con = mysql_connect('localhost', 'root', '') or die(mysql_error());
$db = mysql_select_db('virtualclass', $con);
if(isset($_POST['upload'])&&$_FILES['userfile']['size']>0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];


$targetpath="upload/";
$targetpath.=$fileName;


if(move_uploaded_file($tmpName,$targetpath))
{
if($db){
$query = "INSERT INTO upload (name, size, type,path) ".
"VALUES ('$fileName', '$fileSize', '$fileType','$targetpath')";
mysql_query($query) or die('Error, query failed'); 

echo "<br>File $fileName uploaded<br>";
}
else
 { 
echo "file upload failed"; 
}
}
}
?>


