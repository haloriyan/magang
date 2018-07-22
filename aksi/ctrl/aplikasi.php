<?php
include 'lowongan.php';

class aplikasi extends lowongan {
	public function all($id) {
		$q = $this->tabel("aplikasi")->pilih()->dimana(["idlowongan" => $id])->eksekusi();
		if($this->hitung($q) == 0) {
			return "null";
		}else {
			while($r = $this->ambil($q)) {
				$hasil[] = $r;
			}
			return $hasil;
		}
	}
	public function apply($a, $b, $c) {
		$q = $this->tabel("aplikasi")
				  ->tambah([
				  	"idaplikasi" => rand(1, 999999),
				  	"idlowongan" => $a,
				  	"idsiswa" => $b,
				  	"note" => $c,
				  	"status" => 0,
				  	"added" => time()
				  ])->eksekusi();
		return $q;
	}
	public function cek($idsiswa, $idlowongan) {
		$q = $this->tabel("aplikasi")->pilih()->dimana(["idsiswa" => $idsiswa, "idlowongan" => $idlowongan])->eksekusi();
		if($this->hitung($q) != 0) {
			return "ada";
		}else {
			return "tiada";
		}
	}
}

$aplikasi = new aplikasi();

?>