
<?php
extract($_POST);

sesstion_start();
$username=$_SESSTION[‘loged’];

$query=“delet from cart where username=‘$username’”;

$database=mysqli_connect(“localhost”,”root”,”bookedup”) or die(“could not connect to database”);

mysqli_set_charset($database,’utf8’);

$result=mysqli_query($database,$query);

header (‘location: Account Payment.html’)

?>