<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<h3 class="page-title">Data Semua Guru & Staff</h3>
			<div class="row">
				<div class="col-md-12">
					<!-- BUTTONS -->

					<!-- END BUTTONS -->
					<!-- INPUTS -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Data Guru & Staff</h3>
						</div>
						<div class="panel-body">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>no</th>
										<th>NIP</th>
										<th>Nama Lengkap</th>
										<th>Alamat</th>
										<th>Telepon</th>
										<th>Pendidikan</th>
										<th>Jabatan</th>
										<th>Keterangan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>{{$row->kode_produk}}</td>
										<td>{{$row->nama_produk}}</td>
										<td>{{$row->merk}}</td>
										<td>{{$row->stock}}</td>
										<td>{{$row->stock}}</td>
										<td>{{$row->stock}}</td>
										<td>{{$row->stock}}</td>
										<td>{{$row->stock}}</td>
										<td>
											<a href="{{URL('/produk/edit')}}/{{$row->kode_produk}}" class="btn btn-info">Edit</a>
											<a href="{{URL('/produk/edit')}}/{{$row->kode_produk}}" class="btn btn-danger">Delete</a>
										</td>
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
<script>
</body>

</html>