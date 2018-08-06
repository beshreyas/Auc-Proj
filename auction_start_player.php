<?php

session_start();
//$team_name=$_POST['team'];
//$team_name="Mumbai Indians";
$year=2018;
$link=mysqli_connect('localhost','root','');
$db=mysqli_select_db($link,'ipl3');
if(!$db)
{
	die('unable to select database');
}
	/*$get_current="select * from current";
	$result=mysqli_query($link,$get_current);
	$clear_current="delete from current";
	mysqli_query($link,$clear_current);*/

	$get_from_unsold="select * from unsold limit 1";
	$result=mysqli_query($link,$get_from_unsold);
	if(!$result)
	{
		die('All Players Sold Out.');
	}
	$row=mysqli_fetch_assoc($result);
	$player_id=$row['player_id'];
	$player_name = $row['player_name'];
	$team_id = $row['team_id'];
	$country = $row['country'];
	$base = $row['base'];
	$role = $row['role'];
	$time=time()+30;
	$select_current = "select * from current";
	$res = mysqli_query($link,$select_current);
	$numrows = mysqli_num_rows($res);
	if($numrows == 0)
	{
		$insert_in_current="insert into current (player_id,player_name,team_id,country,base,role,time) values ('".$player_id."','".$player_name."','".$team_id."','".$country."','".$base."','".$role."','".$time."')" or trigger_error('insert into current unsuccessful');
		$result=mysqli_query($link,$insert_in_current);
		if($result == FALSE)
		{
			echo $player_name;
			die("Insert Error in Current");
		}
	}


/*
else
{
	$player_id=$row['player_id'];
	$bid=$row['bid'];
	$team_id=$row['team_id'];
	echo $player_id.$bid.$team_id.$year;
	if($bid)
	{
		$delete_from_unsold="delete from unsold where player_id='$player_id'";
		mysqli_query($link,$delete_from_unsold) or trigger_error('delete from unsold unsuccessful');
		
		
		//$insert_in_playsfor="insert into playsfor(player_id,year,team_id,amount) values($player_id,2016,$team_id,$bid)";
		$insert_in_playsfor="insert into playsfor(player_id,year,team_id,amount) values($player_id,$year,$team_id,$bid)";

		mysqli_query($link,$insert_in_playsfor) or trigger_error('error in playsfor insertion');
		
		
		mysqli_query($link,"delete from current");
		$get_from_unsold="select * from unsold limit 1";
		$result=mysqli_query($link,$get_from_unsold);
		if(!$result)
		{
			die('All Players Sold Out.');
		}
		$row=mysqli_fetch_assoc($result);
		$player_id=$row['player_id'];
		
		$insert_in_current="insert into current(player_id) values($player_id)";
		mysqli_query($link,$insert_in_current);
		
	}
	else
	{
		$delete_from_unsold="delete from unsold where player_id='$player_id'";
		mysqli_query($link,$delete_from_unsold) or trigger_error('delete from unsold unsuccessful');
		
		mysqli_query($link,"delete from current");
		$get_from_unsold="select * from unsold limit 1";
		$result=mysqli_query($link,$get_from_unsold);
		if(!$result)
		{
			die('All Players Sold Out.');
		}
		$row=mysqli_fetch_assoc($result);
		$player_id=$row['player_id'];
		
		$insert_in_current="insert into current(player_id) values($player_id)";
		mysqli_query($link,$insert_in_current);
	}
}*/
	else
	{
		mysqli_close($link);
		header('location:auction.php');
		exit();
	}
?>