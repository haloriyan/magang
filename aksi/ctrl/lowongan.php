<?php
include 'controller.php';

class lowongan extends controller {
	public function info($id, $struktur) {
		$q = $this->tabel("lowongan")->pilih()->dimana(["idlowongan" => $id])->eksekusi();
		if($this->hitung($q) == 0) {
			return "null";
		}
		$r = $this->ambil($q);
		return $r[$struktur];
	}
	public function add($a, $b, $c, $d, $e, $f, $g) {
		$q = $this->tabel("lowongan")
				  ->tambah([
				  	"idlowongan" => $a,
				  	"idbos" => $b,
				  	"title" => $c,
				  	"description" => $d,
				  	"image" => $e,
				  	"salary" => $f,
				  	"durasi" => $g,
				  	"added" => time()
				  ])->eksekusi();
	}
}

$lowongan = new lowongan();

?>