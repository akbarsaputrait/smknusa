<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Dashboard - Admin SMK Negeri 1 Purwosari</title>
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
				<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
				   aria-expanded="false">
					<img src="<?php echo base_url() ?>uploads/img/photo_profile/<?php echo $info_user->photo ?>"
						 class="avatar avatar-sm" alt="logo">
					<span class="small ml-1 d-md-down-none">
							<?php echo $info_user->name ?>
						</span>
				</a>

				<div class="dropdown-menu dropdown-menu-right">
					<div class="dropdown-header">Account</div>

					<a href="<?php echo base_url() ?>profile" class="dropdown-item">
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
						<a href="<?php echo base_url('dashboard') ?>" class="nav-link active">
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
					<div class="col-md-4">
						<div class="card p-4">
							<div class="card-body d-flex justify-content-between align-items-center">
								<div>
									<span class="h4 d-block font-weight-normal mb-2">54</span>
									<span class="font-weight-light">Total Pengunjung Bulan Ini</span>
								</div>

								<div class="h2 text-muted">
									<i class="icon icon-people"></i>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card p-4">
							<div class="card-body d-flex justify-content-between align-items-center">
								<div>
									<span class="h4 d-block font-weight-normal mb-2">100</span>
									<span class="font-weight-light">Total Like Bulan Ini</span>
								</div>

								<div class="h2 text-muted">
									<i class="icon icon-like"></i>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card p-4">
							<div class="card-body d-flex justify-content-between align-items-center">
								<div>
									<span class="h4 d-block font-weight-normal mb-2"><?php echo $total_blog; ?></span>
									<span class="font-weight-light">Total Post Bulan Ini</span>
								</div>

								<div class="h2 text-muted">
									<i class="icon icon-notebook"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row ">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								Total Pengunjung
							</div>

							<div class="card-body p-0">
								<div class="p-4">
									<canvas id="line-chart" width="100%" height="30"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-light">
								<b>Blog Terbaru</b>
								<div class="card-actions">
									<a href="#" class="btn">
										<i class="fa fa-list"></i>
									</a>

									<a href="#" class="btn">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<ul class="nav">
									<?php foreach ($news_blog as $item) : ?>
										<li class="nav-item">
											<h4>
												<a href="<?php echo 'pengumuman/' . $item->slug; ?>"><?php echo $item->title; ?></a>
											</h4>
											<h6 class="text-muted"><?php echo $item->content; ?>
											</h6>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-light">
								<b>Pengumuman Terbaru</b>
								<div class="card-actions">
									<a href="#" class="btn">
										<i class="fa fa-list"></i>
									</a>

									<a href="#" class="btn">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<ul class="nav">
									<?php foreach ($news_pengumuman as $item) : ?>
										<li class="nav-item">
											<h4>
												<a href="<?php echo 'pengumuman/' . $item->slug; ?>"><?php echo $item->title; ?></a>
											</h4>
											<h6 class="text-muted"><?php echo $item->content; ?>
											</h6>
										</li>
									<?php endforeach; ?>
								</ul>
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
</body>

</html>
