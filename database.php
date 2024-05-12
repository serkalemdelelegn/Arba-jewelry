<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'arba_jewelry_store';
$con =  mysqli_connect($dbHost,$dbUser,$dbPassword,$dbName);
if(!$con) {
    die('Something wrong');
}
