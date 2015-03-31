<?php

session_start();
include_once 'admin/includes/classes/news.php';
include_once 'admin/includes/classes/db.php';
include_once 'admin/includes/classes/user.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-News</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/small-business.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <?php include "includes/header.php"; ?>
        <!-- /.container -->
    </nav>

    <!-- Navigation -->


    <!-- Page Content -->
    <div class="container">
    
     <?php
                    if (isset($_GET['action']) && !empty($_GET['action'])) {

                        $file = "files/" . $_GET['action'] . ".php";

                        if (file_exists($file)) {

                            include($file);
                        } else {

                            include "files/home.php";
                        }
                    } else {
						//echo 'file not found';

                        include"files/home.php";
                    }
                    ?>

        <!-- Heading Row -->
        
        
        <footer>
            <div class="row">
                
                <?php include "includes/footer.php"; ?>
                
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
