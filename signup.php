<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>SIGN UP</title>
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
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <div id="login-page">
        <div class="container">
            <form class="form-login" method="POST" action="signup-action.php">
                <h2 class="form-login-heading">sign up</h2>
                <div class="login-wrap">
                    <input type="text" class="form-control" placeholder="Firstname" name="firstname" id="firstname" autofocus required>
                    <br>
                    <input type="text" class="form-control" placeholder="Lastname" name="lastname" id="lastname" autofocus required>
                    <br>
                    <input type="text" class="form-control" placeholder="Email" name="email" id="email" autofocus required>
                    <br>
                    <input type="text" class="form-control" placeholder="Contact Number" name="contact" id="contact" autofocus required>
                    <br>
                    <div class="box inner-outline"> Gender
                        <select name="gender" required>
                        <option
                                value=m>Male
                            </option>
                            <option
                                value=f>Female
                            </option>
                        </select>
                    </div>
                    <br>
                    <div class="box inner-outline" > Status
                        <select name="client_type" required>
                        <option
                                value="student">Student
                            </option>
                            <option
                                value="graduate">Graduate
                            </option>
                            <option
                                value="non-student">Non-Student
                            </option>
                        </select>
                        <br>
                        
                    <br>
                    <input type="text" class="form-control" placeholder="Username" name="username" id="username" autofocus required>
                    <br>
                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                    <br>
                    <button class="btn btn-theme btn-block" type="submit" name="register"><i class="fa fa-lock"></i> REGISTER</button>
                    <hr> </div>
            </form>
        </div>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/background.jpg", {
            speed: 500
        });
    </script>
</body>

</html>