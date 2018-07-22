<?php
include 'bos.php';

class lowongan extends bos {
	public function info($id, $struktur) {
		$q = $this->tabel("lowongan")->pilih()->dimana(["idlowongan" => $id])->eksekusi();
		if($this->hitung($q) == 0) {
			return "null";
		}
		$r = $this->ambil($q);
		return $r[$struktur];
	}
	public function create($a, $b, $c, $d, $e, $f) {
		$q = $this->tabel("lowongan")
				  ->tambah([
				  	"idlowongan" => $a,
				  	"idbos" => $b,
				  	"title" => $c,
				  	"description" => $d,
				  	"salary" => $e,
				  	"category" => $f,
				  	"added" => time()
				  ])->eksekusi();
		return $q;
	}
	public function my($id) {
		$q = $this->tabel("lowongan")->pilih()->dimana(["idbos" => $id])->eksekusi();
		if($this->hitung($q) == 0) {
			return "null";
		}else {
			while($r = $this->ambil($q)) {
				$hasil[] = $r;
			}
			return $hasil;
		}
	}
	public function delete($id) {
		$q = $this->tabel("lowongan")->hapus()->dimana(["idlowongan" => $id])->eksekusi();
		return $q;
	}
	public function cari($q, $cat, $urut) {
		if($urut == "newest" or $urut == "") {
			$urutkan = "ORDER BY added DESC";
		}else if($urut == "highest") {
			$urutkan = "ORDER BY salary DESC";
		}
		$q = $this->query("SELECT * FROM lowongan WHERE title LIKE '%$q%' AND category LIKE '%$cat%' $urutkan");
		if($this->hitung($q) == 0) {
			return "null";
		}else {
			while($r = $this->ambil($q)) {
				$hasil[] = $r;
			}
			return $hasil;
		}
	}
}

$lowongan = new lowongan();

?>