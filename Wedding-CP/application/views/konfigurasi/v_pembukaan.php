<?php if (!empty($tersimpan)) {
  $judul = $tersimpan[0]->KONF_PEMBUKAAN_JUDUL;
  $isi = $tersimpan[0]->KONF_PEMBUKAAN_ISI;
} else {
  $judul = '';
  $isi = '';
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pembukaan</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="card card-default color-palette-box">

        <div class="card-body">
          <form action="pembukaan/simpan" method="post">
            <div class="row">

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul" value="<?php echo $judul; ?>">
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Isi</label>
                    <textarea id="summernote" name="isi">
                    <?php echo $isi; ?>
                  </textarea>
                  </div>
                  <!-- /.form-group -->
                </div>
              </div>
              <!-- /.col -->
              <!-- /.col -->
            </div>
            <button type="submit" class="btn btn-secondary">Simpan</button>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->