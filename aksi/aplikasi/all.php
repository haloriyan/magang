<?php
include '../ctrl/aplikasi.php';

$idlowongan = $_COOKIE['idlowongan'];

$get = $aplikasi->all($idlowongan);

if($get == "null") {
	echo "Tidak ada pelamar di proyek ini";
}else {
	echo "<div class='card rata-tengah'>".
			"<div class='wrap'>".
				"<li onclick='detail()'>".
					"<img src='../aset/gbr/".$fotoProfil."'>".
					"<h4>".$nama."</h4>".
				"</li>".
			"</div>".
		 "</div>";
}