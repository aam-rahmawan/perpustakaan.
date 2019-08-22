<?php
/**
* 
*/
class Buku {
	
	private $mysqli;

	function __construct($conn) {
		$this->mysqli = $conn;
	}

	public function tampil_buku($id_buku = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT a.*,b.jmlbukupinjam FROM buku a LEFT JOIN (SELECT kategori, COUNT(*) as jmlbukupinjam FROM peminjaman WHERE status='1' GROUP BY kategori) b ON a.sinopsis=b.kategori ";
		if($id_buku != null) {
			$sql .= " WHERE id_buku =$id_buku";
		}
		$query = $db->query($sql) or die ($db->error);
			return $query;
	}

	public function view_buku($id_buku = null) {
		return "SELECT a.*,ifnull( b.jmlbukupinjam, 0) as jmlbukupinjam FROM buku a LEFT JOIN (SELECT kategori, COUNT(*) as jmlbukupinjam FROM peminjaman WHERE status='1' GROUP BY kategori) b ON a.sinopsis=b.kategori ";
	}

	public function tampil_tgl($tgl1, $tgl2) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM buku WHERE tgl_publish BETWEEN '$tgl1' AND '$tgl2'";
		$query = $db->query($sql) or die ($db->error);
			return $query;
	}

	public function tambah_buku($kd_buku, $judul, $isbn, $pengarang, $penerbit, $halaman, $jumlah, $th_terbit, $gambar, $sinopsis, $baik, $rusak, $hilang) {
		$db = $this->mysqli->conn;
		$db->query("INSERT INTO buku VALUES('', '$kd_buku', '$judul', '$isbn', '$pengarang', '$penerbit', '$halaman', '$jumlah', '$th_terbit', '$gambar', '$sinopsis', '$baik', '$rusak', '$hilang', now())") or die ($db->error);	
	}

	public function edit_buku($sql) {
		$db = $this->mysqli->conn;
		$db->query($sql) or die ($db->error);
	}

	public function hapus_buku($id_buku) {
		$db = $this->mysqli->conn;
		$db->query("DELETE FROM buku WHERE id_buku = '$id_buku'") or die ($db->error);
	}

	function __destruct() {
		$db = $this->mysqli->conn;
	
	}
}
?>

<?php
/**
* 
*/
class Anggota {
	
	private $mysqli;

	function __construct($conn) {
		$this->mysqli = $conn;
	}

	public function tampil_anggota($id_anggota = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM t_login";
		if($id_anggota != null) {
			$sql .= " WHERE id_anggota =$id_anggota";
		}
		$query = $db->query($sql) or die ($db->error);
			return $query;
	}

	public function tampil_tgl($tgl1, $tgl2) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM t_login WHERE tgl_publish BETWEEN '$tgl1' AND '$tgl2'";
		$query = $db->query($sql) or die ($db->error);
			return $query;
	}

	public function tambah_anggota($nis, $nm_lengkap, $kelas, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $alamat, $username, $password, $status) {
		$db = $this->mysqli->conn;
		$db->query("INSERT INTO t_login VALUES('', '$nis', '$nm_lengkap', '$kelas', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$username', '$password', '$status', now())") or die ($db->error);	
	
	}

	public function edit_anggota($sql) {
		$db = $this->mysqli->conn;
		$db->query($sql) or die ($db->error);
	}

	public function hapus_anggota($id_anggota) {
		$db = $this->mysqli->conn;
		$db->query("DELETE FROM t_login WHERE id_anggota = '$id_anggota'") or die ($db->error);
	}

	function __destruct() {
		$db = $this->mysqli->conn;
		
	}
}
?>

<?php
/**
* 
*/
class Peminjaman {
	
	private $mysqli;

	function __construct($conn) {
		$this->mysqli = $conn;
	}

	public function tampil_pinjam($id_pinjam = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM peminjaman";
		if($id_pinjam != null) {
			$sql .= " WHERE id_pinjam =$id_pinjam";
		}
		$query = $db->query($sql) or die ($db->error);
			return $query;
	}

	public function tampil_tgl($tgl1, $tgl2) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM peminjaman WHERE tgl_publish BETWEEN '$tgl1' AND '$tgl2'";
		$query = $db->query($sql) or die ($db->error);
			return $query;
	}

	public function tambah_pinjam($tanggal_pinjam, $nama, $kategori, $kelas, $lama_pinjam, $tanggal_kembali, $denda, $status) {
		$db = $this->mysqli->conn;
		$db->query("INSERT INTO peminjaman VALUES('', '$tanggal_pinjam', '$nama', '$kategori', '$kelas', '$lama_pinjam', '$denda', '$tanggal_kembali', '$status', now())") or die ($db->error);	
	}

	public function edit_pinjam($sql) {
		$db = $this->mysqli->conn;
		$db->query($sql) or die ($db->error);
	}

	public function hapus_pinjam($id_pinjam) {
		$db = $this->mysqli->conn;
		$db->query("DELETE FROM peminjaman WHERE id_pinjam = '$id_pinjam'") or die ($db->error);
	}

	function __destruct() {
		$db = $this->mysqli->conn;
		
	}
}
?>

<?php
/**
* 
*/
class Visit {
	
	private $mysqli;

	function __construct($conn) {
		$this->mysqli = $conn;
	}

	public function tampil_visit($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM tb_visit";
		if($id != null) {
			$sql .= " WHERE id =$id";
		}
		$query = $db->query($sql) or die ($db->error);
			return $query;
	}

	function __destruct() {
		$db = $this->mysqli->conn;
		
	}
}
?>