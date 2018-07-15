<?php
include '../ctrl/bos.php';

$id = rand(1, 999999);
$nama = $_POST['nama'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

$bos->register($id, $nama, $email, $pwd);