<?php
include 'inc/session.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>DASHGUM - Bootstrap Admin Template</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style-responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>

    <body>

        <section id="container" >
            <!-- **********************************************************************************************************************************************************
TOP BAR CONTENT & NOTIFICATIONS
*********************************************************************************************************************************************************** -->
            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <!--logo start-->
                <a href="admin-home.php" class="logo"><b>OJT PROJECT</b></a>
                <!--logo end-->
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="inc/logout.php">Logout</a></li>
                    </ul>
                </div>
            </header>
            <!--header end-->

            <!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">

                        <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                        <h5 class="centered">ADMIN</h5>

                        <li class="mt">
                            <a href="admin-home.php">
                                <i class="fa fa-desktop"></i>
                                <span>Home</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="speakers.php" >
                                <i class="fa fa-book"></i>
                                <span>Speakers</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="congress-schedules.php" >
                                <i class="fa fa-tasks"></i>
                                <span>Congress List</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="admin-payments.php" class="active">
                                <i class="fa fa-th"></i>
                                <span>Payments</span>
                            </a>
                        </li>
                             <li class="sub-menu">
                            <a href="registered-user.php" >
                                <i class="fa fa-th"></i>
                                <span>Registered User</span>
                            </a>
                        </li>

                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->

            <!--main content start-->
            <section id="main-content">
                <section class="wrapper site-min-height">
                    <div class="col-md-12">
                        <div class="content-panel">

                            <ul class="nav pull-right top-menu">
                                <a type="button" class="btn btn-theme02" a href="admin-payments.php">BACK</a>
                            </ul>

                            <h4><i class="fa fa-angle-right"></i>Search Bar</h4>
                            <hr>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Event ID</th>
                                        <th>Event Name</th>
                                        <th>Client ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Payment ID</th>
                                        <th>Payment Status</th>
                                    </tr>
                                </thead>
                                <?php
                                if(isset($_POST['submit-search'])){
                                    $search = mysqli_real_escape_string($connect, $_POST['search']);
                                    $sql = "SELECT 
                                    *
                                FROM
                                    payment
                                        JOIN
                                            event ON event.eventid = payment.eventid
                                        JOIN
                                            client ON payment.client_id = client.client_id
                                    where event.eventname like '%$search%'";
                                    
                                    $result = mysqli_query($connect, $sql);
                                    $queryResult = mysqli_num_rows($result);

                                    echo "There are ".$queryResult." results!";
                                    
                                    if($queryResult > 0){
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo "<tr>
                                                    <td>".$row['eventid']."</td>
                                                    <td>".$row['eventname']."</td>
                                                    <td>".$row['client_id']."</td>
                                                    <td>".$row['firstname']."</td>
                                                    <td>".$row['lastname']."</td>
                                                    <td>".$row['payid']."</td>
                                                    <td>".$row['status']."</td>
                                                </tr>";
                                        }

                                    }else{
                                        echo "There are no results matching your search!";
                                    }

                                }
                                ?>
                            </table>
                        </div><! --/content-panel -->
                    </div><!-- /col-md-12 -->
                </section><! --/wrapper -->
            </section><!-- /MAIN CONTENT -->

            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    2018
                    <a href="blank.html#" class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div>
            </footer>
            <!--footer end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
        <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


        <!--common script for all pages-->
        <script src="assets/js/common-scripts.js"></script>

        <!--script for this page-->

        <script>
            //custom select box

            $(function(){
                $('select.styled').customSelect();
            });

        </script>

    </body>
</html>