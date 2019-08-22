<?php

$agt = new Anggota($connection);
?>


<div class="container">
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">

            <h1>Data Laporan Anggota <small></small></h1>
            <ol class="breadcrumb">

              <li><i class="icon-dashboard"></i> Tampil Data</a></li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
      <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped" id="datatables">
              <thead>
              <tr>
                <th>NO</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Username</th>
                <th>Password</th>
                <th>Status</th>
                <th>Tgl Publish</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $tampil = $agt->tampil_anggota();
                while($data = $tampil->fetch_object()) {
                ?>
                  <tr>
                  <td align="center"><?php echo $no++; ?></td>
                  <td align="center"><?php echo $data->nis; ?></td>
                  <td align="center"><?php echo $data->nm_lengkap; ?></td>
                  <td align="center"><?php echo $data->kelas; ?></td>
                  <td align="center"><?php echo $data->tempat_lahir; ?></td>
                  <td align="center"><?php echo $data->tanggal_lahir; ?></td>
                  <td align="center"><?php echo $data->jenis_kelamin; ?></td>
                  <td align="center"><?php echo $data->alamat; ?></td>
                  <td align="center"><?php echo $data->username; ?></td>
                  <td align="center"><?php echo $data->password; ?></td>
                  <td align="center"><?php echo $data->status; ?></td>
                  <td align="center"><?=date('d F Y', strtotime($data->tgl_publish)); ?></td>
                  <td align="center">
                    <a href="report/cetak_anggota.php?id_anggota=<?php echo $data->id_anggota; ?>" target="_blank">
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
          <button  class="btn btn-default" style="margin-bottom: 5px;"><i class="fa fa-print"></i>Cetak Anggota</button>
       <a href="report/export_excel_anggota.php" target="_blank">
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
        <form action="report/cetak_anggota.php" method="POST" target="_blank">
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
                  <input type="submit" name="cetak_gota" class="btn btn-primary btn-sm" value="Cetak">
              </td>
            </tr>
          </table>
          <div class="modal-footer">
            <a href="report/cetak_anggota.php" target="_blank" class="btn btn-primary btn-sm">Cetak Data
            </a>
          </div>
        </form>         
     </div>
   </div>
 </div>