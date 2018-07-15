<?php
include 'aksi/ctrl/bos.php';
$sesi = $bos->sesi();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>Dashboard Bos lowMAGZ</title>
	<link href="../aset/fw/build/fw.css" rel="stylesheet">
	<link href="../aset/fw/build/font-awesome.min.css" rel="stylesheet">
	<link href="../aset/css/style.bos.css" rel="stylesheet">
	<style>
		.box {
			font-size: 16px;
			margin-bottom: 20px;
			width: 92%;
		}
	</style>
</head>
<body>

<div class="atas hijau-3">
	<h1 class="judul ke-kiri">Dashboard</h1>
	<nav class="ke-kanan" style="margin-right: 5%;">
		<button class="tbl" id="cta"><i class="fa fa-plus"></i> &nbsp;Add Lowongan</button>
	</nav>
</div>

<div class="menu">
	<a href="./dasbor"><li aktif="ya" style="border-top-left-radius: 6px;border-top-right-radius: 6px;"><div id="icon"><i class="fa fa-home"></i></div> Dashboard</li></a>
	<a href="./lowongan"><li><div id="icon"><i class="fa fa-briefcase"></i></div> Lowongan saya</li></a>
	<a href="./aplikasi"><li><div id="icon"><i class="fa fa-user"></i></div> Aplikasi lamaran</li></a>
	<a href="./pengaturan"><li><div id="icon"><i class="fa fa-cogs"></i></div> Pengaturan</li></a>
	<a href="./keluar"><li><div id="icon"><i class="fa fa-sign-out"></i></div> Sign out</li></a>
</div>

<div class="container">
	<div class="bagian">
		<div class="wrap">
			<h3><div id="icon" class="hijau-3"><i class="fa fa-cogs"></i></div> Detail Informasi</h3>
			<form id="formDetail">
				<div>Nama Perusahaan</div>
				<input type="text" class="box" id="nama" value="Agendakota">
				<div>Email</div>
				<input type="email" class="box" id="email">
				<div>Alamat</div>
				<textarea class="box" id="alamat"></textarea>
				<button class="tbl hijau-3">Simpan</button>
			</form>
		</div>
	</div>
	<div class="bagian">
		<div class="wrap">
			<h3><div id="icon" class="hijau-3"><i class="fa fa-image"></i></div> Icon Perusahaan</h3>
			<form id="formImage">
				<input type="file" class="box" style="padding-top: 15px;">
				<button class="tbl hijau-3">Simpan</button>
			</form>
		</div>
	</div>
</div>

<div class="bg"></div>
<div class="popupWrapper" id="notif">
	<div class="popup">
		<div class="wrap">
			<h3><i class="fa fa-alert"></i> &nbsp;Alert!
				<div id="xNotif" class="ke-kanan"><i class="fa fa-close"></i></div>
			</h3>
			<p id="isiNotif">
				Pengaturan berhasil disimpan!
			</p>
		</div>
	</div>
</div>

<script src="../aset/js/embo.js"></script>
<script>
	klik("#cta", function() {
		mengarahkan("./add")
	})
	// munculPopup("#notif", pengaya("#notif", "top: 240px"))

	klik("#xNotif", function() {
		hilangPopup("#notif")
	})
	tekan("Escape", function() {
		hilangPopup("#notif")
	})
</script>
</body>
</html>