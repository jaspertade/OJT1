<?php
include 'inc/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>OJT PROJECT</title>

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

        <div class="col-md-12">
            <div class="content-panel">

                <h4><i class="fa fa-angle-right"></i>Registered Client List Table</h4>
                <hr>

                <form action="search-registered.php" method="post">
                    <input type="text" name="search" placeholder="Search">
                    <button type="submit" name="submit-search">Submit</button>
                </form>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Event ID</th>
                            <th>Event Name</th>
                            <th>Client ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Contact</th>
                            <th>Payment Status</th>
                        </tr>
                    </thead>
                    <?php
                    $sql = "SELECT 
                                    *
                                    FROM
                                payment
                                    JOIN
                                        event ON event.eventid = payment.eventid
                                    JOIN
                                        client ON payment.client_id = client.client_id
                        WHERE
                            status LIKE 'paid';";
                    $result = mysqli_query($connect, $sql);
                    $queryResults = mysqli_num_rows($result);

                    if($queryResults > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>
                            <td>".$row['eventid']."</td>
                            <td>".$row['eventname']."</td>
                            <td>".$row['client_id']."</td>
                            <td>".$row['firstname']."</td>
                            <td>".$row['lastname']."</td>
                            <td>".$row['contact']."</td>
                            <td>".$row['status']."</td>
                            </tr>"; 
                        }
                    }
                    ?>
                </table>
            </div><! --/content-panel -->
        </div><!-- /col-md-12 -->

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

        

    </body>
</html>