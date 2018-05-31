
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>RESEARCH CONGRESS</title>
    <link href="assets/css/custom.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
            <!--logo start-->
            <a href="index.php" class="logo"><b>Research Congress</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.php">LOGIN</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section >
          <section class="wrapper site-min-height">
          	<div class="row mt" >
          		<div class="col-lg-12">
              

<div class="container">
  <h2></h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  


    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <?php
        $dirname = "images/";
        $images = glob($dirname."*.*");

foreach($images as $image) {
    echo '<img src="'.$image.'" height="450" width="450"  /> ';
    echo '<br> <br> <br>';
}
?>
      </div>

      <div class="item">
        <?php
        $dirname = "images/";
$images = glob($dirname."*.*");

foreach($images as $image) {
    echo '<img src="'.$image.'" height="450" width="450"/> ';
}
?>
      </div>
    
      <div class="item">
        <?php
        $dirname = "images/";
$images = glob($dirname."*.*");

foreach($images as $image) {
    echo '<img src="'.$image.'" height="450" width="450"/> ';
}
?>
      </div>
    </div>

    <!-- Left and right controls -->
    
  </div>
</div>

          		</div>
          	</div>
			
		      </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
      <div class="homeCont">
        Welcome to the Research Congress. With your cooperation in facilitating our program, you are helping in opening rooms to give an opportunity for everyone to present their projects towards improving and developing their works. Share your ideas, projects and researches. 
      </div>
      <!--main content end-->
      <!--footer start-->
    
 <!--  <?php
$db = mysqli_connect("localhost","root","");
mysqli_select_db($db,"congress");
$res = mysqli_query($db,"SELECT * FROM event");
echo "<table>";
while($row = mysqli_fetch_array($res))
{
  ?>
  <img src="../admin/<?php echo $row["image"]; ?>" alt="" />
  <?php echo $row["amount"]; ?>
  <?php echo $row["eventname"]; ?>
<?php
}
?>
-->
      <footer class="site-footer">
          <div class="text-center">
              Saint Louis University<br>
              Bachelor of Science Information Technology<br>
              OJT1
              <a href="index.php" class="go-top">
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
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    
    <script>
        $.backstretch("assets/img/background.jpg", {speed: 500});
    </script>
  </body>
</html>