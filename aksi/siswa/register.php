<?php
include '../ctrl/siswa.php';

$id = rand(1, 999999);
$nama = $_POST['nama'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

$siswa->register($id, $nama, $email, $pwd);