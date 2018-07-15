<?php
include '../ctrl/bos.php';

$id = $bos->saya($bos->sesi(), "idbos");

$bagian = $_POST['bagian'];
if($bagian == "detail") {
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$set = $bos->change($id, "nama", $nama);
	$set = $bos->change($id, "email", $email);
	$set = $bos->change($id, "alamat", $alamat);
}else if($bagian == "image") {
	$icon = $_POST['icon'];
	$set = $bos->change($id, "foto", $icon);
}