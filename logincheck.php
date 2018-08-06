<?php 


$Email = $_POST['Email']; 
$password = $_POST['password']; 

//Connect to mysql server 
$link = mysqli_connect('localhost','root',''); 
//Check link to the mysql server 
if(!$link) { 
die('Failed to connect to server: ' . mysqli_error($link)); 
} 
//Select database 
$db = mysqli_select_db($link,'ipl3'); 
if(!$db) { 
die("Unable to select database"); 
} 
//Create query 
$qry='SELECT * FROM login WHERE email ="'.$Email.'" AND password ="'.$password.'"'; 
//Execute query 


$result=mysqli_query($link,$qry)or trigger_error('wrong credentials'); 

//Check whether the query was successful or not 
if($result){ 
$count = mysqli_num_rows($result); 
} 
else{ 
//Login failed 
include('loginform.php'); 
echo '<center>Incorrect Username or Password !!!<center>'; 
exit(); 
} 

//if query was successful it should fetch 1 matching record from the table. 
if( $count == 1){
	$row=mysqli_fetch_assoc($result);
	if($row['email']=='admin' and $row['password']='admin')
	{
		header('location:insert_match.php');
		exit();
	}
	
	//Login successful set session variables and redirect to main page. 

	$qry='SELECT * FROM login WHERE email ="'.$Email.'" '; 
 	$result=mysqli_query($link,$qry)or trigger_error('wrong credentials'); 
 	$row=mysqli_fetch_assoc($result);
	session_start(); 
	$_SESSION['team_id']=$row['team_id'];
	header('location:start_auction.php'); 
} 
else{ 
//Login failed 
include('loginform.php'); 
echo '<center>Incorrect Username or Password !!!<center>'; 
exit(); 
} 
 

 


?>
