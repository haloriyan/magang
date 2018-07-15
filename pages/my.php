<?php
include 'aksi/ctrl/siswa.php';

$sesi = $siswa->sesi();
if(empty($sesi)) {
	header("location: ./auth");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale = 1'>
	<title>my</title>
	<link href='aset/fw/build/fw.css' rel='stylesheet'>
	<link href='aset/fw/build/font-awesome.min.css' rel='stylesheet'>
	<link href='aset/css/style.my.css' rel='stylesheet'>
</head>
<body>

<div class='wrap'>
	<h2 class='rata-tengah'>my's page created</h2>
</div>

<script src='aset/js/embo.js'></script>
<script src='aset/js/script.my.js'></script>

</body>
</html>