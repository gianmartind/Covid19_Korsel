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
                            <a href="admin/login" class="btn header-btn">
                                <span class="icon d-sm-none">
                                    <img src="view/assets/img/icon/sick.svg" class="svg" alt="">
                                </span>
                                <span class="d-none d-sm-block">LOGOUT</span>
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
                            <h1>WELCOME TO ADMIN PAGE</h1>
                            <div class="banner-btn-group">
                                <a href="#dataTable" class="btn">Patient Info</a>
                                <a href="#dataTableSearchtrends" class="btn">Search Trends</a>
                                <a href="#dataTablePolicy" class="btn">Policy</a>
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
                            <span>Effected Region</span>
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
                                foreach ($result as $key => $row) {
                                    echo "<tr>";
                                    echo "<td>" . $row->getid() . "</td>";
                                    echo "<td>" . $row->getsex() . "</td>";
                                    echo "<td>" . $row->getage() . "</td>";
                                    echo "<td>" . $row->getcountry() . "</td>";
                                    echo "<td>" . $row->getprovince() . "</td>";
                                    echo "<td>" . $row->getcity() . "</td>";
                                    echo "<td>" . $row->getinfection_case() . "</td>";
                                    echo "<td>" . $row->getconfirmdate() . "</td>";
                                    echo "<td>" . $row->getstate() . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                                </tbody>
                            </table>
                            <div>
                                <br>
                            </div>
                            <button class="banner-btn-group" style="align-content: center;color: white;" onclick="document.getElementById('id01').style.display='block'">
                                <a class="btn">ADD NEW DATA</a>
                            </button>
                            <div id="id01" class="modal">
                                <div class="modal-content">
                                  <div class="container">
                                    <a onclick="document.getElementById('id01').style.display='none'" class="closebtn">&times;</a>
                                    <h2 style="text-align: center;">ADD NEW DATA</h2>
                                    <br>
                                    <form action="admin/addPatient" method="post">
                                        <div class="tg-wrap"><table style="padding: 10px;">
                                            <thead>
                                              
                                            </thead>
                                            <tbody>
                                              <tr>              
                                                <td><label for="gender">SEX</label></td>
                                                <td>
                                                    <input type="radio" id="male" name="gender" value="male" checked><label for="male">&nbsp;Male</label>
                                                    <input type="radio" id="female" name="gender" value="female"><label for="male">&nbsp;Female</label>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td><label for="age">AGE</label></td>
                                                <td><input type="text" id="age" name="age" required></td>
                                              </tr>
                                              <tr>
                                                <td><label for="country">COUNTRY</label></td>
                                                <td>
                                                    <select id="country" name="country">
                                                        <option value="South Korea">South Korea</option>
                                                        <option value="North Korea">North Korea</option>
                                                    </select>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td><label for="province">PROVINCE</label></td>
                                                <td>
                                                    <select id="province" name="province">
                                                        <option value="Busan">Busan</option>
                                                        <option value="Chungcheongbuk-do">Chungcheongbuk-do</option>
                                                        <option value="Chungcheongnam-do">Chungcheongnam-do</option>
                                                        <option value="Daegu">Daegu</option>
                                                        <option value="Gangwon-do">Gangwon-do</option>
                                                        <option value="Gwangju">Gwangju</option>
                                                        <option value="Gyeonggi-do">Gyeonggi-do</option>
                                                        <option value="Gyeongsangbuk-do">Gyeongsangbuk-do</option>
                                                        <option value="Gyeongsangnam-do">Gyeongsangnam-do</option>
                                                        <option value="Incheon">Incheon</option>
                                                        <option value="Jeju-do">Jeju-do</option>
                                                        <option value="Jeollabuk-do">Jeollabuk-do</option>
                                                        <option value="Jeollanam-do">Jeollanam-do</option>
                                                        <option value="Sejong">Sejong</option>
                                                        <option value="Seoul">Seoul</option>
                                                        <option value="Ulsan">Ulsan</option>
                                                    </select>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td><label for="city">CITY</label></td>
                                                <td>
                                                    <input type="text" id="city" name="city" required>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td><label for="case">INFECTION CASE</label></td>
                                                <td><input type="text" id="case" name="case" required></td>
                                              </tr>
                                              <tr>
                                                <td><label for="date">CONFIRMED DATE</label></td>
                                                <td>
                                                    <input type="date" id="date" name="date" required>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td><label for="state">STATE</label></td>
                                                <td>
                                                    <select id="state" name="state">
                                                        <option value="released">Released</option>
                                                        <option value="deceased">Deceased</option>
                                                        <option value="isolated">Isolated</option>
                                                    </select>
                                                </td>
                                              </tr>
                                            </tbody>
                                            </table></div>
                                            <button class="banner-btn-group" style="align-content: center;color: white;padding: 5px; margin-top: 10px;">
                                                <a class="btn">SUBMIT</a>
                                            </button>
                                    </form>
                                  </div>
                                </div>
                            </div>
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
                                    echo "<td>" . $row->getdate() . "</td>";
                                    echo "<td>" . $row->getcold() . "</td>";
                                    echo "<td>" . $row->getflu() . "</td>";
                                    echo "<td>" . $row->getpneumonia() . "</td>";
                                    echo "<td>" . $row->getcoronavirus() . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                                </tbody>
                            </table>
                            <div>
                                <br>
                            </div>
                            <button class="banner-btn-group" style="align-content: center;color: white;" onclick="document.getElementById('id02').style.display='block'">
                                <a class="btn">ADD NEW DATA</a>
                            </button>
                            <div id="id02" class="modal">
                                <div class="modal-content">
                                  <div class="container">
                                    <a onclick="document.getElementById('id02').style.display='none'" class="closebtn">&times;</a>
                                    <h2 style="text-align: center;">ADD NEW DATA</h2>
                                    <br>
                                    <form action="admin/addSearchtrends" method="post">
                                        <div class="tg-wrap"><table style="padding: 10px;">
                                            <thead>
                                            </thead>
                                            <tbody>
                                                <tr>              
                                                    <td><label for="date">DATE</label></td>
                                                    <td>
                                                        <input type="date" id="date" name="date" required>
                                                    </td>
                                                  </tr>
                                              <tr>
                                                <td><label for="cold">COLD</label></td>
                                                <td><input type="number" id="cold" name="cold" min="0" max="1" step="0.00001" required></td>
                                              </tr>
                                              <tr>
                                                <td><label for="flu">FLU</label></td>
                                                <td><input type="number" id="flu" name="flue" min="0" max="1" step="0.00001" required></td>
                                              </tr>
                                              <tr>
                                                <td><label for="pneumonia">Pneumonia</label></td>
                                                <td><input type="number" id="pneumonia" name="pneumonia" min="0" max="1" step="0.00001" required></td>
                                              </tr>
                                              <tr>
                                                <td><label for="coronavirus">Coronavirus</label></td>
                                                <td><input type="number" id="coronavirus" name="coronavirus" min="0" max="1" step="0.00001" required></td>
                                              </tr>
                                            </tbody>
                                            </table></div>
                                            <button class="banner-btn-group" style="align-content: center;color: white;padding: 5px; margin-top: 10px;">
                                                <a class="btn">SUBMIT</a>
                                            </button>
                                    </form>
                                  </div>
                                </div>
                            </div>
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
                                    echo "<td>" . $row->getpolicyid() . "</td>";
                                    echo "<td>" . $row->getcountry() . "</td>";
                                    echo "<td>" . $row->gettype() . "</td>";
                                    echo "<td>" . $row->getgovpolicy() . "</td>";
                                    echo "<td>" . $row->getdetail() . "</td>";
                                    echo "<td>" . $row->getstartdate() . "</td>";
                                    echo "<td>" . $row->getenddate() . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                                </tbody>
                            </table>
                            <div>
                                <br>
                            </div>
                            <div id="id03" class="modal">
                                <div class="modal-content">
                                  <div class="container">
                                    <a onclick="document.getElementById('id03').style.display='none'" class="closebtn">&times;</a>
                                    <h2 style="text-align: center;">ADD NEW DATA</h2>
                                    <br>
                                    <form action="admin/addPolicy" method="post">
                                        <div class="tg-wrap"><table style="padding: 10px;">
                                            <thead>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td><label for="country">COUNTRY</label></td>
                                                <td>
                                                    <select id="country" name="country">
                                                        <option value="South Korea">South Korea</option>
                                                        <option value="North Korea">North Korea</option>
                                                    </select>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td><label for="type">TYPE</label></td>
                                                <td>
                                                    <select id="type" name="type">
                                                        <option value="Administrative">Administrative</option>
                                                        <option value="Alert">Alert</option>
                                                        <option value="Education">Education</option>
                                                        <option value="Health">Health</option>
                                                        <option value="Immigration">Immigration</option>
                                                        <option value="Social">Social</option>
                                                        <option value="Technology">Technology</option>
                                                    </select>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td><label for="govPolicy">Gov. Policy</label></td>
                                                <td>
                                                    <input type="text" id="govPolicy" name="govPolicy" required>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td><label for="detail">DETAIL</label></td>
                                                <td>
                                                    <input type="text" id="detail" name="detail" required>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td><label for="startDate">START DATE</label></td>
                                                <td>
                                                    <input type="date" id="startDate" name="startDate" required>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td><label for="endDate">END DATE</label></td>
                                                <td>
                                                    <input type="date" id="endDate" name="endDate" required>
                                                </td>
                                              </tr>
                                            </tbody>
                                            </table></div>
                                            <button class="banner-btn-group" style="align-content: center;color: white;padding: 5px; margin-top: 10px;" >
                                                <a class="btn">SUBMIT</a>
                                            </button>
                                    </form>
                                  </div>
                                </div>
                            </div>
                            <button class="banner-btn-group" style="align-content: center;color: white;" onclick="document.getElementById('id03').style.display='block'">
                                <a class="btn">ADD NEW DATA</a>
                            </button>
                            
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

