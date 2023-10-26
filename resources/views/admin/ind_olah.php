<?php
if (isset($_GET['id'])){
  $kode=$_GET['id'];
  extract(ArrayData($mysqli,"tb_index","id_index='$kode'"));
}
?>

<!-- Main content -->
<section class="content" style="margin-top: 10px;">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Olah Data Index</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" id="quickForm" action="ind_proses.php" method="post">

            <div class="card-body">

              <div class="form-group">
                <label for="nama">Kode Index</label>
                <input type="text" name="id_index" class="form-control" value="<?=@$id_index?>" placeholder="Inputkan Kode Index" required="" <?=isset($_GET['id'])?'readonly':'';?>>
              </div>

              <div class="form-group">
                <label for="nama">Keterangan</label>
               <input type="text" name="keterangan" class="form-control" value="<?=@$keterangan?>" placeholder="Inputkan Keterangan" required="">
              </div>

            </div>

            <!-- /.card-body -->
            <div class="card-footer">
              <input type="submit" name="<?=isset($_GET['id'])?'ubah':'tambah';?>" 
              class="btn btn-primary" value="Simpan">
              <a href="?hal=ind" class="btn btn-default">
                Batal
              </a>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!--/.col (left) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->