<html>
	<head>
		<title>BBD | TPNVVIS</title>
		<link href="https://bootswatch.com/sandstone/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

	    <link href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker3.css" rel="stylesheet">
    	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
    	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.lt.min.js" charset="UTF-8"></script>

	</head>
	<body>
		<nav class="navbar navbar-fixed-top navbar-default">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-road" aria-hidden="true"></span> TPNVVIS</a>
	        </div>
	        <div id="navbar" class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
	          	<?php if(!$this->session->userdata('logged_in')) : ?>           
	            <li><a href="<?php echo base_url(); ?>posts">Naujienos</a></li>
	            <li><a href="<?php echo base_url(); ?>transport">Transportas</a></li>
	            <li><a href="<?php echo base_url(); ?>classes">Kainoraštis</a></li>
	        	<?php endif; ?>	 
	        	<?php if($this->session->userdata('logged_in') && $this->session->userdata('username') != 'admin') : ?>
	            <li><a href="<?php echo base_url(); ?>posts">Naujienos</a></li>
	            <li><a href="<?php echo base_url(); ?>transport">Transportas</a></li>
	            <li><a href="<?php echo base_url(); ?>classes">Kainoraštis</a></li>	
	            <?php endif; ?>
	            <?php if($this->session->userdata('logged_in') && $this->session->userdata('username') == 'admin') : ?>
	            <li><a href="<?php echo base_url(); ?>posts">Naujienos</a></li>
	            <li><a href="<?php echo base_url(); ?>transport">Transportas</a></li>
	            <li><a href="<?php echo base_url(); ?>classes">Kainoraštis</a></li>
	                     
	            <li><a href="<?php echo base_url(); ?>users">Vartotojai</a></li>
	            <?php endif; ?>
	          </ul>
	          <ul class="nav navbar-nav navbar-right">
	          	<?php if(!$this->session->userdata('logged_in')) : ?>
		            <li><a href="<?php echo base_url(); ?>contact">Kontaktai</a></li>
		            <li><a href="<?php echo base_url(); ?>users/login">Prisijungimas</a></li>
		            <li><a href="<?php echo base_url(); ?>users/register">Registracija</a></li>
	        	<?php endif; ?>
		        <?php if($this->session->userdata('logged_in')) : ?>
		        	<li><a href="<?php echo base_url(); ?>contact">Kontaktai</a></li>
		        	<li><a href="<?php echo base_url(); ?>invoices">Sąskaitos</a></li>
		            <li><a href="<?php echo base_url(); ?>users/logout">Atsijungti</a></li>
	        	<?php endif; ?>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>
	<div class="container">
	<br>
	<br>
	<!-- flash message -->

	<?php if($this->session->flashdata('user_registered')): ?>
		<?php echo '<br><p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
	<?php endif; ?>
	<?php if($this->session->flashdata('post_created')): ?>
		<?php echo '<br><p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
	<?php endif; ?>
	<?php if($this->session->flashdata('post_updated')): ?>
		<?php echo '<br><p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
	<?php endif; ?>
	<?php if($this->session->flashdata('category_created')): ?>
		<?php echo '<br><p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
	<?php endif; ?>
	<?php if($this->session->flashdata('post_deleted')): ?>
		<?php echo '<br><p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
	<?php endif; ?>
	<?php if($this->session->flashdata('login_failed')): ?>
		<?php echo '<br><p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
	<?php endif; ?>
	<?php if($this->session->flashdata('user_loggedin')): ?>
		<?php echo '<br><p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
	<?php endif; ?>
	<?php if($this->session->flashdata('user_loggedout')): ?>
		<?php echo '<br><p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
	<?php endif; ?>