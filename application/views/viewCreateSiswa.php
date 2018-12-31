<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<h3 class="page-title">Tambah Siswa Baru</h3>
			<div class="row">
				<div class="col-md-6">
					<!-- BUTTONS -->

					<!-- END BUTTONS -->
					<!-- INPUTS -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Form Tambah Siswa</h3>
						</div>
						<div class="panel-body">
							<form action="<?php echo base_url('index.php/Siswa/store') ?>" method="POST">
								<div class="form-group">
									<label class="control-label ">NIS </label>
									<input type="text" class="form-control" placeholder="NIS" name="nis" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Kelas </label>
									<input type="text" class="form-control" placeholder="Kelas" name="id_kelas" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Nama Siswa </label>
									<input type="text" class="form-control" placeholder="Nama Siswa" name="nama_siswa" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Jenis Kelamin </label>
									<input type="text" class="form-control" placeholder="Jenis Kelamin" name="jenkel" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Agama </label>
									<input type="text" class="form-control" placeholder="Agama" name="agama" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Telepon </label>
									<input type="text" class="form-control" placeholder="Telepon" name="telepon_siswa" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Alamat </label>
									<input type="text" class="form-control" placeholder="Alamat" name="alamat" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Semester</label>
									<input type="text" class="form-control" placeholder="Semester" name="semester" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">No. Ijazah</label>
									<input type="text" class="form-control" placeholder="No. Ijazah" name="ijazah_no" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">No. SKUHN</label>
									<input type="text" class="form-control" placeholder="No. SKHUN" name="skhun_no" value="">
								</div>
						</div>
						<div class="panel-footer" align="right">
							<button type="submit" class="btn btn-primary btn-md" id="save" name="sbmt"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
						</div>
						</form>
					</div>
					<!-- END INPUTS -->
					<!-- INPUT SIZING -->

					<!-- END INPUT SIZING -->
				</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
<div class="clearfix"></div>
<footer>
	<div class="container-fluid">
		<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights
			Reserved.</p>
	</div>
</footer>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<script src="<?php echo base_url("assets/vendor/jquery/jquery.min.js"); ?>
	">
</script>
<script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.min.js"); ?>
	">
</script>
<script src="<?php echo base_url("assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"); ?>
	">
</script>
<script src="<?php echo base_url("assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"); ?>
	">
</script>
<script src="<?php echo base_url("assets/vendor/chartist/js/chartist.min.js"); ?>
	">
</script>
<script src="<?php echo base_url("assets/scripts/klorofil-common.js"); ?>
	">
</script>
</body>

</html>