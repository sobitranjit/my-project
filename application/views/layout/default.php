
<html>
	<head>
		<title>Sobit Ranjit</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/jquery.dropotron.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/skel.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/skel-layers.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/init.js"></script>
		<link href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet" type="text/css" media="all" />
			<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/skel.css" />
			<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" />
			<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style-desktop.css" />
		
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>
	

	<?php $this->load->view("includes/header"); ?>
	<div class="container">
		<?php $this->load->view($content); ?>
	</div>
	
	<?php $this->load->view("includes/footer"); ?>
</body>
</html>