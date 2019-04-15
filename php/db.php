<?php 
$user = 'root';
$password = 'root';
$db = 'Tecbooks';
$host = 'localhost';
$port = 8889;
$con = mysqli_connect($host, $user, $password,
 $db);

 if(!$con){
     echo "not working mate";
 }
?>