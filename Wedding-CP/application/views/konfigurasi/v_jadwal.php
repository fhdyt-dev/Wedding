<style>

#map {
  width: 100%;
  height: 100%;
  z-index:100;
}
#mapSearchContainer{
  position:fixed;
  top:20px;
  right: 40px;
  height:30px;
  width:180px;
  z-index:110;
  font-size:10pt;
  color:#5d5d5d;
  border:solid 1px #bbb;
  background-color:#f8f8f8;
}
.pointer{
  position:absolute;
  top:86px;
  left:60px;
  z-index:99999;
}
</style>

<?php if(!empty($tersimpan))
{
  //$nama_lengkap_pria = $tersimpan[0]->KONF_PENGANTIN_PRIA_NAMA_LENGKAP;
  $acara1_status = $tersimpan[0]->KONF_JADWAL_ACARA1_STATUS;
  $acara1_judul = $tersimpan[0]->KONF_JADWAL_ACARA1_JUDUL;
  $acara1_tanggal = $tersimpan[0]->KONF_JADWAL_ACARA1_TANGGAL;
  $acara1_alamat = $tersimpan[0]->KONF_JADWAL_ACARA1_ALAMAT;

  $acara2_status = $tersimpan[0]->KONF_JADWAL_ACARA2_STATUS;
  $acara2_judul =$tersimpan[0]->KONF_JADWAL_ACARA2_JUDUL;
  $acara2_tanggal =$tersimpan[0]->KONF_JADWAL_ACARA2_TANGGAL;
  $acara2_alamat = $tersimpan[0]->KONF_JADWAL_ACARA2_ALAMAT;
  $acaraintro = $tersimpan[0]->KONF_JADWAL_INTRO;
}
else{
  $acara1_status = "";
  $acara1_judul = "";
  $acara1_tanggal = "";
  $acara1_alamat = "";

  $acara2_status = "";
  $acara2_judul = "";
  $acara2_tanggal = "";
  $acara2_alamat = "";
  $acaraintro = "";
}
 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Jadwal</h1>
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
        <form action="jadwal/simpan" method="post">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-default color-palette-box">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-calendar-alt"></i>
                  Acara Pertama
                </h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                    <input type="checkbox" name="my-checkbox_acara_1" data-bootstrap-switch <?php if($acara1_status == "on"){echo "checked";} else{echo "";} ?>>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul Acara</label>
                    <input type="text" class="form-control" name="judul_acara1" value="<?php echo $acara1_judul; ?>" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Acara</label>
                    <input type="date" class="form-control" name="tanggal_acara1" value="<?php echo $acara1_tanggal; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <textarea class="form-control" rows="3" name="alamat_acara1"><?php echo $acara1_alamat; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Lokasi</label>
                    <div id="map"></div>
                    <div class='pointer'><< Klik Untuk Mencari</div>
                </div>
                <div class="form-group">
                  <div class="form-group clearfix">
                    <label for="exampleInputEmail1">Tampilkan di Intro</label>
                    <div class="icheck-primary">
                      <input type="radio" name="r2" id="radioDanger1" <?php if($acaraintro == "acara1"){echo "checked";} else{echo "";} ?> value="acara1">
                      <label for="radioDanger1">
                      </label>
                    </div>

                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-default color-palette-box">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-calendar-alt"></i>
                  Acara Kedua
                </h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                    <input type="checkbox" name="my-checkbox_acara_2" data-bootstrap-switch <?php if($acara2_status == "on"){echo "checked";} else{echo "";} ?>>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul Acara</label>
                    <input type="text" class="form-control" name="judul_acara2" value="<?php echo $acara2_judul; ?>" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Acara</label>
                    <input type="date" class="form-control" name="tanggal_acara2" value="<?php echo $acara2_tanggal; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <textarea class="form-control" rows="3" name="alamat_acara2"><?php echo $acara2_alamat; ?></textarea>
                </div>
                <div class="form-group">
                  <div class="form-group clearfix">
                    <label for="exampleInputEmail1">Tampilkan di Intro</label>
                    <div class="icheck-primary">
                      <input type="radio" name="r2" id="radioDanger2" <?php if($acaraintro == "acara2"){echo "checked";} else{echo "";} ?> value="acara2">
                      <label for="radioDanger2">
                      </label>
                    </div>
                  </div>
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

  <script type="text/javascript">
  // Initialize the map and assign it to a variable for later use
var map = L.map('map', {
  // Set latitude and longitude of the map center (required)
  center: [37.7833, -122.4167],
  // Set the initial zoom level, values 0-18, where 0 is most zoomed-out (required)
  zoom: 10
});

L.control.scale().addTo(map);

// Create a Tile Layer and add it to the map
//var tiles = new L.tileLayer('http://{s}.tile.stamen.com/watercolor/{z}/{x}/{y}.png').addTo(map);
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var searchControl = new L.esri.Controls.Geosearch().addTo(map);

var results = new L.LayerGroup().addTo(map);

searchControl.on('results', function(data){
  results.clearLayers();
  for (var i = data.results.length - 1; i >= 0; i--) {
    results.addLayer(L.marker(data.results[i].latlng));
  }
});

setTimeout(function(){$('.pointer').fadeOut('slow');},3400);
  </script>
