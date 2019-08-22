<?php
require_once('../config/+koneksi.php');
require_once('../models/database.php');
include "../models/m_crud.php";
$connection = new Database($host, $user, $pass, $database);
$pm = new Peminjaman($connection);

$fileName = "excel_denda-(".date('d-m-Y').").xls";

header("Content-Disposition: attachment; filename= '$fileName'");
header("Content-Type: application/vnd.ms-excel");
?>

<table border="1px">
	<tr>
		        <th>NO</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Kategori</th>
                <th>Denda</th>
	</tr>
		<?php
		$no = 1;
		$jumlah = 0;
		$tampil = $pm->tampil_pinjam();
		while ($data = $tampil->fetch_object()) {
		$jumlah+= $data->denda;
		echo "<tr>";
		echo "<td align=center>".$no++."</td>";
		echo "<td>".$data->nama."</td>";
		echo "<td>".$data->kelas."</td>";
		echo "<td>".$data->kategori."</td>";
		echo "<td>".$data->denda."</td>";
		echo "</tr>";
		}
		?>
		 <th colspan="4" name="jumlah" id="jumlah">Jumlah Denda </th>
 <?php
            echo "<th align=center>".$jumlah."</th>";
?>

</table>