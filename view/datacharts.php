<?php
$db = new MySQLDB("localhost", "root", "", "testcsv");
?>

<head>
    <!-- chart.js Chart -->
    <script src="view/assets/js/Chart.bundle.js"></script>
    <script src="view/assets/js/utils.js"></script>
    <!-- Page Title -->
    <title>COVIDKOREA</title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png" />

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800,900%7CPoppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- ======= Magnific Popup CSS ======= -->
    <link rel="stylesheet" href="view/assets/plugins/magnific-popup/magnific-popup.min.css">

    <!-- ======= Main Stylesheet ======= -->
    <link rel="stylesheet" href="view/assets/css/style.css" />
    <link rel="stylesheet" href="view/assets/css/custom.css" />
</head>

<body>
    <!-- Main Wrapper -->
    <main class="wrapper">
        <!-- Header -->
        <header class="header">
            <div class="header-fixed">
                <div class="container">
                    <div class="row no-gutters align-items-center position-relative">
                        <div class="col-lg-2 col-sm-4 col-5">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index">
                                    <img src="view/assets/img/logo5.png" alt="" />
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>

                        <div class="col-lg-8 col-sm-4 col-4 position-static">
                            <!-- Main Menu -->
                            <div class="main-menu d-flex align-items-center justify-content-lg-center justify-content-end">
                                <!-- Nav -->
                                <ul class="nav align-items-center onPageNav">
                                    <li>
                                        <a href="index">Home</a>
                                    </li>
                                    <li>
                                        <a href="data">Data</a>
                                        <ul class="sub-menu">
                                            <li><a href="datatables">Data Table</a></li>
                                            <li><a href="datacharts">Data Chart</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about">About COVID-19</a>
                                    </li>
                                </ul>
                                <!-- End Nav -->
                            </div>
                            <!-- End Main Menu -->
                        </div>

                        <div class="col-lg-2 col-sm-4 col-3 text-right">
                            <a href="admin/<?php echo $log_status?>" class="btn header-btn">
                                <span class="icon d-sm-none">
                                    <img src="view/assets/img/icon/sick.svg" class="svg" alt="">
                                </span>
                                <span class="d-none d-sm-block"><?php echo $log_status?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <!-- Banner -->
        <section class="banner d-flex align-items-center justify-content-center" data-bg-img="view/assets/img/banner3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Banner Content -->
                        <div class="banner-content text-left">
                            <h1>EXPLORE THE DATA OF COVID-19 IN SOUTH KOREA | IN FORM OF CHARTS</h1>
                            <div class="banner-btn-group">
                                <a href="#datacharts" class="btn">DATA CHARTS</a>
                                <a href="datatables" class="btn">DATA TABLES</a>
                            </div>
                        </div>
                        <!-- End Banner Content -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner -->
        <br>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title -->
                    <div class="section-title text-center mb-75">
                        <span>Effected Region</span>
                        <h2>South Korea</h2>
                    </div>
                    <!-- End Section Title -->
                </div>
            </div>
        </div>
        <div class="main-content" id="datacharts">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="box-content">
                        <h4 class="box-title">Line Chart per Trend</h4>
                        <canvas id="trendline" width="480" height="320"></canvas>
                        <!-- /#line-chartjs-chart.chartjs-chart -->
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-lg-6 col-md-12 -->

                <div class="col-lg-6 col-md-12">
                    <div class="box-content">
                        <h4 class="box-title">Line Chart Covid Year 2020</h4>
                        <canvas id="trendlinecovid" width="480" height="320"></canvas>
                        <!-- /#line-chartjs-chart.chartjs-chart -->
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-lg-6 col-md-12 -->


                <div class="col-lg-6 col-md-12">
                    <div class="box-content">
                        <h4 class="box-title">Pie Chart Age</h4>
                        <canvas id="pieage" width="480" height="320"></canvas>
                        <!-- /#pie-chartjs-chart.chartjs-chart -->
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-lg-6 col-md-12 -->

                <div class="col-lg-6 col-md-12">
                    <div class="box-content">
                        <h4 class="box-title">Pie Chart Gender</h4>
                        <canvas id="piegender" width="480" height="320"></canvas>
                        <!-- /#pie-chartjs-chart.chartjs-chart -->
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-lg-6 col-md-12 -->

                <div class="col-lg-6 col-md-12">
                    <div class="box-content">
                        <h4 class="box-title">Pie Chart State</h4>
                        <canvas id="piecase" width="480" height="320"></canvas>
                        <!-- /#pie-chartjs-chart.chartjs-chart -->
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-lg-6 col-md-12 -->

            </div>
            <!-- /.row small-spacing -->
        </div>
        <!-- Footer -->
        <footer class="footer bg-cover" data-bg-img="view/assets/img/footer.jpg">
            <!-- Footer Top -->
            <div class="container">
                <!-- Footer Main -->
                <div class="footer-main">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <!-- Widget -->
                            <div class="widget widget-about text-gray">
                                <!-- Logo -->
                                <div class="logo mb-30">
                                    <a href="../index"><img src="view/assets/img/logo6.png" alt="" /></a>
                                </div>
                                <!-- End Logo -->
                                <p>Presenting COVID-19 data in South Korea which is presented in the distribution of maps, data charts and data tables.</p>
                            </div>
                            <!-- End Widget -->
                        </div>

                        <div class="col-lg-2 col-sm-6">
                            <!-- Widget -->
                            <div class="widget widget_nav_menu">
                                <h3 class="widget-title text-gray">Shortcut Links</h3>
                                <ul class="list-unstyled text-gray">
                                    <li><a href="index">Home</a></li>
                                    <li><a href="data">Data</a></li>
                                    <li><a href="about">About COVID-19</a></li>
                                    <li><a href="admin">Admin Page</a></li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <!-- Widget -->
                            <div class="widget widget_nav_menu">
                                <h3 class="widget-title text-gray">Frontend Team</h3>
                                <ul class="list-unstyled text-gray">
                                    <li><a>Arthur</a></li>
                                    <li><a>Julyus</a></li>
                                    <li><a>Yalvi</a></li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <!-- Widget -->
                            <div class="widget widget_nav_menu">
                                <h3 class="widget-title text-gray">Backend Team</h3>
                                <ul class="list-unstyled text-gray">
                                    <li><a>David</a></li>
                                    <li><a>Gian</a></li>
                                    <li><a>Jason</a></li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <!-- Widget -->
                            <div class="widget widget_nav_menu">
                                <h3 class="widget-title text-gray">Documentation Team</h3>
                                <ul class="list-unstyled text-gray">
                                    <li><a>Arya</a></li>
                                    <li><a>Jessica</a></li>
                                    <li><a>Michael</a></li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                    </div>
                </div>
                <!-- End Footer Main -->
            </div>
            <!-- End Footer Top -->
        </footer>
        <!-- End Footer -->
    </main>
    <!-- End Main Wrapper -->

    <!-- ======= jQuery Library ======= -->
    <script src="view/assets/js/jquery.min.js"></script>

    <!-- ======= Magnific Popup JS ======= -->
    <script src="view/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- ======= One Page Nav JS ======= -->
    <script src="view/assets/plugins/nav/nav.min.js"></script>

    <!-- ======= Menu JS ======= -->
    <script src="view/assets/js/menu.min.js"></script>

    <!-- ======= Main JS ======= -->
    <script src="view/assets/js/main.js"></script>

    <!-- ======= Data Table JS ======= -->
    <script src="view/assets/plugins/data-tables/datatables.min.js"></script>

    <!-- ======= Line chart search trend ======= -->
    <script>
        var dataCold = [];
        var dataFlu = [];
        var dataPneumonia = [];
        var dataCovid = [];
    </script>

    <?php
    $index = 0;
    echo "<script>";
    foreach ($result1 as $key => $row) {
        echo "dataCold[" . $index . "]=" . $row['avgcold'] . ";";
        echo "dataFlu[" . $index . "]=" . $row['avgflu'] . ";";
        echo "dataPneumonia[" . $index . "]=" . $row['avgpneumonia'] . ";";
        echo "dataCovid[" . $index . "]=" . $row['avgcovid'] . ";";
        $index++;
    }
    echo "</script>";
    ?>

    <script>
        var lineChart = {
            type: 'line',
            data: {
                datasets: [{
                        label: "Cold",
                        borderColor: window.chartColors.red,
                        data: dataCold,
                    },
                    {
                        label: "Flu",
                        borderColor: window.chartColors.blue,
                        data: dataFlu,
                    },
                    {
                        label: "Pneumonia",
                        borderColor: window.chartColors.yellow,
                        data: dataPneumonia,
                    },
                    {
                        label: "Coronavirus",
                        borderColor: window.chartColors.green,
                        data: dataCovid,
                    },
                ],
                labels: ["2016", "2017", "2018", "2019", "2020"],
            },
            options: {
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Year'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Search Frequency'
                        }
                    }]
                },
                title: {
                    display: true,
                    text: 'Diseases Search Trends Around the World',
                },
                responsive: true,
                legend : {
                    labels : {
                        fontSize : 20,
                    }
                }
            }

        }
    </script>

    <!-- ======= Line chart covid 2020 ======= -->
    <script>
        var dataCovid2020 = [];
    </script>

    <?php

    $index = 0;
    echo "<script>";
    foreach ($result2 as $key => $row) {
        echo "dataCovid2020[" . $index . "]=" . $row['avgcovid'] . ";";
        $index++;
    }
    echo "</script>";
    ?>

    <script>
        var lineChart_2 = {
            type: 'line',
            data: {
                datasets: [{
                    label: "Coronavirus",
                    borderColor: window.chartColors.green,
                    data: dataCovid2020,
                }, ],
                labels: ["January", "Febuary", "March", "April", "May", "June"],
            },
            options: {
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Month'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Search Frequency'
                        }
                    }]
                },
                title: {
                    display: true,
                    text: 'Search Trend Frequency of Covid in 2020',
                },
                responsive: true,
                legend : {
                    labels : {
                        fontSize : 20,
                    }
                }
            }

        }
    </script>


    <!-- ======= pie chart 1 ======= -->
    <script>
        var dataAge = [];
    </script>

    <?php
    $index = 0;
    echo "<script>";
    foreach ($result3 as $key => $row) {
        echo "dataAge[" . $index . "]=" . $row['jumlah'] . ";";
        $index++;
    }
    echo "</script>";
    ?>

    <script>
        var myDataset_1 = [{
            data: dataAge,
            backgroundColor: [
                window.chartColors.red,
                window.chartColors.purple,
                window.chartColors.yellow,
                window.chartColors.green,
                window.chartColors.blue,
                window.chartColors.grey,
                window.chartColors.orange,
                '#000000',
                '#ff0000',
                '#800000',
                '#CCCCFF',
                '#DFFF00'
            ],
        }];

        var pieChart_1 = {
            type: 'pie',
            data: {
                datasets: myDataset_1,
                labels: ["Unidentified", "0s", "10s", "20s", "30s", "40s", "50s", "60s", "70s", "80s", "90s", "100s"]
            },
            options: {
                title: {
                    display: true,
                    text: 'Number of Patients by Age',
                },
                responsive: true,
                legend : {
                    labels : {
                        fontSize : 20,
                    }
                }
            }
        }
    </script>

    <!-- ======= pie chart 2 ======= -->
    <script>
        var dataGender = [];
    </script>

    <?php

    $index = 0;
    echo "<script>";
    foreach ($result4 as $key => $row) {
        echo "dataGender[" . $index . "]=" . $row['jumlah'] . ";";
        $index++;
    }
    echo "</script>";
    ?>

    <script>
        var myDataset_2 = [{
            data: dataGender,
            backgroundColor: [
                window.chartColors.red,
                window.chartColors.purple,
                window.chartColors.yellow,
            ],
        }];

        var pieChart_2 = {
            type: 'pie',
            data: {
                datasets: myDataset_2,
                labels: ["Unidentified", "female", "male"]
            },
            options: {
                title: {
                    display: true,
                    text: 'Number of Patients by Gender',
                },
                responsive: true,
                legend : {
                    labels : {
                        fontSize : 20,
                    }
                }
                
            }
        }
    </script>

    <!-- ======= pie chart 3 ======= -->
    <script>
        var dataState = [];
    </script>

    <?php
    $index = 0;
    echo "<script>";
    foreach ($result5 as $key => $row) {
        echo "dataState[" . $index . "]=" . $row['jumlah'] . ";";
        $index++;
    }
    echo "</script>";
    ?>

    <script>
        var myDataset_3 = [{
            data: dataState,
            backgroundColor: [
                window.chartColors.red,
                window.chartColors.purple,
                window.chartColors.yellow,
            ],
        }];

        var pieChart_3 = {
            type: 'pie',
            data: {
                datasets: myDataset_3,
                labels: ["deceased", "isolated", "released"]
            },
            options: {
                title: {
                    display: true,
                    text: 'State of Patients',
                },
                responsive: true,
                legend : {
                    labels : {
                        fontSize : 20,
                    }
                }
            }
        }

        window.onload = function() {
            var ctx_1 = document.getElementById("trendline").getContext("2d");
            new Chart(ctx_1, lineChart);
            var ctx_5 = document.getElementById("trendlinecovid").getContext("2d");
            new Chart(ctx_5, lineChart_2);
            var ctx_2 = document.getElementById("pieage").getContext("2d");
            new Chart(ctx_2, pieChart_1);
            var ctx_3 = document.getElementById("piegender").getContext("2d");
            new Chart(ctx_3, pieChart_2);
            var ctx_4 = document.getElementById("piecase").getContext("2d");
            new Chart(ctx_4, pieChart_3);
        };
    </script>
