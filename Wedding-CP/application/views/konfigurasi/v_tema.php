<?php foreach ($font as $key) {
?>
  <link href="https://fonts.googleapis.com/css?family=<?php echo $key->FONT_KODE; ?>:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
<?php
} ?>

<?php if (!empty($tersimpan)) {
  $web_warna = $tersimpan[0]->KONF_WEB_WARNA;
  $web_font = $tersimpan[0]->KONF_WEB_FONT;
  $web_font_judul = $tersimpan[0]->KONF_WEB_FONT_JUDUL;
  $web_font_intro = $tersimpan[0]->KONF_WEB_FONT_INTRO;
  $web_sampul = $tersimpan[0]->KONF_WEB_SAMPUL;
  $web_judul = $tersimpan[0]->KONF_WEB_JUDUL;
  $web_ornamen = $tersimpan[0]->KONF_WEB_ORNAMEN;
} else {
  $web_warna = '';
  $web_font = '';
  $web_font_judul = '';
  $web_font_intro = '';
  $web_sampul = '';
  $web_judul = '';
  $web_ornamen = '';
}
?>

<style>
  select,
  option {
    font-size: 24px;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tema</h1>
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
          <form action="tema/simpan" method="post">
            <div class="row">
              <div class="col-md-12">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">Judul</h3>
                  </div>
                  <div class="card-body">
                    <input type="text" class="form-control" name="judul" value="<?php echo $web_judul; ?>" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">Warna</h3>
                  </div>
                  <div class="card-body">

                    <div class="form-group">
                      <div class="form-group clearfix">
                        <?php foreach ($warna as $key) {
                          $warna_select = substr($key->WARNA_KODE, 0, 7);
                          $warna_web2 = substr($web_warna, 0, 7);
                        ?>
                          <div class="icheck-primary d-inline mr-4 mb-2">
                            <input type="radio" id="<?php echo $key->WARNA_KODE ?>" name="warna" value="<?php echo $key->WARNA_KODE ?>" <?php
                                                                                                                                        if ($warna_select == $warna_web2) {
                                                                                                                                          echo "checked";
                                                                                                                                        } else {
                                                                                                                                          echo "";
                                                                                                                                        }

                                                                                                                                        ?>>
                            <label for="<?php echo $key->WARNA_KODE ?>">
                              <p style="font-size:25px"><i class="fas fa-square" style="color:<?php echo $key->WARNA_KODE ?>"></i></p>
                            </label>
                          </div>
                        <?php
                        } ?>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- /.form-group -->
              </div>
              <div class="col-md-12">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">Ornamen</h3>
                  </div>
                  <div class="card-body">

                    <div class="form-group">
                      <div class="form-group clearfix">
                        <?php foreach ($ornamen as $key) {
                        ?>
                          <div class="icheck-primary d-inline mr-4 mb-5">
                            <input type="radio" id="ornamen_<?php echo $key->ORNAMEN_INDEX ?>" name="ornamen" value="<?php echo $key->ORNAMEN_INDEX ?>" <?php
                                                                                                                                                        if ($web_ornamen == $key->ORNAMEN_INDEX) {
                                                                                                                                                          echo "checked";
                                                                                                                                                        } else {
                                                                                                                                                          echo "";
                                                                                                                                                        }

                                                                                                                                                        ?>>
                            <label for="ornamen_<?php echo $key->ORNAMEN_INDEX ?>">
                              <img height="40" src="<?php echo base_url(); ?>uploads/ornamen/<?php echo $key->ORNAMEN_INDEX ?>.png"></img>
                            </label>
                          </div>
                        <?php
                        } ?>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- /.form-group -->
              </div>
              <div class="col-md-4">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">Font Intro</h3>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <div class="form-group clearfix">
                        <select class="form-control" name="font_intro">
                          <?php foreach ($font as $key) {
                          ?>
                            <!-- <optgroup style="font-family:<?php echo $key->FONT_NAMA ?>;font-size:25px"> -->
                            <option <?php
                                    if ($key->FONT_NAMA == $web_font_intro) {
                                      echo "selected";
                                    } else {
                                      echo "";
                                    }
                                    ?> style="font-family:<?php echo $key->FONT_NAMA ?>"><?php echo $key->FONT_NAMA ?></option>
                            <!-- </optgroup> -->
                          <?php
                          } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- /.form-group -->
              </div>
              <div class="col-md-4">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">Font Judul</h3>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <div class="form-group clearfix">
                        <select class="form-control" name="font_judul">
                          <?php foreach ($font as $key) {
                          ?>
                            <option <?php
                                    if ($key->FONT_NAMA == $web_font_judul) {
                                      echo "selected";
                                    } else {
                                      echo "";
                                    }
                                    ?> style="font-family:<?php echo $key->FONT_NAMA ?>"><?php echo $key->FONT_NAMA ?></option>
                          <?php
                          } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- /.form-group -->
              </div>
              <div class="col-md-4">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">Font Website</h3>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <div class="form-group clearfix">
                        <select class="form-control" name="font">
                          <?php foreach ($font as $key) {
                          ?>
                            <option <?php
                                    if ($key->FONT_NAMA == $web_font) {
                                      echo "selected";
                                    } else {
                                      echo "";
                                    }
                                    ?> style="font-family:<?php echo $key->FONT_NAMA ?>"><?php echo $key->FONT_NAMA ?></option>
                          <?php
                          } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- /.form-group -->
              </div>
              <div class="col-md-12">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">Sampul Intro</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">

                        <input type="hidden" name="gambar" class="sampul_tema" value="<?php echo $web_sampul; ?>">
                        <button type="button" nama_input="sampul_tema" class="btn btn-primary btn-block btn_upload">Pilih Gambar</button>
                      </div>
                      <div class="col-md-6">
                        <img height="50" src="<?php echo base_url(); ?>uploads/cover/<?php echo $web_sampul; ?>" class="img-fluid sampul_tema" alt="foto tidak ada">
                      </div>
                    </div>
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