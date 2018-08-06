<?php
	session_start();
?>

<html>
<head>
<link rel="shortcut icon" href="images/title.jpg" type="image/png">
<link rel="shortcut icon" href="images/title.jpg" type="image/png">
   
	<meta charset="utf-8">
	
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style2.css">
	<!-- <link rel="stylesheet" href="css/materialize.min.css"> -->
	
	<script src="js/jquery-latest.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery183.min.js"></script>
<title>
	Auction Page
</title>
<style type="text/css">
	.btn{border:none;border-radius:2px;display:inline-block;height:36px;line-height:36px;outline:0;padding:0 2rem;text-transform:uppercase;vertical-align:middle;-webkit-tap-highlight-color:transparent}
	.waves-effect{position:relative;cursor:pointer;display:inline-block;overflow:hidden;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-tap-highlight-color:transparent;vertical-align:middle;z-index:1;will-change:opacity, transform;transition:all .3s ease-out}
	.waves-effect .waves-ripple{position:absolute;border-radius:50%;width:20px;height:20px;margin-top:-10px;margin-left:-10px;opacity:0;background:rgba(0,0,0,0.2);transition:all 0.7s ease-out;transition-property:opacity, -webkit-transform;transition-property:transform, opacity;transition-property:transform, opacity, -webkit-transform;-webkit-transform:scale(0);transform:scale(0);pointer-events:none}
	.waves-effect.waves-light .waves-ripple{background-color:rgba(255,255,255,0.45)}
	.waves-effect.waves-red .waves-ripple{background-color:rgba(244,67,54,0.7)}
	.waves-effect.waves-yellow .waves-ripple{background-color:rgba(255,235,59,0.7)}
	.waves-effect.waves-orange .waves-ripple{background-color:rgba(255,152,0,0.7)}
	.waves-effect.waves-purple .waves-ripple{background-color:rgba(156,39,176,0.7)}
	.waves-effect.waves-green .waves-ripple{background-color:rgba(76,175,80,0.7)}
	.waves-effect.waves-teal .waves-ripple{background-color:rgba(0,150,136,0.7)}
	.picker__holder{width:100%;overflow-y:auto;-webkit-overflow-scrolling:touch}
</style>

<script src="bid_updator.js"></script>     								


</head>
<body onload="bid_update()">                                                  
<header class="bg-theme">
	<div class="wrap-header zerogrid">
		<div class="row">
			<div id="cssmenu">
				<ul>
				   <li><a href="index.php">Home</a></li>
				   <li><a href="squads.php">The Squad</a></li>
				   <li><a href="logout.php">Log Out</a></li>
				</ul>
			</div>
			<a href='index.php' class="logo"><img src="images/logo.png" /></a>
		</div>
	</div>
</header>

<h2>	
<p style="background-color:#FF5733; width:100px; height:100px;  border-radius: 50px; float:right; margin-right: 20px; text-align: center; color:white; font-style: bold; font-size: 40px;" id="txt"></p>
<p style="float:right;"><br>TIME LEFT-->></p>
</h2>	 
<br>
<br>
<br>
<br>
<br>
<br>

<div>
<center><h1 style="font-size: 30px;"> WELCOME TO LIVE AUCTION</h1><br>
<?php
$team_id=$_SESSION['team_id'];
$link=mysqli_connect('localhost','root','');
$db=mysqli_select_db($link,'ipl3');
if(!$db)
{
	die('unable to select database');
}

	$team_name_query= "select team_name,budget from login where team_id='".$team_id."' ";
	$result = mysqli_query($link,$team_name_query) or trigger_error('error in fetching team_name');
	$row = mysqli_fetch_assoc($result);
	$team_name= $row['team_name'];
	$budget = $row['budget'];
	echo '<h1 style="font-family:Comic Sans MS; font-size:30px;">'.$team_name.'</h1> </center>';
	echo '<h1 style="font-family:Comic Sans MS; font-size:30px; align:center"> Amount Remaining : '.$budget.'</h1> </center>';
?>
<center>
<h3><p>START BIDDING </p>
<br><br>
</h3>



<form action='bid_placed.php' method='post'>
<table border=3 cellpadding=5 style="width:80%;" >
<th id="abc">Player name
<th>Current bid
<th>Bidding Team
<tr>

<td id="player_field">
<?php
	
$get_current="select * from current";
$result=mysqli_query($link,$get_current) or trigger_error('error in fetching current');
$row=mysqli_fetch_assoc($result);
$player_id=$row['player_id'];
$bid=$row['bid'];
$base = $row['base'];
if(!$bid)
{
	$bid='NONE';
}
$team_id=$row['team_id'];
$db_time=$row['time']-time();


$team_name="NONE";

$player_name_query="select player_name from current where player_id=$player_id";
$result=mysqli_query($link,$player_name_query)or trigger_error('error in fetching player_name');
$row=mysqli_fetch_assoc($result);
$player_name=$row['player_name'];
if($team_id)
{
	$team_name_query="select team_name from login where team_id=$team_id";
	$result=mysqli_query($link,$team_name_query) or trigger_error('error in fetching team_name');
	$row=mysqli_fetch_assoc($result);
	$team_name=$row['team_name'];
}

mysqli_close($link);
echo $player_name;
?>
</td>
<script>
	c=<?php echo $db_time; ?>;
	setTimeout(timedCount(),1000);
</script>
<td id="bid_field">
<?php
echo $bid;
?>
</td>
<td id="team_field">
<?php
	echo $team_id;
?>
</td>
</table>
<br><br><br>



<center>ENTER YOUR RAISE AMOUNT</center>

<input type="number" name="amount" style="width:20%; background-color:white; color:black;"><br><br>
<button type="submit" class="btn waves-effect waves-light" value="place_bid" name="submit" >PLACE BID
  </button>

<br>
</form>
</center>	

</div>
<footer>
	<div class="wrap-footer">
		<div class="zerogrid">
			<div class="row">
				When the fun stops, STOP!
				
			</div>
		</div>
	</div>
</footer>

 
</body>

</html>















