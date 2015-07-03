<html>
<head></head>
<body background="images/03.jpg">


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


