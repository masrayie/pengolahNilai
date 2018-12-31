<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<h3 class="page-title">Data Semua Nilai Siswa</h3>
			<div class="row">
				<div class="col-md-12">
					<!-- BUTTONS -->

					<!-- END BUTTONS -->
					<!-- INPUTS -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Data Nilai Siswa</h3>
						</div>
						<div class="panel-body">
							<table id="data1" class="table table-striped">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nis</th>
										<th>Nama Lengkap</th>
										<th>Kelas</th>
										<th>Matapelajaran</th>
										<th>Tugas</th>
										<th>U_Harian</th>
										<th>UTS</th>
										<th>UAS</th>
										<th>Sikap</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>{{$row->nama_produk}}</td>
										<td>{{$row->merk}}</td>
										<td>{{$row->merk}}</td>
										<td>{{$row->merk}}</td>
										<td>{{$row->merk}}</td>
										<td>{{$row->stock}}</td>
										<td>{{$row->stock}}</td>
										<td>{{$row->stock}}</td>
										<td>{{$row->stock}}</td>
										<td>{{$row->stock}}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- END INPUTS -->
					<!-- INPUT SIZING -->

					<!-- END INPUT SIZING -->
				</div>
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
<script src="<?php echo base_url("assets/vendor/datatables/jquery.dataTables.min.js");?>"></script>
	<script src="<?php echo base_url("assets/vendor/datatables/dataTables.bootstrap.min.js");?>"></script>
	<script src="<?php echo base_url("assets/vendor/Select2/dist/js/select2.min.js")?>"></script>
	<script src="<?php echo base_url("assets/vendor/datepicker/bootstrap-datepicker.js");?>"></script>
<script src="<?php echo base_url("assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"); ?>
	">
</script>
<script src="<?php echo base_url("assets/vendor/chartist/js/chartist.min.js"); ?>
	">
</script>
<script src="<?php echo base_url("assets/scripts/klorofil-common.js"); ?>">
</script>
<script type="text/javascript">
	$('#data1').DataTable();
</script>

</body>

</html>