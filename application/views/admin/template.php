<!DOCTYPE html>
<html lang="en">

<head>	

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sobit Ranjit</title>

    <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/admin/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    body,td,th {
	color: #000;
}
    body {
	background-color: #oooo;
}
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
     
   <?php
   
		
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');

	   ?>

        
            <!-- /.navbar-collapse -->
      </nav>

<div class="row">
                    <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>

        <div id="page-wrapper">

        <?php

            $this->load->view($admincontent);
            ?>

           

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/admin_assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin_assets/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url(); ?> assets/admin_assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin_assets/js/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin_assets/js/plugins/morris/morris-data.js"></script>

</body>

</html>








               



 

