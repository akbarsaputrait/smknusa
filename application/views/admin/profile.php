<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Profile - Admin SMK Negeri 1 Purwosari</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
</head>

<body class="sidebar-fixed header-fixed">
	<div class="page-wrapper">
		<nav class="navbar page-header">
			<a href="#" class="btn btn-link sidebar-mobile-toggle d-md-none mr-auto">
				<i class="fa fa-bars"></i>
			</a>

			<a class="navbar-brand" href="#">
				<img src="<?php echo base_url(); ?>assets/imgs/logo.png" alt="logo">
			</a>

			<a href="#" class="btn btn-link sidebar-toggle d-md-down-none">
				<i class="fa fa-bars"></i>
			</a>

			<ul class="navbar-nav ml-auto">

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="<?php echo base_url() ?>uploads/img/photo_profile/<?php echo $info_user->photo ?>" class="avatar avatar-sm" alt="logo">
						<span class="small ml-1 d-md-down-none">
							<?php echo $info_user->name ?>
						</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<div class="dropdown-header">Account</div>

						<a href="#" class="dropdown-item">
							<i class="fa fa-user"></i> Profile
						</a>

						<a href="#" class="dropdown-item">
							<i class="fa fa-wrench"></i> Settings
						</a>

						<a href="<?php echo base_url(); ?>dashboard/logout" class="dropdown-item">
							<i class="fa fa-lock"></i> Logout
						</a>
					</div>
				</li>
			</ul>
		</nav>
		<div class="main-container">
			<!-- START SIDEBAR -->
			<div class="sidebar">
				<nav class="sidebar-nav">
					<ul class="nav">

						<li class="nav-title">Home</li>

						<li class="nav-item">
							<a href="<?php echo base_url('dashboard') ?>" class="nav-link">
								<i class="icon icon-speedometer"></i> Dashboard
							</a>
						</li>

						<li class="nav-item nav-dropdown">
							<a href="#" class="nav-link nav-dropdown-toggle">
								<i class="icon icon-notebook"></i> Blog
								<i class="fa fa-caret-left"></i>
							</a>

							<ul class="nav-dropdown-items">
								<li class="nav-item">
									<a href="<?php echo base_url('blog/lists') ?>" class="nav-link">
										<i class="icon icon-list"></i> Daftar Blog
									</a>
								</li>

								<li class="nav-item">
									<a href="<?php echo base_url('blog/add') ?>" class="nav-link">
										<i class="icon icon-plus"></i> Tambah Blog
									</a>
								</li>

								<li class="nav-item">
									<a href="<?php echo base_url('blog/comment') ?>" class="nav-link">
										<i class="icon icon-speech"></i> Komentar Blog
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item nav-dropdown">
							<a href="#" class="nav-link nav-dropdown-toggle">
								<i class="fa fa-exclamation"></i> Pengumuman
								<i class="fa fa-caret-left"></i>
							</a>

							<ul class="nav-dropdown-items">
								<li class="nav-item">
									<a href="<?php echo base_url('pengumuman/lists') ?>" class="nav-link">
										<i class="icon icon-list"></i> Daftar Pengumuman
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url('pengumuman/add') ?>" class="nav-link">
										<i class="icon icon-plus"></i> Tambah Pengumuman

									</a>
								</li>

								<li class="nav-item">
									<a href="<?php echo base_url('pengumuman/comment') ?>" class="nav-link">
										<i class="icon icon-speech"></i> Komentar Pengumuman
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item nav-dropdown">
							<a href="#" class="nav-link nav-dropdown-toggle">
								<i class="icon icon-picture"></i> Galeri
								<i class="fa fa-caret-left"></i>
							</a>

							<ul class="nav-dropdown-items">
								<li class="nav-item">
									<a href="<?php echo base_url('galeri/lists'); ?>" class="nav-link">
										<i class="icon icon-list"></i> Daftar Foto
									</a>
								</li>

								<li class="nav-item">
									<a href="<?php echo base_url('galeri/add'); ?>" class="nav-link">
										<i class="icon icon-plus"></i> Tambah Foto
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item">
							<a href="<?php echo base_url('agenda') ?>" class="nav-link">
								<i class="icon icon-calendar"></i> Agenda
							</a>
						</li>

						<li class="nav-title">Sekolah</li>

						<li class="nav-item nav-dropdown">
							<a href="#" class="nav-link nav-dropdown-toggle">
								<i class="icon icon-people"></i> Guru & Karyawan
								<i class="fa fa-caret-left"></i>
							</a>

							<ul class="nav-dropdown-items">
								<li class="nav-item">
									<a href="daftar_guru.html" class="nav-link">
										<i class="icon icon-list"></i> Daftar Guru
									</a>
								</li>

								<li class="nav-item">
									<a href="daftar_karyawan.html" class="nav-link">
										<i class="icon icon-list"></i> Daftar Karyawan
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item nav-dropdown">
							<a href="#" class="nav-link nav-dropdown-toggle">
								<i class="icon icon-home"></i> Profil
								<i class="fa fa-caret-left"></i>
							</a>

							<ul class="nav-dropdown-items">
								<li class="nav-item">
									<a href="#" class="nav-link">
										Visi & Misi
									</a>
								</li>

								<li class="nav-item">
									<a href="#" class="nav-link">
										Sejarah Singkat
									</a>
								</li>

								<li class="nav-item">
									<a href="#" class="nav-link">
										Fasilitas
									</a>
								</li>

								<li class="nav-item">
									<a href="#" class="nav-link">
										Struktur Organisasi
									</a>
								</li>

								<li class="nav-item">
									<a href="#" class="nav-link">
										Kepala sekolah
									</a>
								</li>

								<li class="nav-item">
									<a href="#" class="nav-link">
										Prestasi
									</a>
								</li>
							</ul>

						<li class="nav-item nav-dropdown">
							<a href="#" class="nav-link nav-dropdown-toggle">
								<i class="icon icon-trophy"></i> Program Keahlian
								<i class="fa fa-caret-left"></i>
							</a>

							<ul class="nav-dropdown-items">
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="icon icon-screen-desktop"></i> Teknik Informatika
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="icon icon-drop"></i> Teknik Pertanian
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="icon icon-settings"></i> Teknik Mesin
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="icon icon-energy"></i> Teknik Elektro
									</a>
								</li>
							</ul>
						</li>
						</li>
					</ul>
				</nav>
			</div>
			<!-- END SIDEBAR -->

			<!-- START CONTENT -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-2" role="tablist">
							<div class="list-group">
								<a data-toggle="tab" href="#profile" role="tab" class="list-group-item active">Profile</a>
								<a data-toggle="tab" href="#password" role="tab" class="list-group-item">Change Password</a>
							</div>
						</div>
						<div class="col-md-10">
							<div class="tab-content" style="border: none; color: black !important;">
								<div class="tab-pane fade show active" id="profile" role="tabpanel" style="padding: 0;">
									<div class="card">
										<div class="card-header bg-light">
											<div>Profile Information</div>
										</div>
										<div class="card-body">
											<div class="container">
												<div class="row d-flex justify-content-center">
													<div class="col-md-6">
														<?php if ($this->session->flashdata('failed')) {
    echo $this->session->flashdata('failed');
} else if ($this->session->flashdata('success')) {
    echo $this->session->flashdata('success');
}?>
														<?php echo form_open_multipart(base_url('profile/update_users/')); ?>
															<div class="form-group d-flex justify-content-center align-items-center">
																<img src="<?php echo base_url() ?>uploads/img/photo_profile/<?php echo $info_user->photo ?>" width="150" id="photo_profile" alt="">
															</div>
															<div class="form-group row">
																<div class="col-md-12">
																	<input type="file" name="photo" class="form-control" id="">
																</div>
															</div>
															<div class="form-group row">
																<label for="" class="col-sm-4 col-form-label">Username</label>
																<div class="col-sm-8">
																	<input type="text" class="form-control" name="username" value="<?php echo $info_user->username ?>">
																</div>
															</div>
															<div class="form-group row">
																<label for="" class="col-sm-4 col-form-label">Email</label>
																<div class="col-sm-8">
																	<input type="email" class="form-control" name="email" value="<?php echo $info_user->email ?>">
																</div>
															</div>
															<div class="form-group row">
																<label for="" class="col-sm-4 col-form-label">Name</label>
																<div class="col-sm-8">
																	<input type="text" class="form-control" name="name" value="<?php echo $info_user->name ?>">
																</div>
															</div>
															<div class="form-group row">
																<div class="col-md-12">
																	<button type="submit" class="btn btn-primary btn-block">Update</button>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="tab-pane fade" id="password" role="tabpanel" style="border: none; padding: 0;">
									<div class="card" id="profile">
										<div class="card-header bg-light">
											Change Password
										</div>
										<div class="card-body">
											<div class="row mb-5">
												<div class="col-md-12">
													<form id="change_password" method="post" action="<?php echo base_url() ?>profile/update_password/">
														<div class="form-group row">
															<label for="" class="col-sm-4 col-form-label">Current Pasword</label>
															<div class="col-sm-8">
																<input type="password" class="form-control" name="current_password">
															</div>
														</div>
														<div class="form-group row">
															<label for="" class="col-sm-4 col-form-label">New Password</label>
															<div class="col-sm-8">
																<input type="password" class="form-control" name="new_password">
															</div>
														</div>
														<div class="form-group row">
															<label for="" class="col-sm-4 col-form-label">Re-enter Password</label>
															<div class="col-sm-8">
																<input type="password" class="form-control" name="confirm_password">
															</div>
														</div>
														<div class="form-group row">
															<div class="col-md-12">
																<button type="submit" class="btn btn-primary btn-block">Update Password</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END CONTENT -->
		</div>
	</div>
	<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/popper.js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/chart.js/chart.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/carbon.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>

	<script>
		$(function () {
			$('input[name="photo"]').change(function () {
				readURL(this);
			});

			function readURL(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#photo_profile').attr('src', e.target.result);
					}

					reader.readAsDataURL(input.files[0]);
				}
			}
		});

	</script>
</body>

</html>
