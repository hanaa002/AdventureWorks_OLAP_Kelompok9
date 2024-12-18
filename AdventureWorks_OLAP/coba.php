<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AdventureWorks - Order Quantity</title>

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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                <div class="sidebar-brand-text mx-3">AdventureWorks</div>
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

            <li class="nav-item">
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

            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <li class="nav-item active">
                <a class="nav-link" href="orderquantity.php">
                    <i class="fa fa-film"></i>
                    <span>Order Quantity Chart</span>
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

                        <div class="topbar-divider d-none d-sm-block"></div>

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
                        <h1 class="h3 mb-0 text-gray-800">Order Quantity</h1>
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
                                                Total Order Quantity</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php  
                                                 $host       = "localhost";
                                                 $user       = "root";
                                                 $password   = "";
                                                 $database   = "aw_wh";
                                                 $mysqli     = mysqli_connect($host, $user, $password, $database);

                                                 $sql = "SELECT sum(OrderQty) as jumlah_film from fact_sales";
                                                     $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo number_format($row2['jumlah_film'],0,".",",");
                                                        }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-film fa-2x text-gray-300"></i>
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
                                                Rata-rata Order Quantity</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                            $sql = "SELECT avg(OrderQty) as kat FROM fact_sales";
                                            $query = mysqli_query($mysqli,$sql);
                                                 while($row2=mysqli_fetch_array($query)){
                                                    echo number_format($row2['kat'],0,".",",");
                                                 }
                                            ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-film fa-2x text-gray-300"></i>
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
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Peminjaman Film Tahun Lalu (2005)
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
                                            <i class="fa fa-film fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Pending Requests Card Example -->
                        <!-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Jumlah Peminjaman Film Tahun Ini (2006)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                 
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-film fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                        <!-- Content Row -->

                        <div class="row">
                            <!--nia-->
                            <!-- Area Chart -->


                            <!--tika-->
                            <!-- Pie Chart -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Total Order Quantity 2001 - 2004
                                        </h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body-store">
                                        <div class="chart-area-store">
                                            <div id="chartContainer1" style="width: 700px; height: 600px;"></div>
                                            <canvas id="chart-area"></canvas>
                                        </div>
                                        <!-- <canvas id="myAreaChart"></canvas> -->
                                        <script>
                                            <?php
                                            // Mendapatkan data utama dari database MySQL
                                            include 'koneksi.php';
                                            include 'oqwaktu.php';
                                            ?>

                                            // Membuat grafik dengan interaksi drilldown
                                            var chart = Highcharts.chart('chartContainer1', {
                                                chart: {
                                                    type: 'area'
                                                },
                                                title: {
                                                    text: 'Total Order Quantity 2001 - 2004'
                                                },
                                                plotOptions: {
                                                    series: {
                                                        dataLabels: {
                                                            enabled: true,
                                                            format: '{point.name}: {point.y}'
                                                        }
                                                    }
                                                },
                                                series: [{
                                                    name: 'Tahun',
                                                    colorByPoint: true,
                                                    data: mainChartData
                                                }],
                                                drilldown: {
                                                    series:
                                                        drilldownChartData
                                                }
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>

                            <!--tika-->

                            <!--anggik-->
                            <!-- Bar Chart -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Total Order Quantity Category -
                                            Product</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div id="chartContainer" style="width: 700px; height: 600px;"></div>
                                        <div>
                                            <canvas id="myAreaChart"></canvas>
                                            <script>
                                            <?php
                                            // Mendapatkan data utama dari database MySQL
                                            include 'koneksi.php';
                                            include 'orderproduct.php';
                                            ?>

                                            // Membuat grafik dengan interaksi drilldown
                                            var chart = Highcharts.chart('chartContainer', {
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
                                                    text: 'Total Order Quantity Category - Product'
                                                },
                                                plotOptions: {
                                                    series: {
                                                        dataLabels: {
                                                            enabled: true,
                                                            format: '{point.name} : {point.y}'
                                                        }
                                                    }
                                                },
                                                xAxis: {
                                                    categories: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
                                                    title: {
                                                        text: null
                                                    },
                                                    gridLineWidth: 1,
                                                    lineWidth: 0
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

                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Jumlah Click Tiap Brand
                                        </h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div id="chartContainer2" style="width: 700px; height: 600px;"></div>
                                        <div>
                                            <canvas id="myAreaChart"></canvas>
                                            <script>
                                                            <?php
                                                            // Mendapatkan data utama dari database MySQL
                                                            include 'conn.php';
                                                            include 'ambil_click.php';
                                                            ?>

                                                            // Membuat grafik dengan interaksi drilldown
                                                            var chart = Highcharts.chart('chartContainer2', {
                                                                chart: {
                                                                    type: 'column',
                                                                    options3d: {
                                                                        enabled: true,
                                                                        alpha: 15,
                                                                        beta: 15,
                                                                        depth: 50,
                                                                        viewDistance: 25,
                                                                        frame: {
                                                                            bottom: { size: 1, color: 'rgba(0,0,0,0.02)' }, 
                                                                            back: { size: 1, color: 'rgba(0,0,0,0.04)' }, 
                                                                            side: { size: 1, color: 'rgba(0,0,0,0.06)' } 
                                                                        }
                                                                    }
                                                                },
                                                                title: {
                                                                    text: 'Jumlah Click Tiap Brand',
                                                                    style: {
                                                                        fontSize: '18px', 
                                                                        fontWeight: 'bold' 
                                                                    }
                                                                },
                                                                plotOptions: {
                                                                    series: {
                                                                        dataLabels: {
                                                                            enabled: true,
                                                                            style: {
                                                                                fontSize: '12px'
                                                                            }
                                                                        },
                                                                        depth: 25, 
                                                                        borderColor: 'transparent'
                                                                    }
                                                                },
                                                                legend: {
                                                                    enabled: false
                                                                },
                                                                xAxis: {
                                                                    categories: <?php echo json_encode($nama_konten); ?>,
                                                                title: {
                                                                    text: 'Brand',
                                                                    style: {
                                                                        fontSize: '14px' 
                                                                    }
                                                                },
                                                                labels: {
                                                                    style: {
                                                                        fontSize: '12px' 
                                                                    }
                                                                }
                                                            },
                                                                yAxis: {
                                                                title: {
                                                                    text: 'Jumlah Click',
                                                                    style: {
                                                                        fontSize: '14px'
                                                                    }
                                                                },
                                                                labels: {
                                                                    style: {
                                                                        fontSize: '12px'
                                                                    }
                                                                }
                                                            },
                                                                series: [{
                                                                    name: 'Click',
                                                                    colorByPoint: true,
                                                                    data: mainChartDataC
                                                                }]
                                                    });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

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
                        data:<?php echo json_encode($total); ?>,
                        backgroundColor: [
                        '#191970',
                        '#0000CD',
                        '#0000FF',
                        '#4169E1',
                        '#4682B4',
                        '#912CEE',
                        '#7B68EE',
                        '#6495ED',
                        '#00BFFF',
                        '#87CEFA',
                        '#B0C4DE',
                        '#48D1CC',
                        '#7FFFD4',
                        '#AFEEEE',
                        '#E0FFFF',
                    ],
                        label: 'Presentase Lama Pinjam Customer'
                }],
                labels: <?php echo json_encode($jenis_kategori); ?>},
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
        <!--anggik-->
        <script src="js/demo/chart-bar-demo.js"></script>
</body>

</html>