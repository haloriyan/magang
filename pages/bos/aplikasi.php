<?php
include 'aksi/ctrl/bos.php';
$sesi = $bos->sesi();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>Aplikasi Lamaran di lowMAGZ</title>
	<link href="../aset/fw/build/fw.css" rel="stylesheet">
	<link href="../aset/fw/build/font-awesome.min.css" rel="stylesheet">
	<link href="../aset/css/style.bos.css" rel="stylesheet">
	<link href="../aset/css/style.bos.aplikasi.css" rel="stylesheet">
</head>
<body>

<div class="atas hijau-3">
	<h1 class="judul ke-kiri">Aplikasi</h1>
	<nav class="ke-kanan" style="margin-right: 5%;">
		<button class="tbl" id="cta"><i class="fa fa-plus"></i> &nbsp;Add Lowongan</button>
	</nav>
</div>

<div class="menu">
	<a href="./dasbor"><li style="border-top-left-radius: 6px;border-top-right-radius: 6px;"><div id="icon"><i class="fa fa-home"></i></div> Dashboard</li></a>
	<a href="./lowongan"><li><div id="icon"><i class="fa fa-briefcase"></i></div> Lowongan saya</li></a>
	<a href="./aplikasi"><li aktif="ya"><div id="icon"><i class="fa fa-user"></i></div> Aplikasi lamaran</li></a>
	<a href="./pengaturan"><li><div id="icon"><i class="fa fa-cogs"></i></div> Pengaturan</li></a>
	<a href="./keluar"><li><div id="icon"><i class="fa fa-sign-out"></i></div> Sign out</li></a>
</div>

<div class="container">
	<div class="bagian">
		<div class="wrap">
			<h3><div id="icon" class="hijau-3"><i class="fa fa-user"></i></div> Aplikasi Lamaran
				<select class="box ke-kanan" id="project">
					<option value="">Pilih project...</option>
					<option>Ngoding nggawe web</option>
					<option>Ngoding nggawe vscode</option>
				</select>
			</h3>
			<br />
			<div id="loadPelamar">
				<div class="card rata-tengah">
					<div class="wrap">
						<li onclick="detail()">
							<img src="http://localhost/hotel/aset/gbr/tokdalang.jpg">
							<h4>Tok Dalang</h4>
						</li>
						<button onclick="cawang()" class="tbl hijau-3"><i class="fa fa-check"></i></button>
						<button onclick="tolak()" class="tbl merah"><i class="fa fa-close"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="bg"></div>
<div class="popupWrapper" id="detail">
	<div class="popup">
		<div class="wrap">
			<h3>Detail
				<div id="xDetail" class="ke-kanan"><i class="fa fa-close"></i></div>
			</h3>
			<!--
			<div class="rata-tengah" id="detailInfo">
				<img src="http://localhost/hotel/aset/gbr/tokdalang.jpg">
				<h2>Tok Dalang Ranggi</h2>
				<h3>tokdalang@durianruntuh.my</h3>
				<h3>
					Jl. Bumiarjo 5, No. 11, Surabaya
				</h3>
			</div>
			<div>
				<h2>Portfolio</h2>
				<li>Juara I Lomba Linmas se-Jawa Timur (2018)</li>
				<li>Juara Harapan I Youtuber Kondang Se-Kel. Pakis (2017)</li>
			</div>
			-->
		</div>
	</div>
</div>

<script src="../aset/js/embo.js"></script>
<script>
	// munculPopup("#detail", pengaya("#detail", "top: 30px"))
	klik("#cta", function() {
		mengarahkan("./add")
	})
	function cawang() {
		alert('hai')
	}
	function detail() {
		munculPopup("#detail")
	}

	klik("#xDetail", function() {
		hilangPopup("#detail")
	})
	tekan("Escape", function() {
		hilangPopup("#detail")
	})
</script>
</body>
</html>