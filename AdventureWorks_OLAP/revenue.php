<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Adventureworks - Revenue</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!--tika-->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <!-- <link rel="stylesheet" href="/drilldown.css"/> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <!---->
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                <div class="sidebar-brand-text mx-3">Adventureworks</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Chart Menu
            </div>

            <li class="nav-item active">
                <a class="nav-link" href="revenue.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Revenue Chart</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="salesamount.php">
                    <i class="fa fa-balance-scale"></i>
                    <span>Sales Amount Chart</span>
                </a>
            </li>

            <!-- <li class="nav-item">
                <a class="nav-link" href="customer.php">
                    <i class="fas fa-store"></i>
                    <span>Customer Chart</span>
                </a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Addons
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Charts -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            Nav Item - Tables
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> -->

            <!-- Divider -->
            <!-- <hr class="sidebar-divider d-none d-md-block"> -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <div class="input-group"
                        style="margin-left: 10px; color: #000000; font-weight: 500; font-size: 15pt">
                        Welcome, Admin!
                    </div>
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Revenue</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Pendapatan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php  
                                                 $host       = "localhost";
                                                 $user       = "root";
                                                 $password   = "";
                                                 $database   = "aw_wh";
                                                 $mysqli     = mysqli_connect($host, $user, $password, $database);

                                                 $sql = "SELECT SUM(Revenue) as revenue from fact_revenue";
                                                 $query = mysqli_query($mysqli,$sql);
                                                 while($row2=mysqli_fetch_array($query)){
                                                    echo "$".number_format($row2['revenue'],0,".",",");
                                                 }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Rata-rata Pendapatan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                          $sql = "SELECT AVG(Revenue) as revenue from fact_revenue";
                                          $query = mysqli_query($mysqli,$sql);
                                          while($row2=mysqli_fetch_array($query)){
                                             echo "$".number_format($row2['revenue'],0,".",",");
                                          }
                                         ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <!-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Customer Tahun Ini
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                    
                                                    </div>
                                                </div>
                                                <div class="col">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->



                        <!-- Content Row -->

                        <div class="row">
                            <!--nia-->
                            <!-- Area Chart -->
                            <div class="col-xl-10 col-lg-10">
                                <div class="card shadow mb-4" style="height: 700px;">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Total Revenue  2011-2014</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div id="chartContainer" style="width: 1000px; height: 600px;"></div>
                                        <div>
                                            <canvas id="myAreaChart"></canvas>
                                            <script>
                                            <?php
                                            // Mendapatkan data utama dari database MySQL
                                            include 'koneksi.php';
                                            include 'revwaktu.php';
                                            ?>

                                            // Membuat grafik dengan interaksi drilldown
                                            var chart = Highcharts.chart('chartContainer', {
                                                chart: {
                                                    type: 'area',
                                                    options3d: {
                                                        enabled: true,
                                                        alpha: 15,
                                                        beta: 15,
                                                        depth: 50,
                                                        viewDistance: 25
                                                    }
                                                },
                                                title: {
                                                    text: 'Total Revenue 2011 - 2014'
                                                },
                                                plotOptions: {
                                                    series: {
                                                        dataLabels: {
                                                            enabled: true,
                                                            format: '{point.name} : ${point.y}'
                                                        }
                                                    }
                                                },
                                                xAxis: {
                                                    categories: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
                                                    title: {
                                                        text: 'Tahun'
                                                    },
                                                    gridLineWidth: 1,
                                                    lineWidth: 0
                                                },
                                                yAxis: {
                                                title: {
                                                    text: 'Total Revenue'
                                                },
                                                labels: {
                                                formatter: function () {
                                                    return Highcharts.numberFormat(this.value / 1000000, 1) + 'M';
                                                }
                                                }
                                                },
                                                legend: {
                                                    enabled: false
                                                },
                                                series: [{
                                                    name: 'Tahun',
                                                    colorByPoint: true,
                                                    data: mainChartData
                                                }],
                                                drilldown: {
                                                    series: drilldownChartData
                                                }
                                            });

                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--nia-->

                            <!--tika-->
                            <!-- Pie Chart -->
                            <div class="col-xl-10 col-lg-10">
                                <div class="card shadow mb-4" style="height: 700px;">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Total Revenue Category - Product
                                        </h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div id="chartContainer1" style="width: 1000px; height: 600px;"></div>
                                        <div>
                                            <canvas id="myAreaChart"></canvas>
                                            <script>
                                            <?php
                                            // Mendapatkan data utama dari database MySQL
                                            include 'koneksi.php';
                                            include 'revproduct.php';
                                            ?>

                                            // Membuat grafik dengan interaksi drilldown
                                            var chart = Highcharts.chart('chartContainer1', {
                                                chart: {
                                                    type: 'bar',
                                                    options3d: {
                                                        enabled: true,
                                                        alpha: 15,
                                                        beta: 15,
                                                        depth: 50,
                                                        viewDistance: 25
                                                    }
                                                },
                                                title: {
                                                    text: 'Total Revenue Category - Product'
                                                },
                                                plotOptions: {
                                                    series: {
                                                        dataLabels: {
                                                            enabled: true,
                                                            format: '{point.name} : ${point.y}'
                                                        }
                                                    }
                                                },
                                                xAxis: {
                                                    categories: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
                                                    title: {
                                                        text: 'Category'
                                                    },
                                                    gridLineWidth: 1,
                                                    lineWidth: 0
                                                },
                                                yAxis: {
                                                title: {
                                                    text: 'Total Revenue'
                                                },
                                                labels: {
                                                formatter: function () {
                                                    return Highcharts.numberFormat(this.value / 1000000, 1) + 'M';
                                                }
                                                }
                                                },
                                                legend: {
                                                    enabled: false
                                                },
                                                series: [{
                                                    name: 'Category Product',
                                                    colorByPoint: true,
                                                    data: mainChartData
                                                }],
                                                drilldown: {
                                                    series: drilldownChartData
                                                }
                                            });

                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-10 col-lg-10">
                                <div class="card shadow mb-4" style="height: 700px;">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Total Revenue Wilayah
                                        </h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div id="chartContainer2" style="width: 1000px; height: 600px;"></div>
                                        <div>
                                            <canvas id="myAreaChart"></canvas>
                                            <script>
                                            <?php
                                            // Mendapatkan data utama dari database MySQL
                                            include 'koneksi.php';
                                            include 'revwilayah.php';
                                            ?>

                                            // Membuat grafik dengan interaksi drilldown
                                            var chart = Highcharts.chart('chartContainer2', {
                                                chart: {
                                                    type: 'pie',
                                                    options3d: {
                                                        enabled: true,
                                                        alpha: 15,
                                                        beta: 15,
                                                        depth: 50,
                                                        viewDistance: 25
                                                    }
                                                },
                                                title: {
                                                    text: 'Total Revenue Wilayah'
                                                },
                                                plotOptions: {
                                                    series: {
                                                        dataLabels: {
                                                            enabled: true,
                                                            format: '{point.name} : ${point.sales} : {point.y}%'
                                                        }
                                                    }
                                                },
                                                legend: {
                                                    enabled: false
                                                },
                                                series: [{
                                                    name: 'Benua',
                                                    colorByPoint: true,
                                                    data: mainChartData
                                                }],
                                                drilldown: {
                                                    series: drilldownChartData
                                                }
                                            });

                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-10 col-lg-10">
                                <div class="card shadow mb-4" style="height: 700px;">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Total Revenue Perbandingan Ship Method
                                        </h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div id="chartContainer7" style="width: 1000px; height: 600px;"></div>
                                        <div>
                                            <canvas id="myAreaChart"></canvas>
                                            <script>
                                            <?php
                                            // Mendapatkan data utama dari database MySQL
                                            include 'koneksi.php';
                                            include 'revwaktusp.php';
                                            ?>

                                            // Membuat grafik dengan interaksi drilldown
                                            var chart = Highcharts.chart('chartContainer7', {
                                                chart: {
                                                    type: 'column',
                                                    options3d: {
                                                        enabled: true,
                                                        alpha: 15,
                                                        beta: 15,
                                                        depth: 50,
                                                        viewDistance: 25
                                                    }
                                                },
                                                title: {
                                                    text: 'Total Revenue Perbandingan Ship Method'
                                                },
                                                plotOptions: {
                                                    series: {
                                                        dataLabels: {
                                                            enabled: true,
                                                            format: '{point.name} : ${point.y}'
                                                        }
                                                    }
                                                },
                                                xAxis: {
                                                    categories: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
                                                    title: {
                                                        text: 'Shipment Method'
                                                    },
                                                    gridLineWidth: 1,
                                                    lineWidth: 0
                                                },
                                                yAxis: {
                                                title: {
                                                    text: 'Total Revenue'
                                                },
                                                labels: {
                                                formatter: function () {
                                                    return Highcharts.numberFormat(this.value / 1000000, 1) + 'M';
                                                }
                                                }
                                                },
                                                legend: {
                                                    enabled: false
                                                },
                                                series: [{
                                                    name: 'Ship Method',
                                                    colorByPoint: true,
                                                    data: mainChartData
                                                }],
                                                drilldown: {
                                                    series: drilldownChartData
                                                }
                                            });

                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-10 col-lg-10">
                                <div class="card shadow mb-4" style="height: 700px;">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Total Revenue Perbandingan Special Offer
                                        </h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div id="chartContainer8" style="width: 1000px; height: 600px;"></div>
                                        <div>
                                            <canvas id="myAreaChart"></canvas>
                                            <script>
                                            <?php
                                            // Mendapatkan data utama dari database MySQL
                                            include 'koneksi.php';
                                            include 'revwaktusp.php';
                                            ?>

                                            // Membuat grafik dengan interaksi drilldown
                                            var chart = Highcharts.chart('chartContainer8', {
                                                chart: {
                                                    type: 'bar',
                                                    options3d: {
                                                        enabled: true,
                                                        alpha: 15,
                                                        beta: 15,
                                                        depth: 50,
                                                        viewDistance: 25
                                                    }
                                                },
                                                title: {
                                                    text: 'Total Revenue Perbandingan Special Offer'
                                                },
                                                plotOptions: {
                                                    series: {
                                                        dataLabels: {
                                                            enabled: true,
                                                            format: '{point.name} : ${point.y}'
                                                        }
                                                    }
                                                },
                                                xAxis: {
                                                    categories: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14'],
                                                    title: {
                                                        text: 'Special Offers'
                                                    },
                                                    gridLineWidth: 1,
                                                    lineWidth: 0
                                                },
                                                yAxis: {
                                                title: {
                                                    text: 'Total Revenue'
                                                },
                                                labels: {
                                                formatter: function () {
                                                    return Highcharts.numberFormat(this.value / 1000000, 1) + 'M';
                                                }
                                                }
                                                },
                                                legend: {
                                                    enabled: false
                                                },
                                                series: [{
                                                    name: 'Special Offer',
                                                    colorByPoint: true,
                                                    data: mainChartData2
                                                }],
                                                drilldown: {
                                                    series: drilldownChartData
                                                }
                                            });

                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>
                            <!--tika-->

                            <!--anggik-->
                            <!-- Bar Chart -->
                        </div>
                    </div>
                    <!--anggik-->
                </div>
                <!--anggik-->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!--tika-->
    <script>
        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data:<?php echo json_encode($customer); ?>,
                    backgroundColor: [
                    '#050A30',
                    '#000C66',
                    '#003060',
                    '#1E5162',
                    '#055C9D',
                    '#296E85',
                    '#338BA8',
                    '#A4E5E0',
                    '#C3E0E5',
                    '#7DA1BF',
                    '#ADD8E6',
                    '#BFD7ED',
                    '#D6DDE0',
                    '#CADEDF',
                    '#EBEBE8',
                    '#EAFBFF',
                ],
                    label: 'Presentase Lama Pinjam Customer'
                }],
            labels: <?php echo json_encode($jenis_lamapinjam); ?>},
        options: {
            responsive: true
        }
        };

        window.onload = function () {
            var ctx = document.getElementById('chart-area').getContext('2d');
            window.myPie = new Chart(ctx, config);
        };

        document.getElementById('randomizeData').addEventListener('click', function () {
            config.data.datasets.forEach(function (dataset) {
                dataset.data = dataset.data.map(function () {
                    return randomScalingFactor();
                });
            });

            window.myPie.update();
        });

        var colorNames = Object.keys(window.chartColors);
        document.getElementById('addDataset').addEventListener('click', function () {
            var newDataset = {
                backgroundColor: [],
                data: [],
                label: 'New dataset ' + config.data.datasets.length,
            };

            for (var index = 0; index < config.data.labels.length; ++index) {
                newDataset.data.push(randomScalingFactor());

                var colorName = colorNames[index % colorNames.length];
                var newColor = window.chartColors[colorName];
                newDataset.backgroundColor.push(newColor);
            }

            config.data.datasets.push(newDataset);
            window.myPie.update();
        });

        document.getElementById('removeDataset').addEventListener('click', function () {
            config.data.datasets.splice(0, 1);
            window.myPie.update();
        });
    </script>
    <!--tika-->
    <!--nia-->
    <!-- Page level custom scripts -->
    <script type="text/javascript">
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';

        function number_format(number, decimals, dec_point, thousands_sep) {
            // *     example: number_format(1234.56, 2, ',', ' ');
            // *     return: '1 234,56'
            number = (number + '').replace(',', '').replace(' ', '');
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function (n, prec) {
                    var k = Math.pow(10, prec);
                    return '' + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
        }

        // Area Chart Example
        <?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "adventureworkswh";
        $conn = mysqli_connect($host, $user, $password, $database);
        $bulan = "SELECT CONCAT(MONTHNAME(t.tanggallengkap), ' ', YEAR(t.tanggallengkap)) bulan FROM fakta_pendapatan f JOIN time t ON f.time_id=t.time_id GROUP BY t.bulan ORDER BY t.tanggallengkap";
        $customer = "SELECT COUNT(f.customer_id) customer FROM fakta_pendapatan f JOIN time t ON f.time_id=t.time_id GROUP BY t.bulan ORDER BY t.tanggallengkap";
        $i = 1;
        $query_bulan = mysqli_query($conn, $bulan);
        $jumlah_bulan = mysqli_num_rows($query_bulan);
        $chart_bulan = "";
        while ($row = mysqli_fetch_array($query_bulan)) {
            if ($i < $jumlah_bulan) {
                $chart_bulan.= '"';
                $chart_bulan.= $row['bulan'];
                $chart_bulan.= '",';
                $i++;
            } else {
                $chart_bulan.= '"';
                $chart_bulan.= $row['bulan'];
                $chart_bulan.= '"';
            }
        }
        $a = 1;
        $query_customer = mysqli_query($conn, $customer);
        $jumlah_customer = mysqli_num_rows($query_customer);
        $chart_customer = "";
        while ($row1 = mysqli_fetch_array($query_customer)) {
            if ($a < $jumlah_customer) {
                $chart_customer.= $row1['customer'];
                $chart_customer.= ',';
                $a++;
            } else {
                $chart_customer.= $row1['customer'];
            }
        }
        ?>
        var ctx = document.getElementById("myAreaChart");
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?php echo $chart_bulan; ?>],
            datasets: [{
                label: "Jumlah Customer",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0.05)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [<?php echo $chart_customer;?>],
        }],
          },
        options: {
            maintainAspectRatio: false,
                layout: {
                padding: {
                    left: 10,
                        right: 25,
                            top: 25,
                                bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 7
                    }
                }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a dollar sign in the ticks
                            callback: function (value, index, values) {
                                return number_format(value);
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
            },
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                        titleMarginBottom: 10,
                            titleFontColor: '#6e707e',
                                titleFontSize: 14,
                                    borderColor: '#dddfeb',
                                        borderWidth: 1,
                                            xPadding: 15,
                                                yPadding: 15,
                                                    displayColors: false,
                                                        intersect: false,
                                                            mode: 'index',
                                                                caretPadding: 10,
                                                                    callbacks: {
                    label: function(tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ':' + number_format(tooltipItem.yLabel);
                    }
                }
            }
        }
        });
    </script>
    <!--nia-->
    <!--anggik-->
    <script src="js/demo/chart-bar-demo2.js"></script>
</body>

</html>