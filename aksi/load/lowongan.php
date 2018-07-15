<?php
include '../ctrl/lowongan.php';

$key = $_COOKIE['q'];
$cat = $_COOKIE['cat'];
$urut = $_COOKIE['urut'];
$load = $lowongan->cari($key, $cat, $urut);
if($load == "null") {
	echo "<h3>Tidak ada lowongan</h3>";
}else {
	foreach($load as $row) {
		$namaDU = $bos->saya($row['idbos'], "nama");
		echo "<div class='list'>".
				"<div class='wrap'>".
					"<h2>".$row['title']."</h2>".
					"<p>on <b>".$namaDU."</b> &nbsp; ~ ".$row['salary']." / bulan</p>".
					"<a href='./lowongan/".$row['idlowongan']."'><button class='tbl hijau-3'>Lihat detail</button></a>".
				"</div>".
			 "</div>";
	}
}