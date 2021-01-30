<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pesan (RSVP)</h1>
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
          <blockquote class="blockquote">Klik <a class="btn btn-primary btn-sm"><i class="fas fa-check"></i></a> untuk mengganti status <strong>Pesan</strong>, ditampilkan pada Web Anda atau tidak.</blockquote>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Pesan</th>
                <th>Status</th>
              </tr>
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
        <!-- /.card-body -->
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
  $(function() {
    pesan_list();
  });

  function pesan_list() {
    $.ajax({
      type: 'ajax',
      url: "<?php echo base_url() ?>index.php/konfigurasi/pesan/list",
      async: false,
      dataType: 'json',
      success: function(data) {
        $("tbody#zone_data").empty();
        if (data.length === 0) {} else {
          var no = 1
          for (i = 0; i < data.length; i++) {
            if (data[i].RSVP_KEHADIRAN == "tidak") {
              var tr = "table-danger"
              var status_kehadiran = "Tidak Dapat Hadir"
            } else {
              var tr = "table-success"
              var status_kehadiran = "Akan Hadir"
            }
            if (data[i].RSVP_STATUS == "show") {
              var status = "<figcaption class='blockquote-footer'>Pesan ini ditampilkan di Web Anda.</figcaption>"
            } else {
              var status = ""
            }
            $("tbody#zone_data").append("<tr class='" + tr + "'>" +
              "<td>" + no++ + ".</td>" +
              "<td>" + data[i].RSVP_NAMA + "</td>" +
              "<td><small class='text-muted'>" + data[i].RSVP_TANGGAL + "</small><br>" + data[i].RSVP_PESAN + "" + status + "</td>" +
              "<td>" + status_kehadiran + "</td>" +
              "<td><a class='btn btn-primary btn-sm' onclick='status(\"" + data[i].RSVP_INDEX + "\")'><i class='fas fa-check'></i></a></td>" +
              "</tr>");
          }
        }
      },
      error: function(x, e) {
        console.log("Gagal")
      }
    });
  }

  function status(id) {
    if (confirm("Ganti status pesan ?")) {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>index.php/konfigurasi/pesan/status/' + id,
        async: false,
        dataType: 'json',
        success: function(data) {
          if (data.length === 0) {} else {
            pesan_list();
          }
        },
        error: function(x, e) {
          alert("Gagal Menghapus")
        } //end error
      });
    }
  }
</script>