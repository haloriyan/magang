<?php
include 'aksi/ctrl/bos.php';
$sesi = $bos->sesi();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>Lowongan Saya di Bos lowMAGZ</title>
	<link href="../aset/fw/build/fw.css" rel="stylesheet">
	<link href="../aset/fw/build/font-awesome.min.css" rel="stylesheet">
	<link href="../aset/css/style.bos.css" rel="stylesheet">
</head>
<body>

<div class="atas hijau-3">
	<h1 class="judul ke-kiri">Lowongan</h1>
	<nav class="ke-kanan" style="margin-right: 5%;">
		<button class="tbl" id="cta"><i class="fa fa-plus"></i> &nbsp;Add Lowongan</button>
	</nav>
</div>

<div class="menu">
	<a href="./dasbor"><li><div id="icon"><i class="fa fa-home"></i></div> Dashboard</li></a>
	<a href="./lowongan"><li aktif="ya"><div id="icon"><i class="fa fa-briefcase"></i></div> Lowongan saya</li></a>
	<a href="./aplikasi"><li><div id="icon"><i class="fa fa-user"></i></div> Aplikasi lamaran</li></a>
	<a href="./pengaturan"><li><div id="icon"><i class="fa fa-cogs"></i></div> Pengaturan</li></a>
	<a href="./keluar"><li><div id="icon"><i class="fa fa-sign-out"></i></div> Sign out</li></a>
</div>

<div class="container">
	<div class="bagian">
		<div class="wrap">
			<h3><div id="icon" class="hijau-3"><i class="fa fa-briefcase"></i></div> Lowongan saya</h3>
			<div id="loadLowongan"></div>
		</div>
	</div>
</div>

<div class="bg"></div>
<div class="popupWrapper" id="popupHapus">
	<div class="popup">
		<div class="wrap">
			<h3>Hapus Lowongan
				<div id="xHapus" class="ke-kanan"><i class="fa fa-close"></i></div>
			</h3>
			<form id="formHapus">
				<input type="hidden" id="idlowongan">
				<p>Yakin ingin menghapus lowongan <b><span id="namaLowongan"></span></b></p>
				<div class="bag-tombol">
					<button class="merah">Ya, hapus lowongan ini</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script src="../aset/js/embo.js"></script>
<script>
	function loadLowongan() {
		ambil("../aksi/lowongan/load.php", function(res) {
			tulis("#loadLowongan", res)
		})
	}
	loadLowongan()
	klik("#cta", function() {
		mengarahkan("./add")
	})

	function hapus(val) {
		let low = val.split("[[pisah]]")
		let idlow = low[0]
		let namaLow = low[1]
		munculPopup("#popupHapus", pengaya("#popupHapus", "top: 190px"))
		tulis("#namaLowongan", namaLow)
		pilih("#idlowongan").value = idlow
	}

	submit("#formHapus", function() {
		let id = pilih("#idlowongan").value
		let del = "id="+id
		pos("../aksi/lowongan/delete.php", del, function() {
			hilangPopup("#popupHapus")
			loadLowongan()
		})
	})

	tekan("Escape", function() {
		hilangPopup("#popupHapus")
	})
	klik("#xHapus", function() {
		hilangPopup("#popupHapus")
	})
</script>
</body>
</html>