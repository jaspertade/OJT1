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
        
        <h4><i class="fa fa-angle-right"></i> Basic Table</h4>
        <hr>
          <table class="table">
            <?php
            $i = 0;
              $queryall = "SELECT eventid, eventname, venue, date, TIME_FORMAT(time, '%H:%i %p' ) as timeHI, amount FROM event where show_status = 'done'";
              $eventqueryall = mysqli_query($connect, $queryall);
              $querycount = mysqli_num_rows($eventqueryall);
            ?>
            <thead>
              <tr>
                <th>Event ID</th>
                <th>Event Name</th>
                <th>Venue</th>
                <th>Date</th>
                <th>Time</th>
                <th>Amount</th>
                <th></th>
              </tr>
            </thead>
            <?php
            while ($i < $querycount){
              $row = mysqli_fetch_array($eventqueryall);
              $query = "SELECT eventname FROM event";
              $eventquery = mysqli_query($connect, $query);
            ?>
              <tr>
                <td>
                  <?php echo $row['eventid'];?>
                </td>
                <td>
                  <?php echo $row['eventname'];?>
                </td>
                <td>
                  <?php echo $row['venue'];?>
                </td>
                <td>
                  <?php echo $row['date'];?>
                </td>
                <td>
                  <?php echo $row['timeHI'];?>
                </td>
                <td>
                  <?php echo $row['amount'];?>
                </td>
                <td>
                  <?php
                   echo '<a type="button" class="btn btn-info" a href="register-event.php?id='.$row['eventid'].'">Register</a>'
                   ?>
                </td>
                </tr>
            <?php $i++;} ?>

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