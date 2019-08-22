<?php
require_once('../config/+koneksi.php');
require_once('../models/database.php');
include "../models/m_crud.php";
$connection = new Database($host, $user, $pass, $database);
$bk = new Buku($connection);

	$id_buku = $_POST['id_buku'];
 	  $kd_buku = $connection->conn->real_escape_string($_POST['kd_buku']);
   	$judul = $connection->conn->real_escape_string($_POST['judul']);
   	$isbn = $connection->conn->real_escape_string($_POST['isbn']);
   	$pengarang = $connection->conn->real_escape_string($_POST['pengarang']);
    $penerbit = $connection->conn->real_escape_string($_POST['penerbit']);
   	$halaman = $connection->conn->real_escape_string($_POST['halaman']);
   	$jumlah = $connection->conn->real_escape_string($_POST['jumlah']);
   	$th_terbit = $connection->conn->real_escape_string($_POST['th_terbit']);
    $sinopsis = $connection->conn->real_escape_string($_POST['sinopsis']);
    $baik = $connection->conn->real_escape_string($_POST['baik']);
    $rusak = $connection->conn->real_escape_string($_POST['rusak']);
   	$hilang = $connection->conn->real_escape_string($_POST['hilang']);

    $pict = $_FILES['gambar']['name'];
    $extensi = explode(".", $_FILES['gambar']['name']);
    $gambar = "bk-".round(microtime(true)).".".end($extensi);
    $sumber = $_FILES['gambar']['tmp_name'];

if($pict == '') {
	$bk->edit_buku("UPDATE buku set kd_buku = '$kd_buku', judul = '$judul', isbn = '$isbn', pengarang = '$pengarang', penerbit = '$penerbit', jumlah = '$jumlah', th_terbit = '$th_terbit', sinopsis = '$sinopsis', halaman = '$halaman', baik = '$baik', rusak = '$rusak', hilang = '$hilang' WHERE id_buku = '$id_buku'");
		echo "<script>window.location='?page=buku'</script>";
} else {
	$gambar = $bk->tampil_buku($id_buku)->fetch_object()->gambar;
	unlink("../images/".$gambar);

	 $upload = move_uploaded_file($sumber, "../images/".$gambar);
    if($upload) {
    	$bk->edit_buku("UPDATE buku set kd_buku = '$kd_buku', judul = '$judul', isbn = '$isbn', pengarang = '$pengarang', penerbit = '$penerbit', jumlah = '$jumlah', th_terbit = '$th_terbit', sinopsis = '$sinopsis', halaman = '$halaman', gambar = '$gambar', baik = '$baik', rusak = '$rusak', hilang = '$hilang' WHERE id_buku = '$id_buku'");
		echo "<script>window.location='?page=buku'</script>";
    } else {
    	echo "<script>alert('Upload Gambar Gagal!')</script>";
    }
   }
?>