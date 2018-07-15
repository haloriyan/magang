<?php
include 'aksi/ctrl/siswa.php';

$sesi = $siswa->sesi();
if(empty($sesi)) {
	if(empty($_COOKIE['kukiLogin'])) {
		setcookie('kukiLogin', 'Kamu harus login dulu!', time() + 33, "/");
	}
	header("location: ./auth");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale = 1'>
	<title>halo</title>
	<link href='aset/fw/build/fw.css' rel='stylesheet'>
	<link href='aset/fw/build/font-awesome.min.css' rel='stylesheet'>
	<link href='aset/css/style.halo.css' rel='stylesheet'>
</head>
<body>

<div class="konten konten-80 container">
	<h1>Halo <b>Riyan</b>!</h1>
	<form id="formCari">
		<input type="text" class="box" placeholder="Cari lowongan...">
		<button id="cari" class="tbl hijau-3"><i class="fa fa-search"></i></button>
	</form>
	<div class="rata-tengah">
		<div id="atau">atau</div>
		<a href="./settings">
			<div class="card">
				<div class="wrap">
					<div id="icon"><i class="fa fa-cogs"></i></div> Pengaturan Akun
				</div>
			</div>
		</a>
		<a href="./aplikasi-saya">
			<div class="card">
				<div class="wrap">
					<div id="icon"><i class="fa fa-briefcase"></i></div> Lamaran Saya
				</div>
			</div>
		</a>
		<a href="./keluar">
			<div class="card">
				<div class="wrap">
					<div id="icon"><i class="fa fa-sign-out"></i></div> Keluar
				</div>
			</div>
		</a>
	</div>
</div>

<script src='aset/js/embo.js'></script>
<script src='aset/js/script.halo.js'></script>

</body>
</html>