<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<h3 class="page-title">Data Semua Siswa</h3>
			<div class="row">
				<div class="col-md-12">
					<!-- BUTTONS -->

					<!-- END BUTTONS -->
					<!-- INPUTS -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Data Siswa</h3>
						</div>
						<div class="panel-body">
							<table class="table table-striped" id="data1">
								<thead>
									<tr>
										<th>no</th>
										<th>NIS</th>
										<th>Nama Siswa</th>
										<th>Kelas</th>
										<th>Jenis Kelamin</th>
										<th>Alamat</th>
										<th>Ijazah</th>
										<th>SKHUN</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$n = 1;
										for($i=0; $i<sizeof($objSiswa);$i++){
											echo '<tr>';
											echo '<td>'.$n++.'</td>';
											echo '<td>'.$objSiswa[$i]->getNis().'</td>';
											echo '<td>'.$objSiswa[$i]->getNamaSiswa().'</td>';
											echo '<td>'.$objSiswa[$i]->getIdKelas().'</td>';
											echo '<td>'.$objSiswa[$i]->getJenkel().'</td>';
											echo '<td>'.$objSiswa[$i]->getAlamat().'</td>';
											echo '<td>'.$objSiswa[$i]->getIjazah().'</td>';
											echo '<td>'.$objSiswa[$i]->getSkhun().'</td>';
											echo '<td>
													<a href="'.base_url('index.php/Siswa/edit/'.$objSiswa[$i]->getNis()).'" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-pencil" ></i></a>
													<a href="'.base_url('index.php/Siswa/destroy/'.$objSiswa[$i]->getNis()).'" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash" ></i></a>
												  </td>';
											echo '</tr>';
										}
									?>
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
<script src="<?php echo base_url("assets/vendor/datatables/jquery.dataTables.min.js");?>"> </script> 
<script src="<?php echo base_url("assets/vendor/datatables/dataTables.bootstrap.min.js");?>"> </script> 
<script src="<?php echo base_url("assets/vendor/Select2/dist/js/select2.min.js")?>"></script> 
 <script src="<?php echo base_url("assets/vendor/datepicker/bootstrap-datepicker.js");?>"> </script> 
<script src="<?php echo base_url("assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"); ?>
	">
</script>
<script src="<?php echo base_url("assets/vendor/chartist/js/chartist.min.js"); ?>
	">
</script>
<script src="<?php echo base_url("assets/scripts/klorofil-common.js"); ?>
	">
</script>
<script type="text/javascript">
	$('#data1').DataTable();
</script>
</body>

</html>