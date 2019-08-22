<?php
require_once('../config/+koneksi.php');
require_once('../models/database.php');
include "../models/m_crud.php";
$connection = new Database($host, $user, $pass, $database);
$pm = new Peminjaman($connection);

	$id_pinjam = $_POST['id_pinjam'];
 	$tanggal_pinjam = $connection->conn->real_escape_string($_POST['tanggal_pinjam']);
    $kategori = $connection->conn->real_escape_string($_POST['kategori']);
    $kelas = $connection->conn->real_escape_string($_POST['kelas']);
    $lama_pinjam = $connection->conn->real_escape_string($_POST['lama_pinjam']);
    $tanggal_kembali = $connection->conn->real_escape_string($_POST['tanggal_kembali']);
    $denda = $connection->conn->real_escape_string($_POST['denda']);
    $status = $connection->conn->real_escape_string($_POST['status']);

	$pm->edit_pinjam("UPDATE peminjaman set tanggal_pinjam = '$tanggal_pinjam', kategori = '$kategori', kelas = '$kelas', lama_pinjam = '$lama_pinjam', tanggal_kembali='$tanggal_kembali', denda='$denda', status='$status' WHERE id_pinjam = '$id_pinjam'");
		echo "<script>window.location='?page=pengembalian'</script>";
?>