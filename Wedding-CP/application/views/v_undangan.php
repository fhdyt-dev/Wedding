<div class="modal fade" id="undanganModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="submit">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kepada</label>
                        <input type="text" class="form-control" name="kepada" value="" autocomplete="off">
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Undangan Spesial</h1>
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
                    <button type="button" class="btn btn-default btn_udangan mb-2">Tambah Undangan</button>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kepada</th>
                                <th>Link</th>
                                <th></th>
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
        undangan_list()
    })

    $(".btn_udangan").on("click", function() {
        $("#undanganModal").modal("show")
    })
    $(function() {
        undangan_list();
    });

    function undangan_list() {
        $.ajax({
            type: 'ajax',
            url: "<?php echo base_url() ?>index.php/undangan/list",
            async: false,
            dataType: 'json',
            success: function(data) {
                $("tbody#zone_data").empty();
                if (data.length === 0) {} else {
                    var no = 1
                    for (i = 0; i < data.length; i++) {
                        var link = "https://" + data[i].LINK + "/" + data[i].UNDANGAN_LINK + ""
                        $("tbody#zone_data").append("<tr>" +
                            "<td>" + no++ + ".</td>" +
                            "<td>" + data[i].UNDANGAN_KEPADA + "</td>" +
                            "<td><a href='" + link + "' target='_blank'>" + link + "</a></td>" +
                            "<td><a class='btn btn-success btn-sm copy_link' link=" + link + ">Salin Link</a> " +
                            "<a class='btn btn-danger btn-sm' onclick='hapus(\"" + data[i].UNDANGAN_INDEX + "\")'><i class='fas fa-trash'></i></a></td>" +
                            "</tr>");
                    }
                }
            },
            error: function(x, e) {
                console.log("Gagal")
            }
        });
    }

    $('#submit').submit(function(e) {
        $.ajax({
            url: '<?php echo base_url(); ?>index.php/undangan/simpan',
            type: "post",
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            success: function(data) {
                undangan_list();
                Swal.fire('Berhasil', 'Undangan berhasil ditambahkan', 'success')
                $("#undanganModal").modal("hide")
            }
        });
    })

    function copyToClipboard(elem) {
        var $temp = $("<input>");
        //alert("Copied");
        $("body").append($temp);
        $temp.val(elem).select();
        document.execCommand("copy");
        $temp.remove();
    }

    $("tbody#zone_data").on("click", "a.copy_link", function() {
        var elem = $(this).attr("link")
        Swal.fire('Berhasil', 'Link berhasil disalin', 'success')
        copyToClipboard(elem)
    })

    // function hapus(id) {
    //     if (confirm("Hapus undangan ?")) {
    //         $.ajax({
    //             type: 'ajax',
    //             url: '<?php echo base_url() ?>index.php/undangan/hapus/' + id,
    //             async: false,
    //             dataType: 'json',
    //             success: function(data) {
    //                 if (data.length === 0) {} else {
    //                     undangan_list();
    //                 }
    //             },
    //             error: function(x, e) {
    //                 alert("Gagal Menghapus")
    //             } //end error
    //         });
    //     }
    // }

    function hapus(id) {
        Swal.fire({
            title: 'Hapus undangan ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: `Hapus`,
            denyButtonText: `Batal`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                $.ajax({
                    type: 'ajax',
                    url: '<?php echo base_url() ?>index.php/undangan/hapus/' + id,
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        if (data.length === 0) {} else {
                            undangan_list();
                            Swal.fire('Terhapus!', 'Undangan telah terhapus', 'success')
                        }
                    },
                    error: function(x, e) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Proses Gagal'
                        })
                    } //end error
                });

            }
        })
    }
</script>