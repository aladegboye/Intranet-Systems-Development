<?php
$host='localhost';
$user='root';
$pass='';
$db='peers_db';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
echo 'connected succesfully to peers_db database';
$sql="insert into users (username, password,email) values ('prince','12345','any1@mail.com')";
$query=mysqli_query($con,$sql);
if($query)
    echo 'data inserted successfully';
?>
