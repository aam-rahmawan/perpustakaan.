<?php
require_once('../config/+koneksi.php');
require_once('../models/database.php');
include "../models/m_crud.php";
$connection = new Database($host, $user, $pass, $database);
$bk = new Buku($connection);

$fileName = "excel_penerbit-(".date('d-m-Y').").xls";

header("Content-Disposition: attachment; filename= '$fileName'");
header("Content-Type: application/vnd.ms-excel");
?>

<table border="1px">
	<tr>
		 <th>No</th>
                <th>Kode Buku</th>
                <th>Judul</th>
                <th>Isbn</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Halaman</th>
                <th>Jumlah</th>
                <th>Th Terbit</th>
                <th>Gambar</th>
                <th>Sinopsis</th>
	</tr>
		<?php
		$no = 1;
		$tampil = $bk->tampil_buku();
		while ($data = $tampil->fetch_object()) {
		echo "<tr>";
		echo "<td align=center>".$no++."</td>";
		echo "<td>".$data->kd_buku."</td>";
		echo "<td>".$data->judul."</td>";
		echo "<td>".$data->isbn."</td>";
		echo "<td>".$data->pengarang."</td>";
		echo "<td>".$data->penerbit."</td>";
		echo "<td>".$data->halaman."</td>";
		echo "<td>".$data->jumlah."</td>";
		echo "<td>".$data->th_terbit."</td>";
		echo "<td>".$data->gambar."</td>";
		echo "<td>".$data->sinopsis."</td>";
		echo "</tr>";
		}
		?>

</table>