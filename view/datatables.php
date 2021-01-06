<head>
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

    <!-- ======= Data Tables CSS ======= -->
    <link rel="stylesheet" type="text/css" href="view/assets/plugins/data-tables/datatables.min.css" />

    <!-- ======= Main Stylesheet ======= -->
    <link rel="stylesheet" href="view/assets/css/style.css" />

    <!-- ======= Custom Stylesheet ======= -->
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
                            <h1>EXPLORE THE DATA OF COVID-19 IN SOUTH KOREA | IN FORM OF TABLES</h1>
                            <div class="banner-btn-group">
                                <a href="datacharts" class="btn btn:">DATA CHARTS</a>
                                <a href="#dataTable" class="btn">DATA TABLES</a>
                            </div>
                        </div>
                        <!-- End Banner Content -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner -->

        <!-- Data Table -->
        <section id="dataTable" class="pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Section Title -->
                        <div class="section-title text-center mb-75">
                            <span>Affected Region</span>
                            <h2>South Korea</h2>
                        </div>
                        <!-- End Section Title -->
                    </div>
                </div>
                <!--
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="example_length">
                            <label>Show
                                <select name="example_length" aria-controls="example" class="form-control input-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>                               
                                </select>
                                entries
                            </label>
                        </div>
                    </div>
                    -->
                <div class="col-12">
                    <!-- Data Table -->
                    <div class="coronaDataTableWrapper table-responsive">
                        <table class="coronaDataTable" id="tableData">
                            <thead>
                                <tr>
                                    <th>Patient ID</th>
                                    <th>Sex</th>
                                    <th>Age</th>
                                    <th>Country</th>
                                    <th>Province</th>
                                    <th>City</th>
                                    <th>Infection Case</th>
                                    <th>Confirmed Date</th>
                                    <th>State</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($result1 as $key => $row) {
                                    echo "<tr>";
                                    echo "<td>" . $row['patient_id'] . "</td>";
                                    echo "<td>" . $row['sex'] . "</td>";
                                    echo "<td>" . $row['age'] . "</td>";
                                    echo "<td>" . $row['country'] . "</td>";
                                    echo "<td>" . $row['province'] . "</td>";
                                    echo "<td>" . $row['city'] . "</td>";
                                    echo "<td>" . $row['infection_case'] . "</td>";
                                    echo "<td>" . $row['confirmed_date'] . "</td>";
                                    echo "<td>" . $row['state'] . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Data Table -->
                </div>
            </div>
            </div>
        </section>
        <!-- End Data Table -->

        <!-- Data Table -->
        <section id="dataTableSearchtrends" class="pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Section Title -->
                        <div class="section-title text-center mb-75">
                            <span>Coronavirus</span>
                            <h2>Search Trends</h2>
                        </div>
                        <!-- End Section Title -->
                    </div>
                </div>
                <!--
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="example_length">
                            <label>Show
                                <select name="example_length" aria-controls="example" class="form-control input-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>                               
                                </select>
                                entries
                            </label>
                        </div>
                    </div>
                    -->
                <div class="col-12">
                    <!-- Data Table -->
                    <div class="coronaDataTableWrapper table-responsive">
                        <table class="coronaDataTable" id="tableSearch">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Cold</th>
                                    <th>Flu</th>
                                    <th>Pneumonia</th>
                                    <th>Coronavirus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($result2 as $key => $row) {
                                    echo "<tr>";
                                    echo "<td>" . $row['date'] . "</td>";
                                    echo "<td>" . $row['cold'] . "</td>";
                                    echo "<td>" . $row['flu'] . "</td>";
                                    echo "<td>" . $row['pneumonia'] . "</td>";
                                    echo "<td>" . $row['coronavirus'] . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Data Table -->
                </div>
            </div>
            </div>
        </section>
        <!-- End Data Table -->

        <!-- Data Table -->
        <section id="dataTablePolicy" class="pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Section Title -->
                        <div class="section-title text-center mb-75">
                            <span>South Korea</span>
                            <h2>Government Policy</h2>
                        </div>
                        <!-- End Section Title -->
                    </div>
                </div>
                <!--
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="example_length">
                            <label>Show
                                <select name="example_length" aria-controls="example" class="form-control input-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>                               
                                </select>
                                entries
                            </label>
                        </div>
                    </div>
                    -->
                <div class="col-12">
                    <!-- Data Table -->
                    <div class="coronaDataTableWrapper table-responsive">
                        <table class="coronaDataTable" id="tablePolicy">
                            <thead>
                                <tr>
                                    <th>Policy ID</th>
                                    <th>Country</th>
                                    <th>Type</th>
                                    <th>Gov. Policy</th>
                                    <th>Detail</th>
                                    <th>Start date</th>
                                    <th>End date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                foreach ($result3 as $key => $row) {
                                    echo "<tr>";
                                    echo "<td>" . $row['policy_id'] . "</td>";
                                    echo "<td>" . $row['country'] . "</td>";
                                    echo "<td>" . $row['type'] . "</td>";
                                    echo "<td>" . $row['gov_policy'] . "</td>";
                                    echo "<td>" . $row['detail'] . "</td>";
                                    echo "<td>" . $row['start_date'] . "</td>";
                                    echo "<td>" . $row['end_date'] . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Data Table -->
                </div>
            </div>
            </div>
        </section>
        <!-- End Data Table -->

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
                                    <a href="index.html"><img src="view/assets/img/logo6.png" alt="" /></a>
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

    <!-- ======= Data Table JS ======= -->
    <script src="view/assets/plugins/data-tables/datatables.min.js"></script>

    <!-- ======= Magnific Popup JS ======= -->
    <script src="view/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- ======= One Page Nav JS ======= -->
    <script src="view/assets/plugins/nav/nav.min.js"></script>

    <!-- ======= Menu JS ======= -->
    <script src="view/assets/js/menu.min.js"></script>

    <!-- ======= Main JS ======= -->
    <script src="view/assets/js/main.js"></script>

    <!-- ======= Custom JS ======= -->
    <script src="view/assets/js/custom.js"></script>
</body>