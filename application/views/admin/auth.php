<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Admin SMK Negeri 1 Purwosari</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/my.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/sweetalert2/sweetalert2.min.css">

</head>

<body class="sidebar-fixed header-fixed">
	<div class="page-wrapper flex-row align-items-center">
		<div class="container">
		<?php if ($this->session->flashdata('failed')) {
    echo $this->session->flashdata('failed');
}?>
			<div class="row justify-content-center">
				<div class="col-md-5">
					<div class="card p-4">
						<div class="card-header text-center text-uppercase h4 font-weight-light">
							Login
						</div>

						<div class="card-body">
							<form action="<?php echo base_url(); ?>auth/login" method="post">
								<div class="form-group">
									<label class="form-control-label">Username or Email</label>
									<input type="text" name="username" class="form-control">
								</div>

								<div class="form-group">
									<label class="form-control-label">Password</label>
									<input type="password" name="password" class="form-control">
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block">Masuk</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/popper.js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/carbon.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>

	<script src="<?php echo base_url(); ?>assets/vendor/sweetalert2/sweetalert2.all.min.js"></script>
</body>

</html>
