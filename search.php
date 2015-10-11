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
    
    <!-- SCRIPTS FOR POPUP BOX -->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    
        <style type="text/css">
        	.TFtable{
        		width:100%; 
        		border-collapse:collapse; 
        	}
        	.TFtable td{ 
        		padding:7px; border:#4e95f4 1px solid;
        	}
        	/* provide some minimal visual accomodation for IE8 and below */
        	.TFtable tr{
        		background: #b8d1f3;
        	}
        	/*  Define the background color for all the ODD background rows  */
        	.TFtable tr:nth-child(odd){ 
        		background: #b8d1f3;
        	}
        	/*  Define the background color for all the EVEN background rows  */
        	.TFtable tr:nth-child(even){
        		background: #dae5f4;
        	}
        </style>


    
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
                        <a href='contactus2.php'>Contact Us</a>
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

   
<!--  Section for table  -->

      <section id="search" style="padding-bottom:20px;">
          
        <div class="container">
        
        <div class="btn-group btn-group-lg btn-group-justified" role="group" aria-label="...">
          <!--<span class="btn-group"><button type="button" class="btn btn-default">Newest</button></span>
          <span class="btn-group"><button id="filter" type="button" class="btn btn-default" onclick="getElementById('filterform').style.display='block'">Filter</button></span>-->
          <span class="btn-group"><button id="add" type="button" class="btn btn-default" onclick="getElementById('addform').style.display='block'">Post a Ride</button></span>
        </div>
        
        <div id="addform" style="display: none">
        <form id="addrideform" action="mail/addride.php" method="post">
            <label style="padding-right:10px;">Start:
                <select name="start">
                    <option value="Wesleyan">Wesleyan</option>
                    <option value="Hartford">Hartford</option>
                    <option value="New Haven">New Haven</option>
                    <option value="NYC">NYC</option>
                    <option value="Boston">Boston</option>
                    <option value="Bradley">Bradley</option>
                </select>
            </label>
            <label style="padding-right:10px;">End:
                <select name="end">
                    <option value="Wesleyan">Wesleyan</option>
                    <option value="Hartford">Hartford</option>
                    <option value="New Haven">New Haven</option>
                    <option value="NYC">NYC</option>
                    <option value="Boston">Boston</option>
                    <option value="Bradley">Bradley</option>
                </select>
            </label>
            <label style="padding-right:10px;">Date:
                <input style="height:25px;" type="date" name="date">
            </label>
            <button type="submit">Add Ride</button>
            <button type="button" rows="2" cols="500" onclick="getElementById('addform').style.display='none'">x</button>
        </form>
        <textarea rows=2 cols=70 name="comment" form="addrideform" placeholder="Comments..."></textarea>
        </div>

        <div id="filterform" style="display: none;">
        <form id="filterrideform" action="mail/filterride.php" method="get">
            <label style="padding-right:10px;">Start:</label>
            <select name="start">
                <option value="">start...</option>
                <option value="Wesleyan">Wesleyan</option>
                <option value="Hartford">Hartford</option>
                <option value="New Haven">New Haven</option>
                <option value="NYC">NYC</option>
                <option value="Boston">Boston</option>
                <option value="Bradley">Bradley</option>
            </select>
            <label style="padding-right:10px;">End:</label>
            <select name="end">
                <option value="">end...</option>
                <option value="Wesleyan">Wesleyan</option>
                <option value="Hartford">Hartford</option>
                <option value="New Haven">New Haven</option>
                <option value="NYC">NYC</option>
                <option value="Boston">Boston</option>
                <option value="Bradley">Bradley</option>
            </select>
            <label style="padding-right:10px;">Date:</label>
            <input style="height:25px;" type="date" name="date">
            <button type="submit">Find Ride</button>
            <button type="button" rows="2" cols="500" onclick="getElementById('filterform').style.display='none'">x</button>
        </form>
        </div>
        
 
           
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    
                
                <?php

                include "connect.php"; //connect to db
                
                $sql = "select * from available_rides";
                $query = mysqli_query($db, $sql);
                ?>
               
                
                 <table id="table" class="TFtable" > 
                 <caption>
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    <input style="width:200px;" class="searchbar"  type="text" id="search" placeholder="Type to search..." />
                </caption>
                
                   <?php
                       while ($row = mysqli_fetch_array($query, MYSQLI_BOTH)) { //creates array of results and makes rows of them
                           echo "<tr>";
                           echo "<td>";
                           /*$_SESSION['uniqueid'] = $row[unique_id];
                           if ($_SESSION['username']==$row[poster]){
                               echo "<a href='mail/deleteFromRides.php' onclick=''>x</a>";
                           }*/
                           echo $row[start_loc].' <i class="fa fa-arrow-right"></i>  ' .$row[end_loc]. ' on ' .$row[date]. '    posted by     '. substr($row[poster],0,-13)."</td>";
                           
                           echo "</tr>"; 
                           echo "<tr>"; 
                           echo "<td>" .$row[comments]. "</td>";
                           echo "</tr>"; 
                       }
                    ?>
                </table>
                   
                </div>
            </div>
        </div>
    </section>
    
  <!-- Footer -->
  <!--  <footer id="footer" class="text-center">
        
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2014
                    </div>
                </div>
            </div>
        </div>
    </footer>
    -->

    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript  -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/searchtable.js"></script>
    
   <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script> -->

    <!--Contact Form JavaScript 
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>  -->

    <!-- Custom Theme JavaScript 
    <script src="js/freelancer.js"></script> -->
    
    <script src="js/jqBootstrapValidation.js"></script> 

</body>

</html>
