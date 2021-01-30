<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Album Gambar</h1>
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
          <form id="submit_album">
            <div class="row">
              <div class="col-md-10">
                <input type="hidden" class="form-control nama_input">
                <input type="file" name="userfile" class="form-control">
              </div>
              <div class="col-md-2">
                <button type="submit" class="btn btn-primary upload_gambar">Upload</button>
              </div>
            </div>
          </form>
          <hr>
          <blockquote class="blockquote">Klik <a class="btn btn-primary btn-sm"><i class="fas fa-check"></i></a> untuk mengganti status <strong>Gambar</strong>, ditampilkan pada Web Anda atau tidak.</blockquote>

          <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered">
                <thead>
                  <th>No.</th>
                  <th>Gambar</th>
                  <th></th>
                </thead>
                <tbody id="zone_data">
                  <tr>
                    <td colspan="9">
                      <center>
                        <div class="loader"></div>
                      </center>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>
        <!-- /.card-body -->
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
  $(function() {
    foto_list();
  });

  function foto_list() {
    $.ajax({
      type: 'ajax',
      url: "<?php echo base_url() ?>index.php/upload/list",
      async: false,
      dataType: 'json',
      success: function(data) {
        $("tbody#zone_data").empty();
        if (data.length === 0) {} else {
          var no = 1
          for (i = 0; i < data.length; i++) {
            if (data[i].ALBUM_USER_GALERI_STATUS == "show") {
              var tr = "table-success"
              var status = "<figcaption class='blockquote-footer'>Foto ini telah ditampilkan pada Galeri Prewed Web anda.</figcaption>"
            } else {
              var tr = ""
              var status = ""
            }
            $("tbody#zone_data").append("<tr class='" + tr + "'>" +
              "<td>" + no++ + ". </td>" +
              "<td><img height='100' src='<?php echo base_url() ?>uploads/cover/" + data[i].ALBUM_USER_FOTO + "' alt=''>" + status + "</td>" +
              "<td><a class='btn btn-danger btn-sm' onclick='hapus(\"" + data[i].ALBUM_USER_INDEX + "\")'><i class='fas fa-trash'></i></a>" +
              " <a class='btn btn-primary btn-sm' onclick='galeri(\"" + data[i].ALBUM_USER_INDEX + "\")'><i class='fas fa-check'></i></a></td>" +
              "</tr>");
          }
        }
      },
      error: function(x, e) {
        console.log("Gagal")
      }
    });
  }



  $('#submit_album').submit(function(e) {
    e.preventDefault();
    $.ajax({
      url: '<?php echo base_url(); ?>index.php/upload/simpan',
      type: "post",
      data: new FormData(this),
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      success: function(data) {
        foto_list();
      }
    });
  })

  function hapus(id) {
    if (confirm("Hapus gambar ?")) {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>index.php/upload/hapus/' + id,
        async: false,
        dataType: 'json',
        success: function(data) {
          if (data.length === 0) {} else {
            foto_list();
          }
        },
        error: function(x, e) {
          alert("Gagal Menghapus")
        } //end error
      });
    }
  }

  function galeri(id) {
    if (confirm("Ganti status gambar ?")) {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>index.php/upload/galeri/' + id,
        async: false,
        dataType: 'json',
        success: function(data) {
          if (data.length === 0) {} else {
            foto_list();
          }
        },
        error: function(x, e) {
          alert("Gagal Menghapus")
        } //end error
      });
    }
  }
</script>