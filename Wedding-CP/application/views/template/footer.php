<div class="modal fade" id="uploadModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Album Gambar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="submit">
        <div class="row">
          <div class="col-md-10">
            <input type="hidden" class="form-control nama_input">
            <input type="file" name="userfile" class="form-control">
          </div>
          <div class="col-md-2">
            <button type="submit" class="btn btn-primary upload_gambar">Upload</button>
            </form>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12 image_list">
            <!-- <img src="<?php echo base_url() ?>uploads/cover/ebc31d486420ef43d1bf9fe3e748b3711ca76ac9.jpg" width="200" height="121" class="img-thumbnail" alt="...">
            <img src="<?php echo base_url() ?>uploads/cover/f7a998df0829e873fc480fa4999b9932de93305c.png" width="200" height="121" class="img-thumbnail" alt="...">
            <img src="<?php echo base_url() ?>uploads/cover/not_found.jpg" width="200" height="121" class="img-thumbnail" alt="..."> -->
          </div>
        </div>

        <!-- <label class="custom-file-label" for="customFile">Pilih file gambar</label> -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->



</body>
<script>
$(".btn_upload").on("click", function(){
  $(".nama_input").val($(this).attr("nama_input"))
  list()
  $("#uploadModal").modal("show")
})
$('#submit').submit(function(e){
  e.preventDefault();
  $.ajax({
     url:'<?php echo base_url();?>index.php/upload/simpan',
     type:"post",
     data:new FormData(this),
     processData:false,
     contentType:false,
     cache:false,
     async:false,
      success: function(data){
      list();
   }
  });
})

function list()
{
	$.ajax({
		type  : 'ajax',
		url   : "<?php echo base_url() ?>index.php/upload/list",
		async : false,
		dataType : 'json',
		success : function(data)
		{
      $('.image_list').empty();
			if (data.length === 0)
			{
			}
			else
			{
				console.log(data)
        $.each(data, function(i) {
        var result =  '<a class="pilih_gambar" gambar="'+data[i].ALBUM_USER_FOTO+'"><img src="<?php echo base_url() ?>uploads/cover/'+data[i].ALBUM_USER_FOTO+'" width="200" height="121" class="img-thumbnail mr-2 mb-2" alt="..."></a>'
		    $('.image_list').append(result);
      })
    }
		},
    error: function(x, e) {
      console.log("Gagal")
    } //end error
	});
}

$("div.image_list").on('click','a.pilih_gambar', function(){
  var gambar = $(this).attr('gambar');
  var nama_input = $(".nama_input").val()
  $("."+nama_input+"").val(gambar)
  $("img."+nama_input+"").attr("src", "<?php echo base_url(); ?>uploads/cover/"+gambar+"")
  $("#uploadModal").modal("hide")
})

$("input[data-bootstrap-switch]").each(function(){
  $(this).bootstrapSwitch('state', $(this).prop('checked'));
});
$(function () {
  //Initialize Select2 Elements
  $('.select2').select2()
  $('.select2bs4').select2({
    theme: 'bootstrap4'
  })

  // Summernote
  $('#summernote').summernote({
    height: 200,   //set editable area's height
    codemirror: { // codemirror options
      theme: 'monokai'
    }
  })

  $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
  $('[data-mask]').inputmask()


  // CodeMirror
  CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
    mode: "htmlmixed",
    theme: "monokai"
  });
})
</script>

</html>
