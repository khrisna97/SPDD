<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SPD DISKOMINFO</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <script type="text/javascript" src="<?php echo base_url()?>assets/myJS.js"></script>

  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/iCheck/square/blue.css">
  <!-- iCheck -->
  <script src="<?php echo base_url()?>assets/plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
  <script>
    function hanyaAngka(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
  }
  </script>

  <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

  <!-- jQuery 3 -->
  <script src="<?php echo base_url()?>assets/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url()?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url()?>assets/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url()?>assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_url()?>assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url()?>assets/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
  <!-- page script -->
  <script>
    $(function () {
      $('#example1').DataTable({
        'scrollX'     : true
      })
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'scrollX'     : true,
        'autoWidth'   : true
      })
    })
  </script>
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('admin/dashboard'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">SPD</span>

      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SPD</b>DISKOMINFO</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <i class="fa fa-user" style="font-size:15px;"></i>&nbsp;
              <b><span class="hidden-xs" style="font-size:15px;"><?php echo $this->session->userdata("nama"); ?></span></b>&nbsp;<i class="fa fa-angle-down" style="font-size:15px;"></i>
            </a>
            <ul class="dropdown-menu" style="width:10px;">
              <li>
                <a href="<?php echo base_url('keluar'); ?>" class="btn btn-flat bg-blue margin" style="margin:5px 5px 5px 5px;"><i class="fa fa-power-off"></i>Keluar</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navigasi Menu</li>
        <li class="active">
          <a href="<?php echo base_url('admin/suratMasuk'); ?>">
            <i class="fa fa-envelope-o"></i>
            <span>Surat Perintah Dinas</span>
          </a>
        </li>
      </ul>
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="<?php echo base_url('admin/t_user'); ?>">
            <i class="glyphicon glyphicon-user"></i>
            <span>Tambah User</span>
          </a>
        </li>
          
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SPD
        <small>Surat Perintah Dinas</small>
      </h1>
      <ol class="breadcrumb">
        <span id="date_time" style="font-size:15px;"></span>
        <script type="text/javascript">window.onload = date_time('date_time');</script><br>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">

              <?php echo $this->session->flashdata('notisSM');?>
            </div>

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                <tr style="width: 100%">
                  <th>No SPD</th>
                  <th style="width:10%">Program</th>
                  <th style="width:10%">Kegiatan</th>
                  <th>Kode Rekening</th>
                  <th style="width:70px">TGL Berangkat</th>
                  <th style="width:70px">TGL Kembali</th>
                  <th>Jumlah Orang</th>
                  <th>Uang Harian</th>
                  <th>Uang Transport</th>
                  <th>Status</th>
                  <th style="width:12%">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    if(is_array($itemSurat)){
                      $i = 1;
                      foreach ($itemSurat as $item) {
                        ?>
                        <tr>
                          <td><?php echo $item['nospd']; ?></td>
                          <td><?php echo $item['program']; ?></td>
                          <td><?php echo $item['kegiatan']; ?></th>
                          <td><?php echo $item['koderekening']; ?></th>
                          <td><?php echo date('d F Y', strtotime($item['tglberangkat'])); ?></td>
                          <td><?php echo date('d F Y', strtotime($item['tglkembali'])); ?></td>
                          <td><?php echo $item['jumlahorang']; ?></td>
                          <td><?php echo "Rp ". number_format($item['uangharian'],0,",","."); ?></td>
                          <td><?php echo "Rp ". number_format($item['uangtransport'],0,",","."); ?></td>
                          <td><?php echo $item['statusCair']; ?></td>

                          <td align=center>
                            <?php
                                if($item['statusCair'] == "Disetujui" || $item['statusCair'] == "Ditolak"){
                                  ?>
                                  <button class="btn btn-info" onclick="pilih_surat(<?php echo $item['id']; ?>)"><i class="fa fa-folder-open-o"></i></button>
                                  <button class="btn btn-success disabled"><i class="fa fa-check" disabled></i></button>
                                  <button class="btn btn-danger disabled"><i class="fa fa-close" disabled></i></button>
                                  <?php
                                }else{?>
                                  <button class="btn btn-info" onclick="pilih_surat(<?php echo $item['id']; ?>)"><i class="fa fa-folder-open-o"></i></button>
                                  <button class="btn btn-success" onclick="konfirmasi_setuju(<?php echo $item['id']; ?>)"><i class="fa fa-check"></i></button>
                                  <button class="btn btn-danger" onclick="konfirmasi_tolak(<?php echo $item['id']; ?>)"><i class="fa fa-close"></i></button>
                                  <?php
                                }
                             ?>

                          </td>
                        </tr>
                    <?php
                    $i++;
                    }
                  }
                 ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <script type="text/javascript">
  $(document).ready( function () {
      $('#example1').DataTable();
    });
    var save_method; //for save method string
    var table;
    var idSPD;




    function ubah_surat(noSurat)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('ajaxSPD')?>/" + noSurat,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id"]').val(data.id);
            $('[name="bidangEdit"]').val(data.bidang);
            $('[name="skpdEdit"]').val(data.skpd);
            $('[name="bagianEdit"]').val(data.bagian);
            $('[name="subbagianEdit"]').val(data.subbagian);
            $('[name="nospdEdit"]').val(data.nospd);
            $('[name="tglberangkatEdit"]').val(data.tglberangkat);
            $('[name="tglkembaliEdit"]').val(data.tglkembali);
            $('[name="programEdit"]').val(data.program);
            $('[name="kegiatanEdit"]').val(data.kegiatan);
            $('[name="jumlahorangEdit"]').val(data.jumlahorang);
            $('[name="koderekeningEdit"]').val(data.koderekening);
            $('[name="uangsakuEdit"]').val(data.uangsaku);
            $('[name="uangmakanEdit"]').val(data.uangmakan);
            $('[name="uangtransportEdit"]').val(data.uangtransport);




            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Surat'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }

    function konfirmasi_setuju(noSurat)
    {
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('ajaxSPD')?>/" + noSurat,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            idSPD = data.id;
            $('[name="id"]').val(data.id);
            document.getElementById("nospdSetuju").innerHTML = data.nospd;
            document.getElementById("programSetuju").innerHTML = data.program;
            document.getElementById("kegiatanSetuju").innerHTML = data.kegiatan;

            $('#modalSetuju').modal('show'); // show bootstrap modal when complete loaded

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }

    function konfirmasi_tolak(noSurat)
    {
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('ajaxSPD')?>/" + noSurat,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            idSPD = data.id;
            document.getElementById("nospdTolak").innerHTML = data.nospd;
            document.getElementById("programTolak").innerHTML = data.program;
            document.getElementById("kegiatanTolak").innerHTML = data.kegiatan;

            $('#modalTolak').modal('show'); // show bootstrap modal when complete loaded

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }


    $(document).ready(function(){
        $('#submit').submit(function(e){
            e.preventDefault();
                 $.ajax({
                     url:'<?php echo base_url('setuju');?>',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(data){
                          location.reload();
                   }
                 });
            });


    });

    function tolak(){
      $.ajax({
        url : "<?php echo site_url('tolak')?>/"+idSPD,
        type: "POST",
        dataType: "JSON",
        success: function(data)
        {
           location.reload();
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error deleting data');
        }
    });
    }


    function pilih_surat(id)
    {
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('ajaxSPD')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            document.getElementById("linksurat1").href = "lihatSurat/" + data.id + "/surat1";
            document.getElementById("linksurat2").href = "lihatSurat/" + data.id + "/surat2";
            document.getElementById("linksurat3").href = "lihatSurat/" + data.id + "/surat3";
            document.getElementById("linksurat4").href = "lihatSurat/" + data.id + "/surat4";

            if (data.statusCair == "Disetujui") {
              areaBalesan.style.visibility = "visible" ;
              document.getElementById("linksurat5").href = "lihatSurat/" + data.id + "/suratBalasan";
            }


            $('#modalPilihSurat').modal('show'); // show bootstrap modal when complete loaded

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }

    function save()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo site_url('admin/bookadd')?>";
      }
      else
      {
          url = "<?php echo site_url('ubah')?>";
      }

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }

  </script>

    <script>
            $(document).ready(function(){
            $('#add_more').click(function(){
                var current_count = $('input[type="file"]').length;
                var next = current_count++;
                $('#file_upload').prepend('<input type="file" name="surat' +next+'">');
            })
        })
    </script>

    <div class="modal fade" id="modalSetuju" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-titlee">Setujui SPD ?</h3>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" id="submit">
            <input type="text" name="id" style="visibility:hidden;">
            <input type="text" name="status" value="setuju" style="visibility:hidden;">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
              Nomor SPD
            </div>
            <div class="col-md-8">
              <label id="nospdSetuju" ></label>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
              Program
            </div>
            <div class="col-md-8">
              <label id="programSetuju"></label>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
              Kegiatan
            </div>
            <div class="col-md-8">
              <label id="kegiatanSetuju" ></label>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
              Surat Balasan
            </div>
            <div class="col-md-8">
              <input type="file" name="fileBalasan" required>
            </div>
          </div>
        </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-success">Setuju</button>
        </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    <!-- End Bootstrap modal -->


    <div class="modal fade" id="modalTolak" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-titlee">Tolak SPD ?</h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
              Nomor SPD
            </div>
            <div class="col-md-8">
              <label id="nospdTolak" ></label>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
              Program
            </div>
            <div class="col-md-8">
              <label id="programTolak"></label>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
              Kegiatan
            </div>
            <div class="col-md-8">
              <label id="kegiatanTolak" ></label>
            </div>
          </div>
        </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
              <button type="button" onclick="tolak()" class="btn btn-danger">Tolak</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    <!-- End Bootstrap modal -->



    <div class="modal fade" id="modalPilihSurat" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-titlee">Pilih Surat</h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
              Surat 1
            </div>
            <div class="col-md-8">
              <a href="#" id="linksurat1" target="_blank">Klik</a>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
              Surat 2
            </div>
            <div class="col-md-8">
              <a href="#" id="linksurat2" target="_blank">Klik</a>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
              Surat 3
            </div>
            <div class="col-md-8">
              <a href="#" id="linksurat3" target="_blank">Klik</a>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
              Surat 4
            </div>
            <div class="col-md-8">
              <a href="#" id="linksurat4" target="_blank">Klik</a>
            </div>
            <div id="areaBalesan" style="visibility:hidden;">
              <div class="col-md-1"></div>
              <div class="col-md-3">
                Surat Balasan
              </div>
              <div class="col-md-8">
                <a href="#" id="linksurat5" target="_blank">Klik</a>
              </div>
            </div>
          </div>
        </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    <!-- End Bootstrap modal -->
