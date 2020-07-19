<?php

$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'phplessons';

$connect = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()) {
    $error = mysqli_connect_error();
    var_dump($error);

    exit;
}

$query - "SELECT * FROM products";
$resul = mysqli_query($connect, $query);

if (mysqli_errno($connect)) {
    var_dump(mysqli_error($connect));
    exit;
}

//var_dump($connect);