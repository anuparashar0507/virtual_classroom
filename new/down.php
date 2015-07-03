<html>
<head>
<title>Download File From MySQL Database</title>
<meta http-equiv="Content-Type" content="text/html; 
charset=iso-8859-1">
</head>
<body>
<?php
//database connection
$con = mysql_connect('localhost', 'root', '') or die(mysql_error());
//select database
$db = mysql_select_db('virtualclass', $con);
$query = "SELECT * FROM upload";
$result = mysql_query($query) or die(mysql_error());
if(mysql_num_rows($result) == 0)
{
	echo "Database is empty <br>";
} 
else
{
	while($row = mysql_fetch_array($result))
		{
		//echo "Praneeth";
		?>
	<a href="../<?php echo $row['path']; ?>"><?php echo $row['name']; ?></a> 
	
	<br>
		<?php 
		}
}
mysql_close();
?>
</body>
</html>