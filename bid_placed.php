<?php


session_start();
//$team_name=$_POST['team'];
$amount=$_POST['amount'];
$team_id=$_SESSION['team_id'];

$link=mysqli_connect('localhost','root','');
$db=mysqli_select_db($link,'ipl3');
if(!$db)
{
	die('unable to select database');
}
if(isset($_POST['submit']))
{
	$get_current="select * from current";
	$result=mysqli_query($link,$get_current);
	$row=mysqli_fetch_assoc($result);
	$bid=$row['bid'];
	if($bid < $amount)
	{
		$time=time();
		$update_current="update current set bid='".$amount."',team_id='".$team_id."',time='".$time."'+30";
		$result = mysqli_query($link,$update_current) or trigger_error('unable to update current');
		if($result==FALSE)
		{
			header('location: fail.php');
		}
	}
	mysqli_close($link);
	
	
	header('location:auction.php');
	
	exit();
}
?>