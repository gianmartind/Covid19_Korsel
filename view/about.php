<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Title -->
    <title>COVIDKOREA</title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png" />

    <!-- Web Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800,900%7CPoppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet" />

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
                            <div
                                class="main-menu d-flex align-items-center justify-content-lg-center justify-content-end">
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
        <section class="banner d-flex align-items-center justify-content-center" data-bg-img="view/assets/img/banner2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Banner Content -->
                        <div class="banner-content text-left">
                            <h1 >ABOUT COVID-19</h1>
                            <p class="">What you need to know about COVID-19.
                            </p>

                            <div class="banner-btn-group">
                                <a href="#definition" class="btn">Definition</a>
                                <a href="#symptoms" class="btn">Symptoms</a>                       
                                <a href="#prevention" class="btn">Prevention</a>
                                <br>
                                <a href="#treatments" class="btn">Treatments</a>
                            </div>
                        </div>
                        <!-- End Banner Content -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner -->

        <!-- About -->
        <section class="pt-120 pb-120" id="definition">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <!-- Video Area -->
                        <div class="video-area position-relative mb-50 mb-lg-0 d-inline-block">
                            <img src="view/assets/img/covid19.png" alt="">
                        </div>
                        <!-- End Video Area -->
                    </div>

                    <div class="col-lg-6">
                        <!-- Section Title -->
                        <div class="section-title mb-40">
                            <span>about diseases</span>
                            <h2>What is coronavirus?</h2>
                        </div>
                        <!-- End Section Title -->

                        <!-- Info Text -->
                        <div class="info-text border-bottom">
                            <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly
                                discovered coronavirus. Most people infected with the COVID-19, virus will
                                experience mild to moderate, respiratory illness & recover without requiring
                                special treatment. Older people and those with underlying medical problem
                                like cardiovascular disease.</p>

                            <p>The COVID-19 virus spread primarily through droplet of saliva or discharge
                                from the nose when an infected person coughs or sneezes so it’s important
                                that you also practice respiratory etiquette.</p>

                            <p>
                                The virus that causes COVID-19 spreads mainly when an infected person is in close contact with another person.
                                Small droplets and aerosols containing the virus can spread from an infected person's nose and mouth as they breathe, cough, sneeze, sing, or speak.
                                Other people are infected if the virus gets into their mouth, nose or eyes. 
                            </p>
                        </div>
                        <!-- End Info Text -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End About -->

        <!-- Symptoms -->
        <section class="pt-120 pb-120 bg-light" id="symptoms">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Section Title -->
                        <div class="section-title text-center mb-75">
                            <span>about Symptoms</span>
                            <h2>COVID-19 Symptoms</h2>
                        </div>
                        <!-- End Section Title -->
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <!-- Image -->
                        <figure class="mb-50 mb-lg-0">
                            <img src="view/assets/img/symptoms2.png" alt="">
                        </figure>
                        <!-- End Image -->
                    </div>

                    <div class="col-xl-7 col-lg-6">
                        <!-- Symptoms -->
                        <div class="symptoms-wrapper d-xl-flex align-items-center">
                            <figure class="d-none d-xl-block">
                                <img src="view/assets/img/s-line.png" class="w-100 h-100" alt="">
                            </figure>

                            <div class="card-wrapper">
                                <!-- Card -->
                                <div class="card">
                                    <div class="card-body">
                                        <span>Fever</span>
                                        <h3>Hight Fever 2-14 days!</h3>
                                        <p>Reported illnesses have ranged from mild symptoms
                                            to severe illness and death</p>
                                    </div>
                                </div>
                                <!-- End Card -->

                                <!-- Card -->
                                <div class="card">
                                    <div class="card-body">
                                        <span>Cough</span>
                                        <h3>Dry Cough 2-14 days!</h3>
                                        <p>Reported illnesses have ranged from mild symptoms
                                            to severe illness and death</p>
                                    </div>
                                </div>
                                <!-- End Card -->

                                <!-- Card -->
                                <div class="card">
                                    <div class="card-body">
                                        <span>breath</span>
                                        <h3>Shortness of breath!</h3>
                                        <p>Reported illnesses have ranged from mild symptoms
                                            to severe illness and death</p>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>
                        </div>
                        <!-- End Symptoms -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Symptoms -->

        <!-- Prevention -->
        <section class="pt-120 pb-90 bg-cover" data-bg-img="view/assets/img/prevention.jpg" id="prevention">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Section Title -->
                        <div class="section-title text-center mb-75">
                            <span class="text-white">COVID prevention</span>
                            <h2 class="text-white">COVID-19 Prevention</h2>
                        </div>
                        <!-- End Section Title -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <!-- Feature -->
                        <div class="single-prevention text-center mb-30">
                            <!-- Icon -->
                            <div class="icon mb-30">
                                <img src="view/assets/img/icon/p-1.png" alt="">
                            </div>
                            <!-- End Icon -->

                            <!-- Content -->
                            <div class="content">
                                <p class="text-white">Wash your <br> Hands often</p>
                            </div>
                            <!-- End Content -->
                        </div>
                        <!-- End Feature -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Feature -->
                        <div class="single-prevention text-center mb-30">
                            <!-- Icon -->
                            <div class="icon mb-30">
                                <img src="view/assets/img/icon/p-2.png" alt="">
                            </div>
                            <!-- End Icon -->

                            <!-- Content -->
                            <div class="content">
                                <p class="text-white">Wear A <br> Face mask</p>
                            </div>
                            <!-- End Content -->
                        </div>
                        <!-- End Feature -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Feature -->
                        <div class="single-prevention text-center mb-30">
                            <!-- Icon -->
                            <div class="icon mb-30">
                                <img src="view/assets/img/icon/p-3.png" alt="">
                            </div>
                            <!-- End Icon -->

                            <!-- Content -->
                            <div class="content">
                                <p class="text-white">Avoid contact <br> with sick people</p>
                            </div>
                            <!-- End Content -->
                        </div>
                        <!-- End Feature -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Feature -->
                        <div class="single-prevention text-center mb-30">
                            <!-- Icon -->
                            <div class="icon mb-30">
                                <img src="view/assets/img/icon/p-4.png" alt="">
                            </div>
                            <!-- End Icon -->

                            <!-- Content -->
                            <div class="content">
                                <p class="text-white">Always cover your <br>cough or sneeze</p>
                            </div>
                            <!-- End Content -->
                        </div>
                        <!-- End Feature -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Prevention -->

        <!-- Treatments -->
        <section class="pt-120 pb-120 bg-light" id="treatments">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Section Title -->
                        <div class="section-title text-center mb-75">
                            <span>TREATMENTS</span>
                            <h2>COVID-19 TREATMENTS</h2>
                        </div>
                        <!-- End Section Title -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <!-- Section Title -->
                        <div class="section-title mb-40">
                            <span class="mb-10">TREATMENT</span>
                            <h2>Self care</h2>
                        </div>
                        <!-- End Section Title -->

                        <!-- Info Text -->
                        <div class="inf0-text">
                            <p>If you feel sick you should rest, drink plenty of fluid, and eat nutritious food. Stay in a separate room from other family members, and use a dedicated bathroom if possible. Clean and disinfect frequently touched surfaces.
                                Everyone should keep a healthy lifestyle at home. It is normal to feel sad, stressed, or confused during a crisis.</p>
                        </div>
                        <!-- End Info Text -->
                        <br>
                        <!-- Section Title -->
                        <div class="section-title mb-40">
                            <span class="mb-10">TREATMENT</span>
                            <h2>Medical treatments</h2>
                        </div>
                        <!-- End Section Title -->
                        <!-- Info Text -->
                        <div class="inf0-text">
                            <p>If you have mild symptoms and are otherwise healthy, self-isolate and contact your medical provider or a COVID-19 information line for advice.
                                Seek medical care if you have a fever, a cough, and difficulty breathing</p>
                        </div>
                        <!-- End Info Text -->
                        <br>
                        <!-- Button -->
                        <a href="#" class="btn">About More</a>
                        <!-- End Button -->
                    </div>

                    <div class="col-lg-6">
                        <!-- Image -->
                        <figure class="mt-50 mt-lg-0 text-center">
                            <img src="view/assets/img/tips2.png" alt="">
                        </figure>
                        <!-- End Image -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Tips -->
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
                                    <a href="index"><img src="view/assets/img/logo6.png" alt="" /></a>
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

</html>