<?php
include 'aksi/ctrl/bos.php';
$sesi = $bos->sesi();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>Tambah Lowongan di lowMAGZ</title>
	<link href="../aset/fw/build/fw.css" rel="stylesheet">
	<link href="../aset/fw/build/font-awesome.min.css" rel="stylesheet">
	<link href="../aset/css/style.add.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<form class="bagian" id="bagCat" style="display: block;">
		<div class="wrap">
			<h1>Kategori</h1>
			<select class="box" id="category">
				<option value="">Pilih...</option>
				<option>Komputer dan Jaringan</option>
				<option>Software Engineering</option>
				<option>Lainnya</option>
			</select>
			<button class="tbl hijau-3">Next</button>
		</div>
	</form>
	<form class="bagian" id="bagTitle">
		<div class="wrap">
			<h1>Job role yang akan dibantu oleh siswa magang</h1>
			<input type="text" class="box" id="title" placeholder="Job role">
		</div>
	</form>
	<form class="bagian" id="bagDesc">
		<div class="wrap">
			<h1>Berikan deskripsi mengenai job role-nya</h1>
			<textarea class="box" id="description"></textarea>
			<br />
			<button class="tbl hijau-3">Next</button>
		</div>
	</form>
	<form class="bagian" id="bagSalary">
		<div class="wrap">
			<h1>Berapa banyak uang yang Anda keluarkan per bulannya untuk siswa magang pada job ini?</h1>
			<input type="number" class="box" id="salary" placeholder="Salary (Rp / bln)">
		</div>
	</form>
</div>

<script src="../aset/js/embo.js"></script>
<script>
	submit("#bagCat", function() {
		let cat = pilih("#category").value
		if(cat == "") {
			return false
		}
		hilang("#bagCat")
		muncul("#bagTitle")
		return false
	})
	submit("#bagTitle", function() {
		let title = pilih("#title").value
		if(title == "") {
			return false
		}
		hilang("#bagTitle")
		muncul("#bagDesc")
		return false
	})
	submit("#bagDesc", function() {
		let description = pilih("#description").value
		if(description == "") {
			return false
		}
		hilang("#bagDesc")
		muncul("#bagSalary")
		return false
	})
	submit("#bagSalary", function() {
		let title = pilih("#title").value
		let description = pilih("#description").value
		let salary = pilih("#salary").value
		let category = pilih("#category").value
		let crt = "title="+title+"&description="+description+"&salary="+salary+"&category="+category
		if(title == "" || description == "" || salary == "") {
			return false
		}
		pos("../aksi/lowongan/create.php", crt, function() {
			mengarahkan("./lowongan")
		})
		return false
	})
</script>
</body>
</html>