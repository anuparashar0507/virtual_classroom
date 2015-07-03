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

<body background="images/03.jpg" > 

<table  width="1350" border="0" cellpadding="0" cellspacing="4" bgcolor="grey">
<tr>
 <td>
 <center><img src="images/vc3.jpg" width="1350"height="100" ></center>
</td>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
</tr>
<tr>
<td align="left" style="word-spacing:6px;font-size:120%;padding-right:30px;color:#888888;white-space:nowrap;">
<a href="profile.php" title="Home">Home </a>  | 
<a href="update.php" title="update"> Edit Profile </a>  | 
<a href="new/frame.php" title="study">Study material</a>  | 
<a href="video.php" title="video">Video Lectures</a>  | 
<a href="question.php" title="ask">Ask doubts</a>  | 
<a href="ans.php" title="tell">Answers</a>

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
$query=mysql_query("SELECT * FROM question");
while($row=mysql_fetch_array($query))
{
if($qid==$row['qid'])
echo "<b>".$row['que']."</b><br>";
}
$query2=mysql_query("SELECT * FROM answer");
while($answer=mysql_fetch_array($query2)){
if($qid==$answer['qid'])
echo "<br>".$answer['ans']."<br></hr>";
}
?>
</body>
</html>
