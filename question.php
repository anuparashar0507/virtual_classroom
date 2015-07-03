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
h1{
margin: 0;
padding: 20px 0 20px 60px;
font-weight: bold;
font-size: 22px;
line-height: 20px;
color: #f7f6f7;
background: #222;
}

</style>
</head>

<body>
<table  width="960" border="0" cellpadding="0" cellspacing="4" bgcolor="grey">
<tr>
 <td>
 <center><img src="D:\New folder\Web Page Header.gif"  height="50" ></center>
</td>
</tr>
<tr>
<td align="left" style="word-spacing:6px;font-size:120%;padding-right:30px;color:#888888;white-space:nowrap;">
<a href="profile.php" title="Home">Home </a>  | 
<!--<a href="video.php" title="video">Video Lectures</a>  |!--> 
<a href="question.php" title="ask">Ask doubts</a>  | 
<!--<a href="ans.php" title="tell">Answers</a>!-->

</td>
<td align="right" style="word-spacing:6px;font-size:120%;padding-right:10px;color:#888888;white-space:nowrap;">
|<a href="index.php" title="tell">Logout</a>
</td>
</tr>
</table>
<i>click on question to view answers</i>
<div>
<?php
include('conn.php');
$user = @$_SESSION['user']; 
$que=@$_POST['que'];
$subject=@$_POST['subject'];
if(addslashes($que))
{
$query1="insert into question  values ('','$que','$user','$subject')";
$sql=mysql_query($query1) or die(mysql_error());
}
$query=mysql_query("SELECT * FROM question ORDER BY qid DESC");
while($row=mysql_fetch_array($query))
{

echo "<br><a href='ans.php?qid=$row[qid]'>".$row['que']."</a><br>";
echo "<span style='color:purple;font-size:14px;'>asked by:</span>"."<a href='profile.php'>".$user."</a></hr>";
}
?>
</div>
<div id=="add_question">
<h1>Add questions</h1>
<form action="question.php" method="POST">
<textarea name="que" rows="10" cols="80" placeholder=" type your question here"></textarea><br>
<input type="text" name="subject" placeholder="name of the subject">
<br/>
<input type="submit" name="submit" value="post">
</form>
</div>
</body>
</html>
