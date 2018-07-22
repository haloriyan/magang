<?php
include 'aksi/ctrl/aplikasi.php';

function toIdr($angka) {
	return 'Rp '.strrev(implode('.', str_split(strrev(strval($angka)), 3)));
}

// Detail lowongan
$idbos = $lowongan->info($idlowongan, "idbos");
$title = $lowongan->info($idlowongan, "title");
$description = $lowongan->info($idlowongan, "description");
$salary = $lowongan->info($idlowongan, "salary");

// Detail bos
$namaDU = $bos->saya($idbos, "nama");
$foto = $bos->saya($idbos, "foto");
$alamat = $bos->saya($idbos, "alamat");

// Detail siswa
$sesi = $siswa->sesi();
$idsiswa = $siswa->me($sesi, "idsiswa");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale = 1'>
	<title><?php echo $title; ?> di lowMAGZ</title>
	<link href='../aset/fw/build/fw.css' rel='stylesheet'>
	<link href='../aset/fw/build/font-awesome.min.css' rel='stylesheet'>
	<link href='../aset/css/style.index.css' rel='stylesheet'>
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
			<div id="profil" class="ke-kanan" aksi="bkMenu"><i class="fa fa-bars"></i></div>
			<?php
		}
		?>
	</nav>
</div>

<div class="menu">
	<a href="../aplikasi-saya"><li><div id="icon"><i class="fa fa-briefcase"></i></div> Aplikasi saya</li></a>
	<a href="../pengaturan"><li><div id="icon"><i class="fa fa-cog"></i></div> Pengaturan</li></a>
	<a href="../keluar"><li><div id="icon"><i class="fa fa-sign-out"></i></div> Sign out</li></a>
</div>

<div class="container">
	<div class="wrap">
		<h1><?php echo $title; ?></h1>
		<h3>by <b><?php echo $namaDU; ?></b> ~ <?php echo toIdr($salary); ?> / bulan</h3>
		<p>
			<?php echo $description; ?>
		</p>
	</div>
</div>

<div class="kanan">
	<div class="bagian" id="applying">
		<div class="wrap">
			<?php
			if(empty($sesi)) {
				echo "<p>Sign in dulu sebelum mengirim aplikasi</p>";
			}else { 
				$cek = $aplikasi->cek($idsiswa, $idlowongan);
				if($cek == "tiada") {
					?>
					<button class="hijau-3" id="apply">Apply this internship</button>
					<?php
				}else {
					echo "Kamu sudah melamar lowongan ini";
				}
			}
			?>
		</div>
	</div>
	<div class="bagian rata-tengah" id="profil">
		<div class="wrap">
			<img src="../aset/gbr/<?php echo $foto; ?>">
			<h2><?php echo $namaDU; ?></h2>
			<p style="font-size: 16px;"><?php echo $alamat; ?></p>
		</div>
	</div>
</div>

<div class="bg"></div>
<div class="popupWrapper" id="popupApply">
	<div class="popup">
		<div class="wrap">
			<h3>Applying internship
				<div id="xApply" class="ke-kanan"><i class="fa fa-close"></i></div>
			</h3>
			<form id="formApply">
				<input type="hidden" id="idsiswa" value="<?php echo $idsiswa; ?>">
				<input type="hidden" id="idlowongan" value="<?php echo $idlowongan; ?>">
				<p>Beritahu pada mereka kenapa kamu sangat cocok dengan internship ini</p>
				<textarea class="box" id="note"></textarea>
				<div style="font-size: 15px;font-family: OLight;">* selain itu, portfolio juga memengaruhi seleksi </div>
				<div class="bag-tombol">
					<button class="hijau-3">Apply</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="popupWrapper" id="suksesApply">
	<div class="popup">
		<div class="wrap">
			<h3>
				<i class="fa fa-check"></i> &nbsp; Berhasil Melamar
				<div id="xSukses" class="ke-kanan"><i class="fa fa-close"></i></div>
			</h3>
			<p>
				Kamu melamar program magang ini. Semoga kamu bisa diterima disini ya... ^_^
			</p>
			<p>
				Oh iya, kamu bisa melihat dimana saja kamu melamar magang di halaman <a href="#">Aplikasi saya</a>
			</p>
		</div>
	</div>
</div>

<script src='../aset/js/embo.js'></script>
<script src='../aset/js/script.lowongan.js'></script>

</body>
</html>