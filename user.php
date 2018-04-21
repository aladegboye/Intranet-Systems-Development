<?php
$host='localhost';
$user='root';
$pass='';
$db='peers_db';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
echo 'connected successfully to peers_db database';
?>
