<?php

$bk = new Buku($connection);
?>
  <div class="container">
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">

            <h1>Data Laporan Buku <small></small></h1>
 <ol class="breadcrumb">
              <li><a href=""><i class="icon-dashboard"></i> Tampil Data</a></li>
</ol>
      <div class="row">
          <div class="col-lg-12">
			<div class="table-responsive">
          <table class="table table-bordered table-hover table-striped" id="datatables">
              <thead>
              <tr>
                <th rowspan="2">NO</th>
                <th rowspan="2">Kode Buku</th>
                <th rowspan="2">Judul</th>
                <th rowspan="2">Isbn</th>
                <th rowspan="2">Pengarang</th>
                <th rowspan="2">Penerbit</th>
                <th rowspan="2">Halaman</th>
                <th rowspan="2">Jumlah</th>
                <th rowspan="2">Jumlah Pinjam</th>
                <th rowspan="2">Th Terbit</th>
                <th rowspan="2">Gambar</th>
                <th rowspan="2">Sinopsis</th>
                <th colspan="3"><center>Status Buku</center></th>
                <th rowspan="2">Tgl Publish</th>
                <th rowspan="2">Opsi</th>
              </tr>
               <tr>
                <th>Baik</th>
                <th>Rusak</th>
                <th>Hilang</th>
              </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $tampil = $bk->tampil_buku();
                while($data = $tampil->fetch_object()) {
                ?>
                  <tr>
                  <td align="center"><?php echo $no++; ?></td>
                  <td align="center"><?php echo $data->kd_buku; ?></td>
                  <td align="center"><?php echo $data->judul; ?></td>
                  <td align="center"><?php echo $data->isbn; ?></td>
                  <td align="center"><?php echo $data->pengarang; ?></td>
                  <td align="center"><?php echo $data->penerbit; ?></td>
                  <td align="center"><?php echo $data->halaman; ?></td>
                  <td align="center"><?php echo $data->jumlah; ?></td>
                  <td align="center"><?php echo $data->jmlbukupinjam; ?></td>
                  <td align="center"><?php echo $data->th_terbit; ?></td>
                  <td align="center">
                  	<img src="images/<?php echo $data->gambar; ?>" width="80px"></td>
                  <td align="center"><?php echo $data->sinopsis;?></td>
                  <td align="center"><?php echo $data->baik; ?></td>
                  <td align="center"><?php echo $data->rusak; ?></td>
                  <td align="center"><?php echo $data->hilang; ?></td>  
                  <td align="center"><?=date('d F Y', strtotime($data->tgl_publish)); ?></td>
                  <td align="center">
                    <a href="report/cetak_buku.php?id_buku=<?php echo $data->id_buku; ?>" target="_blank">
                    <button  class="btn btn-default btn-xs"><i class="fa fa-print"></i>Print</button>
                  </a>
                  </td>
              </tr>
              <?php

               } ?>
           </tbody>
          </table>
      </div>
    </div>
  </div>
       <a id="cetak_data" data-toggle="modal" data-target="#cetak" target="_blank">
          <button  class="btn btn-default" style="margin-bottom: 5px;"><i class="fa fa-print"></i>Cetak Buku</button>
       <a href="report/export_excel_buku.php" target="_blank">
          <button  class="btn btn-default" style="margin-bottom: 5px;"><i class="fa fa-print"></i>Export Excel</button>
      </a>

      <div id="cetak" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button> 
              <h4 class="modal-title">Cetak Data </h4>
      </div>
  <div class="modal-body">
        <form action="report/cetak_buku.php" method="POST" target="_blank">
          <table>
            <tr>  
              <td>
                <div class="form-group">Dari Tanggal</div>
              </td>
              <td align="center" width="5%">
                <div class="form-group">:</div>
              </td>
              <td>
                <div class="form-group">
                  <input type="date" class="form-control" name="tgl_a" required>
                </div>
              </td>
            </tr>
            <tr>  
              <td>
                <div class="form-group">Sampai Tanggal</div>
              </td>
              <td align="center" >
                <div class="form-group">:</div>
              </td>
              <td>
                <div class="form-group">
                  <input type="date" class="form-control" name="tgl_b" required>
                </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>
                  <input type="submit" name="cetak_book" class="btn btn-primary btn-sm" value="Cetak">
              </td>
            </tr>

          </table>
          <div class="modal-footer">
            <a href="report/cetak_buku.php" target="_blank" class="btn btn-primary btn-sm">Cetak Data
            </a>
          </div>
         </form>        
     </div>
   </div>
 </div>