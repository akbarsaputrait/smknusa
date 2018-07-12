<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/popper.js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-material/js/bootstrap-material-design.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/fullcalendar/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/fullcalendar/fullcalendar.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/fullcalendar/locale/id.js"></script>

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
			events: '<?php echo base_url() ?>smknusa/get_all_event/',
			eventClick: function (event, jsEvent, view) {
				$("#show_judul_agenda").val(event.title);
				$('#show_tgl_mulai_agenda').val(moment(event.start).format('DD MMM YYYY, HH:mm') + ' WIB');
				$('#show_tgl_berakhir_agenda').val(moment(event.end).format('DD MMM YYYY, HH:mm') + ' WIB');
				$('#editModal').modal();
			},
		});
	});

</script>

</html>
