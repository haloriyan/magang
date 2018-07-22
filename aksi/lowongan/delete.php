<?php
include '../ctrl/lowongan.php';

$id = $_POST['id'];
$lowongan->delete($id);