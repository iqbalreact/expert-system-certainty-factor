<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIPARU - Sistem Pakar Paru - Paru</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link rel="stylesheet" href="assets/css/lib/chosen/chosen.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script> 


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                                <a class="navbar-brand" href="dashboard.php"><span>ADMIN</span></a>
                <a class="navbar-brand hidden" href="dashboard.php"><span>ADMIN</span></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Data Sistem Pakar</h3><!-- /.menu-title -->
                    <li>
                        <a href="dt_penyakit.php"> <i class="menu-icon fa fa-book"></i>Data Penyakit</a>
                    </li>
                    <li>
                        <a href="dt_gejala.php"> <i class="menu-icon fa fa-list-alt"></i>Data Gejala</a>
                    </li>
                    <li class="active">
                        <a href="dt_relasi.php"> <i class="menu-icon fa fa-sitemap"></i>Relasi / Rule</a>
                    </li>
                    <li>
                        <a href="dt_pasien.php"> <i class="menu-icon fa fa-user"></i>Data Pasien</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->


    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Ganti Password</a>

                                <a class="nav-link" href="php/logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-id"></i>
                        </a>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Relasi</a></li>
                            <li class="active">Tambah</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  <div class="col-lg-12">
                    
                    <div class="card">
                      <div class="card-header">
                        <strong>Tambah Data</strong> Relasi
                      </div>
                      <div class="card-body card-block">
                        <form method="post" enctype="multipart/form-data" class="form-horizontal">                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Penyakit</label></div>
                            <div class="col-12 col-md-9">
                              <select id="select" class="form-control" name="kd_penyakit" required>
                                <option value="">Pilih Penyakit</option>
                                <?php 
                                  include('php/db_connect.php');
                                  $kd_penyakit = "SELECT * FROM penyakit";
                                  $st=mysqli_query($link,$kd_penyakit);
                                    while ($dt=mysqli_fetch_array($st)){
                                ?>
                                  <option value="<?php echo $dt ['kd_penyakit']; ?>">(<?php echo $dt ['kd_penyakit']; ?>) <?php echo $dt ['nm_penyakit']; ?></option>
                                <?php }?>
                              </select>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Gejala Penyakit</label></div>
                            <div class="col-12 col-md-9">
                              <select id="select" class="standardSelect" name="kd_gejala" required>
                                <option value="">Pilih Gejala</option>
                                <?php 
                                  include('php/db_connect.php');
                                  $kd_penyakit = "SELECT * FROM gejala";
                                  $st=mysqli_query($link,$kd_penyakit);
                                    while ($dt=mysqli_fetch_array($st)){
                                ?>
                                 <option value="<?php echo $dt ['kd_gejala']; ?>">(<?php echo $dt ['kd_gejala']; ?>) <?php echo $dt ['gejala']; ?></option>
                                <?php }?>
                              </select>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nilai MB</label></div>
                            <div class="col-12 col-md-9"><input type="number" name="mb" placeholder="Masukan Nilai MB" class="form-control" min="0" max="1" step=".1" required="" >
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nilai MD</label></div>
                            <div class="col-12 col-md-9"><input type="number" name="md" placeholder="Masukan Nilai MD" class="form-control" min="0" max="1" step=".1" required="" >
                            </div>
                          </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                    </div>
                    </form>
                  </div><!--/.col-->
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script>
        $(function(){
            $('form').on('submit', function(e){
                e.preventDefault();
                $.ajax({
                    type :'post',
                    url :'php/add_relasi.php',
                    data: $('form').serialize(),
                    success: function(result){
                        if (result == 'Relasi Telah Tersedia !') {
                            // alert (result);
                            swal("Oops",result,"error");
                        }
                        else{
                            var id = JSON.parse(result);
                            var data = id.id_user;
                            swal({
                                title:"Good Job!",
                                text:"Relasi Berhasil Ditambahkan",
                                icon:"success"
                            }).then(function(){
                                window.location ="dt_relasi.php";
                            })
                        }
 
                        }
                    })
                })
            })
    </script>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>

    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>



</body>
</html>
