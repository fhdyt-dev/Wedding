<?php if (!empty($tersimpan)) {
  $musik = $tersimpan[0]->KONF_MUSIK;
  $status = $tersimpan[0]->KONF_MUSIK_STATUS;
} else {
  $musik = '';
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
          <h1 class="m-0">Musik</h1>
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
          <form action="musik/simpan" method="post">
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
                  <label>Daftar Musik</label>
                  <select class="form-control" name="musik">
                    <?php foreach ($musik_list as $key) {
                    ?>
                      <option value="<?php echo $key->MUSIK; ?>" <?php
                                                                  if ($key->MUSIK == $musik) {
                                                                    echo "selected";
                                                                  } else {
                                                                    echo "";
                                                                  }
                                                                  ?>><?php echo $key->MUSIK_NAMA; ?></option>
                    <?php
                    } ?>
                  </select>
                  <small class="text-muted">Silahkan hubungi admin jika ada ingin menambahkan lagu yang tidak terdaftar dilist.</small>
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