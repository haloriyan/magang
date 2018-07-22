<?php
include 'siswa.php';

class bos extends siswa {
	public function saya($id, $struktur) {
		$q = $this->tabel("bos")->pilih()->dimana(["idbos" => $id])->eksekusi();
		if($this->hitung($q) == 0) {
			$q = $this->tabel("bos")->pilih()->dimana(["email" => $id])->eksekusi();
		}
		if($this->hitung($q) == 0) {
			return "null";
		}
		$r = $this->ambil($q);
		return $r[$struktur];
	}
	public function register($a, $b, $c, $d) {
		$q = $this->tabel("bos")
				  ->tambah([
				  	"idbos" => $a,
				  	"nama" => $b,
				  	"email" => $c,
				  	"password" => $d,
				  	"status" => 0,
				  	"registered" => time()
				  ])->eksekusi();
		return $q;
	}
	public function login($e, $p) {
		$em = $this->saya($e, "email");
		$pw = $this->saya($e, "password");
		if($e == $em && $p == $pw) {
			$status = $this->saya($e, "status");
			if($status == 0) {
				setcookie('kukiLogin', 'Mohon memverifikasi email terlebih dahulu', time() + 30, "/");
			}else {
				session_start();
				$_SESSION['ubos']=$e;
			}
		}else {
			setcookie('kukiLogin', 'Email dan/atau password salah!', time() + 33, "/");
		}
	}
	public function sesi() {
		session_start();
		$sesi = $_SESSION['ubos'];
		if(empty($sesi)) {
			header("location: ./auth");
		}
		if($this->saya($sesi, "nama") == "") {
			header("location: ./auth");
		}
		return $sesi;
	}
	public function change($id, $struktur, $value) {
		$q = $this->tabel("bos")->ubah([$struktur => $value])->dimana(["idbos" => $id])->eksekusi();
		return $q;
	}
}

$bos = new bos();

?>