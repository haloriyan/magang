<?php

error_reporting(1);
$role = $_GET['role'];
$bag = $_GET['bag'];

if($role == "" and $bag == "") {
	include 'index.php';
}else if($role == "") {
	$lokasi = 'pages/'.$bag.'.php';
	if(file_exists($lokasi)) {
		include $lokasi;
	}else {
		header("location: ./error/404");
	}
}else if($bag == "") {
	$lokasi = 'pages/'.$role.'/dasbor.php';
	if(file_exists($lokasi)) {
		include $lokasi;
	}else {
		$lokasi = 'pages/'.$role.'/index.php';
		if(file_exists($lokasi)) {
			include $lokasi;
		}else {
			header("location: ../error/404");
		}
	}
}else {
	if($role == "lowongan") {
		$idlowongan = $bag;
		include 'pages/lowongan.php';
		exit();
	}
	$lokasi = 'pages/'.$role.'/'.$bag.'.php';
	if(file_exists($lokasi)) {
		include $lokasi;
	}else {
		header("location: ../error/404");
	}
}