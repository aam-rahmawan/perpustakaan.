<?php
ob_start();
require_once('../config/+koneksi.php');
require_once('../models/database.php');
include "../models/m_crud.php";
$connection = new Database($host, $user, $pass, $database);
$agt = new Anggota($connection);
?>
<style type="css/text">
.tabel { border-collapse:collapse; }
.tabel th { padding:8px 5px; background-color:#f60; color:#fff; }
.tabel td { padding: 3px; }
img { width:70px; }
</style>


	<div style="padding:4mm; border:1px solid; background-color:#f60; color:#fff;"  align="center" >
		<span style="font-size:25px;">Laporan Data Anggota</span>
	</div>
	<div style="padding:20px 0 10px 0; font-size:15px;">
	
	</div>
	<table border="1px" class="tabel">
	    <tr>
                <th align="center">No</th>
                <th align="center">Nis</th>
                <th align="center">Nama</th>
                <th align="center">Kelas</th>
                <th align="center">Tempat Lahir</th>
                <th align="center">Tanggal Lahir</th>
                <th align="center">Jenis Kelamin</th>
                <th align="center">Alamat</th>
      </tr>
<?php
          $no = 1;
          if(@$_GET['id_anggota'] != '') {
            $tampil = $agt->tampil_anggota(@$_GET['id_anggota']);
          } else {
            if(@$_POST['cetak_gota']) {
              $tampil = $agt->tampil_tgl(@$_POST['tgl_a'], @$_POST['tgl_b'] );
            } else {
              $tampil = $agt->tampil_anggota();
            }
            
          }
          while ($data = $tampil->fetch_object()) {
          	echo "<tr>";
          	echo "<td>".$no++."</td>";
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
<?php
$content = ob_get_contents();
ob_end_clean();
require_once('../assets/html2pdf/html2pdf.class.php');
$html2pdf = new HTML2PDF('L','A4','en');
$html2pdf->WriteHTML($content);
$html2pdf->Output('exemple.pdf');
?>

<script type="text/javascript">
  $ git clone git://github.com/mozilla/pdf.js.git
  $ cd pdf.js
</script>