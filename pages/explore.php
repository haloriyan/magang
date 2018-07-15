<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale = 1'>
	<title>explore</title>
	<link href='aset/fw/build/fw.css' rel='stylesheet'>
	<link href='aset/fw/build/font-awesome.min.css' rel='stylesheet'>
	<link href='aset/css/style.explore.css' rel='stylesheet'>
</head>
<body>

<div class="atas">
	<h1 class="judul">lowMAGZ</h1>
	<form id="pencarian" class="rata-tengah">
		<input type="text" class="box" id="q" placeholder="Cari lowongan..." oninput="search(this.value)">
		<button id="cari"><i class="fa fa-search"></i></button>
	</form>
</div>

<div class="filter">
	<div class="wrap">
		<h3>Filter</h3>
		<div class="isi">Kategori :</div>
		<select class="box" id="category" onchange="setCategory(this.value)">
			<option value="">Semua</option>
			<option>Komputer dan Jaringan</option>
			<option>Software Engineering</option>
			<option>Lainnya</option>
		</select>
		<div class="isi">Urutkan :</div>
		<select class="box" id="urutkan" onchange="urutkan(this.value)">
			<option value="newest">Terbaru</option>
			<option value="highest">Salary Tertinggi</option>
		</select>
	</div>
</div>

<div class="container">
	<div class="wrap">
		<div id="load"></div>
	</div>
</div>

<script src='aset/js/embo.js'></script>
<script src='aset/js/script.explore.js'></script>

</body>
</html>