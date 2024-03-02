<?php

$database['host']='localhost';
$database['username']='root';
$database['password']='';
$database['name']='test';

$conn_link= mysqli_connect(
    $database['host'],
    $database['username'],
    $database['password'],
    $database['name']
);
die(mysqli_connect_error())
?>