<?php
include '../ctrl/siswa.php';

$email = $_POST['email'];
$pwd = $_POST['pwd'];

$siswa->login($email, $pwd);