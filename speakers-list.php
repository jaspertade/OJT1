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

                <ul class="nav pull-right top-menu">
                    <a type="button" class="btn btn-theme03" a href="add-speaker.php">ADD SPEAKER</a>
                </ul>
                <h4><i class="fa fa-angle-right"></i> Speakers List Table</h4>
                <hr>

                <form action="search-speaker.php" method="post">
                    <input type="text" name="search" placeholder="Search">
                    <button type="submit" name="submit-search">Search</button>
                </form>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Speaker ID</th>
                            <th>Speaker First Name</th>
                            <th>Speaker Last Name</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Event ID</th>
                            <th>Event Name</th>
                     </tr>
                    </thead>
                    <?php
                    $sql = "SELECT 
                                *
                            FROM
                                speaker
                                    JOIN
                                        event_speaker ON speaker.speakerid = event_speaker.speakerid
                                    JOIN
                                        event ON event.eventid = event_speaker.eventid;";
                    $result = mysqli_query($connect, $sql);
                    $queryResults = mysqli_num_rows($result);

                    if($queryResults > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>
                            <td>".$row['speakerid']."</td>
                            <td>".$row['spfirstname']."</td>
                            <td>".$row['splastname']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['contact_num']."</td>
                            <td>".$row['eventid']."</td>
                            <td>".$row['eventname']."</td>
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

        <script>
            //custom select box

            $(function(){
                $('select.styled').customSelect();
            });

        </script>

    </body>
</html>