<html>
<head>
<style>
#topheader {
background:khaki;
height:50px;
width:100%;
}
div
{
font-family:Georgia, "Times New Roman", Times, serif;
font-size:20px;
}
</style>
</head>

<body background="images/03.jpg">
<table  width="1350" border="0" cellpadding="0" cellspacing="4" bgcolor="white">
<tr>
 <td>
 <center><img src="images/vc.png" width="1206"height="150" ></center>
</td>
</tr>
<tr>
<td align="left" style="word-spacing:6px;font-size:120%;padding-right:30px;color:#888888;white-space:nowrap;">
<a href="facprofile.php" title="Home">Home </a>  | 
<a href="fquestion.php" title="ask">questions</a>  | 
<a href="fans.php" title="tell">Answers</a>

</td>
<td align="right" style="word-spacing:6px;font-size:120%;padding-right:10px;color:#888888;white-space:nowrap;">
|<a href="index.php" title="tell">Logout</a>
</td>
</tr><tr></tr><tr></tr>
<tr></tr><tr></tr>
</table>


<h2><font color=purple>posted questions</font></h2>
<div><?php
include('conn.php');
$user = @$_SESSION['user']; 
$query=mysql_query("SELECT * FROM question ORDER BY qid ASC");
while($question=mysql_fetch_array($query))
{

echo "<br>"."<a href='fans.php?qid=$question[qid]'>".$question['que']."</a><br>";

echo "<span style='color:purple;'>asked by:</span>"."<a href='profile.php'>".$user."</a></hr>";
}
?>
</div>
</body>
</html>
