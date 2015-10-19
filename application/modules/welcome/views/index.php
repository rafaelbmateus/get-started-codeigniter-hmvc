<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Welcome to <?php echo $this->config->item ( 'app_title' );?></title>

<style type="text/css">
::selection {
	background-color: #E13300;
	color: white;
}

::-moz-selection {
	background-color: #E13300;
	color: white;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#body {
	margin: 0 15px 0 15px;
}

p.footer {
	text-align: right;
	font-size: 11px;
	border-top: 1px solid #D0D0D0;
	line-height: 32px;
	padding: 0 10px 0 10px;
	margin: 20px 0 0 0;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
}
</style>
</head>
<body>

	<div id="container">
		<h1>Welcome to <?php echo $this->config->item ( 'app_title' );?></h1>

		<div id="body">
			<p><strong>HMVC</strong></p>
			<p>Hierarchical model–view–controller (HMVC) is a software architectural pattern.</p>
			<code>
				application/modules/your-module
				<br>
				<br>
				<strong>Example:</strong>
				<br>
				modules/your-module/controllers
				<br>
				modules/your-module/controllers/your-controller
				<br>
				...
				<br><br>
				modules/your-module/models
				<br>
				modules/your-module/models/your-model
				<br>
				...
				<br><br>
				modules/your-module/views
				<br>
				modules/your-module/views/index
				<br>
				modules/your-module/views/create
				<br>
				...
			</code>
			<p><strong>Routing</strong></p>
			<p>Following the structure of CodeIgniter.</p> 
			<p>Typically there is a one-to-one relationship between a URL string and its corresponding controller class/method. The segments in a URI normally follow this pattern:</p>
			<code>
				example.com/users/
				<br>
				example.com/users/create
				<br>
				...
			</code>
			<div class="row">
				<div class="col-md-1">
					<a class="btn btn-success" href="<?php echo base_url().'users'; ?>">Demo</a>
				</div>
				<div class="col-md-1">
					<a class="btn btn-primary" href="<?php echo base_url().'admin'; ?>">Admin</a>
				</div>
			</div>
		</div>

		<p class="footer">
			Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</div>

</body>
</html>