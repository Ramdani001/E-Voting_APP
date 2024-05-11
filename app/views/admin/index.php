<?php
@session_start();
if (@$_SESSION['email'])
{
  if (@!$_SESSION['tipe'] == "ADMIN")
  {
    header("location:");
  }
}
include("../inc/config.php");

//$query_profil = mysqli_query($koneksi, "SELECT * FROM tb_admin_detail WHERE username ='".$_SESSION['username']."'");
//$data_profil = mysqli_fetch_array($query_profil);

@$page  = $_GET['page'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin - Website E-Voting</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- Datatables css for this page -->
    <link rel="stylesheet" href="../datatables/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="../datatables/css/dataTables.bootstrap5.min.css">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="../css/sweet-alert.css" />

</head>

<body>

    <!--*******************
<?php
@session_start();
if (@$_SESSION['email'])
{
  if (@!$_SESSION['tipe'] == "ADMIN")
  {
    header("location:");
  }
}
include("../inc/config.php");

//$query_profil = mysqli_query($koneksi, "SELECT * FROM tb_admin_detail WHERE username ='".$_SESSION['username']."'");
//$data_profil = mysqli_fetch_array($query_profil);

@$page  = $_GET['page'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin - Website E-Voting</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- Datatables css for this page -->
    <link rel="stylesheet" href="../datatables/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="../datatables/css/dataTables.bootstrap5.min.css">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="../css/sweet-alert.css" />

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
    <div id="main-wrapper">

        <!--**********************************
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="#">
                    <b class="logo-abbr"><img src="images/logo1.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact1.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/logo-text1.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
        <div class="nav-header">
            <div class="brand-logo">
                <a href="#">
                    <b class="logo-abbr"><img src="images/logo1.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact1.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/logo-text1.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-right">
                    <h4 style="padding-top: 15px; margin-right: 5px;">NAMA PERUSAHAAN</h4>
                </div>
            </div>
        </div>
        <!--**********************************
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-right">
                    <h4 style="padding-top: 15px; margin-right: 5px;">NAMA PERUSAHAAN</h4>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="?page=home" aria-expanded="false">
                            <i class="icon-home menu-icon"></i><span class="nav-text">Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="?page=user" aria-expanded="false">
                            <i class="icon-people menu-icon"></i><span class="nav-text">Data Akun Pengguna</span>
                        </a>
                    </li>
                    <li>
                        <a href="?page=member" aria-expanded="false">
                            <i class="icon-user menu-icon"></i><span class="nav-text">Data Kandidat</span>
                        </a>
                    </li>
                    <li>
                        <a href="?page=voting" aria-expanded="false">
                            <i class="icon-pie-chart menu-icon"></i><span class="nav-text">Hasil Pemilihan</span>
                        </a>
                    </li>
                </ul>
                <hr></hr>
                <ul class="clearfix">                   
                    <li class="icons dropdown" style="text-align: center;">
                        <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                            <span class="activity active"></span>
                            <img src="../images/user/1.png" height="40" width="40" alt=""><span class="nav-text" style="margin-left: 15px;">Asep Subagja</span>
                        </div>
                        <div class="dropdown-profile animated fadeIn dropdown-menu">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="#"><i class="icon-user"></i> <span>Profil</span></a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="keluar()"><i class="icon-key"></i> <span>Keluar</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="?page=home" aria-expanded="false">
                            <i class="icon-home menu-icon"></i><span class="nav-text">Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="?page=user" aria-expanded="false">
                            <i class="icon-people menu-icon"></i><span class="nav-text">Data Akun Pengguna</span>
                        </a>
                    </li>
                    <li>
                        <a href="?page=member" aria-expanded="false">
                            <i class="icon-user menu-icon"></i><span class="nav-text">Data Kandidat</span>
                        </a>
                    </li>
                    <li>
                        <a href="?page=voting" aria-expanded="false">
                            <i class="icon-pie-chart menu-icon"></i><span class="nav-text">Hasil Pemilihan</span>
                        </a>
                    </li>
                </ul>
                <hr></hr>
                <ul class="clearfix">                   
                    <li class="icons dropdown" style="text-align: center;">
                        <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                            <span class="activity active"></span>
                            <img src="../images/user/1.png" height="40" width="40" alt=""><span class="nav-text" style="margin-left: 15px;">Asep Subagja</span>
                        </div>
                        <div class="dropdown-profile animated fadeIn dropdown-menu">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="#"><i class="icon-user"></i> <span>Profil</span></a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="keluar()"><i class="icon-key"></i> <span>Keluar</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid mt-3">
            <?php
        <div class="content-body">
            <div class="container-fluid mt-3">
            <?php
                include '../inc/menu_admin.php';
            ?>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            ?>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
    <!--**********************************
        Scripts
    ***********************************-->
    <script src="../plugins/common/common.min.js"></script>
    <script src="../js/custom.min.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/gleek.js"></script>
    <script src="../js/styleSwitcher.js"></script>
    <script src="../plugins/common/common.min.js"></script>
    <script src="../js/custom.min.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/gleek.js"></script>
    <script src="../js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="../plugins/chart.js/Chart.bundle.min.js"></script>
    <script src="../js/plugins-init/chartjs-init.js"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    <!-- Datatables -->
    <script src="../datatables/js/jquery.dataTables.js"></script>
    <script src="../datatables/js/dataTables.bootstrap5.js"></script>
    <script src="../datatables/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
        $('#dataTables-example').dataTable();
        });
    </script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
        $('#example').dataTable( {
            "aaSorting": [[ 0, "asc" ]]
        } );
        } );
    </script>

    <!-- Sweet Alert -->
    <script src="../js/sweet-alert.min.js"></script>
    <script type="text/javascript">
        function keluar() {
        Swal.fire({
          title: 'Peringatan',
          text: 'Apakah anda yakin ingin keluar?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#d33',
          cancelButtonColor: '#3085d6',
          confirmButtonText: 'Ya, keluar!',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.isConfirmed) {
              var keluar = "../inc/logout.php";
              window.location.href = keluar;
          }
        })
        }
    </script>
    <!-- Chartjs -->
    <script src="../plugins/chart.js/Chart.bundle.min.js"></script>
    <script src="../js/plugins-init/chartjs-init.js"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    <!-- Datatables -->
    <script src="../datatables/js/jquery.dataTables.js"></script>
    <script src="../datatables/js/dataTables.bootstrap5.js"></script>
    <script src="../datatables/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
        $('#dataTables-example').dataTable();
        });
    </script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
        $('#example').dataTable( {
            "aaSorting": [[ 0, "asc" ]]
        } );
        } );
    </script>

    <!-- Sweet Alert -->
    <script src="../js/sweet-alert.min.js"></script>
    <script type="text/javascript">
        function keluar() {
        Swal.fire({
          title: 'Peringatan',
          text: 'Apakah anda yakin ingin keluar?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#d33',
          cancelButtonColor: '#3085d6',
          confirmButtonText: 'Ya, keluar!',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.isConfirmed) {
              var keluar = "../inc/logout.php";
              window.location.href = keluar;
          }
        })
        }
    </script>

    <script src="./js/dashboard/dashboard-1.js"></script>
    <script src="./js/dashboard/dashboard-1.js"></script>

</body>
</body>

</html>
</html>