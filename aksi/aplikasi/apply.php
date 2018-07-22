<?php
include '../ctrl/aplikasi.php';

$idlowongan = $_POST['idlowongan'];
$idsiswa = $_POST['idsiswa'];
$note = $_POST['note'];

$aplikasi->apply($idlowongan, $idsiswa, $note);