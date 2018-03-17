<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADMIN HMIF </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="shortcut icon" href="https://hmifitenas.com/img/hmifcon.ico" type="image/x-icon">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/admin/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/admin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/admin/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/admin/dist/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/admin/dist/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">

		<div class="container-login100"  >
			<div class="wrap-login100">
		<div class="logo-hmif">
			<center><img src="<?php echo base_url() ?>assets/img/logo.png" class="img-Responsive" alt=""> </center>
				</div>

				<div class="login100-pic js-tilt" data-tilt>
					<a href="<?php echo base_url() ?>">
					<img src="<?php echo base_url() ?>assets/img/logohmif.png" alt="IMG"></a>
				</div>
        <?php echo validation_errors(); ?>
        <?php echo form_open('admin/login_validation'); ?>
				<div class="login100-form validate-form">
					<span class="login100-form-title">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
  <?php echo  $this->session->flashdata("error"); ?>

					</div>



				</div>

        <?php echo form_close(); ?>

			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/admin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/admin/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url() ?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/admin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/admin/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/admin/dist/js/main.js"></script>

</body>
</html>
