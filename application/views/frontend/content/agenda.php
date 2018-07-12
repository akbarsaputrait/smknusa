<body>
	<div class="pengumuman-content">
		<div class="container">
			<div class="text-center text-white mb-4">
				<h1>Agenda</h1>
			</div>
			<div class="card">
				<div class="card-body">
					<div id='calendar'></div>
				</div>
			</div>

			<div class="list-blog mt-5">
				<h6 class="text-muted">Blog lainnya</h6>
				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="CoverImage FlexEmbed FlexEmbed--2by1" style="background-image:url(<?php echo base_url() ?>assets/imgs/cover-blog.jpeg)"></div>
							<div class="card-body">
								<h5>Judul Blog</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<div class="CoverImage FlexEmbed FlexEmbed--2by1" style="background-image:url(<?php echo base_url() ?>assets/imgs/cover-blog.jpeg)"></div>
							<div class="card-body">
								<h5>Judul Blog</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<div class="CoverImage FlexEmbed FlexEmbed--2by1" style="background-image:url(<?php echo base_url() ?>assets/imgs/cover-blog.jpeg)"></div>
							<div class="card-body">
								<h5>Judul Blog</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer></footer>
</body>
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
						<input type="text" name="info_title" id="show_judul_agenda" class="form-control" readonly>
					</div>

					<div class="form-group">
						<label>Tanggal Mulai</label>
						<div id="tgl_mulai">
							<input id="show_tgl_mulai_agenda" name="info_start_date" class="form-control" type="text" readonly>
						</div>
					</div>

					<div class="form-group">
						<label>Tanggal Berakhir</label>
						<div id="tgl_berakhir">
							<input id="show_tgl_berakhir_agenda" name="info_end_date" class="form-control" type="text" readonly>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>