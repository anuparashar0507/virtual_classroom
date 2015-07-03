<html>
<head></head>
<body>
<form method="post" enctype="multipart/form-data" action="uploadvideo.php">
<table width="350" border="0" cellpadding="1"
cellspacing="1" class="box">
<tr>
<td>please select a file</td></tr>
<tr>
<td>
<input type="hidden" name="MAX_FILE_SIZE"
value="16000000">
<input name="userfilea" type="file" id="userfilea"> 
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
print "asudgugds"."<br>";
print "kjjkj".isset($_POST['upload'])."<br> size:".$_FILES['userfilea']['size']."<br>";



if(isset($_POST['upload']))//&&$_FILES['userfilea']['size']>0)
{
print "abcd"."<br>";
$fileName = $_FILES['userfilea']['name'];
$tmpName  = $_FILES['userfilea']['tmp_name'];
$fileSize = $_FILES['userfilea']['size'];
$fileType = $_FILES['userfilea']['type'];


$targetpath="videoupload/";
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


