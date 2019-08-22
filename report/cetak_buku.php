<?php
ob_start();
require_once('../config/+koneksi.php');
require_once('../models/database.php');
include "../models/m_crud.php";
$connection = new Database($host, $user, $pass, $database);
$bk = new Buku($connection);
?>
<style type="css/text">
.tabel { border-collapse:collapse; }
.tabel th { padding:5px 0px; background-color:#f60; color:#fff; }
.tabel td { padding: 0px; }
img { width:50px; }
</style>


	<div style="padding:4mm; border:1px solid; background-color:#f60; color:#fff;" align="center">
		<span style="font-size:25px;">Laporan Data Buku</span>
	</div>
	<div style="padding:20px 0 10px 0; font-size:15px;">
	
	</div>
<div class="table-responsive">
	<table border="1px" class="tabel">
	    <tr align="center">
                <th rowspan="2">Judul</th>
                <th rowspan="2">Isbn</th>
                <th rowspan="2">Pengarang</th>
                <th rowspan="2">Penerbit</th>
                <th rowspan="2">Jumlah</th>
                <th colspan="3">Status Buku</th>
                <th rowspan="2">Th Terbit</th>
                
      </tr>
      <tr>
                <th>Baik</th>
                <th>Rusak</th>
                <th>Hilang</th>
              </tr>
<?php
        $no = 1;
          if(@$_GET['id_buku'] != '') {
            $tampil = $bk->tampil_buku(@$_GET['id_buku']);
          } else {
            if(@$_POST['cetak_book']) {
              $tampil = $bk->tampil_tgl(@$_POST['tgl_a'], @$_POST['tgl_b'] );
            } else {
              $tampil = $bk->tampil_buku();
            }
            
          }

          while ($data = $tampil->fetch_object()) {
            echo "<tr>";
            echo "<td align=center>".$data->judul."</td>";
            echo "<td align=center>".$data->isbn."</td>";
            echo "<td align=center>".$data->pengarang."</td>";
            echo "<td align=center>".$data->penerbit."</td>";
            echo "<td align=center>".$data->jumlah."</td>";
            echo "<td align=center>".$data->baik."</td>";
            echo "<td align=center>".$data->rusak."</td>";
            echo "<td align=center>".$data->hilang."</td>";
            echo "<td align=center>".$data->th_terbit."</td>";
            echo "</tr>";
            
          }
?>
</table>
</div>
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