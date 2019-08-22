<?php

$pm = new Peminjaman($connection);
?>  

  <?php
   if(@$_POST['tambah']) {
   	$tanggal_pinjam = $connection->conn->real_escape_string($_POST['tanggal_pinjam']);
   	$nama = $connection->conn->real_escape_string($_POST['nama']);
   	$kategori = $connection->conn->real_escape_string($_POST['kategori']);
   	$kelas = $connection->conn->real_escape_string($_POST['kelas']);
   	$lama_pinjam = $connection->conn->real_escape_string($_POST['lama_pinjam']);
    $tanggal_kembali = isset($_POST['tanggal_kembali'])?$connection->conn->real_escape_string($_POST['tanggal_kembali']) : "";
    $denda = isset($_POST['denda'])?$connection->conn->real_escape_string($_POST['denda']) : "";
     $status = $connection->conn->real_escape_string($_POST['status']);
    	$pm->tambah_pinjam($tanggal_pinjam, $nama, $kategori, $kelas, $lama_pinjam, $tanggal_kembali, $denda, $status);
      ?>
 <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                    Penyimpanan Berhasil!
                </div>
      <?php
    }

   ?>