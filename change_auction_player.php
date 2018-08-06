<?php

session_start();
//$team_name=$_POST['team'];
//$team_name="Mumbai Indians";
$year=2016;
$link=mysqli_connect('localhost','root','');
$db=mysqli_select_db($link,'ipl3');
if(!$db)
{
	die('unable to select database');
}
$get_current="select * from current";
$result=mysqli_query($link,$get_current);
if(!($row=mysqli_fetch_assoc($result)))
{

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
	$insert_in_current="insert into current (player_id,player_name,team_id,country,base,role,time) values ('".$player_id."','".$player_name."','".$team_id."','".$country."','".$base."','".$role."','".$time."')" or trigger_error('insert into current unsuccessful');
	$result=mysqli_query($link,$insert_in_current);
	if($result == FALSE)
	{
		echo $player_name;
		die("Insert Error in Current");
	}

}
else if($row['time']>time()+20)
{
	header('location:auction.php');
	exit(1);
}
else 
{
	$player_id=$row['player_id'];
	$player_name=$row['player_name'];
	$bid=$row['bid'];
	$team_id=$row['team_id'];
	$country = $row['country'];
	$base = $row['base'];
	$role = $row['role'];
	//echo $player_id.$bid.$team_id.$year;
	if($bid)
	{
		$delete_from_unsold="delete from unsold where player_id='$player_id'";
		mysqli_query($link,$delete_from_unsold) or trigger_error('delete from unsold unsuccessful');
		
		
		//$insert_in_playsfor="insert into playsfor(player_id,year,team_id,amount) values($player_id,2016,$team_id,$bid)";
		$insert_in_playsfor="insert into playsfor (player_id,player_name,country,role,year,team_id,amount) values ('".$player_id."','".$player_name."','".$country."','".$role."','".$year."','".$team_id."','".$bid."')";

		$res = mysqli_query($link,$insert_in_playsfor) or trigger_error('error in playsfor insertion');

		//$get_total_spent = "select sum(amount) from playsfor where team_id='".$team_id."'";

		//$tot_spent = mysqli_query($link,$get_total_spent) or trigger_error('error in playsfor total spent');

		$update_budget = "update login set budget = budget -'".$bid."' where team_id='".$team_id."'";
		$res = mysqli_query($link,$update_budget) or trigger_error('error in update budget');

		mysqli_query($link,"delete from current");
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
		$insert_in_current="insert into current (player_id,player_name,team_id,country,base,role,time) values ('".$player_id."','".$player_name."','".$team_id."','".$country."','".$base."','".$role."','".$time."')" or trigger_error('insert into current unsuccessful');
		$result=mysqli_query($link,$insert_in_current);
		if($result == FALSE)
		{
			echo $player_name;
			die("Insert Error in Current");
		}

		
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
		$player_name = $row['player_name'];
		$team_id = $row['team_id'];
		$country = $row['country'];
		$base = $row['base'];
		$role = $row['role'];
		$time=time()+30;
		$insert_in_current="insert into current (player_id,player_name,team_id,country,base,role,time) values ('".$player_id."','".$player_name."','".$team_id."','".$country."','".$base."','".$role."','".$time."')" or trigger_error('insert into current unsuccessful');
		$result=mysqli_query($link,$insert_in_current);
		if($result == FALSE)
		{
			echo $player_name;
			die("Insert Error in Current");
		}

	}
}
mysqli_close($link);
//header('location:auction.php');

?>