<html>
<head>
	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
<title>
Players
</title>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<header>
	<div class="wrap-header zerogrid">
		<div class="row">
			<div id="cssmenu">
				<ul>
				   <li class='active'><a href="index.php">HOME</a></li>
				   <li class='active'><a href="squad.html">THE SQUAD</a></li>
				   
				</ul>
			</div>
			<a href='index.php' class="logo"><img src="images/logo.png" /></a>
		</div>
	</div>
</header>
<br>
<br>


<center>
<div style="box-shadow: 10px 10px 10px 10px; width:90%; border-radius:30px;  background:linear-gradient(-90deg,#1388F5,#5BB2E1);">
<br >
<h1 align="center" color="yellow">Chennai Super Kings</h1>
<table border ="1">
		<th>Player Name</th>
		<th>Player ID</th>
		<th>Role</th>
		<th>Country</th>
		<th>Amount</th>
<?php

$team_id=1;
//$team_name="Mumbai Indians";

$link=mysqli_connect('localhost','root','');
$db=mysqli_select_db($link,'ipl3');
if(!$db)
{
	die('unable to select database');
}
$query="select * from playsfor where team_id='".$team_id."'";

$result=mysqli_query($link,$query);
$c=0;
while($row=mysqli_fetch_assoc($result))
{

	$player_id=$row['player_id'];
	$player_name=$row['player_name'];
	$role = $row['role'];
	$country = $row['country'];
	$amount = $row['amount'];

	echo '<br>';
	

	$player_id=$row['player_id'];
	$player_name=$row['player_name'];
	//getting image
	$image="<img src='player_images/$player_id.jpg' width=120 height=120 style=' float:left; border-radius:40px;'/><br>";
	echo '<tr>';
	echo '<td>'.$player_name.'</td>';
	echo' <td>'.$player_id.'</td>';
	echo '<td>'.$role.'</td>';
	echo '<td>'.$country.'</td>';
	echo '<td>'.$amount.'</td>';
	echo '</tr>';
}


mysqli_close($link);
?>
</table>
<br>
<br>


<br >
<h1 align="center" color="yellow">Kolkata Knight Riders</h1>
<table border ="1">
		<th>Player Name</th>
		<th>Player ID</th>
		<th>Role</th>
		<th>Country</th>
		<th>Amount</th>
<?php

$team_id=2;
//$team_name="Mumbai Indians";

$link=mysqli_connect('localhost','root','');
$db=mysqli_select_db($link,'ipl3');
if(!$db)
{
	die('unable to select database');
}
$query="select * from playsfor where team_id='".$team_id."'";

$result=mysqli_query($link,$query);
$c=0;
while($row=mysqli_fetch_assoc($result))
{

	$player_id=$row['player_id'];
	$player_name=$row['player_name'];
	$role = $row['role'];
	$country = $row['country'];
	$amount = $row['amount'];

	echo '<br>';
	

	$player_id=$row['player_id'];
	$player_name=$row['player_name'];
	//getting image
	$image="<img src='player_images/$player_id.jpg' width=120 height=120 style=' float:left; border-radius:40px;'/><br>";
	echo '<tr>';
	echo '<td>'.$player_name.'</td>';
	echo' <td>'.$player_id.'</td>';
	echo '<td>'.$role.'</td>';
	echo '<td>'.$country.'</td>';
	echo '<td>'.$amount.'</td>';
	echo '</tr>';
}


mysqli_close($link);
?>
</table>

<br>
<br>


<br >
<h1 align="center" color="yellow">Royal Challengers Bangalore</h1>
<table border ="1">
		<th>Player Name</th>
		<th>Player ID</th>
		<th>Role</th>
		<th>Country</th>
		<th>Amount</th>
<?php

$team_id=3;
//$team_name="Mumbai Indians";

$link=mysqli_connect('localhost','root','');
$db=mysqli_select_db($link,'ipl3');
if(!$db)
{
	die('unable to select database');
}
$query="select * from playsfor where team_id='".$team_id."'";

