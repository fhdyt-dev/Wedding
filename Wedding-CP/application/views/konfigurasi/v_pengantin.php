<?php if(!empty($tersimpan))
{
  $nama_lengkap_pria = $tersimpan[0]->KONF_PENGANTIN_PRIA_NAMA_LENGKAP;
  $nama_lengkap_wanita = $tersimpan[0]->KONF_PENGANTIN_WANITA_NAMA_LENGKAP;
  $nama_pria = $tersimpan[0]->KONF_PENGANTIN_PRIA_NAMA;
  $nama_wanita = $tersimpan[0]->KONF_PENGANTIN_WANITA_NAMA;
  $keterangan_pria = $tersimpan[0]->KONF_PENGANTIN_PRIA_KETERANGAN;
  $keterangan_wanita = $tersimpan[0]->KONF_PENGANTIN_WANITA_KETERANGAN;
  $foto_pria = $tersimpan[0]->KONF_PENGANTIN_PRIA_FOTO;
  $foto_wanita = $tersimpan[0]->KONF_PENGANTIN_WANITA_FOTO;
}
else{
  $nama_lengkap_pria = '';
  $nama_lengkap_wanita = '';
  $nama_pria = '';
  $nama_wanita = '';
  $keterangan_pria = '';
  $keterangan_wanita = '';
  $foto_pria = '';
  $foto_wanita = '';
}
 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pengantin</h1>
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
        <form action="pengantin/simpan" method="post">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-default color-palette-box">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-male"></i>
                  Pria
                </h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap_pria" value="<?php echo $nama_lengkap_pria; ?>" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Panggilan</label>
                    <input type="text" class="form-control" name="nama_pria" value="<?php echo $nama_pria; ?>" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <textarea class="form-control" rows="3" name="keterangan_pria"><?php echo $keterangan_pria; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Foto</label>
                    <input type="hidden" name="foto_pria" class="foto_pria" value="<?php echo $foto_pria; ?>">
                    <button type="button" nama_input="foto_pria" class="btn btn-primary btn-block btn_upload mb-2">Pilih Gambar</button>
                    <img height="50" src="<?php echo base_url(); ?>uploads/cover/<?php echo $foto_pria; ?>" class="img-fluid foto_pria" alt="foto tidak ada">
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-default color-palette-box">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-female"></i>
                  Wanita
                </h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap_wanita" value="<?php echo $nama_lengkap_wanita; ?>" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Panggilan</label>
                    <input type="text" class="form-control" name="nama_wanita" value="<?php echo $nama_wanita; ?>" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <textarea class="form-control" rows="3" name="keterangan_wanita"><?php echo $keterangan_wanita; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Foto</label>
                    <input type="hidden" name="foto_wanita" class="foto_wanita" value="<?php echo $foto_wanita; ?>">
                    <button type="button" nama_input="foto_wanita" class="btn btn-primary btn-block btn_upload mb-2">Pilih Gambar</button>
                    <img height="50" src="<?php echo base_url(); ?>uploads/cover/<?php echo $foto_wanita; ?>" class="img-fluid foto_wanita" alt="foto tidak ada">
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-secondary">Simpan</button>
      </form>
      </div>
      </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
