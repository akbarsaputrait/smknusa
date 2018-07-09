<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Galeri - Admin SMK Negeri 1 Purwosari</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/styles.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/my.css">

	<!-- DATATABLES -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/datatables/responsive.dataTables.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/datatables/buttons.bootstrap4.min.css">

	<!-- SWEETALERT -->
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
								<a href="<?php echo base_url('galeri/lists'); ?>" class="nav-link active">
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
				<h4>Galeri / Daftar Galeri</h4>
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
										<th>Gambar</th>
										<th>Kategori</th>
										<th>Keterangan</th>
										<th>Tanggal</th>
										<th>Oleh</th>
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
<!-- MODAL INFO Gambar -->
<div class="modal fade" id="modal_info_gambar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header bg-dark border-0">
				<h5 class="modal-title text-white" id="">Keterangan Gambar</h5>
				<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php echo form_open_multipart(base_url('galeri/update_post')); ?>
				<div class="form-group row">
					<div class="col-md-12 d-flex justify-content-center align-items-center">
						<img src="" width="130" id="preview_gambar" alt="">
					</div>
				</div>
				<div class="form-group">
					<input type="file" class="form-control" name="photo_galery" id="input_gambar">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Kategori</label>
					<input type="text" class="form-control" id="info_kategori" name="kategori_photo">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Keterangan</label>
					<input type="text" class="form-control" id="info_keterangan" name="keterangan_photo">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Oleh</label>
					<input type="text" class="form-control" id="info_penulis" readonly>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Tanggal</label>
					<input type="text" class="form-control" id="info_tanggal" readonly>
				</div>
				<button type="submit" class="btn btn-primary">Simpan</button>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/popper.js/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/carbon.js"></script>
<script src="<?php echo base_url() ?>assets/js/demo.js"></script>

<!-- DATATABLES -->
<script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.responsive.min.js"></script>

<!-- SWEETALERT -->
<script src="<?php echo base_url() ?>assets/vendor/sweetalert2/sweetalert2.all.min.js"></script>

<script type="text/javascript">
	var base_url = '<?php echo base_url(); ?>';

	$(document).ready(function () {
		// DATATABLE PHOTO
		var photo = $("#table_id").DataTable({
			select: true,
			searching: true,
			processing: true,
			responsive: true,
			lengthChange: true,
			ajax: {
				url: base_url + "galeri/get_list_blog/",
			},
			columns: [
				{
					'data': 'no'
				},
				{
					'data': 'filename',
					'render': function (data, type, row) {
						return '<img width="130" src="' + base_url + 'uploads/img/galery/' + data + '">';
					}
				},
				{
					'data': 'categories'
				},
				{
					'data': 'content'
				},
				{
					'data': 'date'
				},
				{
					'data': 'created_by',
				},
				{
					'data': 'id',
					'render': function (data, type, row) {
						return '<div class="btn-group" role="group" aria-label=""><button type="button" data-toggle="modal" data-target="#modal_info_gambar" data-id="' + data + '" class="btn btn-primary" ><i class="icon icon-pencil"></i></a><button type="button" class="btn btn-danger" id="delete_komentar" data-id="' +
							data + '"><i class="icon icon-trash"></i></button></div>';
					}
				}
			]
		});

		$(document).on('show.bs.modal', '#modal_info_gambar', function (event) {
			var button = $(event.relatedTarget),
				$modal = $(this),
				id_photo = button.data('id');

			$.ajax({
				url: '<?php echo base_url()?>galeri/get_info_photo/' + id_photo,
				success: function (data) {
					$("#preview_gambar").attr('src', '<?php echo base_url()?>uploads/img/galery/' + data.filename + '');
					$("#info_kategori").val(data.categories);
					$("#info_keterangan").val(data.content);
					$("#info_penulis").val(data.created_by);
					$("#info_tanggal").val(data.date);

					$("form").attr('action', '<?php echo base_url("galeri/update_post/")?>' + id_photo + '');
				}
			});
		});

		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#preview_gambar').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
		}

		$('#input_gambar').change(function () {
			readURL(this);
		});

		$(document).on('click', '#delete_komentar', function () {
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
					window.location.replace('<?php echo base_url("galeri/delete_post/")?>' + id);
				}
			});
		});
	});

</script>
</body>

</html>
