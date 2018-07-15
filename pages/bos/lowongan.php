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
			<div id="loadLowongan">
				<table>
					<thead>
						<tr>
							<th>Job Title</th>
							<th>Salary</th>
							<th>Durasi</th>
							<th style="width: 10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Ngoding nggawe web</td>
							<td>Rp 100.000</td>
							<td>3 bulan</td>
							<td>
								<button class="merah"><i class="fa fa-trash"></i></button>
							</td>
						</tr>
						<tr>
							<td>Ngoding nggawe web</td>
							<td>Rp 100.000</td>
							<td>3 bulan</td>
							<td>
								<button class="merah"><i class="fa fa-trash"></i></button>
							</td>
						</tr>
						<tr>
							<td>Ngoding nggawe web</td>
							<td>Rp 100.000</td>
							<td>3 bulan</td>
							<td>
								<button class="merah"><i class="fa fa-trash"></i></button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script src="../aset/js/embo.js"></script>
<script>
	klik("#cta", function() {
		mengarahkan("./add")
	})
</script>
</body>
</html>