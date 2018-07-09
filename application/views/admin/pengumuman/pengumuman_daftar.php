<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Komentar Blog - Admin SMK Negeri 1 Purwosari</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/styles.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/my.css">

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/datatables/responsive.dataTables.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/datatables/buttons.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/sweetalert2/sweetalert2.min.css">
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
								<a href="<?php echo base_url('pengumuman/lists') ?>" class="nav-link active">
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
				<h4>Pengumuman / Daftar Pengumuman</h4>
				<div class="row">
					<div class="col-md-12">
						<?php if ($this->session->flashdata('failed')) {
							echo $this->session->flashdata('failed');
						} else if ($this->session->flashdata('success')) {
							echo $this->session->flashdata('success');
						} ?>
						<div class="card">
							<div class="card-body">
								<table id="table_id" class="table table-striped">
									<thead>
									<tr>
										<th>No.</th>
										<th>Judul</th>
										<th>Penulis</th>
										<th>Status</th>
										<th>Tanggal / Waktu</th>
										<th></th>
									</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- END CONTENT -->
	</div>
</div>
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/popper.js/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/carbon.js"></script>
<script src="<?php echo base_url() ?>assets/js/demo.js"></script>

<script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/sweetalert2/sweetalert2.all.min.js"></script>
<script type="text/javascript">
	var base_url = '<?php echo base_url(); ?>';
	$(document).ready(function () {
		// DATATABLE SISWA
		var blog = $('#table_id').DataTable({
			select: true,
			searching: true,
			processing: true,
			responsive: true,
			lengthChange: true,
			ajax: {
				url: base_url + "pengumuman/get_list_blog/",
			},
			columns: [{
				'data': 'no'
			},
				{
					'data': 'title'
				},
				{
					'data': 'created_by'
				},
				{
					'data': 'status',
					'render': function (data, type, row) {
						if (data == 'draft') {
							return '<h5><span class="badge badge-warning">Draft</span></h5>';
						} else if (data == 'publish') {
							return '<h5><span class="badge badge-primary">Publish</span></h5>';
						}
					}
				},
				{
					'data': 'created_at'
				},
				{
					'data': 'id',
					'render': function (data, type, row) {
						return '<div class="btn-group" role="group" aria-label=""><a href="' + data +
							'" class="btn btn-success" title="Lihat Blog"><i class="icon icon-eye"></i></a><a href="<?php echo base_url() ?>pengumuman/detail/' +
							data +
							'" class="btn btn-primary"><i class="icon icon-pencil"></i></a><button type="button" class="btn btn-danger" id="delete_blog" data-id="' +
							data + '" title="Hapus Blog"><i class="icon icon-trash"></i></button></div>';
					}
				}
			],
			columnDefs: [{
				targets: 0,
				width: "80px"
			},
				{
					targets: 1,
					width: "350px"
				},
				{
					targets: 2,
					width: "120px"
				},
				{
					targets: 3,
					width: "50px"
				},
				{
					targets: 4,
					width: "200px"
				},
			]
		});

		$(document).on('click', '#delete_blog', function () {
			var id = $(this).data('id');
			swal({
				title: 'Anda yakin untuk menghapus?',
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
				if (result.value) {
					window.location.replace('<?php echo base_url("pengumuman/delete_post/")?>' + id);
				}
			});
		});
	});

</script>
</body>

</html>
