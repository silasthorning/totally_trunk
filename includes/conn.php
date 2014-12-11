<?php 

$localhost= 'localhost';
$databasebruger ='root';
$databasepassword = '';
$databasenavn = 'totally_trunk';

$conn=mysqli_connect($localhost,$databasebruger,$databasepassword,$databasenavn); //definerer forbindelsen 

mysqli_set_charset($conn, 'utf8');
?>