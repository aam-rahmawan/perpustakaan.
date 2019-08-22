<?php
require_once('../config/+koneksi.php');
require_once('../models/database.php');
include "../models/m_crud.php";
$connection = new Database($host, $user, $pass, $database);
$agt = new Anggota($connection);

$fileName = "excel_anggota-(".date('d-m-Y').").xls";

header("Content-Disposition: attachment; filename= '$fileName'");
header("Content-Type: application/vnd.ms-excel");
?>

<table border="1px">
	<tr>
		  <th>NO</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
	</tr>
		<?php
		$no = 1;
		$tampil = $agt->tampil_anggota();
		while ($data = $tampil->fetch_object()) {
		echo "<tr>";
		echo "<td align=center>".$no++."</td>";
		echo "<td>".$data->nis."</td>";
		echo "<td>".$data->nm_lengkap."</td>";
		echo "<td>".$data->kelas."</td>";
		echo "<td>".$data->tempat_lahir."</td>";
		echo "<td>".$data->tanggal_lahir."</td>";
		echo "<td>".$data->jenis_kelamin."</td>";
		echo "<td>".$data->alamat."</td>";
		echo "</tr>";
		}
		?>

</table>