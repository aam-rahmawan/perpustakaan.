<?php
require_once('../config/+koneksi.php');
require_once('../models/database.php');
include "../models/m_crud.php";
$connection = new Database($host, $user, $pass, $database);
$pm = new Peminjaman($connection);

$fileName = "excel_anggota-(".date('d-m-Y').").xls";

header("Content-Disposition: attachment; filename= '$fileName'");
header("Content-Type: application/vnd.ms-excel");
?>

<table border="1px">
	<tr>
		        <th>NO</th>
                <th>Tanggal Pinjam</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Kelas</th>
                <th>Lama Pinjam</th>
	</tr>
		<?php
		$no = 1;
		$tampil = $pm->tampil_pinjam();
		while ($data = $tampil->fetch_object()) {
		echo "<tr>";
		echo "<td align=center>".$no++."</td>";
		echo "<td>".$data->tanggal_pinjam."</td>";
		echo "<td>".$data->nama."</td>";
		echo "<td>".$data->kategori."</td>";
		echo "<td>".$data->kelas."</td>";
		echo "<td>".$data->lama_pinjam."</td>";
		echo "</tr>";
		}
		?>

</table>