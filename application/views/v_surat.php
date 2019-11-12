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
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    
    
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css" type="text/css">
    
    
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
  function tampilkan(){
    var bagian=document.getElementById("tambahSPD").bag.value;
    if (bagian=="Bag 1")
      {
          document.getElementById("subbag").innerHTML="<option value='SUBBAG 11'>SUBBAG 11</option><option value='SUBBAG 12'>SUBBAG 12</option>";
      }
    else if (bagian=="Bag 2")
      {
          document.getElementById("subbag").innerHTML="<option value='SUBBAG 21'>SUBBAG 21</option><option value='SUBBAG 22'>SUBBAG 22</option>";
      }
  }
  </script>
  <script>
  function tampilkan1(){
    var bagian=document.getElementById("form").bagg.value;
    if (bagian=="Bag 1")
      {
          document.getElementById("subbagg").innerHTML="<option value='SUBBAG 11'>SUBBAG 11</option><option value='SUBBAG 12'>SUBBAG 12</option>";
      }
    else if (bagian=="Bag 2")
      {
          document.getElementById("subbagg").innerHTML="<option value='SUBBAG 21'>SUBBAG 21</option><option value='SUBBAG 22'>SUBBAG 22</option>";
      }
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
<body class="hold-transition skin-blue sidebar-mini">
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
          <a href="#">
            <i class="fa fa-envelope-o"></i>
            <span>Surat Perintah Dinas</span>
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
              <a data-toggle="modal" data-target="#tambah-data" class="btn btn-success btn-lg" style="float:left; display: inline-block; font-size:20px; padding: 5px 10px 5px 10px;"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Tambah SPD</a>
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
                  <th>TGL Berangkat</th>
                  <th>TGL Kembali</th>
                  <th>Jumlah Orang</th>
                  <th>Uang Harian</th>
                  <th>Uang Transport</th>
                  <th>Status</th>
                  <th style="width:10%">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    if(is_array($itemSurat)){
                      $i = 1;
                      foreach ($itemSurat as $item) {
                        ?>
                        <tr style="width:100%">
                          <td><?php echo $item['nospd']; ?></td>
                          <td><?php echo $item['program']; ?></td>
                          <td><?php echo $item['kegiatan']; ?></td>
                          <td><?php echo $item['koderekening']; ?></td>
                          <td><?php echo date('d F Y', strtotime($item['tglberangkat'])); ?></td>
                          <td><?php echo date('d F Y', strtotime($item['tglkembali'])); ?></td>
                          <td><?php echo $item['jumlahorang']; ?></td>
                          <td><?php echo "Rp ". number_format($item['uangharian'],0,",","."); ?></td>
                          <td><?php echo "Rp ". number_format($item['uangtransport'],0,",","."); ?></td>
                          <td align="center"><?php
                                  if($item['statusCair'] == "Disetujui"){?>
                                    <a href="<?php echo base_url('admin/lihatSurat/'.$item['id'].'/suratBalasan'); ?>" class='btn btn-success'>Disetujui</a>
                              <?php
                                  }else{
                                    echo $item['statusCair'];
                                  }
                                ?>
                          </td>

                          <td align=center>
                            <?php
                                if($item['statusCair'] == "Disetujui" || $item['statusCair'] == "Ditolak"){
                                  ?>
                                  <button class="btn btn-warning disabled"><i class="fa fa-edit" disabled></i></button>
                                  <button class="btn btn-danger" onclick="konfirmasi_hapus(<?php echo $item['id']; ?>)"><i class="fa fa-trash" disabled></i></button>
                                  <?php
                                }else{?>
                                  <button class="btn btn-warning" onclick="ubah_surat(<?php echo $item['id']; ?>)"><i class="fa fa-edit"></i></button>
                                  <button class="btn btn-danger" onclick="konfirmasi_hapus(<?php echo $item['id']; ?>)"><i class="fa fa-trash"></i></button>
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
    var idHapus;


    function tambah_surat()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
      $('.modal-title').text('Tambah Surat');
    }

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

    function konfirmasi_hapus(noSurat)
    {
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('ajaxSPD')?>/" + noSurat,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            idHapus = data.id;
            document.getElementById("nospdHapus").innerHTML = data.nospd;
            document.getElementById("programHapus").innerHTML = data.program;
            document.getElementById("kegiatanHapus").innerHTML = data.kegiatan;
            document.getElementById("statusHapus").innerHTML = data.statusCair;

            $('#modalHapus').modal('show'); // show bootstrap modal when complete loaded

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }


    function hapus(){
      $.ajax({
        url : "<?php echo site_url('hapusSPD')?>/"+idHapus,
        type: "POST",
        dataType: "JSON",
        success: function(data)
        {
           location.reload();
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            location.reload();
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
    
    
    
    <script type="text/javascript">
        $(document).ready(function() {
            var max_fields      = 10; //maximum input boxes allowed
            var wrapper         = $("#addnama"); //Fields wrapper
            var add_button      = $("#add"); //Add button ID

            var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).prepend('<select class="form-control selectpicker" name="namapegawai[]" data-live-search="true"> <option value="Drs. H. Wawan Munawar Sidik, M.M.">Drs. H. Wawan Munawar Sidik, M.M.</option> <option value="Dr. Drs. Kardenal, M.Si.">Dr. Drs. Kardenal, M. Si.</option> <option value="Iwan Setiawan, S.Sos, M.Si">Iwan Setiawan, S.Sos, M.Si</option> <option value="Hj. Reny Restiyani, S.E.">Hj. Reny Restiyani, S.E.</option> <option value="Asep Saripudin, S.H.">Asep Saripudin, S.H.</option> <option value="Iip Paisal Apip, S.Ip.">Iip Paisal Apip, S.Ip.</option> <option value="Mardiyansyah, M.Ip.">Mardiyansyah, M.Ip.</option> <option value="Dany Maya Irmana">Dany Maya Irmana</option> <option value="H. Rudi Fahrudin, S.E.">H. Rudi Fahrudin, S.E.</option> <option value="Purnomo Triobo, S.E.">Purnomo Triobo, S.E.</option> <option value="Hj. Supartini">Hj. Supartini</option> <option value="H. Agnes Yoeanes Abidin, S.Sos., M.Si.">H. Agnes Yoeanes Abidin, S.Sos., M.Si.</option> <option value="H. Soma, S.E.">H. Soma, S.E.</option> <option value="Moh. Nur Ardiansyah">Moh. Nur Ardiansyah</option> <option value="Dede Hartini, S.E., M.Si.">Dede Hartini, S.E., M.Si.</option> <option value="Ilham Maulana, S.T.">Ilham Maulana, S.T.</option> <option value="Yanti Yulianti">Yanti Yulianti</option> <option value="Mega Puspasari, S.E.">Mega Puspasari, S.E.</option> <option value="Dra. Betty Sugiarti">Dra. Betty Sugiarti</option> <option value="Dini Saumi Imaniah, S.S., M.M.">Dini Saumi Imaniah, S.S., M.M.</option> <option value="Mulyana, S.E.">Mulyana, S.E.</option> <option value="Tedi Supiadi">Tedi Supiadi</option> <option value="Christian P. Messakh, S.Sos.">Christian P. Messakh, S.Sos.</option> <option value="John Z. Souhoka">John Z. Souhoka</option> <option value="Marimbun Tua Gultom">Marimbun Tua Gultom</option> <option value="Parman">Parman</option> <option value="Yayat Ruchiyat">Yayat Ruchiyat</option> <option value="Dra. Hj. Ernaningsih, M.Si.">Dra. Hj. Ernaningsih, M.Si.</option> <option value="Dendy Wahyudin, S.Ip.">Dendy Wahyudin, S.Ip.</option> <option value="Anggy Vita Herita, A.Md.">Anggy Vita Herita, A.Md.</option> <option value="Yudha Darmawan Anda">Yudha Darmawan Anda</option> <option value="Marjati, S.P., M.T.">Marjati, S.P., M.T.</option> <option value="Ida Farida, S.Sos.">Ida Farida, S.Sos.</option> <option value="Abdul Latif, A.Md.">Abdul Latif, A.Md.</option> <option value="Drs. Eko Sumartoyo">Drs. Eko Sumartoyo</option> <option value="Dudi Rudiana">Dudi Rudiana</option> <option value="Moh. Dadang Iwa S, S.Sos., M.A.">Moh. Dadang Iwa S, S.Sos., M.A.</option> <option value="Mimin Sumirat, S.E., M.Si.">Mimin Sumirat, S.E., M.Si.</option> <option value="Achmad Kartiwa Darizki, M.Ip.">Achmad Kartiwa Darizki, M.Ip.</option> <option value="Asbi">Asbi</option> <option value="Dede Kosasih, S.E., M.Si.">Dede Kosasih, S.E., M.Si.</option> <option value="Isyah Anisyah, S.E.">Isyah Anisyah, S.E.</option> <option value="Purnama Karnadi, S.E.">Purnama Karnadi, S.E.</option> <option value="Ilham, S.H.">Ilham, S.H.</option> <option value="Romi Nurjadin, S.T.">Romi Nurjadin, S.T.</option> <option value="H. Muharom, S.Sos., M.AP.">H. Muharom, S.Sos., M.AP.</option> <option value="Edi Kasmara, S.E., M.Si.">Edi Kasmara, S.E., M.Si.</option> <option value="Subagio Hadipranoto, S.E.">Subagio Hadipranoto, S.E.</option> <option value="Martimbang Irijono">Martimbang Irijono</option> <option value="Uus">Uus</option> </select>'); //add input box
             }
        });
});
</script>
    
     <script type="text/javascript">
        $(document).ready(function() {
            var max_fields       = 10; //maximum input boxes allowed
            var wrappers         = $("#addnama1"); //Fields wrapper
            var add_buttons      = $("#add1"); //Add button ID

            var x = 1; //initlal text box count
        $(add_buttons).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrappers).prepend('<select class="form-control selectpicker" name="namapegawaiEdit[]" data-live-search="true"> <option value="Drs. H. Wawan Munawar Sidik, M.M.">Drs. H. Wawan Munawar Sidik, M.M.</option> <option value="Dr. Drs. Kardenal, M.Si.">Dr. Drs. Kardenal, M. Si.</option> <option value="Iwan Setiawan, S.Sos, M.Si">Iwan Setiawan, S.Sos, M.Si</option> <option value="Hj. Reny Restiyani, S.E.">Hj. Reny Restiyani, S.E.</option> <option value="Asep Saripudin, S.H.">Asep Saripudin, S.H.</option> <option value="Iip Paisal Apip, S.Ip.">Iip Paisal Apip, S.Ip.</option> <option value="Mardiyansyah, M.Ip.">Mardiyansyah, M.Ip.</option> <option value="Dany Maya Irmana">Dany Maya Irmana</option> <option value="H. Rudi Fahrudin, S.E.">H. Rudi Fahrudin, S.E.</option> <option value="Purnomo Triobo, S.E.">Purnomo Triobo, S.E.</option> <option value="Hj. Supartini">Hj. Supartini</option> <option value="H. Agnes Yoeanes Abidin, S.Sos., M.Si.">H. Agnes Yoeanes Abidin, S.Sos., M.Si.</option> <option value="H. Soma, S.E.">H. Soma, S.E.</option> <option value="Moh. Nur Ardiansyah">Moh. Nur Ardiansyah</option> <option value="Dede Hartini, S.E., M.Si.">Dede Hartini, S.E., M.Si.</option> <option value="Ilham Maulana, S.T.">Ilham Maulana, S.T.</option> <option value="Yanti Yulianti">Yanti Yulianti</option> <option value="Mega Puspasari, S.E.">Mega Puspasari, S.E.</option> <option value="Dra. Betty Sugiarti">Dra. Betty Sugiarti</option> <option value="Dini Saumi Imaniah, S.S., M.M.">Dini Saumi Imaniah, S.S., M.M.</option> <option value="Mulyana, S.E.">Mulyana, S.E.</option> <option value="Tedi Supiadi">Tedi Supiadi</option> <option value="Christian P. Messakh, S.Sos.">Christian P. Messakh, S.Sos.</option> <option value="John Z. Souhoka">John Z. Souhoka</option> <option value="Marimbun Tua Gultom">Marimbun Tua Gultom</option> <option value="Parman">Parman</option> <option value="Yayat Ruchiyat">Yayat Ruchiyat</option> <option value="Dra. Hj. Ernaningsih, M.Si.">Dra. Hj. Ernaningsih, M.Si.</option> <option value="Dendy Wahyudin, S.Ip.">Dendy Wahyudin, S.Ip.</option> <option value="Anggy Vita Herita, A.Md.">Anggy Vita Herita, A.Md.</option> <option value="Yudha Darmawan Anda">Yudha Darmawan Anda</option> <option value="Marjati, S.P., M.T.">Marjati, S.P., M.T.</option> <option value="Ida Farida, S.Sos.">Ida Farida, S.Sos.</option> <option value="Abdul Latif, A.Md.">Abdul Latif, A.Md.</option> <option value="Drs. Eko Sumartoyo">Drs. Eko Sumartoyo</option> <option value="Dudi Rudiana">Dudi Rudiana</option> <option value="Moh. Dadang Iwa S, S.Sos., M.A.">Moh. Dadang Iwa S, S.Sos., M.A.</option> <option value="Mimin Sumirat, S.E., M.Si.">Mimin Sumirat, S.E., M.Si.</option> <option value="Achmad Kartiwa Darizki, M.Ip.">Achmad Kartiwa Darizki, M.Ip.</option> <option value="Asbi">Asbi</option> <option value="Dede Kosasih, S.E., M.Si.">Dede Kosasih, S.E., M.Si.</option> <option value="Isyah Anisyah, S.E.">Isyah Anisyah, S.E.</option> <option value="Purnama Karnadi, S.E.">Purnama Karnadi, S.E.</option> <option value="Ilham, S.H.">Ilham, S.H.</option> <option value="Romi Nurjadin, S.T.">Romi Nurjadin, S.T.</option> <option value="H. Muharom, S.Sos., M.AP.">H. Muharom, S.Sos., M.AP.</option> <option value="Edi Kasmara, S.E., M.Si.">Edi Kasmara, S.E., M.Si.</option> <option value="Subagio Hadipranoto, S.E.">Subagio Hadipranoto, S.E.</option> <option value="Martimbang Irijono">Martimbang Irijono</option> <option value="Uus">Uus</option> </select>'); //add input box
             }
        });
});
</script>
    
    
    
  <!-- /.modal Tambah -->
  <div class="modal fade" id="tambah-data">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-titlee">Tambah SPD</h4>
        </div>
        <div class="modal-body">
          <form id="tambahSPD" class="form-horizontal" form action="<?php echo base_url('controllerSurat/tambahspd')?>" method="post" enctype="multipart/form-data" role="form">
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Bidang</label>
                <div class="col-lg-9">
                  <select name="bidang" class="form-control">
                    <option value="bid1">Bidang 1</option>
                    <option value="bid2">Bidang 2</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">SKPD</label>
                <div class="col-lg-9">
                  <select name="skpd" class="form-control">
                    <option value="skpd1">SKPD 1</option>
                    <option value="skpd2">SKPD 2</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Bagian</label>
                <div class="col-lg-9">
                  <select id="bag" name="bagian" class="form-control" onclick="tampilkan()">
                    <option value="Bag 1">Bag 1</option>
                    <option value="Bag 2">Bag 2</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Sub Bagian</label>
                <div class="col-lg-9">
                  <select id="subbag" name="subbagian" class="form-control">
                  </select>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Nomor SPD</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" onkeypress="return hanyaAngka(event)" name="nospd" required>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Tanggal Berangkat</label>
                <div class="col-lg-9">
                  <input class="form-control" type="date" name="tglberangkat" required>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Tanggal Kembali</label>
                <div class="col-lg-9">
                  <input class="form-control" type="date" name="tglkembali" required>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Program</label>
                <div class="col-lg-9">
                  <textarea name="program" class="form-control" rows="2" cols="80" required></textarea>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Kegiatan</label>
                <div class="col-lg-9">
                  <textarea name="kegiatan" class="form-control" rows="2" cols="80" required></textarea>
                </div>
            </div>
            <div  class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Penanggung jawab</label>
                <div id="addnama" class="col-lg-9">
                     <select class="form-control selectpicker" name="namapegawai[]" data-live-search="true">
                        <option value="Drs. H. Wawan Munawar Sidik, M.M.">Drs. H. Wawan Munawar Sidik, M.M.</option>
                        <option value="Dr. Drs. Kardenal, M.Si.">Dr. Drs. Kardenal, M. Si.</option>
                        <option value="Iwan Setiawan, S.Sos, M.Si">Iwan Setiawan, S.Sos, M.Si</option>
                        <option value="Hj. Reny Restiyani, S.E.">Hj. Reny Restiyani, S.E.</option>
                        <option value="Asep Saripudin, S.H.">Asep Saripudin, S.H.</option>
                         <option value="Iip Paisal Apip, S.Ip.">Iip Paisal Apip, S.Ip.</option>
                         <option value="Mardiyansyah, M.Ip.">Mardiyansyah, M.Ip.</option>
                         <option value="Dany Maya Irmana">Dany Maya Irmana</option>
                         <option value="H. Rudi Fahrudin, S.E.">H. Rudi Fahrudin, S.E.</option>
                         <option value="Purnomo Triobo, S.E.">Purnomo Triobo, S.E.</option>
                         <option value="Hj. Supartini">Hj. Supartini</option>
                         <option value="H. Agnes Yoeanes Abidin, S.Sos., M.Si.">H. Agnes Yoeanes Abidin, S.Sos., M.Si.</option>
                         <option value="H. Soma, S.E.">H. Soma, S.E.</option>
                         <option value="Moh. Nur Ardiansyah">Moh. Nur Ardiansyah</option>
                         <option value="Dede Hartini, S.E., M.Si.">Dede Hartini, S.E., M.Si.</option>
                         <option value="Ilham Maulana, S.T.">Ilham Maulana, S.T.</option>
                         <option value="Yanti Yulianti">Yanti Yulianti</option>
                         <option value="Mega Puspasari, S.E.">Mega Puspasari, S.E.</option>
                         <option value="Dra. Betty Sugiarti">Dra. Betty Sugiarti</option>
                         <option value="Dini Saumi Imaniah, S.S., M.M.">Dini Saumi Imaniah, S.S., M.M.</option>
                         <option value="Mulyana, S.E.">Mulyana, S.E.</option>
                         <option value="Tedi Supiadi">Tedi Supiadi</option>
                         <option value="Christian P. Messakh, S.Sos.">Christian P. Messakh, S.Sos.</option>
                         <option value="John Z. Souhoka">John Z. Souhoka</option>
                         <option value="Marimbun Tua Gultom">Marimbun Tua Gultom</option>
                         <option value="Parman">Parman</option>
                         <option value="Yayat Ruchiyat">Yayat Ruchiyat</option>
                         <option value="Dra. Hj. Ernaningsih, M.Si.">Dra. Hj. Ernaningsih, M.Si.</option>
                         <option value="Dendy Wahyudin, S.Ip.">Dendy Wahyudin, S.Ip.</option>
                         <option value="Anggy Vita Herita, A.Md.">Anggy Vita Herita, A.Md.</option>
                         <option value="Yudha Darmawan Anda">Yudha Darmawan Anda</option>
                         <option value="Marjati, S.P., M.T.">Marjati, S.P., M.T.</option>
                         <option value="Ida Farida, S.Sos.">Ida Farida, S.Sos.</option>
                         <option value="Abdul Latif, A.Md.">Abdul Latif, A.Md.</option>
                         <option value="Drs. Eko Sumartoyo">Drs. Eko Sumartoyo</option>
                         <option value="Dudi Rudiana">Dudi Rudiana</option>
                         <option value="Moh. Dadang Iwa S, S.Sos., M.A.">Moh. Dadang Iwa S, S.Sos., M.A.</option>
                         <option value="Mimin Sumirat, S.E., M.Si.">Mimin Sumirat, S.E., M.Si.</option>
                         <option value="Achmad Kartiwa Darizki, M.Ip.">Achmad Kartiwa Darizki, M.Ip.</option>
                         <option value="Asbi">Asbi</option>
                         <option value="Dede Kosasih, S.E., M.Si.">Dede Kosasih, S.E., M.Si.</option>
                         <option value="Isyah Anisyah, S.E.">Isyah Anisyah, S.E.</option>
                         <option value="Purnama Karnadi, S.E.">Purnama Karnadi, S.E.</option>
                         <option value="Ilham, S.H.">Ilham, S.H.</option>
                         <option value="Romi Nurjadin, S.T.">Romi Nurjadin, S.T.</option>
                         <option value="H. Muharom, S.Sos., M.AP.">H. Muharom, S.Sos., M.AP.</option>
                         <option value="Edi Kasmara, S.E., M.Si.">Edi Kasmara, S.E., M.Si.</option>
                         <option value="Subagio Hadipranoto, S.E.">Subagio Hadipranoto, S.E.</option>
                         <option value="Martimbang Irijono">Martimbang Irijono</option>
                         <option value="Uus">Uus</option>
                    </select>
                    <button type="button" name="add" id="add" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></button>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Kode Rekening</label>
                <div class="col-lg-9">
                  <select name="koderekening"  class="form-control">
                    <option value="5.2.2.15.01">5.2.2.15.01</option>
                    <option value="5.2.2.15.02">5.2.2.15.02</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Jumlah orang</label>
                <div class="col-lg-9">
                  <input  class="form-control" type="text" onkeypress="return hanyaAngka(event)" name="jumlahorang" required>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Uang Harian</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" onkeypress="return hanyaAngka(event)" name="uangsaku" required>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Uang Transport</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" onkeypress="return hanyaAngka(event)" name="uangtransport" required>
                </div>
            </div>
           <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label"><b>File Surat</b><br>(Upload format PDF)</label>
                <div id="file_upload" class="col-lg-9">
                  <input type="file" name="surat1">
                    <button type="button" class="btn-success" id="add_more">Add more</button>
                </div>
            </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
              <button type="submit" id="submit" class="btn btn-primary">Simpan</button>
            </form>
          </div>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->



    <div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Edit SPD</h3>
        </div>
        <div class="modal-body form">
          <form action="#" id="form" class="form-horizontal">
            <input type="hidden" value="" name="id"/>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Bidang</label>
                <div class="col-lg-9">
                  <select id="bidangEdit" name="bidangEdit" class="form-control">
                    <option value="bid1">Bidang 1</option>
                    <option value="bid2">Bidang 2</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">SKPD</label>
                <div class="col-lg-9">
                  <select name="skpdEdit" class="form-control">
                    <option value="skpd1">SKPD 1</option>
                    <option value="skpd2">SKPD 2</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Bagian</label>
                <div class="col-lg-9">
                  <select id="bagg" name="bagianEdit" class="form-control" onclick="tampilkan1()">
                    <option value="Bag 1">Bag 1</option>
                    <option value="Bag 2">Bag 2</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Sub Bagian</label>
                <div class="col-lg-9">
                  <select id="subbagg" name="subbagianEdit" class="form-control" onclick="tampilkan1()">
                    <option value='SUBBAG 21'>SUBBAG 21</option>
                    <option value='SUBBAG 22'>SUBBAG 22</option>
                    <option value='SUBBAG 11'>SUBBAG 11</option>
                    <option value='SUBBAG 12'>SUBBAG 12</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Nomor SPD</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" onkeypress="return hanyaAngka(event)" name="nospdEdit" required>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Tanggal Berangkat</label>
                <div class="col-lg-9">
                  <input class="form-control" type="date" name="tglberangkatEdit" required>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Tanggal Kembali</label>
                <div class="col-lg-9">
                  <input class="form-control" type="date" name="tglkembaliEdit" required>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Program</label>
                <div class="col-lg-9">
                  <textarea name="programEdit" class="form-control" rows="2" cols="80" required></textarea>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Kegiatan</label>
                <div class="col-lg-9">
                  <textarea name="kegiatanEdit" class="form-control" rows="2" cols="80" required></textarea>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Penanggung Jawab</label>
                 <div id="addnama1" class="col-lg-9">
                     <select class="form-control selectpicker" name="namapegawaiEdit[]" data-live-search="true">
                        <option value="Drs. H. Wawan Munawar Sidik, M.M.">Drs. H. Wawan Munawar Sidik, M.M.</option>
                        <option value="Dr. Drs. Kardenal, M.Si.">Dr. Drs. Kardenal, M. Si.</option>
                        <option value="Iwan Setiawan, S.Sos, M.Si">Iwan Setiawan, S.Sos, M.Si</option>
                        <option value="Hj. Reny Restiyani, S.E.">Hj. Reny Restiyani, S.E.</option>
                        <option value="Asep Saripudin, S.H.">Asep Saripudin, S.H.</option>
                         <option value="Iip Paisal Apip, S.Ip.">Iip Paisal Apip, S.Ip.</option>
                         <option value="Mardiyansyah, M.Ip.">Mardiyansyah, M.Ip.</option>
                         <option value="Dany Maya Irmana">Dany Maya Irmana</option>
                         <option value="H. Rudi Fahrudin, S.E.">H. Rudi Fahrudin, S.E.</option>
                         <option value="Purnomo Triobo, S.E.">Purnomo Triobo, S.E.</option>
                         <option value="Hj. Supartini">Hj. Supartini</option>
                         <option value="H. Agnes Yoeanes Abidin, S.Sos., M.Si.">H. Agnes Yoeanes Abidin, S.Sos., M.Si.</option>
                         <option value="H. Soma, S.E.">H. Soma, S.E.</option>
                         <option value="Moh. Nur Ardiansyah">Moh. Nur Ardiansyah</option>
                         <option value="Dede Hartini, S.E., M.Si.">Dede Hartini, S.E., M.Si.</option>
                         <option value="Ilham Maulana, S.T.">Ilham Maulana, S.T.</option>
                         <option value="Yanti Yulianti">Yanti Yulianti</option>
                         <option value="Mega Puspasari, S.E.">Mega Puspasari, S.E.</option>
                         <option value="Dra. Betty Sugiarti">Dra. Betty Sugiarti</option>
                         <option value="Dini Saumi Imaniah, S.S., M.M.">Dini Saumi Imaniah, S.S., M.M.</option>
                         <option value="Mulyana, S.E.">Mulyana, S.E.</option>
                         <option value="Tedi Supiadi">Tedi Supiadi</option>
                         <option value="Christian P. Messakh, S.Sos.">Christian P. Messakh, S.Sos.</option>
                         <option value="John Z. Souhoka">John Z. Souhoka</option>
                         <option value="Marimbun Tua Gultom">Marimbun Tua Gultom</option>
                         <option value="Parman">Parman</option>
                         <option value="Yayat Ruchiyat">Yayat Ruchiyat</option>
                         <option value="Dra. Hj. Ernaningsih, M.Si.">Dra. Hj. Ernaningsih, M.Si.</option>
                         <option value="Dendy Wahyudin, S.Ip.">Dendy Wahyudin, S.Ip.</option>
                         <option value="Anggy Vita Herita, A.Md.">Anggy Vita Herita, A.Md.</option>
                         <option value="Yudha Darmawan Anda">Yudha Darmawan Anda</option>
                         <option value="Marjati, S.P., M.T.">Marjati, S.P., M.T.</option>
                         <option value="Ida Farida, S.Sos.">Ida Farida, S.Sos.</option>
                         <option value="Abdul Latif, A.Md.">Abdul Latif, A.Md.</option>
                         <option value="Drs. Eko Sumartoyo">Drs. Eko Sumartoyo</option>
                         <option value="Dudi Rudiana">Dudi Rudiana</option>
                         <option value="Moh. Dadang Iwa S, S.Sos., M.A.">Moh. Dadang Iwa S, S.Sos., M.A.</option>
                         <option value="Mimin Sumirat, S.E., M.Si.">Mimin Sumirat, S.E., M.Si.</option>
                         <option value="Achmad Kartiwa Darizki, M.Ip.">Achmad Kartiwa Darizki, M.Ip.</option>
                         <option value="Asbi">Asbi</option>
                         <option value="Dede Kosasih, S.E., M.Si.">Dede Kosasih, S.E., M.Si.</option>
                         <option value="Isyah Anisyah, S.E.">Isyah Anisyah, S.E.</option>
                         <option value="Purnama Karnadi, S.E.">Purnama Karnadi, S.E.</option>
                         <option value="Ilham, S.H.">Ilham, S.H.</option>
                         <option value="Romi Nurjadin, S.T.">Romi Nurjadin, S.T.</option>
                         <option value="H. Muharom, S.Sos., M.AP.">H. Muharom, S.Sos., M.AP.</option>
                         <option value="Edi Kasmara, S.E., M.Si.">Edi Kasmara, S.E., M.Si.</option>
                         <option value="Subagio Hadipranoto, S.E.">Subagio Hadipranoto, S.E.</option>
                         <option value="Martimbang Irijono">Martimbang Irijono</option>
                         <option value="Uus">Uus</option>
                    </select>
                    <button type="button" name="add1" id="add1" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></button>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Nomor Rekening</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" onkeypress="return hanyaAngka(event)" name="koderekeningEdit" required>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Jumlah Orang</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" onkeypress="return hanyaAngka(event)" name="jumlahorangEdit" required>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Uang Harian</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" onkeypress="return hanyaAngka(event)" name="uangsakuEdit" required>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Uang Transport</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" onkeypress="return hanyaAngka(event)" name="uangtransportEdit" required>
                </div>
            </div>
          </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
              <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Simpan</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    <!-- End Bootstrap modal -->



    <div class="modal fade" id="modalHapus" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-titlee">Hapus SPD ?</h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
              Nomor SPD
            </div>
            <div class="col-md-8">
              <label id="nospdHapus" ></label>
            </div>

            <div class="col-md-1"></div>
            <div class="col-md-3">
              Program
            </div>
            <div class="col-md-8">
              <label id="programHapus"></label>
            </div>

            <div class="col-md-1"></div>
            <div class="col-md-3">
              Kegiatan
            </div>
            <div class="col-md-8">
              <label id="kegiatanHapus" ></label>
            </div>

            <div class="col-md-1"></div>
            <div class="col-md-3">
              Status
            </div>
            <div class="col-md-8">
              <label id="statusHapus"></label>
            </div>

          </div>
        </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
              <button type="button" onclick="hapus()" class="btn btn-danger">Hapus</button>
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
          </div>
        </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    <!-- End Bootstrap modal -->
