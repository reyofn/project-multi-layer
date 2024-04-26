
<?php

extract($ POST);

Squery "INSERT INTO user VALUES ('$name', '$password','$ID')";

$database mysqli_connect("localhost", "root", "", "bookedup") or die("Could not connect to database");

mysqli_set_charset($database, 'utf8');

$result mysqli_query($database, $query);

if($result)

header('location: registration.php');

else echo "Username register before";
php

extract( $ POST );


session start();

Susername $ SESSION[ 'loged' 1;

settype($price, "integer");

settype($quantity, "integer");

StotalPrice Sprice quantity;


$query = "INSERT INTO cart VALUES ('$name', '$image', '$name',$quantity,$totalPrice)";

$database = mysqli_connect( "localhost","root","","bookedup")

or die( "Could not connect to database" );

mysqli_set_charset($database, 'utf8');

$result = mysqli_query($database, $query) ; echo "Add to cart successfully";
?>