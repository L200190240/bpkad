<?php
session_start();
include "../config/koneksi.php";
if(!isset($_SESSION['username']) && !isset($_SESSION['password']) && !isset($_SESSION['hak_akses'])){
    //jika session belum di set/register
die("Anda Belum Login Silahkan Login Terlebih Dahulu");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>SPPD | TU</title>
    <!-- Favicon-->
    <link rel="icon" href="../logo3.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />


    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Colorpicker Css -->
    <link href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="../plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="../plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="../plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="../plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="../plugins/nouislider/nouislider.min.css" rel="stylesheet" />

   

    <!-- Morris Chart Css-->
    <link href="../plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css1/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css1/themes/all-themes.css" rel="stylesheet" />
   
    
     
        <link rel="stylesheet" href="../css/datepicker.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <style>
        .datepicker{z-index:1151;}
        </style>
         <script>
         // $(function(){
         //     $("#tanggal,#tanggal1,#tanggal2").datepicker({
         //     format:'yyyy/dd/mm'
         //     });
         //  });
        </script>

         <script>
  $(document).ready(function() {
    $("#id").keyup(function() {
        var nisp = $('#id').val();    
    $.post('loadpegawai.php', // request ke file load_data.php
    {parent_id: nisp},
    function(data){
       $('#nama').val(data[0].nama);
       $('#golongan').val(data[0].golongan)
        $('#jabatan').val(data[0].jabatan);      
    },'json'
      );
   });
   });
  </script>

  
  
<script>
  $(document).ready(function()
  {
     $("#username").change(function()
     {  
        var username = $("#username").val();
        $("#pesan").html("<img src='loading.gif'>Cek username ...");

        if(username=='')
        {
          $("#pesan").html('<img src="salah.png"> No. Surat tidak boleh kosong');
          $("#username").css('border', '3px #C33 solid');
        }
        else
        $.ajax({type: "POST", url: "validation.php", data: "username="+username, success:function(data)
        { 
          if(data==0)
            {
                $("#pesan").html('<img src="../images/true.png"> No. Surat dapat digunakan');
                $("#username").css('border', '3px #090 solid');
            }
              else
              {
                $("#pesan").html('<img src="../images/salah.png" > No. Surat telah digunakan');
                $("#username").css('border', '3px #C33 solid');
              }
              
        } });

     })

     $("#kirim").click(function()
     {  
        var username = $("#username").val();
        $("#pesan").html("<img src='loading.gif'>Cek username ...");

        if(username=='')
        {
          $("#pesan").html('<img src="salah.png"> username tidak boleh kosong');
          $("#username").css('border', '3px #C33 solid');
        }
        else
        $.ajax({type: "POST", url: "validation.php", data: "username="+username, success:function(data)
        { 
          if(data==0)
            {
                $("#pesan").html('<img src="true.png">');
                $("#username").css('border', '3px #090 solid');
            }
              else
              {
                $("#pesan").html('<img src="salah.png"> NIP telah digunakan');
                $("#username").css('border', '3px #C33 solid');
              }
              
        } });
     })

  //    $("#tambahakun").validate({

  //       rules:{
  //               password:{required: true, minlength: 5}, 
  //               ulangipassword:{required: true, equalTo: "#password"}
  //             },

  //       messages:{  
  //                  password:{required: '.Password harus diisi', minlength: '.Password minimal 5 karakter'},
  //                  ulangipassword:{required: '.Tidak boleh kosong', equalTo: '.Isi harus sama dengan Password'}
  //             },

  //       success: function(label)
  //       {
  //           label.text('OK!').addClass('valid');
  //       }

  //    });

   });
</script>

<script>
/*autocomplete muncul setelah user mengetikan minimal2 karakter */
    $(function() { 
        // $( "#siswa" ).autocomplete({
        //  source: "data.php", 
        //    minLength:1,
        // });
    });
    </script>
  <style type="text/css">

.form-div .label {
  display: block;
  float: left;
  width: 150px;
  text-align: right;
  margin-right: 5px;
}
.form-div .form-row {
  padding: 5px 0;
  clear: both;
  width: 700px;
}

.form-div label.error {
  width: 250px;
  display: block;
  float: left;
  color: red;
  padding-left: 10px;
  background: url(unvalid.gif) no-repeat;
}
.form-div input {
  width: 180px;
  float: left;
  font-family:Verdana, Geneva, Arial, Helvetica, sans-serif;
  font-size:11px;
}
.form-div label.valid {
  width: 24px;
  background: url(true.png) center no-repeat;
  display: inline-block;
  text-indent: -9999px;
}

.error{background: #FFEBE8;}

</style>
</head>
<body class="theme-red">
    <!-- Page Loader -->
    <!-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div> -->
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="#">SISTEM INFORMASI SURAT PERJALANAN DINAS</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                Selamat Datang,
                   
                 <div class="name"><?php
                 echo $_SESSION['username'];
               ?>
                   
               </div>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="pegawai.php">
                            <i class="material-icons">people</i>
                            <span>Data Pegawai</span>
                        </a>
                    </li>
                    <li>
                        <a href="data_lpd.php">
                            <i class="material-icons">book</i>
                            <span>Laporan Perjalanan Dinas</span>
                        </a>
                    </li>
                    <li>
                        <a href="lokasi.php">
                            <i class="material-icons">location_on</i>
                            <span>Data Lokasi</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">email</i>
                            <span>Surat Perjalanan Dinas</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="input_sppd.php">Input SPPD</a>
                            </li>
                            <li>
                                <a href="cetak_sppd.php">Cetak SPPD</a>
                            </li>
                            <li>
                                <a href="input_spt.php">Input SPT</a>
                            </li>
                            <li>
                                <a href="cetak_spt.php">Cetak SPT</a>
                            </li>
                        </ul>
                     </li>
                     <li>
                        <a href="revisi.php">
                            <i class="material-icons">assignment</i>
                            <span>Revisi Surat</span>
                        </a>
                    </li>
                      <li>
                        <a href="up_sppd.php">
                            <i class="material-icons">file_upload</i>
                            <span>Upload SPPD</span>
                        </a>
                    </li>
                    <li>
                        <a href="up_spt.php">
                            <i class="material-icons">file_upload</i>
                            <span>Upload SPT</span>
                        </a>
                    </li>
                     <li><a href="../logout.php" onclick="return confirm('Apakah anda akan keluar?');"><i class="material-icons">input</i>
                     <span>Keluar</span> 
                    </a></li>
                  </ul>
                </div>
              </aside>
    </section>