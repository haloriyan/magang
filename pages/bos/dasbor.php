<?php
include 'aksi/ctrl/bos.php';
$sesi = $bos->sesi();
$idbos = $bos->saya($sesi, "idbos");

$totLowongan = $ctrl->hitung($ctrl->tabel("lowongan")->pilih()->dimana(["idbos" => $idbos])->eksekusi());
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
			<h3><div id="icon" class="hijau-3"><i class="fa fa-home"></i></div> Dashboard</h3>
			<div class="card hijau-3" id="keLowongan">
				<div class="wrap">
					<span id="totLowongan"><?php echo $totLowongan; ?></span> Lowongan &nbsp; <i class="fa fa-arrow-right"></i>
				</div>
			</div>
			<div class="card hijau-3">
				<div class="wrap">
					<span id="totLowongan">25</span> Aplikasi &nbsp; <i class="fa fa-arrow-right"></i>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="../aset/js/embo.js"></script>
<script>
	klik("#cta", function() {
		mengarahkan("./add")
	})
	klik("#keLowongan", function() {
		mengarahkan("./lowongan")
	})
</script>
</body>
</html>