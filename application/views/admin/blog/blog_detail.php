<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Detail Blog - Admin SMK Negeri 1 Purwosari</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/my.css">

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/tag-input/dist/jquery.tagsinput.min.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/froala/css/froala_editor.pkgd.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/froala/css/froala_style.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

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
						<a href="#" class="nav-link active nav-dropdown-toggle">
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
				<h4>Blog / Detail Blog / <?php echo $detail_blog['title'] ?> </h4>
				<?php echo form_open_multipart(base_url('blog/update_post/' . $detail_blog["id"] . '')); ?>
				<div class="row">
					<div class="col-md-8">
						<?php if ($this->session->flashdata('failed')) {
							echo $this->session->flashdata('failed');
						} else if ($this->session->flashdata('success')) {
							echo $this->session->flashdata('success');
						} ?>
						<div class="card">
							<div class="card-body">
								<div class="form-group mb-4 cover-blog">
									<div class="CoverImage FlexEmbed FlexEmbed--3by1"
										 style="background-image:url(<?php if (isset($detail_blog['image'])) {
											 echo base_url() ?>uploads/img/cover_post/<?php echo $detail_blog['image'];
										 } else {
											 echo base_url() . 'assets/imgs/logo.png';
										 } ?>)"></div>
								</div>
								<div class="form-group">
									<label class="control-label">Cover Blog</label>
									<div class="input-group">
										<input type="file" name="cover_post" class="form-control" id="post_image">
									</div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="judul_blog"
										   value="<?php echo $detail_blog['title']; ?>">
								</div>
								<div class="form-group">
										<textarea name="konten_blog"
												  id="konten_blog"><?php echo $detail_blog['content']; ?></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<!-- Kateogri -->
						<div class="card">
							<div class="card-header bg-light">
								<b>Kategori</b>
							</div>
							<div class="card-body">
								<div class="form-group row">
									<div class="col-md-12">
										<input type="text" class="form-control" name="kategori_blog"
											   id="kategori_blog" value="<?php echo $detail_blog['categories']; ?>">
									</div>
								</div>
							</div>
						</div>

						<!-- Tags -->
						<div class="card">
							<div class="card-header bg-light">
								<b>Tags</b>
							</div>
							<div class="card-body">
								<div class="form-group row">
									<div class="col-md-12">
										<input type="text" class="form-control" name="tags_blog" id="tags_blog"
											   value="<?php echo $detail_blog['tags']; ?>">
									</div>
								</div>
							</div>
						</div>

						<!-- Pengaturan Blog -->
						<div class="card">
							<div class="card-header bg-light">
								<b>Pengaturan</b>
							</div>
							<div class="card-body">
								<div class="form-group">
									<label class="control-label" for="post_status">Status</label>
									<select name="post_status" class="form-control input-sm"
											id="post_status">
										<option value="publish" <?php if ($detail_blog['status'] == 'publish') {
											echo 'selected';
										} ?>>Diterbitkan
										</option>
										<option value="draft" <?php if ($detail_blog['status'] == 'draft') {
											echo 'selected';
										} ?>>Konsep
										</option>
									</select>
								</div>
								<div class="form-group">
									<label class="control-label" for="post_comment_status">Komentar</label>
									<select name="post_comment_status" class="form-control input-sm"
											id="post_comment_status">
										<option value="open" <?php if ($detail_blog['comment_status'] == 'open') {
											echo 'selected';
										} ?>>Diizinkan
										</option>
										<option value="close" <?php if ($detail_blog['comment_status'] == 'close') {
											echo 'selected';
										} ?>>Tidak Diizinkan
										</option>
									</select>
								</div>
								<div class="form-group">
									<button type="submit" id="submit" class="btn btn-primary btn-block">
										<i class="icon icon-cursor"></i> Simpan
									</button>
									<button class="btn btn-danger btn-block">
										<i class="icon icon-close"></i> Batal
									</button>
								</div>
							</div>
						</div>

						<!-- INFORMASI BLOG -->
						<div class="card">
							<div class="card-header bg-light">
								<b>Keterangan Blog</b>
							</div>
							<div class="card-body">
								<ul class="nav">
									<li class="nav-item"><b>Dibuat Oleh</b> : <?php echo $detail_blog['name']; ?>
										(<?php echo $detail_blog['username']; ?>)
									</li>
									<li class="nav-item"><b>Pada Tanggal</b>
										: <?php echo $detail_blog['created_at']; ?></li>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				</form>
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

<script src="<?php echo base_url() ?>assets/vendor/tag-input/dist/jquery.tagsinput.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
<script type="text/javascript"
		src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/froala/js/froala_editor.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/froala/js/froala_editor.pkgd.min.js"></script>
<script>
	var crop;
	$(document).ready(function () {
		$('#konten_blog').froalaEditor({
			toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', '|',
				'fontFamily', 'fontSize', 'color', 'inlineStyle', 'paragraphStyle', '|', 'paragraphFormat', 'align',
				'formatOL', 'formatUL', 'outdent', 'indent', 'quote', 'insertLink', 'insertImage', 'insertVideo',
				'insertFile', 'insertTable', '|', 'emoticons', 'specialCharacters', 'insertHR', 'selectAll',
				'clearFormatting', '|', 'print', 'help', 'html', '|', 'undo', 'redo'
			],
			imageUploadURL: '<?php echo base_url() ?>blog/froala_uploads/',
			imageManagerLoadURL: '<?php echo base_url() ?>blog/froala_manager/',
			imageManagerDeleteURL: '<?php echo base_url() ?>blog/froala_delete/',
			imageAllowedTypes: ['jpeg', 'jpg', 'png'],
			height: 500
		});

		$(".click").on('click', function () {
			var html = $('#myEditor').froalaEditor('html.get');
			console.log(html)
		});

		$('#kategori_blog').tagsInput({
			'defaultText': '',
			'height': '',
			'width': '',
		});

		$('#tags_blog').tagsInput({
			'defaultText': '',
			'height': '',
			'width': '',
		});

		$('#post_image').change(function () {
			$(".cover-blog").empty();
			readURL(this);
		});

		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$(".cover-blog").append('<div class="CoverImage FlexEmbed FlexEmbed--3by1" style="background-image:url(' + e.target
						.result + ')"></div>');
				}

				reader.readAsDataURL(input.files[0]);
			}
		}
	});
</script>
</body>

</html>
