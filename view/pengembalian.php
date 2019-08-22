<?php

$pm = new Peminjaman($connection);
if(@$_GET['act'] == '') {
?>

 <div class="container">
      <div id="page-wrapper">
  <div class="row">
          <div class="col-lg-12">
            <h1>Data Pengembalian <small></small></h1>
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
                <th>Tanggal Pinjam</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Kelas</th>
                <th>Lama Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Denda</th>
                <th>Status</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $tampil = $pm->tampil_pinjam();
                while($data = $tampil->fetch_object()) {
                ?>
                  <tr>
                  <td align="center"><?php echo $no++; ?></td>
                  <td align="center"><?php echo $data->tanggal_pinjam; ?></td>
                  <td align="center"><?php echo $data->nama; ?></td>
                  <td align="center"><?php echo $data->kategori; ?></td>
                  <td align="center"><?php echo $data->kelas; ?></td>
                  <td align="center"><?php echo $data->lama_pinjam; ?></td>
                  <td align="center"><?php echo $data->tanggal_kembali; ?></td>
                  <td align=center>Rp.<?php echo $data->denda;?></td>
                  <td align="center"><?php echo $data->status; ?></td>
                  <td>
                    <a id="editbs" data-toggle="modal" data-target="#edit" data-ide="<?php echo $data->id_pinjam; ?>" data-pinjam="<?php echo $data->tanggal_pinjam; ?>" data-kat="<?php echo $data->kategori; ?>" data-kls="<?php echo $data->kelas; ?>" data-lama="<?php echo $data->lama_pinjam; ?>" data-kembali="<?php echo $data->tanggal_kembali; ?>" data-denda="<?php echo $data->denda; ?>" data-status="<?php echo $data->status; ?>">
                   <button class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Kembali</button></a>
                    <a href="?page=pengembalian&act=del&id_pinjam=<?php echo $data->id_pinjam; ?>" onclick="return confirm('Yakin akan menghapus data ini? ')">
                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</button>
                  </a>
                  </td>
              </tr>
              <?php
               } ?>
           </tbody>
          </table>
</div>
 <div id="edit" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button> 
              <h4 class="modal-title">Pengembalian Buku</h4>
      </div>
<form id="form" enctype="multipart/form-data">
  <div class="modal-body" id="modal-edit">
    <div class="form-group">
                    <label class="control-label" for="tanggal_pinjam">Tanggal Pinjam</label>
                    <input type="hidden" name="id_pinjam" class="form-control" id="id_pinjam" required>
                    <input type="date" name="tanggal_pinjam" class="form-control" id="tanggal_pinjam" readonly="readonly">
    </div>
 <div class="form-group">
                    <label class="control-label" for="kategori">Kategori</label>
                   <input type="text" name="kategori" class="form-control" id="kategori" readonly="readonly">
    </div>
      <div class="form-group">
                    <label class="control-label" for="kelas">Kelas</label>
                    <input type="text" name="kelas" class="form-control" id="kelas" readonly="readonly">
          </div>
       <div class="form-group">
                    <label class="control-label" for="lama_pinjam">Lama Pinjam</label>
                    <input type="number" name="lama_pinjam" class="form-control" id="lama_pinjam" readonly="readonly">
    </div>
     <div class="form-group">
                    <label class="control-label" for="tanggal_kembali">Tanggal Kembali</label>
                    <input type="date" name="tanggal_kembali" class="form-control" id="tanggal_kembali" onChange='hitung()' required>
    </div>
     <div class="form-group">
                    <label class="control-label" for="denda">Denda</label>
                    <input type="text" name="denda" class="form-control" id="denda" readonly>
    </div>
    <div class="form-group">
                    <label class="control-label" for="status">Status</label>
                    <select name="status" class="form-control" id="status" required>
                                            <option value="1">Pinjam</option>
                                            <option value="0">Kembali</option>
                                            
                    </select>
          </div>
          <div class="modal-footer">
                      <input type="submit" class="btn btn-success" name="edit" value="simpan">
          </div>      
     </div>
   </form> 
</div>
</div>
</div>
</div>
   <script src="assets/js/jquery-1.10.2.js"></script>
    <script type="text/javascript">
    $(document).on("click", "#editbs", function(){
      var idpm = $(this).data('ide');
      var tglp = $(this).data('pinjam');
      var kl = $(this).data('kls');
      var lm = $(this).data('lama');
      var kate = $(this).data('kat');
      var km = $(this).data('kembali');
      var den = $(this).data('denda');
      var st = $(this).data('status');
      
      $("#modal-edit #id_pinjam").val(idpm);
      $("#modal-edit #tanggal_pinjam").val(tglp);
      $("#modal-edit #kelas").val(kl);
      $("#modal-edit #lama_pinjam").val(lm);
      $("#modal-edit #kategori").val(kate);
      $("#modal-edit #tanggal_kembali").val(km);
      $("#modal-edit #denda").val(den);
      $("#modal-edit #status").val(st);

      


    })

    $(document).ready(function(e){
      $("#form").on ("submit", (function(e) {
        e.preventDefault();
        $.ajax({
          url : 'models/proses_edit_pengembalian.php',
          type : 'POST',
          data : new FormData(this),
          contentType : false,
          cache : false,
          processData : false,
          success : function(msg) {
            $('.table').html(msg);
          }

        })

      }))

    })
    </script>

<?php
} else if(@$_GET['act'] == 'del') {
  $pm->hapus_pinjam($_GET['id_pinjam']); 
  header("location: ?page=pengembalian");
}

?>

<?php

?>
<script type="text/javascript">
  
function hitung(){

  var pinjam = $('#tanggal_pinjam').val();
  var kmbali = $('#tanggal_kembali').val();
  var tgl_pinjam = pinjam.split('-');
  var tgl_kembali = kmbali.split('-');
  var tgl = new Date();
  var tgl_pinjam_leave = tgl.setFullYear(tgl_pinjam[0],tgl_pinjam[1],tgl_pinjam[2]);
  var data_pinjam =(tgl_pinjam_leave / (60*60*24*1000)) + parseInt($('#lama_pinjam').val());
  var tgl_kembali_leave = tgl.setFullYear(tgl_kembali[0],tgl_kembali[1],tgl_kembali[2]);
  var data_kembali = (tgl_kembali_leave / (60*60*24*1000));
  var hasil = data_kembali - data_pinjam;
  var hasil = data_kembali - data_pinjam;
  if(hasil < 0)hasil=0;
  var hasil = hasil * 500;
  $('#denda').val(hasil);

}

</script>