$result=mysqli_query($link,$query);
$c=0;
while($row=mysqli_fetch_assoc($result))
{

	$player_id=$row['player_id'];
	$player_name=$row['player_name'];
	$role = $row['role'];
	$country = $row['country'];
	$amount = $row['amount'];

	echo '<br>';
	

	$player_id=$row['player_id'];
	$player_name=$row['player_name'];
	//getting image
	$image="<img src='player_images/$player_id.jpg' width=120 height=120 style=' float:left; border-radius:40px;'/><br>";
	echo '<tr>';
	echo '<td>'.$player_name.'</td>';
	echo' <td>'.$player_id.'</td>';
	echo '<td>'.$role.'</td>';
	echo '<td>'.$country.'</td>';
	echo '<td>'.$amount.'</td>';
	echo '</tr>';
}


mysqli_close($link);
?>
</table>

<br>
<br>


<br >
<h1 align="center" color="yellow">Mumbai Indians</h1>
<table border ="1">
		<th>Player Name</th>
		<th>Player ID</th>
		<th>Role</th>
		<th>Country</th>
		<th>Amount</th>
<?php

$team_id=4;
//$team_name="Mumbai Indians";

$link=mysqli_connect('localhost','root','');
$db=mysqli_select_db($link,'ipl3');
if(!$db)
{
	die('unable to select database');
}
$query="select * from playsfor where team_id='".$team_id."'";

$result=mysqli_query($link,$query);
$c=0;
while($row=mysqli_fetch_assoc($result))
{

	$player_id=$row['player_id'];
	$player_name=$row['player_name'];
	$role = $row['role'];
	$country = $row['country'];
	$amount = $row['amount'];

	echo '<br>';
	

	$player_id=$row['player_id'];
	$player_name=$row['player_name'];
	//getting image
	$image="<img src='player_images/$player_id.jpg' width=120 height=120 style=' float:left; border-radius:40px;'/><br>";
	echo '<tr>';
	echo '<td>'.$player_name.'</td>';
	echo' <td>'.$player_id.'</td>';
	echo '<td>'.$role.'</td>';
	echo '<td>'.$country.'</td>';
	echo '<td>'.$amount.'</td>';
	echo '</tr>';
}


mysqli_close($link);
?>
</table>

<br>
<br>

<br >
<h1 align="center" color="yellow">Sunrisers Hyderabad</h1>
<table border ="1">
		<th>Player Name</th>
		<th>Player ID</th>
		<th>Role</th>
		<th>Country</th>
		<th>Amount</th>
<?php

$team_id=5;
//$team_name="Mumbai Indians";

$link=mysqli_connect('localhost','root','');
$db=mysqli_select_db($link,'ipl3');
if(!$db)
{
	die('unable to select database');
}
$query="select * from playsfor where team_id='".$team_id."'";

$result=mysqli_query($link,$query);
$c=0;
while($row=mysqli_fetch_assoc($result))
{

	$player_id=$row['player_id'];
	$player_name=$row['player_name'];
	$role = $row['role'];
	$country = $row['country'];
	$amount = $row['amount'];

	echo '<br>';
	

	$player_id=$row['player_id'];
	$player_name=$row['player_name'];
	//getting image
	$image="<img src='player_images/$player_id.jpg' width=120 height=120 style=' float:left; border-radius:40px;'/><br>";
	echo '<tr>';
	echo '<td>'.$player_name.'</td>';
	echo' <td>'.$player_id.'</td>';
	echo '<td>'.$role.'</td>';
	echo '<td>'.$country.'</td>';
	echo '<td>'.$amount.'</td>';
	echo '</tr>';
}


mysqli_close($link);
?>
</table>

<br>
<br>

<br >
<h1 align="center" color="yellow">Kings XI Punjab</h1>
<table border ="1">
		<th>Player Name</th>
		<th>Player ID</th>
		<th>Role</th>
		<th>Country</th>
		<th>Amount</th>
<?php

$team_id=6;
//$team_name="Mumbai Indians";

