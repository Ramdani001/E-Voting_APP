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
        Preloader end
    ********************-->


 <!--**********************************
        Main wrapper start
    ***********************************-->
 <div id="main-wrapper">

     <!--**********************************
            Nav header start
        ***********************************-->
     <div class="nav-header">
         <div class="brand-logo">
             <a href="index.html">
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
                 <ul class="clearfix">
                     <li class="icons dropdown">
                         <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                             <span class="activity active"></span>
                             <img src="images/user/1.png" height="40" width="40" alt="">
                         </div>
                         <a class="log-user">
                             <span>Asep Rohmat</span>
                         </a>
                         <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                             <div class="dropdown-content-body">
                                 <ul>
                                     <li>
                                         <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                     </li>
                                     <li>
                                         <a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
     <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

     <!--**********************************
            Sidebar start
        ***********************************-->
     <div class="nk-sidebar">
         <div class="nk-nav-scroll">
             <ul class="metismenu" id="menu">
                 <li>
                     <a href="?page=home" aria-expanded="false">
                         <i class="icon-badge menu-icon"></i><span class="nav-text">Beranda</span>
                     </a>
                 </li>
                 <li>
                     <a href="?page=member" aria-expanded="false">
                         <i class="icon-badge menu-icon"></i><span class="nav-text">Data Anggota</span>
                     </a>
                 </li>
             </ul>
             <ul class="metismenu" style="padding-top:5rem;">
                 <li>
                     <a href="?page=home" aria-expanded="false">
                         <i class="icon-badge menu-icon"></i><span class="nav-text">Beranda</span>
                     </a>
                 </li>
             </ul>
         </div>
     </div>
     <!--**********************************
            Sidebar end
        ***********************************-->

     <!--**********************************
            Content body start
        ***********************************-->
     <div class="content-body">
         <div class="container-fluid mt-3">
             <?php
                include '../inc/menu_admin.php';
                ?>
         </div>
         <!-- #/ container -->
     </div>
     <!--**********************************
            Content body end
        ***********************************-->


     <!--**********************************
            Footer start
        ***********************************-->
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
        Main wrapper end
    ***********************************-->

 <!--**********************************
        Scripts
    ***********************************-->
 <script src="plugins/common/common.min.js"></script>
 <script src="js/custom.min.js"></script>
 <script src="js/settings.js"></script>
 <script src="js/gleek.js"></script>
 <script src="js/styleSwitcher.js"></script>

 <!-- Chartjs -->
 <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
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



 <script src="./js/dashboard/dashboard-1.js"></script>

 </body>

 </html>