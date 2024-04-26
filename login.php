<?php

session_start();
$username=$_POST['username'];
$password=$_POST['password'];


if($username&&$password)
{

$connect=mysqli_connect("localhost","root","bookedup") or die ("couldn't connect!");
mysqli_select_db($connect,"users") or die("couldn't find db") ;

$query=mysqli_query($connect,"SELECT username FROM users where username='$username' and password = '$password'");
$numrows=mysqli_num_rows($query);
//echo $numrows;

// check if user exsists in the database 
if($numrows!=0)
{
	//echo "you are in !! click <a href='logout.php'>here<a> logout";
	header("location: welcome.php");

	$_SESSION['username']=$username;
		   
}

else
die("Incorrect username or password!");
}
else 
die ("please enter a username and a password!");

?>