$link=mysqli_connect('localhost','root','');
$db=mysqli_select_db($link,'ipl3');
if(!$db)
{
	die('unable to select database');
}
$query="select * from playsfor where team_id='".$team_id."'";

$result=mysqli_query($link,$query);
$c=0;
while($row=mysqli_fetch_assoc($result))
{

	$player_id=$row['player_id'];
	$player_name=$row['player_name'];
	$role = $row['role'];
	$country = $row['country'];
	$amount = $row['amount'];

	echo '<br>';
	

	$player_id=$row['player_id'];
	$player_name=$row['player_name'];
	//getting image
	$image="<img src='player_images/$player_id.jpg' width=120 height=120 style=' float:left; border-radius:40px;'/><br>";
	echo '<tr>';
	echo '<td>'.$player_name.'</td>';
	echo' <td>'.$player_id.'</td>';
	echo '<td>'.$role.'</td>';
	echo '<td>'.$country.'</td>';
	echo '<td>'.$amount.'</td>';
	echo '</tr>';
}


mysqli_close($link);
?>
</table>

<br>
<br>

<br >
<h1 align="center" color="yellow">Delhi Daredevils</h1>
<table border ="1">
		<th>Player Name</th>
		<th>Player ID</th>
		<th>Role</th>
		<th>Country</th>
		<th>Amount</th>
<?php

$team_id=7;
//$team_name="Mumbai Indians";

$link=mysqli_connect('localhost','root','');
$db=mysqli_select_db($link,'ipl3');
if(!$db)
{
	die('unable to select database');
}
$query="select * from playsfor where team_id='".$team_id."'";

$result=mysqli_query($link,$query);
$c=0;
while($row=mysqli_fetch_assoc($result))
{

	$player_id=$row['player_id'];
	$player_name=$row['player_name'];
	$role = $row['role'];
	$country = $row['country'];
	$amount = $row['amount'];

	echo '<br>';
	

	$player_id=$row['player_id'];
	$player_name=$row['player_name'];
	//getting image
	$image="<img src='player_images/$player_id.jpg' width=120 height=120 style=' float:left; border-radius:40px;'/><br>";
	echo '<tr>';
	echo '<td>'.$player_name.'</td>';
	echo' <td>'.$player_id.'</td>';
	echo '<td>'.$role.'</td>';
	echo '<td>'.$country.'</td>';
	echo '<td>'.$amount.'</td>';
	echo '</tr>';
}


mysqli_close($link);
?>
</table>

<br>
<br>
s
<br >
<h1 align="center" color="yellow">Rajasthan Royals</h1>
<table border ="1">
		<th>Player Name</th>
		<th>Player ID</th>
		<th>Role</th>
		<th>Country</th>
		<th>Amount</th>
<?php

$team_id=8;
//$team_name="Mumbai Indians";

$link=mysqli_connect('localhost','root','');
$db=mysqli_select_db($link,'ipl3');
if(!$db)
{
	die('unable to select database');
}
$query="select * from playsfor where team_id='".$team_id."'";

$result=mysqli_query($link,$query);
$c=0;
while($row=mysqli_fetch_assoc($result))
{

	$player_id=$row['player_id'];
	$player_name=$row['player_name'];
	$role = $row['role'];
	$country = $row['country'];
	$amount = $row['amount'];

	echo '<br>';
	

	$player_id=$row['player_id'];
	$player_name=$row['player_name'];
	//getting image
	$image="<img src='player_images/$player_id.jpg' width=120 height=120 style=' float:left; border-radius:40px;'/><br>";
	echo '<tr>';
	echo '<td>'.$player_name.'</td>';
	echo' <td>'.$player_id.'</td>';
	echo '<td>'.$role.'</td>';
	echo '<td>'.$country.'</td>';
	echo '<td>'.$amount.'</td>';
	echo '</tr>';
}


mysqli_close($link);
?>
</table>
</div>
</center>

<footer>
	
	<div class="wrap-footer">
		<div class="zerogrid">
			<div class="row">
				WHEN THE FUN STOPS,STOP!
				
			</div>
		</div>
	</div>
</footer>
</body>
</html>