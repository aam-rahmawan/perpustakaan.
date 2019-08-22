<?php
require_once('../config/+koneksi.php');
require_once('../models/database.php');
include "../models/m_crud.php";
$connection = new Database($host, $user, $pass, $database);
$agt = new Anggota($connection);

	 $id_anggota = $_POST['id_anggota'];
 	$nis = $connection->conn->real_escape_string($_POST['nis']);
    $nm_lengkap = $connection->conn->real_escape_string($_POST['nm_lengkap']);
    $kelas = $connection->conn->real_escape_string($_POST['kelas']);
    $tempat_lahir = $connection->conn->real_escape_string($_POST['tempat_lahir']);
    $tanggal_lahir = $connection->conn->real_escape_string($_POST['tanggal_lahir']);
    $jenis_kelamin = $connection->conn->real_escape_string($_POST['jenis_kelamin']);
    $alamat = $connection->conn->real_escape_string($_POST['alamat']);
    $username = $connection->conn->real_escape_string($_POST['username']);
    $password = $connection->conn->real_escape_string($_POST['password']);

	$agt->edit_anggota("UPDATE t_login set nis = '$nis', nm_lengkap = '$nm_lengkap', kelas = '$kelas', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', username = '$username', password = '$password' WHERE id_anggota = '$id_anggota'");
		echo "<script>window.location='?page=anggota'</script>";
?>