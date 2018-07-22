<?php
include 'aksi/ctrl/siswa.php';

// Detail siswa
$sesi = $siswa->sesi();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>lowMAGZ</title>
	<link href="aset/fw/build/fw.css" rel="stylesheet">
	<link href="aset/fw/build/font-awesome.min.css" rel="stylesheet">
	<link href="aset/css/style.index.css" rel="stylesheet">
</head>
<body>

<div class="atas">
	<h1 class="judul">lowMAGZ</h1>
	<nav class="ke-kanan">
		<?php
		if(empty($sesi)) {
			echo "<a href='./auth'>SIGN IN</a>";
		}else {
			?>
			<div id="profil" class="ke-kanan" aksi="bkMenu"><i class="fa fa-bars"></i></div>
			<?php
		}
		?>
	</nav>
</div>

<div class="menu">
	<a href="./aplikasi-saya"><li><div id="icon"><i class="fa fa-briefcase"></i></div> Aplikasi saya</li></a>
	<a href="./pengaturan"><li><div id="icon"><i class="fa fa-cog"></i></div> Pengaturan</li></a>
	<a href="./keluar"><li><div id="icon"><i class="fa fa-sign-out"></i></div> Sign out</li></a>
</div>

<div class="containerIndex">
	<div class="wrap">
		<h2>Cari magang tanpa tegang mulai sekarang!</h2>
		<form id="formCari">
			<input type="text" class="box" placeholder="Cari lowongan...">
			<button id="cari" class="tbl hijau-3"><i class="fa fa-search"></i></button>
		</form>
		<div class="opt">
			atau <a href="#">butuh siswa magang?</a>
		</div>
	</div>
</div>

<script src="aset/js/embo.js"></script>
<script>
	klik("#profil", () => {
		let aksi = pilih("#profil").getAttribute("aksi")
		if(aksi == "bkMenu") {
			pengaya(".menu", "right: 0%")
			pilih("#profil").setAttribute("aksi", "xMenu")
		}else {
			pengaya(".menu", "right: -50%")
			pilih("#profil").setAttribute("aksi", "bkMenu")
		}
	})
</script>
</body>
</html>