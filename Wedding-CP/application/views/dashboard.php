<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Selamat Datang</h1>
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
          <div class="input-group">
            <input type="text" class="form-control link_undangan" aria-label="Recipient's username" aria-describedby="button-addon2" value="https://<?php echo $this->session->userdata('USER_LINK'); ?>" disabled>
            <a href="https://<?php echo $this->session->userdata('USER_LINK'); ?>" class="ml-1 btn btn-outline-secondary" type="button" target="_blank">Buka</a>
            <button class="ml-1 btn btn-outline-secondary copy" type="button">Salin</button>
          </div>
          <small class="text-muted">Link undangan online anda.</small>

        </div>
        <!-- /.card-body -->
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
  function copyToClipboard(elem) {
    var $temp = $("<input>");
    //alert("Copied");
    $("body").append($temp);
    $temp.val(elem).select();
    document.execCommand("copy");
    $temp.remove();
  }

  $(".copy").on("click", function() {
    var elem = $(".link_undangan").val()
    Swal.fire('Berhasil', 'Link berhasil disalin', 'success')
    copyToClipboard(elem)
  })
</script>