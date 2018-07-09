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
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/my.css"

	<!-- SWEETALERT -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/sweetalert2/sweetalert2.min.css">

	<!-- DROPZONE  -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/dropzone/dropzone.css">

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
								<a href="<?php echo base_url('galeri/add'); ?>" class="nav-link active">
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
				<div id="actions" class="row">
					<?php if ($this->session->flashdata('failed')) {
						echo $this->session->flashdata('failed');
					} else if ($this->session->flashdata('success')) {
						echo $this->session->flashdata('success');
					} ?>
					<div class="col-md-7">
						<!-- The fileinput-button span is used to style the file input field as button -->
						<span class="btn btn-success fileinput-button">
     						<i class="glyphicon glyphicon-plus"></i>
     						Add files...
    					</span>
						<button type="submit" class="btn btn-primary start">
							<i class="glyphicon glyphicon-upload"></i>
							<span>Start upload</span>
						</button>
						<button type="reset" class="btn btn-danger cancel">
							<i class="glyphicon glyphicon-ban-circle"></i>
							<span>Cancel upload</span>
						</button>
						<a href="<?php echo base_url() ?>galeri/lists" class="btn btn-warning">
							Daftar Galeri
						</a>
						<pre>or Drop the file to here.</pre>
					</div>
					<div class="col-md-5">
						<span class="fileupload-process">
							<div id="total-progress" class="progress progress-striped active" role="progressbar"
								 aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"></div>
				  			<div class="progress-bar progress-bar-success" style="width:0%;"
								 data-dz-uploadprogress></div>
				 		</span>
					</div>
				</div>
				<div class="table table-striped" class="files" id="previews">
					<div id="template" class="file-row row">
						<!-- This is used as the file preview template -->
						<div class="col-md-2 d-flex align-items-center">
							<span class="preview"><img data-dz-thumbnail/></span>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-6 info-file">
									<div>
										<p class="name" data-dz-name></p>
										<strong class="error text-danger" data-dz-errormessage></strong>
									</div>
									<div>
										<p class="size" data-dz-size></p>
										<div class="progress progress-striped active" role="progressbar"
											 aria-valuemin="0"
											 aria-valuemax="100" aria-valuenow="0">
											<div class="progress-bar progress-bar-success" style="width:0%;"
												 data-dz-uploadprogress></div>
										</div>
									</div>
								</div>
								<div class="col-md-6 info-file">
									<button class="btn btn-primary start">
										<i class="glyphicon glyphicon-upload"></i>
										<span>Start</span>
									</button>
									<button data-dz-remove class="btn btn-danger cancel">
										<i class="glyphicon glyphicon-ban-circle"></i>
										<span>Cancel</span>
									</button>
									<p data-dz-remove class="delete">
										<i class="glyphicon glyphicon-check"></i>
										<span class="alert alert-success">Finish</span>
									</p>
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
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/popper.js/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/carbon.js"></script>
<script src="<?php echo base_url() ?>assets/js/demo.js"></script>

<!-- SWEETALERT -->
<script src="<?php echo base_url() ?>assets/vendor/sweetalert2/sweetalert2.all.min.js"></script>

<!-- DROPZONE -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/dropzone/dropzone.js"></script>

<script type="text/javascript">
	var base_url = '<?php echo base_url(); ?>';

	$(document).ready(function () {

		var previewNode = document.querySelector("#template");
		previewNode.id = "";
		var previewTemplate = previewNode.parentNode.innerHTML;
		previewNode.parentNode.removeChild(previewNode);

		var myDropzone = new Dropzone(document.getElementById("actions"), {
			url: base_url + "galeri/add_photo", // mengatur url
			thumbnailWidth: 100,
			thumbnailHeight: 100,
			parallelUploads: 20,
			maxFilesize: 10, // membatasi ukuran file yang di upload
			previewTemplate: previewTemplate,
			acceptedFiles: "image/*",
			autoQueue: false, // Pastikan bahwa file tidak antri sampai ditambahkan secara manual
			previewsContainer: "#previews", // menentukan elemen untuk menampilkan preview
			clickable: ".fileinput-button" // menentukan elemen pemicu untuk memilih file
		});

		myDropzone.on("addedfile", function (file) {
			if (this.files.length) {
				var _i, _len;
				for (_i = 0, _len = this.files.length; _i < _len - 1; _i++) // -1 to exclude current file
				{
					if (this.files[_i].name === file.name && this.files[_i].size === file.size && this.files[_i].lastModifiedDate.toString() === file.lastModifiedDate.toString()) {
						this.removeFile(file);
					}
				}
			}

			var unique_field_id = new Date().getTime();

			title = file.title == undefined ? "" : file.title;
			file._titleBox = Dropzone.createElement("<div class='col-md-2'><div class='form-group'><input id='" + file.name + unique_field_id + "_kategori' class='form-control' type='text' placeholder='Kategori' name='kategori_gambar' value=" + title + " ></div></div>");
			file.previewElement.appendChild(file._titleBox);

			description = file.description == undefined ? "" : file.description;
			file._descriptionBox = Dropzone.createElement("<div class='col-md-4'><div class='form-group'><input id='" + file.name + unique_field_id + "_keterangan' class='form-control' type='text' placeholder='Keterangan' name='keterangan_gambar' value=" + description + " ></div></div>");
			file.previewElement.appendChild(file._descriptionBox);

			// menghubungkan tombol trart
			file.previewElement.querySelector(".start").onclick = function () {
				myDropzone.enqueueFile(file);
			};
		});

		myDropzone.on("sending", function (file, xhr, formData) {
			kategori = file.previewElement.querySelector("input[name='kategori_gambar']");
			keterangan = file.previewElement.querySelector("input[name='keterangan_gambar']");

			// format of this depends on your paramName config. Mine was called image
			formData.append("kategori", $(kategori).val());
			formData.append("keterangan", $(keterangan).val());
			// menampilkan total progressbar
			document.querySelector("#total-progress").style.opacity = "1";
			// pada saat upload berlangsung, tombol start akan mati(disabled)
			file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
		});

		myDropzone.on("success", function (response) {
			if (response.status == "success") {
				swal({
					type: 'success',
					title: 'Berhasil!',
					showConfirmButton: false,
					timer: 1500
				});
			} else {
				swal({
					type: 'error',
					title: 'gagal!',
					showConfirmButton: false,
					timer: 1500
				});
			}
			});

		// progressbar akan di sembunyikan ketika prosess upload sudah selesai
		myDropzone.on("queuecomplete", function (progress) {
			document.querySelector("#total-progress").style.opacity = "0";
		});

		myDropzone.on("complete", function (file, progress) {
			document.querySelector("#total-progress").style.opacity = "0";
			this.removeFile(file);
		});

		// Membuat fungsi mengunggah semua gambar pada tombol start
		document.querySelector("#actions .start").onclick = function () {
			myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
		};
		// Membuat fungsi pembatalan semua gambar pada saat upload
		document.querySelector("#actions .cancel").onclick = function (file) {
			myDropzone.fileupload - process(true);
		};
	});

</script>
</body>

</html>
