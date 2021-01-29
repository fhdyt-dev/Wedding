<?php if(!empty($tersimpan))
{
  $link = $tersimpan[0]->KONF_LIVE_LINK;
  $platform = $tersimpan[0]->KONF_LIVE_PLATFORM;
  $status = $tersimpan[0]->KONF_LIVE_STATUS;
  $keterangan = $tersimpan[0]->KONF_LIVE_KETERANGAN;
}
else{
  $link = '';
  $platform = '';
  $status = '';
  $keterangan = '';
}
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Live Streaming</h1>
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
            <form action="live/simpan" method="post">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="checkbox" name="my-checkbox_status" data-bootstrap-switch <?php if($status == "on"){echo "checked";} else{echo "";} ?>>
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Platform</label>
                  <select class="custom-select rounded-0" name="platform" id="exampleSelectRounded0">
                    <option value="yt" <?php if($platform == "yt") {echo "selected";} else{}?>>Youtube Live</option>
                    <option value="fb" <?php if($platform == "fb") {echo "selected";} else{}?>>Facebook Live</option>
                    <option value="ig" <?php if($platform == "ig") {echo "selected";} else{}?>>Instragram Live</option>
                    <option value="zoom" <?php if($platform == "zoom") {echo "selected";} else{}?>>Zoom</option>
                    <option value="tiktok" <?php if($platform == "tiktok") {echo "selected";} else{}?>>Tiktok Live</option>
                    <option value="other" <?php if($platform == "other") {echo "selected";} else{}?>>Lainnya...</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Link Live Streaming</label>
                  <input type="text" class="form-control" name="link_live" value="<?php echo $link; ?>">
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" class="form-control" name="keterangan" value="<?php echo $keterangan; ?>">
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
