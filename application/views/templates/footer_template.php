<footer class="main-footer fixed-bottom">
	<strong>Built With Love by <a href="#">Anon Dev</a>.</strong>
	<div class="float-right d-none d-sm-inline-block">
		<b>v07042020</b>
	</div>
</footer>
</div>
</section>
<!-- <div class="row fixed-bottom position-relative -x-5">
		<div class="col-12 justify-content-between px-2 py-1 d-flex">
			<p>Built With Love by <strong>Anon Dev</strong></p>
			<p> </p>
			<p><strong>v07042020</strong></p>
		</div>
	</div> -->
<!-- 
	<footer class="main-footer ml-0">
		<strong>Made with <i class="fa fa-heart" aria-hidden="true"></i></a></strong>
		<div class="float-right d-none d-sm-inline-block">
			<b>Anon</b> Dev
		</div>
	</footer> -->
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/vendor/adminlte/') ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->

<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/vendor/adminlte/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/vendor/adminlte/') ?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets/vendor/adminlte/') ?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/vendor/adminlte/') ?>dist/js/demo.js"></script>
<!-- overlayScrollbar -->
<script src="<?= base_url('assets/vendor/adminlte/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- Data Tables -->
<script src="<?= base_url('assets') ?>/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/datatables/datatables-demo.js"></script>
<script>
	$(document).ready(function() {
		$('#dataTable').DataTable();
	});
</script>
</body>

</html>