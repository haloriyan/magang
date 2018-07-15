<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale = 1'>
	<title>Sign in to Lowmagz</title>
	<link href='aset/fw/build/fw.css' rel='stylesheet'>
	<link href='aset/fw/build/font-awesome.min.css' rel='stylesheet'>
	<link href='aset/css/style.auth.css' rel='stylesheet'>
</head>
<body>

<div class="container">
	<div class="logo">
		<img src="aset/gbr/lowmagz-bgputih.jpg">
	</div>
	<form id="formLogin">
		<p style="margin-bottom: 15px;">Sign in to your account</p>
		<input type="email" class="box" id="mailLog" placeholder="Email" autocomplete="off">
		<input type="password" class="box" id="pwdLog" placeholder="Kata sandi" autocomplete="off">
		<div class="bag-tombol">
			<button class="hijau-3">Sign in</button>
		</div>
		<div class="opt rata-tengah">
			belum punya akun? <a href="#" id="linkReg">mendaftar</a> sekarang!
		</div>
	</form>
	<form id="formReg">
		<p style="margin-bottom: 15px;">Create new LowMAGZ account</p>
		<input type="text" class="box" id="namaReg" placeholder="Nama" autocomplete="off">
		<input type="email" class="box" id="mailReg" placeholder="Email" autocomplete="off">
		<input type="password" class="box" id="pwdReg" placeholder="Kata sandi" autocomplete="off">
		<div class="bag-tombol">
			<button class="hijau-3">Mendaftar</button>
		</div>
		<div class="opt rata-tengah">
			sudah punya akun? <a href="#" id="linkLog">login</a> sekarang!
		</div>
	</form>
</div>

<div class="bg"></div>
<div class="popupWrapper" id="suksesReg">
	<div class="popup">
		<div class="wrap">
			<h3>Berhasil mendaftar!
				<div id="xSukses" class="ke-kanan"><i class="fa fa-close"></i></div>
			</h3>
			<p>
				Sekarang cek email konfirmasi untuk mengaktifkan akunmu agar dapat digunakan
			</p>
		</div>
	</div>
</div>

<div class="popupWrapper" id="notif">
	<div class="popup">
		<div class="wrap">
			<h3><i class="fa fa-info"></i> &nbsp;Alert!
				<div id="xNotif" class="ke-kanan"><i class="fa fa-close"></i></div>
			</h3>
			<p>
				<?php echo $_COOKIE['kukiLogin']; ?>
			</p>
		</div>
	</div>
</div>

<script src='aset/js/embo.js'></script>
<?php
$kuki = $_COOKIE['kukiLogin'];
if(isset($kuki)) {
	echo '<script>
munculPopup("#notif", pengaya("#notif", "top: 170px"))
</script>';
}
?>
<script>
	submit("#formLogin", function() {
		let email = pilih("#mailLog").value
		let pwd = pilih("#pwdLog").value
		let log = "email="+email+"&pwd="+pwd
		pos("aksi/siswa/login.php", log, function() {
			mengarahkan("./halo")
		})
		return false
	})
	submit("#formReg", function() {
		let nama = pilih("#namaReg").value
		let email = pilih("#mailReg").value
		let pwd = pilih("#pwdReg").value
		let reg = "nama="+nama+"&email="+email+"&pwd="+pwd
		pos("aksi/siswa/register.php", reg, function() {
			munculPopup("#suksesReg", pengaya("#suksesReg", "top: 170px"))
		})
		return false
	})

	klik("#linkLog", function() {
		hilang("#formReg")
		muncul("#formLogin")
	})
	klik("#linkReg", function() {
		hilang("#formLogin")
		muncul("#formReg")
	})

	klik("#xSukses", function() {
		hilangPopup("#suksesReg")
	})
	klik("#xNotif", function() {
		hilangPopup("#notif")
	})
	tekan("Escape", function() {
		hilangPopup("#suksesReg")
		hilangPopup("#notif")
	})
</script>

</body>
</html>