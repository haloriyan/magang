<?php
include '../ctrl/bos.php';

$email = $_POST['email'];
$pwd = $_POST['pwd'];

$bos->login($email, $pwd);