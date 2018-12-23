<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Sistem Pengolah Nilai</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/vendor/font-awesome/css/font-awesome.min.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/vendor/linearicons/style.css"); ?>">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/main.css"); ?>">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/demo.css"); ?>">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url("assets/img/apple-icon.png"); ?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url("assets/img/favicon.png"); ?>">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="<?php echo base_url("assets/img/logo-dark.png"); ?>" alt="Klorofil Logo"></div>
								<p class="lead">Login to your account</p>
							</div>
							<?php echo form_open('VerifyLogin'); ?>
							<form class="form-auth-small" action="" method="POST">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="text" class="form-control"  name="username"  placeholder="Email">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" name="password" placeholder="Password">
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
							</form>
							<?php echo form_close(); ?>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Sistem Pengolahan Nilai</h1>
							<p>SMPK Mardiwiyata Malang</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
