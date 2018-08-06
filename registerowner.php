<?php 
$owner_name = $_POST['owner_name']; 
$team_name = $_POST['team_name']; 
$Email = $_POST['email']; 
$password = $_POST['password']; 
$budget = $_POST['budget']; 


$link = mysqli_connect('localhost', 'root', ''); 
if(!$link){ 
die('Failed to connect to server: ' . mysqli_error()); 
} 
$db = mysqli_select_db($link,'ipl3'); 
if(!$db){ 
die("Unable to select database"); 
} 
$insert_in_login="insert into login (email,password,owner_name,team_name,budget) values ('".$Email."','".$password."','".$owner_name."','".$team_name."','".$budget."')";
mysqli_query($link,$insert_in_login) or trigger_error('error in insert in team');
$result=mysqli_query($link,$insert_in_login);

 
//Check if query executes successfully 
if($result == FALSE) 
echo mysqli_error($link) . '<br>'; 
else
{
	echo '<script>alert("Data inserted successfully!")</script>'; 
	header('location:loginform.php')
} 

?>
