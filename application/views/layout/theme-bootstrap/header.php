<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title><?php echo $this->config->item ( 'app_title' ); ?></title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
	<!-- header -->
	<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
	    <div class="container-fluid">
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="<?php echo base_url().'welcome'; ?>">Welcome</a>
	            <a class="navbar-brand" href="<?php echo base_url().'admin'; ?>">Admin</a>
	            <a class="navbar-brand" href="<?php echo base_url().'users'; ?>">Demo</a>
	        </div>
	        <div class="navbar-collapse collapse">
	            <ul class="nav navbar-nav navbar-right">
	                <li class="dropdown">
	                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
	                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
	                        <li><a href="#">My Profile</a></li>
	                    </ul>
	                </li>
	                <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
	            </ul>
	        </div>
	    </div>
	    <!-- /container -->
	</div>
	<!-- /Header -->
	
<!-- 	Continue content page... -->
