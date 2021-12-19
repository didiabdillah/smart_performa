<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Aplikasi Smart Performa">
  <meta name="keywords" content="smart , ferforma, aplikasi, hr">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="<?= base_url() ?>assets/images/ico.png" type="image/x-icon">
  <link rel="shortcut icon" href="<?= base_url() ?>assets/images/ico.png" type="image/x-icon">
  <title>Smart Performa</title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
  <!-- Font Awesome-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/cuba/assets/css/fontawesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/cuba/assets/css/icofont.css">

  <!-- Rating css -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/cuba/assets/css/rating.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/cuba/assets/css/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/cuba/assets/css/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/cuba/assets/css/feather-icon.css">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/cuba/assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/cuba/assets/css/chartist.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/cuba/assets/css/date-picker.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/cuba/assets/css/prism.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/cuba/assets/css/photoswipe.css">
  <!-- Plugins css Ends-->

  <!-- Owlcarousel css -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/cuba/assets/css/owlcarousel.css">
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/cuba/assets/css/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/cuba/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/scrollbar.css">
  <link id="color" rel="stylesheet" href="<?= base_url() ?>assets/cuba/assets/css/color-2.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/cuba/assets/css/responsive.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/cuba/assets/css/datatables.css">

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="">
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>


</head>

<body>
  <div class="base-url" data-baseurl="<?= base_url(); ?>"></div>
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-main-header">
      <div class="main-header-right row m-0">

        <div class="main-header-left">
          <div class="logo-wrapper"><a href=""><img class="img-fluid" src=" " alt=""></a></div>
          <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="grid" id="sidebar-toggle"> </i></div>
        </div>
        <div class="left-menu-header col horizontal-wrapper pl-0">
          <ul class="horizontal-menu">
            <li class="mega-menu">
              <div class="mega-menu-container menu-content">
                <div class="container-fluid">

                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="nav-right col-8 pull-right right-menu">
          <ul class="nav-menus">


            <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
            <li class="profile-nav onhover-dropdown p-0">
              <div class="media profile-media"><img class="b-r-10" src="<?= base_url() ?>assets/cuba/assets/images/dashboard/profile.jpg" alt="">
                <div class="media-body"><span><?= $this->session->userdata('nama') ?></span>
                  <p class="mb-0 font-roboto">Option <i class="middle fa fa-angle-down"></i></p>
                </div>
              </div>
              <ul class="profile-dropdown onhover-show-div">

                <li><a href="<?= base_url() ?>Login/logout"><i data-feather="log-out"> </i><span>Log Out</span></a></li>
              </ul>
            </li>
          </ul>
        </div>
        <script id="result-template" type="text/x-handlebars-template">
          <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
        <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
      </div>
    </div>
    <!-- Page Header Ends   -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper sidebar-icon">
      <!-- Page Sidebar Start-->
      <header class="main-nav">
        <div class="logo-wrapper"><a href="<?= base_url() ?>"><img class="img-fluid for-light" src="<?= base_url() ?>assets/images/logo.png" alt="" width="100"><img class="img-fluid for-dark" src="<?= base_url() ?>assets/images/logo.png" alt=""></a>
          <div class="back-btn"><i class="fa fa-angle-left"></i></div>
          <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="grid" id="sidebar-toggle"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="<?= base_url() ?>" width="30" alt=""><img class="img-fluid for-dark" src="<?= base_url() ?>assets/images/ico.png" alt=""></a></div>
        <nav>
          <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">


              <ul class="nav-menu custom-scrollbar">
                <li class="back-btn"><a href="<?= base_url() ?>" width="30" alt=""></a>
                  <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                </li>
                <li class="sidebar-title">
                  <div>
                    <h6 class="lan-00">Menu</h6>
                  </div>
                </li>
                <li class="dropdown"><a class="nav-link menu-title link-nav" href="<?= base_url() ?>Dashboard/home"><i data-feather="home"></i><span class="lan-3">Dashboard</span>
                  </a>
                </li>
                <?php if ($this->session->userdata('role') == '1') { ?>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="<?= base_url() ?>Dashboard/analytical"><i data-feather="bar-chart-2"></i><span class="lan-0">Analytical Data</span>
                    </a>
                  </li>

                  <li class="dropdown"><a class="nav-link menu-title" href="#" data-original-title="" title=""><i data-feather="database"></i><span>Data Master</span>
                      <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: none;">
                      <li><a href="<?= base_url() ?>Dashboard/data_user" data-original-title="data-user" title="data-user">Data User</a></li>
                      <li><a href="<?= base_url() ?>Dashboard/data_jabatan" data-original-title="data-jabatan" title="data-jabatan">Data Jabatan</a></li>
                      <li><a href="<?= base_url() ?>Dashboard/data_unit" data-original-title="data-unit" title="data-unit">Data Unit</a></li>
                    </ul>
                  </li>

                <?php }
                if ($this->session->userdata('role') == '4') { ?>

                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="<?= base_url() ?>Pegawai/data_layanan" data-original-title="" title=""><i data-feather="check-square"></i><span>Permohonan Layanan</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="<?= base_url() ?>Pegawai/data_pekerjaan" data-original-title="" title=""><i data-feather="archive"></i><span>Daftar Pekerjaan</span></a></li>

                <?php }
                if ($this->session->userdata('role') == '2') {
                ?>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="<?= base_url() ?>Manager/list_pekerjaan" data-original-title="" title=""><i data-feather="archive"></i><span>List Pekerjaan</span></a></li>
                <?php } ?>
                <?php
                if ($this->session->userdata('role') == '3') {
                ?>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="<?= base_url() ?>Bag_sdm/list_pekerja" data-original-title="" title=""><i data-feather="archive"></i><span>List Pegawai</span></a></li>
                <?php } ?>
              </ul>

            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
          </div>


        </nav>
      </header>
      <!-- Page Sidebar Ends-->
      <?php echo $contents ?>

      <!-- footer start-->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 footer-copyright">
              <p class="mb-0">Copyright <?= date('Y') ?>© Smart Performa - All rights reserved.</p>
            </div>
            <div class="col-md-6">
              <p class="pull-right mb-0">Developed with <i class="fa fa-heart font-secondary"></i></p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- latest jquery-->
  <script src="<?= base_url() ?>assets/cuba/assets/js/jquery-3.5.1.min.js"></script>
  <!-- Bootstrap js-->
  <script src="<?= base_url() ?>assets/cuba/assets/js/bootstrap/popper.min.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/bootstrap/bootstrap.js"></script>
  <!-- feather icon js-->
  <script src="<?= base_url() ?>assets/cuba/assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/icons/feather-icon/feather-icon.js"></script>
  <!-- Sidebar jquery-->
  <script src="<?= base_url() ?>assets/cuba/assets/js/sidebar-menu.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/config.js"></script>
  <!-- Plugins JS start-->
  <!-- <script src="<?= base_url() ?>assets/cuba/assets/js/chart/chartist/chartist.js"></script>
    <script src="<?= base_url() ?>assets/cuba/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script> -->
  <script src="<?= base_url() ?>assets/cuba/assets/js/chart/knob/knob.min.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/chart/knob/knob-chart.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/chart/apex-chart/apex-chart.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/chart/apex-chart/stock-prices.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/chart/apex-chart/moment.min.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/notify/bootstrap-notify.min.js"></script>
  <!-- <script src="<?= base_url() ?>assets/cuba/assets/js/dashboard/default.js"></script> -->
  <script src="<?= base_url() ?>assets/cuba/assets/js/notify/index.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/datepicker/date-picker/datepicker.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/datepicker/date-picker/datepicker.en.js"></script>
  <!-- <script src="<?= base_url() ?>assets/cuba/assets/js/datepicker/date-picker/datepicker.custom.js"></script> -->
  <script src="<?= base_url() ?>assets/cuba/assets/js/typeahead/handlebars.js"></script>
  <!-- <script src="<?= base_url() ?>assets/cuba/assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="<?= base_url() ?>assets/cuba/assets/js/typeahead/typeahead.custom.js"></script> -->
  <!-- <script src="<?= base_url() ?>assets/cuba/assets/js/typeahead-search/handlebars.js"></script> -->
  <!-- <script src="<?= base_url() ?>assets/cuba/assets/js/typeahead-search/typeahead-custom.js"></script> -->
  <script src="<?= base_url() ?>assets/cuba/assets/js/photoswipe/photoswipe.min.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/photoswipe/photoswipe.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/photoswipe/photoswipe-ui-default.min.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/counter/jquery.waypoints.min.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/counter/jquery.counterup.min.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/counter/counter-custom.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/tooltip-init.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/prism/prism.min.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/clipboard/clipboard.min.js"></script>


  <!-- Knob js -->
  <script src="<?= base_url() ?>assets/cuba/assets/js/chart/knob/knob.min.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/chart/knob/knob-chart.js"></script>

  <script src="<?= base_url() ?>assets/cuba/assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/general-widget.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/height-equal.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="<?= base_url() ?>assets/cuba/assets/js/script.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/theme-customizer/customizer.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/chart/chartjs/chart.min.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/chart-widget.js"></script>

  <!-- Google Chart -->
  <script src="<?= base_url() ?>assets/cuba/assets/js/chart/google/google-chart-loader.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/chart/google/google-chart.js"></script>

  <!-- <script src="<?= base_url() ?>assets/cuba/assets/js/chart/chartjs/chart.custom.js"></script> -->

  <!-- Rating Script -->
  <script src="<?= base_url() ?>assets/cuba/assets/js/rating/jquery.barrating.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/rating/rating-script.js"></script>

  <!-- login js-->
  <!-- Plugin used-->

  <script src="<?= base_url() ?>assets/cuba/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/datatable/datatable-extension/dataTables.buttons.min.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/datatable/datatable-extension/jszip.min.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/datatable/datatable-extension/pdfmake.min.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/datatable/datatable-extension/buttons.colVis.min.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/datatable/datatable-extension/buttons.html5.min.js"></script>
  <script src="<?= base_url() ?>assets/cuba/assets/js/datatable/datatable-extension/vfs_fonts.js"></script>
  <!-- <script src="<?= base_url() ?>assets/cuba/assets/js/datatable/datatables/datatable.custom.js"></script> -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="<?= base_url() ?>assets/js/utils.js"></script>

  <!-- CHART JS -->
  <?php
  if ($this->session->userdata('role') == '1' && $this->uri->segment(1) == 'Dashboard' && $this->uri->segment(2) == 'analytical') { //Admin Chart Script
  ?>
    <!-- Overall Health Index -->
    <script>
      $(function() {
        $('.chart1').append('<canvas id="myChart1"></canvas>');

        $.ajax({
          url: "<?php echo base_url(); ?>/GraphAjax/overall_health_index",
          type: 'post',
          dataType: 'json',
          success: function(result) {

            const DATA_COUNT = 5;
            const NUMBER_CFG = {
              count: DATA_COUNT,
              min: 0,
              max: 100
            };

            const data = {
              labels: [
                'Buruk',
                'Baik'
              ],
              datasets: [{
                label: 'Overall Health Index',
                data: result,
                backgroundColor: [
                  'rgb(255, 99, 132)',
                  'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
              }]
            };
            const config = {
              type: 'doughnut',
              data: data,
            };

            const myChart = new Chart(
              document.getElementById('myChart1'),
              config
            );

          }
        });
      });
    </script>
    <!-- Task Completed -->
    <script>
      $(function() {
        $('.chart2').append('<canvas id="myChart2"></canvas>');

        $.ajax({
          url: "<?php echo base_url(); ?>/GraphAjax/task_completed",
          type: 'post',
          dataType: 'json',
          success: function(result) {
            const labels = [
              'Januari',
              'Februari',
              'Maret',
              'April',
              'Mei',
              'Juni',
              'Juli',
              'Agustus',
              'September',
              'Oktober',
              'November',
              'Desember',
            ];
            const data = {
              labels: labels,
              datasets: [{
                label: 'Task Completed',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: result,
              }]
            };
            const config = {
              type: 'line',
              data: data,
              options: {
                plugins: {
                  legend: {
                    display: false
                  }
                }
              }
            };

            const myChart = new Chart(
              document.getElementById('myChart2'),
              config
            );
          }
        });
      });
    </script>
    <!-- Task Incompleted -->
    <script>
      $(function() {
        $('.chart3').append('<canvas id="myChart3"></canvas>');

        $.ajax({
          url: "<?php echo base_url(); ?>/GraphAjax/task_incompleted",
          type: 'post',
          dataType: 'json',
          success: function(result) {
            const labels = [
              'Januari',
              'Februari',
              'Maret',
              'April',
              'Mei',
              'Juni',
              'Juli',
              'Agustus',
              'September',
              'Oktober',
              'November',
              'Desember',
            ];
            const data = {
              labels: labels,
              datasets: [{
                label: 'Task Incompleted',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: result,
              }]
            };
            const config = {
              type: 'line',
              data: data,
              options: {
                plugins: {
                  legend: {
                    display: false
                  }
                }
              }
            };

            const myChart = new Chart(
              document.getElementById('myChart3'),
              config
            );
          }
        });
      });
    </script>

    <!-- When Date Selected -->
    <script>
      //When Hosting Provider Option Clicked
      $(document).on('click', '.submit-select-date', function() {
        const tanggal = $('.select-date').val();


        // New Overall Health Index
        $('#myChart1').remove();
        $('.chart1').append('<canvas id="myChart1"></canvas>');

        // New Top 4 Performer Detail
        $('#topFourTable').remove();

        // New Task Completed
        $('#myChart2').remove();
        $('.chart2').append('<canvas id="myChart2"></canvas>');

        // New Task Incompleted
        $('#myChart3').remove();
        $('.chart3').append('<canvas id="myChart3"></canvas>');

      });
    </script>
  <?php
  } elseif ($this->session->userdata('role') == '1' && $this->uri->segment(1) == 'Dashboard' || $this->session->userdata('role') == '1' && $this->uri->segment(1) == 'Admin') { //Admin Chart Script
  ?>
    <!-- Overall Health Index -->
    <script>
      $(function() {
        $('.chart1').append('<canvas id="myChart1"></canvas>');

        $.ajax({
          url: "<?php echo base_url(); ?>/GraphAjax/overall_health_index",
          type: 'post',
          dataType: 'json',
          success: function(result) {

            const DATA_COUNT = 5;
            const NUMBER_CFG = {
              count: DATA_COUNT,
              min: 0,
              max: 100
            };

            const data = {
              labels: [
                'Buruk',
                'Baik'
              ],
              datasets: [{
                label: 'Overall Health Index',
                data: result,
                backgroundColor: [
                  'rgb(255, 99, 132)',
                  'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
              }]
            };
            const config = {
              type: 'doughnut',
              data: data,
            };

            const myChart = new Chart(
              document.getElementById('myChart1'),
              config
            );

          }
        });
      });
    </script>
    <!-- Overall Avg data -->
    <script>
      $(function() {
        $('.chart2').append('<canvas id="myChart2"></canvas>');

        $.ajax({
          url: "<?php echo base_url(); ?>/GraphAjax/overall_avg_data",
          type: 'post',
          dataType: 'json',
          success: function(result) {
            const labels = [
              'Avg Rating',
              'Avg Completion',
              'Avg Speed Completion',
            ];
            const data = {
              labels: labels,
              datasets: [{
                label: 'Avg data',
                backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(75, 192, 192)'],
                borderColor: 'rgb(255, 99, 132)',
                data: result,
              }]
            };
            const config = {
              type: 'bar',
              data: data,
              options: {
                responsive: true,
                plugins: {
                  legend: {
                    display: false,
                  },
                }
              },
            };
            const myChart = new Chart(
              document.getElementById('myChart2'),
              config
            );
          }
        });
      });
    </script>
    <!-- EMPLOYEE PERFORMANCE ANALYSIS -->
    <script>
      $(function() {
        $('.chart3').append('<canvas id="myChart3"></canvas>');
        $.ajax({
          url: "<?php echo base_url(); ?>/GraphAjax/overall_avg_data",
          type: 'post',
          dataType: 'json',
          success: function(result) {
            const labels = [
              'Avg Rating',
              'Avg Completion',
              'Avg Speed Completion',
            ];
            const data = {
              labels: labels,
              datasets: [{
                label: 'Avg data',
                backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(75, 192, 192)'],
                borderColor: 'rgb(255, 99, 132)',
                data: result,
              }]
            };
            const config = {
              type: 'bar',
              data: data,
              options: {
                responsive: true,
                plugins: {
                  legend: {
                    display: false,
                  },
                }
              },
            };
            const myChart = new Chart(
              document.getElementById('myChart3'),
              config
            );
          }
        });
      });

      //When Hosting Provider Option Clicked
      $(document).on('change', '.option-karyawan', function() {
        const karyawan_id = $(this).children("option:selected").val();

        $('#myChart3').remove();
        $('.chart3').append('<canvas id="myChart3"></canvas>');

        if (karyawan_id) {
          $.ajax({
            url: "<?php echo base_url(); ?>/GraphAjax/select_employee_performance_analysis",
            type: 'post',
            dataType: 'json',
            data: {
              karyawan_id: karyawan_id
            },
            success: function(result) {
              const labels = [
                'Avg Rating',
                'Avg Completion',
                'Avg Speed Completion',
              ];
              const data = {
                labels: labels,
                datasets: [{
                  label: 'EMPLOYEE PERFORMANCE ANALYSIS',
                  backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(75, 192, 192)'],
                  borderColor: 'rgb(255, 99, 132)',
                  data: result,
                }]
              };
              const config = {
                type: 'bar',
                data: data,
                options: {
                  responsive: true,
                  plugins: {
                    legend: {
                      display: false,
                    },
                  }
                },
              };
              const myChart = new Chart(
                document.getElementById('myChart3'),
                config
              );
            }
          });
        } else {
          $.ajax({
            url: "<?php echo base_url(); ?>/GraphAjax/overall_avg_data",
            type: 'post',
            dataType: 'json',
            success: function(result) {
              const labels = [
                'Avg Rating',
                'Avg Completion',
                'Avg Speed Completion',
              ];
              const data = {
                labels: labels,
                datasets: [{
                  label: 'Avg data',
                  backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(75, 192, 192)'],
                  borderColor: 'rgb(255, 99, 132)',
                  data: result,
                }]
              };
              const config = {
                type: 'bar',
                data: data,
                options: {
                  responsive: true,
                  plugins: {
                    legend: {
                      display: false,
                    },
                  }
                },
              };
              const myChart = new Chart(
                document.getElementById('myChart3'),
                config
              );
            }
          });
        }
      });
    </script>
  <?php
  } else  if ($this->session->userdata('role') == '2' && $this->uri->segment(1) == 'Dashboard' || $this->session->userdata('role') == '2' && $this->uri->segment(1) == 'Manager') { //Manager Chart Script
  ?>
    <!-- Overall Health Index -->
    <script>
      $(function() {
        $('.chart1').append('<canvas id="myChart1"></canvas>');

        $.ajax({
          url: "<?php echo base_url(); ?>/GraphAjax/overall_health_index",
          type: 'post',
          dataType: 'json',
          success: function(result) {

            const DATA_COUNT = 5;
            const NUMBER_CFG = {
              count: DATA_COUNT,
              min: 0,
              max: 100
            };

            const data = {
              labels: [
                'Buruk',
                'Baik'
              ],
              datasets: [{
                label: 'Overall Health Index',
                data: result,
                backgroundColor: [
                  'rgb(255, 99, 132)',
                  'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
              }]
            };
            const config = {
              type: 'doughnut',
              data: data,
            };

            const myChart = new Chart(
              document.getElementById('myChart1'),
              config
            );

          }
        });
      });
    </script>
    <!-- Overall Avg data -->
    <script>
      $(function() {
        $('.chart2').append('<canvas id="myChart2"></canvas>');

        $.ajax({
          url: "<?php echo base_url(); ?>/GraphAjax/overall_avg_data",
          type: 'post',
          dataType: 'json',
          success: function(result) {
            const labels = [
              'Avg Rating',
              'Avg Completion',
              'Avg Speed Completion',
            ];
            const data = {
              labels: labels,
              datasets: [{
                label: 'Avg data',
                backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(75, 192, 192)'],
                borderColor: 'rgb(255, 99, 132)',
                data: result,
              }]
            };
            const config = {
              type: 'bar',
              data: data,
              options: {
                responsive: true,
                plugins: {
                  legend: {
                    display: false,
                  },
                }
              },
            };
            const myChart = new Chart(
              document.getElementById('myChart2'),
              config
            );
          }
        });
      });
    </script>
    <!-- EMPLOYEE PERFORMANCE ANALYSIS -->
    <script>
      $(function() {
        $('.chart3').append('<canvas id="myChart3"></canvas>');
        $.ajax({
          url: "<?php echo base_url(); ?>/GraphAjax/overall_avg_data",
          type: 'post',
          dataType: 'json',
          success: function(result) {
            const labels = [
              'Avg Rating',
              'Avg Completion',
              'Avg Speed Completion',
            ];
            const data = {
              labels: labels,
              datasets: [{
                label: 'Avg data',
                backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(75, 192, 192)'],
                borderColor: 'rgb(255, 99, 132)',
                data: result,
              }]
            };
            const config = {
              type: 'bar',
              data: data,
              options: {
                responsive: true,
                plugins: {
                  legend: {
                    display: false,
                  },
                }
              },
            };
            const myChart = new Chart(
              document.getElementById('myChart3'),
              config
            );
          }
        });
      });
    </script>
  <?php
  } elseif ($this->session->userdata('role') == '3' && $this->uri->segment(1) == 'Dashboard') {
  ?>
    <!-- Overall Health Index -->
    <script>
      $(function() {
        $('.chart1').append('<canvas id="myChart1"></canvas>');

        $.ajax({
          url: "<?php echo base_url(); ?>/GraphAjax/overall_health_index",
          type: 'post',
          dataType: 'json',
          success: function(result) {

            const DATA_COUNT = 5;
            const NUMBER_CFG = {
              count: DATA_COUNT,
              min: 0,
              max: 100
            };

            const data = {
              labels: [
                'Buruk',
                'Baik'
              ],
              datasets: [{
                label: 'Overall Health Index',
                data: result,
                backgroundColor: [
                  'rgb(255, 99, 132)',
                  'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
              }]
            };
            const config = {
              type: 'doughnut',
              data: data,
            };

            const myChart = new Chart(
              document.getElementById('myChart1'),
              config
            );

          }
        });
      });
    </script>
    <!-- Overall Avg data -->
    <script>
      $(function() {
        $('.chart2').append('<canvas id="myChart2"></canvas>');

        $.ajax({
          url: "<?php echo base_url(); ?>/GraphAjax/overall_avg_data",
          type: 'post',
          dataType: 'json',
          success: function(result) {
            const labels = [
              'Avg Rating',
              'Avg Completion',
              'Avg Speed Completion',
            ];
            const data = {
              labels: labels,
              datasets: [{
                label: 'Avg data',
                backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(75, 192, 192)'],
                borderColor: 'rgb(255, 99, 132)',
                data: result,
              }]
            };
            const config = {
              type: 'bar',
              data: data,
              options: {
                responsive: true,
                plugins: {
                  legend: {
                    display: false,
                  },
                }
              },
            };
            const myChart = new Chart(
              document.getElementById('myChart2'),
              config
            );
          }
        });
      });
    </script>
    <!-- EMPLOYEE PERFORMANCE ANALYSIS -->
    <script>
      $(function() {
        $('.chart3').append('<canvas id="myChart3"></canvas>');
        $.ajax({
          url: "<?php echo base_url(); ?>/GraphAjax/overall_avg_data",
          type: 'post',
          dataType: 'json',
          success: function(result) {
            const labels = [
              'Avg Rating',
              'Avg Completion',
              'Avg Speed Completion',
            ];
            const data = {
              labels: labels,
              datasets: [{
                label: 'Avg data',
                backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(75, 192, 192)'],
                borderColor: 'rgb(255, 99, 132)',
                data: result,
              }]
            };
            const config = {
              type: 'bar',
              data: data,
              options: {
                responsive: true,
                plugins: {
                  legend: {
                    display: false,
                  },
                }
              },
            };
            const myChart = new Chart(
              document.getElementById('myChart3'),
              config
            );
          }
        });
      });

      //When Hosting Provider Option Clicked
      $(document).on('change', '.option-karyawan', function() {
        const karyawan_id = $(this).children("option:selected").val();

        $('#myChart3').remove();
        $('.chart3').append('<canvas id="myChart3"></canvas>');

        if (karyawan_id) {
          $.ajax({
            url: "<?php echo base_url(); ?>/GraphAjax/select_employee_performance_analysis",
            type: 'post',
            dataType: 'json',
            data: {
              karyawan_id: karyawan_id
            },
            success: function(result) {
              const labels = [
                'Avg Rating',
                'Avg Completion',
                'Avg Speed Completion',
              ];
              const data = {
                labels: labels,
                datasets: [{
                  label: 'EMPLOYEE PERFORMANCE ANALYSIS',
                  backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(75, 192, 192)'],
                  borderColor: 'rgb(255, 99, 132)',
                  data: result,
                }]
              };
              const config = {
                type: 'bar',
                data: data,
                options: {
                  responsive: true,
                  plugins: {
                    legend: {
                      display: false,
                    },
                  }
                },
              };
              const myChart = new Chart(
                document.getElementById('myChart3'),
                config
              );
            }
          });
        } else {
          $.ajax({
            url: "<?php echo base_url(); ?>/GraphAjax/overall_avg_data",
            type: 'post',
            dataType: 'json',
            success: function(result) {
              const labels = [
                'Avg Rating',
                'Avg Completion',
                'Avg Speed Completion',
              ];
              const data = {
                labels: labels,
                datasets: [{
                  label: 'Avg data',
                  backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(75, 192, 192)'],
                  borderColor: 'rgb(255, 99, 132)',
                  data: result,
                }]
              };
              const config = {
                type: 'bar',
                data: data,
                options: {
                  responsive: true,
                  plugins: {
                    legend: {
                      display: false,
                    },
                  }
                },
              };
              const myChart = new Chart(
                document.getElementById('myChart3'),
                config
              );
            }
          });
        }
      });
    </script>
  <?php
  } elseif ($this->session->userdata('role') == '3' && $this->uri->segment(1) == 'Dashboard' || $this->session->userdata('role') == '3' && $this->uri->segment(1) == 'Bag_sdm') {
  ?>
    <script>
      $(function() {
        $('.chart2').append('<canvas id="myChart2"></canvas>');

        const labels = [
          'Januari',
          'Februari',
          'Maret',
          'April',
          'Mei',
          'June',
          'Juli',
          'Agustus',
          'September',
          'Oktober',
          'November',
          'Desember',
        ];
        const data = {
          labels: labels,
          datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [
              <?php if ($sukses['bulan'] == 1) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 2) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 3) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 4) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 5) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 6) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 7) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 8) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 9) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 10) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 11) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 12) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>
            ],
          }]
        };
        const config = {
          type: 'line',
          data: data,
          options: {
            plugins: {
              legend: {
                display: false
              }
            }
          }
        };

        const myChart = new Chart(
          document.getElementById('myChart2'),
          config
        );
      });
    </script>
    <script>
      $(function() {
        $('.chart3').append('<canvas id="myChart3"></canvas>');

        const labels = [
          'Januari',
          'Februari',
          'Maret',
          'April',
          'Mei',
          'Juni',
          'Juli',
          'Agustus',
          'September',
          'Oktober',
          'November',
          'Desember',
        ];
        const data = {
          labels: labels,
          datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [
              <?php if ($failed['bulan'] == 1) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 2) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 3) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 4) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 5) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 6) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 7) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 8) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 9) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 10) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 11) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 12) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>
            ],
          }]
        };
        const config = {
          type: 'line',
          data: data,
          options: {
            plugins: {
              legend: {
                display: false
              }
            }
          }
        };

        const myChart = new Chart(
          document.getElementById('myChart3'),
          config
        );
      });
    </script>
    <script>
      $(function() {
        $('.chart4').append('<canvas id="myChart4"></canvas>');
        const labels = ['Completed', 'Incompleted'];
        const data = {
          labels: labels,
          datasets: [{
            label: 'Total',
            data: [<?= $beres['completed'] ?>, <?= $ongoing['ongoing'] ?>],
            borderColor: 'rgb(255, 99, 132)',
            backgroundColor: 'rgb(255, 99, 132)',
          }, ]
        };
        const config = {
          type: 'bar',
          data: data,
          options: {
            responsive: true,
            plugins: {
              legend: {
                display: false,
              },
              title: {
                display: true,
              }
            }
          },
        };
        const myChart = new Chart(
          document.getElementById('myChart4'),
          config
        );
      });
    </script>

  <?php
  } elseif ($this->session->userdata('role') == '3' && $this->uri->segment(3) == 'Bag_sdm' || $this->session->userdata('role') == '3' && $this->uri->segment(1) == 'Bag_sdm') {
  ?>
    <!-- Overall Health Index -->
    <script>
      $(function() {
        $('.chart2').append('<canvas id="myChart2"></canvas>');

        const labels = [
          'Januari',
          'Februari',
          'Maret',
          'April',
          'Mei',
          'June',
          'Juli',
          'Agustus',
          'September',
          'Oktober',
          'November',
          'Desember',
        ];
        const data = {
          labels: labels,
          datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [
              <?php if ($sukses['bulan'] == 1) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 2) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 3) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 4) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 5) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 6) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 7) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 8) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 9) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 10) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 11) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($sukses['bulan'] == 12) : ?> <?= $sukses['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>
            ],
          }]
        };
        const config = {
          type: 'line',
          data: data,
          options: {
            plugins: {
              legend: {
                display: false
              }
            }
          }
        };

        const myChart = new Chart(
          document.getElementById('myChart2'),
          config
        );
      });
    </script>
    <script>
      $(function() {
        $('.chart3').append('<canvas id="myChart3"></canvas>');

        const labels = [
          'Januari',
          'Februari',
          'Maret',
          'April',
          'Mei',
          'Juni',
          'Juli',
          'Agustus',
          'September',
          'Oktober',
          'November',
          'Desember',
        ];
        const data = {
          labels: labels,
          datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [
              <?php if ($failed['bulan'] == 1) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 2) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 3) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 4) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 5) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 6) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 7) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 8) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 9) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 10) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 11) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>,
              <?php if ($failed['bulan'] == 12) : ?> <?= $failed['jumlah'] ?> <?php else : ?> 0 <?php endif; ?>
            ],
          }]
        };
        const config = {
          type: 'line',
          data: data,
          options: {
            plugins: {
              legend: {
                display: false
              }
            }
          }
        };

        const myChart = new Chart(
          document.getElementById('myChart3'),
          config
        );
      });
    </script>
    <script>
      $(function() {
        $('.chart4').append('<canvas id="myChart4"></canvas>');
        const labels = ['Completed', 'Incompleted'];
        const data = {
          labels: labels,
          datasets: [{
            label: 'Total',
            data: [<?= $beres['completed'] ?>, <?= $ongoing['ongoing'] ?>],
            borderColor: 'rgb(255, 99, 132)',
            backgroundColor: 'rgb(255, 99, 132)',
          }, ]
        };
        const config = {
          type: 'bar',
          data: data,
          options: {
            responsive: true,
            plugins: {
              legend: {
                display: false,
              },
              title: {
                display: true,
              }
            }
          },
        };
        const myChart = new Chart(
          document.getElementById('myChart4'),
          config
        );
      });
    </script>
  <?php } ?>
  <!-- END CHART JS -->

  <?php if ($this->uri->segment(1) == 'Dashboard'  && $this->uri->segment(2) == 'data_user') {
    $this->load->view('ajax/users');
  } elseif ($this->uri->segment(1) == 'Dashboard'  && $this->uri->segment(2) == 'data_unit') {
    $this->load->view('ajax/unit');
  } elseif ($this->uri->segment(1) == 'Dashboard'  && $this->uri->segment(2) == 'data_jabatan') {
    $this->load->view('ajax/jabatan');
  } elseif ($this->uri->segment(1) == 'Pegawai'  && $this->uri->segment(2) == 'data_layanan') {
    $this->load->view('ajax/layanan');
  } elseif ($this->uri->segment(1) == 'Pegawai'  && $this->uri->segment(2) == 'data_pekerjaan') {
    $this->load->view('ajax/layanan');
  } elseif ($this->uri->segment(1) == 'Pegawai'  && $this->uri->segment(2) == 'data_pekerjaan') {
    $this->load->view('ajax/layanan');
  } elseif ($this->uri->segment(1) == 'Manager'  && $this->uri->segment(2) == 'list_pekerjaan') {
    $this->load->view('ajax/manager');
  } elseif ($this->uri->segment(1) == 'Bag_sdm'  && $this->uri->segment(2) == 'list_pekerja') {
    $this->load->view('ajax/sdm');
  }
  ?>


</body>

</html>





<!-- Bootstrap modal -->
<div class="modal fade" id="modal_ganti" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <h3 class="modal-title">Data Form</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form2" class="needs-validation was-validated" novalidate="">
          <input type="hidden" value="" name="id" />
          <div class="form-body">

            <div class="col-md-12 mb-5">
              <label for="validationTooltip0x">Password</label>
              <input class="form-control" id="validationTooltip0x" type="password" placeholder="password " required="true" data-original-title="password" title="Masukan nomor hp" name="password">
              <div class="invalid-tooltip">Pastikan password diisi</div>
            </div>



          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->