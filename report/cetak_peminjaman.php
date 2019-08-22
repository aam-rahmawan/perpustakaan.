<?php
ob_start();
require_once('../config/+koneksi.php');
require_once('../models/database.php');
include "../models/m_crud.php";
$connection = new Database($host, $user, $pass, $database);
$pm = new Peminjaman($connection);
?>
<style type="css/text">
.tabel { border-collapse:collapse; }
.tabel th { padding:5px 0px; background-color:#f60; color:#fff; }
.tabel td { padding: 0px; }
img { width:50px; }
</style>


	<div style="padding:4mm; border:1px solid; background-color:#f60; color:#fff;" align="center">
		<span style="font-size:25px;">Laporan Data Peminjaman</span>
	</div>
	<div style="padding:20px 0 10px 0; font-size:15px;">
	
	</div>
<div class="table-responsive">
	<table border="1px" class="tabel">
	    <tr align="center">
                <th>Tanggal Pinjam</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Kelas</th>
                <th>Lama Pinjam</th>
                
      </tr>
<?php
        $no = 1;
          if(@$_GET['id_pinjam'] != '') {
            $tampil = $pm->tampil_pinjam(@$_GET['id_pinjam']);
          } else {
            if(@$_POST['cetak_pinjam']) {
              $tampil = $pm->tampil_tgl(@$_POST['tgl_a'], @$_POST['tgl_b'] );
            } else {
              $tampil = $pm->tampil_pinjam();
            }
            
          }

          while ($data = $tampil->fetch_object()) {
            echo "<tr>";
            echo "<td align=center>".$data->tanggal_pinjam."</td>";
            echo "<td align=center>".$data->nama."</td>";
            echo "<td align=center>".$data->kategori."</td>";
            echo "<td align=center>".$data->kelas."</td>";
            echo "<td align=center>".$data->lama_pinjam."</td>";
            echo "</tr>";
            
          }
?>
</table>
</div>
<?php
$content = ob_get_contents();
ob_end_clean();
require_once('../assets/html2pdf/html2pdf.class.php');
$html2pdf = new HTML2PDF('P','A4','en');
$html2pdf->WriteHTML($content);
$html2pdf->Output('exemple.pdf');
?>

<script type="text/javascript">
  $ git clone git://github.com/mozilla/pdf.js.git
  $ cd pdf.js
</script>