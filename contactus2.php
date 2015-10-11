<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rideshare</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<div id="outerContainer">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">WesRides</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    <?php
                    if(($_SESSION["loggedin"]) == 'true'){
                         echo "
                         
                        <li class='page-scroll'>
                        <a href='logout.php'>Log Out</a>
                        
                        <li class='page-scroll'>
                        <a href='search.php'>Search Rides</a>
                        </li>
                        <li class='page-scroll'>
                            <a href='search.php'>Hello, "; 
                            echo substr($_SESSION['username'],0,-13); 
                            echo "</a> </li>";
                        
                    
                    } else {
                         echo "
                    <li class='page-scroll'>
                        <a href='index.html'>Sign Up</a>
                    </li>
                    <li class='page-scroll'>
                        <a href='login.html'>Login</a>
                    </li>
                    <li class='page-scroll'>
                        <a href='search.php'>Search Rides</a>
                    </li>";
                        
                    }
                    ?>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
        <section id="signin">
        <div class="container">
    
            <div style="align:center;" class="box" id="retailbox">
                <iframe src="https://docs.google.com/forms/d/1Tx76FZ3CK3ej_VAOlj8MNE4rwStPswDZzAJGfj2uX3o/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
            </div>
        </div>
    </section>
    
    

  <!-- Footer -->
    <footer id="footer" class="text-center">
        
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; WesRides 2015
                    </div>
                </div>
            </div>
        </div>
    </footer>
   

    
</div>
    <!-- jQuery
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!--Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript
    <script src="js/freelancer.js"></script>-->
    
    <script src="js/jqBootstrapValidation.js"></script> 

</body>

</html>
