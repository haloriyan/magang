<?php
include 'aksi/ctrl/lowongan.php';

// Detail lowongan
$idbos = $lowongan->info($idlowongan, "idbos");
$title = $lowongan->info($idlowongan, "title");
$description = $lowongan->info($idlowongan, "description");

// Detail bos
$namaDU = $bos->saya($idbos, "nama");
$foto = $bos->saya($idbos, "foto");
$alamat = $bos->saya($idbos, "alamat");

// Detail siswa
$sesi = $siswa->sesi();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale = 1'>
	<title><?php echo $title; ?> di lowMAGZ</title>
	<link href='../aset/fw/build/fw.css' rel='stylesheet'>
	<link href='../aset/fw/build/font-awesome.min.css' rel='stylesheet'>
	<link href='../aset/css/style.lowongan.css' rel='stylesheet'>
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
					<a href="../pengaturan"><li><div id="icon"><i class="fa fa-cog"></i></div> Pengaturan</li></a>
					<a href="../keluar"><li><div id="icon"><i class="fa fa-sign-out"></i></div> Sign out</li></a>
				</ul>
			</div>
			<?php
		}
		?>
	</nav>
</div>

<div class="container">
	<div class="wrap">
		<h1><?php echo $title; ?></h1>
		<h3>by <b><?php echo $namaDU; ?></b></h3>
		<p>
			<?php echo $description; ?>
		</p>
	</div>
</div>

<div class="kanan">
	<div class="bagian">
		<div class="wrap">
			<?php
			if(empty($sesi)) {
				echo "<p>Sign in dulu sebelum mengirim aplikasi</p>";
			}else { ?>
				<button class="hijau-3" id="apply">Apply this internship</button>
				<?php
			}
			?>
		</div>
	</div>
	<div class="bagian rata-tengah" id="profil">
		<div class="wrap">
			<img src="../aset/gbr/<?php echo $foto; ?>">
			<h2><?php echo $namaDU; ?></h2>
			<p><?php echo $alamat; ?></p>
		</div>
	</div>
</div>

<script src='../aset/js/embo.js'></script>
<script src='aset/js/script.lowongan.js'></script>

</body>
</html>