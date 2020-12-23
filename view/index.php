<!DOCTYPE html>
<html lang="en">

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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800,900%7CPoppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet" />

    <!-- ======= Magnific Popup CSS ======= -->
    <link rel="stylesheet" href="view/assets/plugins/magnific-popup/magnific-popup.min.css">

    <!-- ======= Main Stylesheet ======= -->
    <link rel="stylesheet" href="view/assets/css/style.css" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
</head>

<body>
    <!-- Main Wrapper -->
    <main class="wrapper" id="home">
        <!-- Preloader -->
        <div class="preloader w-100 h-100 position-fixed bg-white">
            <img src="view/assets/img/logo5.png" alt="">
        </div>
        <!-- End Preloader -->
        <!-- Header -->
        <header class="header">
            <div class="header-fixed">
                <div class="container">
                    <div class="row no-gutters align-items-center position-relative"> 
                        <div class="col-lg-2 col-sm-4 col-5">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html">
                                    <img src="view/assets/img/logo5.png" alt="" />
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        
                        <div class="col-lg-8 col-sm-4 col-4 position-static">
                            <!-- Main Menu -->
                            <div
                                class="main-menu d-flex align-items-center justify-content-lg-center justify-content-end">
                                <!-- Nav -->
                                <ul class="nav align-items-center onPageNav">
                                    <li>
                                        <a href="#home">Home</a>
                                    </li>
                                    <li>
                                        <a href="data.html">Data</a>
                                        <ul class="sub-menu">
                                            <li><a href="datatables.html">Data Table</a></li>
                                            <li><a href="datacharts.html">Data Chart</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about.html">About COVID-19</a>
                                    </li>                              
                                </ul>
                                <!-- End Nav -->
                            </div>
                            <!-- End Main Menu -->
                        </div>

                        <div class="col-lg-2 col-sm-4 col-3 text-right">
                            <a href="login.html" class="btn header-btn">
                                <span class="icon d-sm-none">
                                    <img src="view/assets/img/icon/sick.svg" class="svg" alt="">
                                </span>
                                <span class="d-none d-sm-block">LOGIN</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <!-- Banner -->
        <section class="banner d-flex align-items-center justify-content-center" data-bg-img="view/assets/img/banner5.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Banner Content -->
                        <div class="banner-content text-left">
                            <h1>WELCOME TO COVID KOREA</h1>
                            <p class="">PRESENTING COVID-19 DATA IN SOUTH KOREA, WHICH IS PRESENTED IN DISTRIBUTION OF MAPS, DATA CHARTS AND DATA TABLE.
                            </p>

                            <div class="banner-btn-group">
                                <a href="data.html" class="btn">OVERVIEW DATA</a>
                                <a href="about.html" class="btn">ABOUT COVID-19</a>
                            </div>
                        </div>
                        <!-- End Banner Content -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner -->

        <!-- Live Update -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="corona-live-update top-50" data-bg-img="view/assets/img/pattern.png">
                            <div class="row align-items-center no-gutters">
                                <div class="col-lg">
                                    <div
                                        class="live-update-title d-flex flex-column align-items-center justify-content-center p-20">
                                        <h2 class="d-inline-flex align-items-center">
                                            <span>Live</span>
                                            <span>update</span> </h2>
                                        <span>world update</span>
                                    </div>
                                </div>

                                <div class="col-lg">
                                    <!-- Corona Update -->
                                    <div id="coronaUpdate" class="corona-update row no-gutters">
                                        <!-- Info -->
                                        <div
                                            class="col-lg-3 col-sm-6 cu_info cu_confirmed d-flex flex-column align-items-center justify-content-center p-30">
                                            <h2 class=""><?php echo $indexData[0]->getConfirmed()?></h2>
                                            <span>Confirmed</span>
                                        </div>
                                        <!-- End Info -->

                                        <!-- Info -->
                                        <div
                                            class="col-lg-3 col-sm-6 cu_info cu_recovered d-flex flex-column align-items-center justify-content-center p-30">
                                            <h2 class=""><?php echo $indexData[0]->getRecovered()?></h2>
                                            <span>Recovered</span>
                                        </div>
                                        <!-- End Info -->

                                        <!-- Info -->
                                        <div
                                            class="col-lg-3 col-sm-6 cu_info cu_deaths d-flex flex-column align-items-center justify-content-center p-30">
                                            <h2 class=""><?php echo $indexData[0]->getDeceased()?></h2>
                                            <span>Total Deaths</span>
                                        </div>
                                        <!-- End Info -->


                                        <!-- Info -->
                                        <div
                                            class="col-lg-3 col-sm-6 cu_info cu_countries d-flex flex-column align-items-center justify-content-center p-30">
                                            <h2 class=""><?php echo $indexData[0]->getCountry()?></h2>
                                            <span>Provinces</span>
                                        </div>
                                        <!-- End Info -->
                                    </div>
                                    <!-- End Corona Update -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Live Update -->

         <!-- Corona Map -->
         <section class="pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Section Title -->
                        <div class="section-title text-center mb-75">
                            <span>South Korea Maps</span>
                            <h2>Map Distribution</h2>
                        </div>
                        <!-- End Section Title -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <!-- Corona World Map -->
                        <div class="coronaUpdateMapWrapper" id="map" style="height: 600px">
                            
                        </div>
                        <!-- End Corona World Map -->
                    </div>
                </div>
            </div>
        </section>

        <script>
            var map = L.map('map').setView([36.638392,127.6961188], 7);
            L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=M01YIcmXM0y9dNU3Uyio', {
                attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
            }).addTo(map);
            <?php
                foreach ($provinceDetails as $key => $row){
                    echo "L.circle([".$row->getCoordinate()."], {
                        color: 'red',
                        fillOpacity: 0.5,
                        radius:".($row->getConfirmed()) * (10)." 
                    }).bindPopup('<b>".$row->getProvince()."</b> <br> Confirmed: ".$row->getConfirmed()." <br> Recovered: ".$row->getRecovered()." <br> Deceased: ".$row->getDeceased()."').addTo(map) ";
                    echo "\r\n";
                }
            ?>
            
        </script>
        <!-- End Corona Map -->

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
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="data.html">Data</a></li>
                                    <li><a href="about.html">About COVID-19</a></li>
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
</body>

</html>