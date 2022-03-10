<?php

//mysql -username root -password
$host ="localhost";
$user ="root";
$pass ="";
$db   ="perpustakaan_ira";

$db = mysqli_connect($host,$user,$pass,$db);

if(!$db){
    die("database tidak terhubung");
}