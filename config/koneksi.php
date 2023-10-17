<?php

$db = 'db_2205551090';
$server = 'localnet.prognet';
$username = '2205551090';
$password = '2205551090';

$conn = mysqli_connect($server, $username, $password, $db);
if (!$conn) {
    die('Koneksi gagal!' . mysqli_connect_error());
}