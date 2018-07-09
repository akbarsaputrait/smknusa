<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Agenda - Admin SMK Negeri 1 Purwosari</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/styles.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/jquery/jquery-ui.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/jquery/jquery-ui-timepicker-addon.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/my.css">

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/fullcalendar/fullcalendar.css">

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
						<a href="<?php echo base_url('agenda') ?>" class="nav-link active">
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
				<h4>Agenda</h4>
				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-light">
								<b>Tambah Agenda</b>
							</div>

							<div class="card-body">
								<form id="addEvent">
									<div class="form-group">
										<label>Judul Agenda</label>
										<input type="text" name="title" id="" class="form-control" placeholder="Title">
									</div>

									<div class="form-group">
										<label>Tautan</label>
										<input type="text" name="url" id="" class="form-control"
											   placeholder="www.example.com">
									</div>

									<div class="form-group">
										<label>Tanggal Mulai</label>
										<div id="tgl_mulai">
											<input placeholder="Start Date" name="start_date" class="form-control"
												   type="text">
										</div>
									</div>

									<div class="form-group">
										<label>Tanggal Berakhir</label>
										<div id="tgl_berakhir">
											<input placeholder="End Date" name="end_date" class="form-control"
												   type="text">
										</div>
									</div>

									<div class="form-group">
										<label>Warna Latar</label>
										<input type="color" name="background_color" id="" style="height: 2rem;"
											   class="form-control" value="#000000">
									</div>

									<div class="form-group">
										<label>Warna Text</label>
										<input type="color" name="text_color" id="" style="height: 2rem;"
											   class="form-control" value="#ffffff">
									</div>

									<div class="form-group">
										<button id="submit" class="btn btn-primary btn-block">
											<i class="icon icon-cursor"></i> Simpan
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="card">
							<div class="card-header bg-light">
								<b>Kalender</b>
							</div>

							<div class="card-body">
								<div id='calendar'></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END CONTENT -->
	</div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Informasi Agenda</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="updateEvent">
					<div class="form-group">
						<label>Judul Agenda</label>
						<input type="text" name="info_title" id="show_judul_agenda" class="form-control"
							   placeholder="Title">
					</div>

					<div class="form-group">
						<label>Tautan</label>
						<input type="text" name="info_url" id="show_tautan_agenda" class="form-control"
							   placeholder="www.example.com">
					</div>

					<div class="form-group">
						<label>Tanggal Mulai</label>
						<div id="tgl_mulai">
							<input placeholder="Start Date" id="show_tgl_mulai_agenda" name="info_start_date"
								   class="form-control"
								   type="text">
						</div>
					</div>

					<div class="form-group">
						<label>Tanggal Berakhir</label>
						<div id="tgl_berakhir">
							<input placeholder="End Date" id="show_tgl_berakhir_agenda" name="info_end_date"
								   class="form-control"
								   type="text">
						</div>
					</div>

					<div class="form-group">
						<label>Warna Background</label>
						<input type="color" name="info_background_color" id="show_warna_bg" style="height: 2rem;"
							   class="form-control">
					</div>

					<div class="form-group">
						<label>Warna Text</label>
						<input type="color" name="info_text_color" id="show_warna_text" style="height: 2rem;"
							   class="form-control">
					</div>

					<div class="form-group">
						<button id="submit" class="btn btn-primary btn-block">
							<i class="icon icon-cursor"></i> Simpan
						</button>
						<button id="delete_agenda" type="button" class="btn btn-danger btn-block">
							<i class="icon icon-trash"></i> Hapus
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery-ui.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery-ui-timepicker-addon.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/popper.js/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/carbon.js"></script>
<script src="<?php echo base_url() ?>assets/js/demo.js"></script>

<script src="<?php echo base_url() ?>assets/vendor/fullcalendar/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/fullcalendar/fullcalendar.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/fullcalendar/locale/id.js"></script>

<!-- SWEETALERT -->
<script src="<?php echo base_url() ?>assets/vendor/sweetalert2/sweetalert2.all.min.js"></script>

<script>
	$(function () {
		var calendar = $('#calendar').fullCalendar({
			lang: 'id',
			themeSystem: 'bootstrap4',
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,listMonth'
			},
			timezone: 'local',
			eventLimit: true, // allow "more" link when too many events
			events: '<?php echo base_url()?>agenda/get_all_event/',
			eventClick: function (event, jsEvent, view) {
				$("#show_judul_agenda").val(event.title);
				$("#show_tautan_agenda").val(event.tautan);
				$('#show_tgl_mulai_agenda').val(moment(event.start).format('DD MMM YYYY, HH:mm') + ' WIB');
				$('#show_tgl_berakhir_agenda').val(moment(event.end).format('DD MMM YYYY, HH:mm') + ' WIB');
				$("#show_warna_bg").val(event.color);
				$("#show_warna_text").val(event.textColor);
				$('#editModal').modal();

				$("form#updateEvent").attr('action', '<?php echo base_url("agenda/update_event/")?>' + event.id + '');
			},
		});

		$("#addEvent").on('submit', function (event) {
			event.preventDefault();

			var form = $(this).serialize();

			$.ajax({
				type: "POST",
				url: '<?php echo base_url()?>agenda/add_event',
				data: form,
				success: function (data) {
					calendar.fullCalendar("refetchEvents");
				},
			});
		});

		$("#updateEvent").on('submit', function (event) {
			event.preventDefault();

			var form = $(this).serialize();

			$.ajax({
				type: "POST",
				url: $(this).attr('action'),
				data: form,
				success: function (data) {
					console.log(data);

					$('#editModal').modal('hide');

					calendar.fullCalendar("refetchEvents");
				},
			});
		});

		$('#tgl_mulai input').datetimepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '2018:2100', //set the range of years
			dateFormat: 'dd-mm-yy', //set the format of the date
			timeFormat: 'HH:mm'
		}).val();

		$('#tgl_berakhir input').datetimepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '2018:2100', //set the range of years
			dateFormat: 'dd-mm-yy', //set the format of the date
			timeFormat: 'HH:mm'
		}).val();

		$("#delete_agenda").on('click', function () {
			swal({
				title: 'Anda yakin untuk menghapus?',
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
				if (result.value) {
					var href = $("#updateEvent").attr('action');
					var id = href.split('/')[6]; //Mengambil ID user hasil dari split url

					$.ajax({
						url: '<?php echo base_url()?>agenda/delete_event/' + id,
						success: function (data) {
							console.log(data);

							$('#editModal').modal('hide');

							calendar.fullCalendar("refetchEvents");
						}
					});
				}
			});
		});

	});
</script>
</body>

</html>
