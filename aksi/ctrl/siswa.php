<?php
include 'controller.php';

class siswa extends controller {
	public function me($id, $struktur) {
		$q = $this->tabel("siswa")->pilih()->dimana(["idsiswa" => $id])->eksekusi();
		if($this->hitung($q) == 0) {
			$q = $this->tabel("siswa")->pilih()->dimana(["email" => $id])->eksekusi();
		}
		if($this->hitung($q) == 0) {
			return "null";
		}
		$r = $this->ambil($q);
		return $r[$struktur];
	}
	public function register($a, $b, $c, $d) {
		$q = $this->tabel("siswa")
				  ->tambah([
				  	"idsiswa" => $a,
				  	"nama" => $b,
				  	"email" => $c,
				  	"password" => $d,
				  	"status" => 0,
				  	"registered" => time()
				  ])->eksekusi();
		return $q;
	}
	public function login($e, $p) {
		$em = $this->me($e, "email");
		$pw = $this->me($e, "password");
		if($e == $em && $p == $pw) {
			$status = $this->me($e, "status");
			if($status == 0) {
				setcookie('kukiLogin', 'Akun belum aktif. Silakan aktifkan dulu akun melalui tautan yang dikirim melalui email', time() + 35, "/");
			}else {
				session_start();
				$_SESSION['ulowmagz']=$e;
			}
		}else {
			setcookie('kukiLogin', 'Email dan/atau password salah!', time() + 33, "/");
		}
	}
	public function sesi() {
		session_start();
		$sesi = $_SESSION['ulowmagz'];
		$cek = $this->me($sesi, "nama");
		if($cek == "") {
			die("403 denied access");
		}
		return $sesi;
	}
}

$siswa = new siswa();

?>