<?php if (!empty($tersimpan)) {
  $youtube = $tersimpan[0]->KONF_VIDEO_LINK;
  $status = $tersimpan[0]->KONF_VIDEO_STATUS;
} else {
  $youtube = '';
  $status = '';
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Video Prewedding</h1>
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
          <form action="video/simpan" method="post">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="checkbox" name="my-checkbox_status" data-bootstrap-switch <?php if ($status == "on") {
                                                                                            echo "checked";
                                                                                          } else {
                                                                                            echo "";
                                                                                          } ?>>
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Link Youtube</label>
                  <input type="text" class="form-control" name="youtube" value="<?php echo $youtube; ?>">
                  <small class="text-muted">Contoh : https://www.youtube.com/watch?v=XRuDQ6aYeD0</small>
                </div>
                <!-- /.form-group -->
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