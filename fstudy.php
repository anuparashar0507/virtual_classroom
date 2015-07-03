<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body background="images/03.jpg">
<table  width="960" border="0" cellpadding="0" cellspacing="4" bgcolor="grey">
<tr>
 <td>
 <center><img src="images/vc.png" width="1206"height="150" ></center>
</td>
</tr>
<tr>
<td align="left" style="word-spacing:6px;font-size:120%;padding-right:30px;color:#888888;white-space:nowrap;">
<a href="facprofile.php" title="Home">Home </a>  | 
<a href="facupdate.php" title="update"> Edit Profile </a>  | 
<a href="fstudy.php" title="study">Study material</a>  | 
 
<a href="fquestion.php" title="ask">Ask doubts</a>  | 
<a href="fans.php" title="tell">Answers</a>

</td>
<td align="right" style="word-spacing:6px;font-size:120%;padding-right:10px;color:#888888;white-space:nowrap;">
|<a href="index.php" title="tell">Logout</a>
</td>
</tr>
</table>
<form method="post" enctype="multipart/form-data" action="fstudy.php">
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
$query = "SELECT id,name FROM upload";
$result = mysql_query($query) or die('Error, query failed');
if(mysql_num_rows($result) == 0)
{
echo "Database is empty <br>";
} 
else
{
while(list($id,$name) = mysql_fetch_array($result))
{
echo "($name) <br>";

}
}
?>

<?php
$con = mysql_connect('localhost', 'root', '') or die(mysql_error());
$db = mysql_select_db('virtualclass', $con);

print isset($_POST['upload'])."<br> size:".$_FILES['userfilea']['size']."<br>";



if(isset($_POST['upload']))//&&$_FILES['userfilea']['size']>0)
{
$fileName = $_FILES['userfilea']['name'];
$tmpName  = $_FILES['userfilea']['tmp_name'];
$fileSize = $_FILES['userfilea']['size'];
$fileType = $_FILES['userfilea']['type'];


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

</body>
</html>
