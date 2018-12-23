<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<h3 class="page-title">Edit Data Pegawai</h3>
			<div class="row">
				<div class="col-md-6">
					<!-- BUTTONS -->

					<!-- END BUTTONS -->
					<!-- INPUTS -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Form Edit Pegawai</h3>
						</div>
						<div class="panel-body">
							<form action="/produk" method="POST">
								<div class="form-group">
									<label class="control-label ">NIP </label>
									<input type="text" class="form-control" placeholder="NIP" name="nip" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Nama Pegawai </label>
									<input type="text" class="form-control" placeholder="Nama Pegawai" name="namalengkap" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Tanggal Lahir </label>
									<input type="text" class="form-control" placeholder="Tanggal Lahir" name="ttl" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Jenis Kelamin </label>
									<input type="text" class="form-control" placeholder="Jenis Kelamin" name="jenkel" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Alamat </label>
									<input type="text" class="form-control" placeholder="Alamat" name="alamat" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Telepon </label>
									<input type="text" class="form-control" placeholder="Telepon" name="telepon" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Pendidikan </label>
									<input type="text" class="form-control" placeholder="Pendidikan" name="pendidikan" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Jabatan</label>
									<input type="text" class="form-control" placeholder="Jabatan" name="p_jabatan" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Info Pegawai</label>
									<input type="text" class="form-control" placeholder="Info Pegawai" name="info_peg" value="">
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
<script src="<?php echo base_url(" assets/vendor/jquery/jquery.min.js"); ?>
	">
</script>
<script src="<?php echo base_url(" assets/vendor/bootstrap/js/bootstrap.min.js"); ?>
	">
</script>
<script src="<?php echo base_url(" assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"); ?>
	">
</script>
<script src="<?php echo base_url(" assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"); ?>
	">
</script>
<script src="<?php echo base_url(" assets/vendor/chartist/js/chartist.min.js"); ?>
	">
</script>
<script src="<?php echo base_url(" assets/scripts/klorofil-common.js"); ?>
	">
</script>
</body>

</html>