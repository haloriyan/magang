<?php
include '../ctrl/lowongan.php';

$id 			= rand(1, 999999);
$idbos 			= $bos->saya($bos->sesi(), "idbos");
$title 			= $_POST['title'];
$description 	= $_POST['description'];
$salary	 		= $_POST['salary'];
$category		= $_POST['category'];

$lowongan->create($id, $idbos, $title, $description, $salary, $category);