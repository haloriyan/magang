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
			echo "<a href='../auth'>SIGN IN</a>";
		}else {
			?>
			<div id="profil">
				<i class="fa fa-user"></i>
				<ul id="subProfil">
					<a href="./pengaturan"><li><div id="icon"><i class="fa fa-cog"></i></div> Pengaturan</li></a>
					<a href="./pengaturan"><li><div id="icon"><i class="fa fa-cog"></i></div> Pengaturan</li></a>
					<a href="./keluar"><li><div id="icon"><i class="fa fa-sign-out"></i></div> Sign out</li></a>
				</ul>
			</div>
			<?php
		}
		?>
	</nav>
</div>

<div class="container">
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
	
</script>
</body>
</html>