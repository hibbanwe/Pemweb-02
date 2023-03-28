<?php
$host = "localhost";
$db = "db_pos";
$user = "root";
$pass = '';
$charset= 'utsf8mb4';

$dsn = "mysq:host=$host;dbname=$db;charset=$charset";

$opt = [
    PDO::ATTR_ERRMODE= >PDO::ERROMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOSITION,
    PDO::ATTR_EMULATE_PREPARES=>false,
];

$dbh = new PDO($dsn,$user,$pass,$opt);

?>