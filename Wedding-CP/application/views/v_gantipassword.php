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
          <h1 class="m-0">Ganti Password</h1>
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
          <form action="gantipassword/proses" method="post">
            <div class="row">
              <div class="col-md-12">
                <?php
                if ($this->session->flashdata('error') != '') {
                  echo '<div class="alert alert-danger" role="alert">';
                  echo $this->session->flashdata('error');
                  echo '</div>';
                }

                if ($this->session->flashdata('error_change_password') != '') {
                  echo '<div class="alert alert-danger" role="alert">';
                  echo $this->session->flashdata('error_change_password');
                  echo '</div>';
                }
                ?>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Password Lama</label>
                  <input type="text" class="form-control" name="password_lama">
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Passsword Baru</label>
                  <input type="text" class="form-control password_baru" name="password_baru" onkeyup="check_password()">
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Konfirmasi Password Baru</label>
                  <input type="text" class="form-control" name="konfirmasi_password_baru" id="konfirmasi_password_baru" onkeyup="check_password()">
                  <div id="validationServer03Feedback" class="invalid-feedback">
                    Password tidak sesuai.
                  </div>
                  <div class="valid-feedback">
                    Password Sesuai.
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <!-- /.col -->
            </div>
            <button type="submit" class="btn btn-secondary change_password">Simpan</button>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
  function check_password() {
    var password = $('.password_baru').val()
    var password_confirm = $('#konfirmasi_password_baru').val()
    if (password == password_confirm) {
      console.log("Sukses")
      $('.change_password').attr('disabled', false)
      $('#konfirmasi_password_baru').attr('class', 'form-control is-valid')

    } else {
      console.log("Password tidak sama")
      $('.change_password').attr('disabled', true)
      $('#konfirmasi_password_baru').attr('class', 'form-control is-invalid')
    }
  }
</script>