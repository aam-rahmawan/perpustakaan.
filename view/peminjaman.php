<?php

$pm = new Peminjaman($connection);
if(@$_GET['act'] == '') {
?>
 <div class="container">
      <div id="page-wrapper">
  <div class="row">
          <div class="col-lg-12">
            <h1>Data Peminjaman <small></small></h1>
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
                  <td align="center"><?php echo $data->status; ?></td>
                  <td>
                    <a id="editbs" data-toggle="modal" data-target="#edit" data-ide="<?php echo $data->id_pinjam; ?>" data-pinjam="<?php echo $data->tanggal_pinjam; ?>" data-kat="<?php echo $data->kategori; ?>" data-kls="<?php echo $data->kelas; ?>" data-lama="<?php echo $data->lama_pinjam; ?>">
                   <button class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit</button></a>
                    <a href="?page=peminjaman&act=del&id_pinjam=<?php echo $data->id_pinjam; ?>" onclick="return confirm('Yakin akan menghapus data ini? ')">
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
              <h4 class="modal-title">Edit Data Baru</h4>
      </div>
<form id="form" enctype="multipart/form-data">
  <div class="modal-body" id="modal-edit">
    <div class="form-group">
                    <label class="control-label" for="tanggal_pinjam">Tanggal Pinjam</label>
                    <input type="hidden" name="id_pinjam" class="form-control" id="id_pinjam" required>
                    <input type="date" name="tanggal_pinjam" class="form-control" id="tanggal_pinjam" required>
    </div>
 <div class="form-group">
                    <label class="control-label" for="kategori">Kategori</label>
                    <?php
                    $qry = "SELECT sinopsis, sinopsis FROM buku ";
                    echo cmbQuery('kategori','', $qry,'');
                    ?>
    </div>
      <div class="form-group">
                    <label class="control-label" for="kelas">Kelas</label>
                    <select name="kelas" class="form-control" id="kelas" required>
                                            <option>Pilih Salah Satu</option>
                                            <option value="VII">VII</option>
                                            <option value="VIII">VIII</option>
                                            <option value="IX">IX</option>
                    </select>
          </div>
       <div class="form-group">
                    <label class="control-label" for="lama_pinjam">Lama Pinjam</label>
                    <input type="number" name="lama_pinjam" class="form-control" id="lama_pinjam" required>
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

      $("#modal-edit #id_pinjam").val(idpm);
      $("#modal-edit #tanggal_pinjam").val(tglp);
      $("#modal-edit #kelas").val(kl);
      $("#modal-edit #lama_pinjam").val(lm);
      $("#modal-edit #kategori").val(kate);
      


    })

    $(document).ready(function(e){
      $("#form").on ("submit", (function(e) {
        e.preventDefault();
        $.ajax({
          url : 'models/proses_edit_peminjaman.php',
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
  header("location: ?page=peminjaman");
}

?>