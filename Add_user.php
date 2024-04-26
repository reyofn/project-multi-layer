<?php

extract($_POST);

$query ="INSERT INTO user VALUES ('$fName', '$Email','$phone','$Date')";

$database= mysqli_connect("localhost", "root", "", "bookedup") or die("Could not connect to database");

mysqli_set_charset($database, 'utf8');

$result= mysqli_query($database, $query);

if($result)

header('location: registration.html');

else echo "Username register before";

?>