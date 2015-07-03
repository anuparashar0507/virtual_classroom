<html>
<head>
<style>
#topheader {
background:khaki;
height:50px;
width:100%;
}
</style>
</head>

<body background="images/03.jpg">
<table  width="1350" border="0" cellpadding="0" cellspacing="4" bgcolor="white">
<tr>
 <td>
 <center><img src="images/vc.png" width="1200"height="150" ></center>
</td>
</tr>
<tr></tr><tr></tr>
<tr></tr><tr></tr>
<tr>
<td align="left" style="word-spacing:6px;font-size:120%;padding-right:30px;color:#888888;white-space:nowrap;">
<a href="facprofile.php" title="Home">Home </a>  | 
<a href="facupdate.php" title="update"> Edit Profile </a>  | 
<a href="new/frame.php" title="study">Study material</a>  | 
<a href="video.php" title="video">Video Lectures</a>  | 
<a href="fquestion.php" title="ask">Ask doubts</a>  | 
<a href="fans.php" title="tell">Answers</a>

</td>
<td align="right" style="word-spacing:6px;font-size:120%;padding-right:10px;color:#888888;white-space:nowrap;">
|<a href="index.php" title="tell">Logout</a>
</td>
</tr>
</table>
<h3>answers</h3>
<?php
include('conn.php');
$user = @$_SESSION['user']; 
$ans=@$_POST['ans'];
$qid=@$_GET['qid'];
if($ans)
{
$query1="insert into answer  values ('id','$qid','$ans','$user')";
$sql=mysql_query($query1);
}
$query=mysql_query("SELECT * FROM question");
while($row=mysql_fetch_array($query)){
if($qid==$row['qid'])
echo "<b>".$row['que']."</b><br>";
}
$query2=mysql_query("SELECT * FROM answer");
while($answer=mysql_fetch_array($query2)){
if($qid==$answer['qid'])
echo "<br>".$answer['ans']."<br>";
echo "<span style='color:purple;'>answered by:</span>"."<a href='profile.php'>".$user."</a></hr>";
}

?>
<form action="" method="POST">
<textarea name="ans" rows="3" cols="100" placeholder=" type your answer here"></textarea><br>
<br/>
<input type="submit" name="submit" value="post">
</form>
<?php
#";
?>
</body>
</html>
