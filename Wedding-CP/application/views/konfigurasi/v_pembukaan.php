<?php if(!empty($tersimpan))
{
  $judul = $tersimpan[0]->KONF_PEMBUKAAN_JUDUL;
  $isi = $tersimpan[0]->KONF_PEMBUKAAN_ISI;
  $sampul = $tersimpan[0]->KONF_PEMBUKAAN_SAMPUL;
  $gamba_sampul = $tersimpan[0]->KONF_PEMBUKAAN_GAMBAR;
}
else{
  $judul = '';
  $isi = '';
  $sampul = '';
  $gamba_sampul = '';
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
              <div class="col-md-6">
                <div class="form-group">
                  <label>Sampul</label>
                  <div class="icheck-primary">
                    <input type="radio" name="r2" id="radioDanger1" <?php if($sampul == "tema"){echo "checked";} else{echo "";} ?> value="tema">
                    <label for="radioDanger1">Warna Tema
                    </label>
                  </div>
                  <div class="icheck-primary">
                    <input type="radio" name="r2" id="radioDanger2" <?php if($sampul == "gambar"){echo "checked";} else{echo "";} ?> value="gambar">
                    <label for="radioDanger2">Gambar
                    </label>
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Gambar Sampul</label>
                  <input type="hidden" name="gamba_sampul" class="gamba_sampul" value="<?php echo $gamba_sampul; ?>">
                  <button type="button" nama_input="gamba_sampul" class="btn btn-primary btn-block btn_upload mb-2">Pilih Gambar</button>
                  <img height="50" src="<?php echo base_url(); ?>uploads/cover/<?php echo $gamba_sampul; ?>" class="img-fluid gamba_sampul" alt="foto tidak ada">
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
