<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Alumni Econ</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.html">
                        <!-- Logo icon -->

                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="logo.ico" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="data:image/jpeg;base64,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"
                                    alt="user-img" width="36" class="img-circle"><span
                                    class="text-white font-medium">username</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.html"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>

                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Opportunities posted</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-success">659</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Applicants</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash2"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-purple">869</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Selected Candidates</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash3"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-info">911</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">Interview selection rates</h3>
                        <div class="d-md-flex">
                            <ul class="list-inline d-flex ms-auto">
                                <li class="ps-3">
                                    <h5><i class="fa fa-circle me-1 text-info"></i>Oncampus</h5>
                                </li>
                                <li class="ps-3">
                                    <h5><i class="fa fa-circle me-1 text-inverse"></i>Offcampus</h5>
                                </li>
                            </ul>
                        </div>
                        <div id="ct-visits" style="height: 405px;">
                            <div class="chartist-tooltip" style="top: -17px; left: -12px;"><span
                                    class="chartist-tooltip-value">6</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="white-box">
                        <div class="d-md-flex mb-3">
                            <h3 class="box-title mb-0">Recent Applicants</h3>
                            <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                            <form method="POST">
                                <select class="form-select shadow-none row border-top" name="sel">
                                    <option selected>Alumni available for referrals</option>
                                    <option>Alumni working in same company</option>
                                </select>
                                Company Name: <input name="inp">&nbsp &nbsp    
                            <input type="submit" name="sub">
                            </form>
                            </div>
                        </div>
                        <?php
                        if(isset($_POST['sub']))
                        {
                        if($_POST['sel']=="Alumni available for referrals")
                        {
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "project";
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                        }

                        $sql = "SELECT A1.alname,A1.email,A1.phone,A2.passed_year,A2.current_company FROM alumni_details A1, alumni_dash A2 WHERE A1.alid=A2.alid AND A2.referral_availability='true'";
                        $result = mysqli_query($conn, $sql);
                        echo '<div class="table-responsive">
                        <table class="table no-wrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Phone</th>
                                    <th class="border-top-0">Passing Year</th>
                                    <th class="border-top-0">Current Company</th>
                                </tr>
                            </thead>
                            <tbody>';		
                        if (mysqli_num_rows($result) > 0)
                        {
                        while($row = mysqli_fetch_array($result))
                        {
                            echo '<tr><td>'.$row["alname"].'</td><td>'.$row["email"].'</td><td>'.$row["phone"].'</td><td>'.$row["passed_year"].'</td><td>'.$row["current_company"].'</td></tr>';
                        }
                        }
                        else
                        {
                        echo "0 results";
                        }
                        echo "</tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>";
                        mysqli_close($conn);
                    }
                    else if($_POST['sel']=="Alumni working in same company")
                    {
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "project";
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                        }
                        $com=$_POST['inp'];
                        $sql = "SELECT A1.alname,A1.email,A1.phone,A2.passed_year FROM alumni_details A1, alumni_dash A2 WHERE A1.alid=A2.alid AND A2.current_company='$com'";
                        $result = mysqli_query($conn, $sql);
                        echo '<div class="table-responsive">
                        <table class="table no-wrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Phone</th>
                                    <th class="border-top-0">Passing Year</th>
                                </tr>
                            </thead>
                            <tbody>';		
                        if (mysqli_num_rows($result) > 0)
                        {
                        while($row = mysqli_fetch_array($result))
                        {
                            echo '<tr><td>'.$row["alname"].'</td><td>'.$row["email"].'</td><td>'.$row["phone"].'</td><td>'.$row["passed_year"].'</td></tr>';
                        }
                        }
                        else
                        {
                        echo "0 results";
                        }
                        echo "</tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>";
                        mysqli_close($conn);
                    }
                }
                    ?>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card white-box p-0">
                    <div class="card-heading">
                        <h3 class="box-title mb-0">Current Interviewers</h3>
                    </div>
                    <div class="card-body">
                        <ul class="chatonline">
                            <li>
                                <div class="call-chat">
                                    <button class="btn btn-success text-white btn-circle btn" type="button">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="btn btn-info btn-circle btn" type="button">
                                        <i class="far fa-comments text-white"></i>
                                    </button>
                                </div>
                                <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                        src="plugins/images/users/varun.jpg" alt="user-img" class="img-circle">
                                    <div class="ms-2">
                                        <span class="text-dark">cool guy <small
                                                class="d-block text-success d-block">online</small></span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="call-chat">
                                    <button class="btn btn-success text-white btn-circle btn" type="button">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="btn btn-info btn-circle btn" type="button">
                                        <i class="far fa-comments text-white"></i>
                                    </button>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
            href="https://www.wrappixel.com/">wrappixel.com</a>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>