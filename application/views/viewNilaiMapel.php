<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<h3 class="page-title">Data Nilai Kelas <?php echo $kelas['nama_kelas'];?></h3>
			<div class="row">
				<div class="col-md-12">
					<!-- BUTTONS -->

					<!-- END BUTTONS -->
					<!-- INPUTS -->
					<div class="panel">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<h4><u>Nilai MataPelajaran <?php echo $mapel['nama_mapel'];?></u></h4>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>Nis</th>
													<th>Nama Lengkap</th>
													<th>Kelas</th>
													<th>Mata Pelajaran</th>
													<th>Tugas</th>
													<th>U_Harian</th>
													<th>UTS</th>
													<th>UAS</th>
													<th>Sikap</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<?php 
													if($objNilai==null){
														echo '<tr>
														<td colspan="10" align="center">
															No Data Found<br/>
														</td>
													</tr>
													<tr>
														<td colspan="10" align="center">
															<form action="'.base_url('index.php/Nilai/newNilai').'" method="get">
																<input type="hidden" name="id_kelas" value="'.$kelas['id_kelas'].'">
																<input type="hidden" name="id_mapel" value="'.$mapel['id_mapel'].'">
																<a href="'.base_url('index.php/Nilai/nilaiKelas/?id_kelas='.$kelas['id_kelas']).'" class="btn btn-default btn-md" ><i class="fa fa-angle-left"></i>&nbsp;&nbsp;Kembali</a>
																<button type="submit" class="btn btn-success btn-md"> <i class="lnr lnr-file-add"></i>&nbsp;&nbsp;Create</button>
															</form>
														</td>
													</tr>';
													} else {
														echo '<form action="'.base_url('index.php/Nilai/store').'" method="post">';
														echo '<input type="hidden" name="id_kelas" value="'.$kelas['id_kelas'].'">';
														echo '<input type="hidden" name="id_mapel" value="'.$mapel['id_mapel'].'">';
														for($i=0; $i<sizeof($objNilai);$i++){
															echo '<input type="hidden" name="id_nilai[]" value="'.$objNilai[$i]['id_nilai'].'">';
															echo '<tr>';
															echo '<td>'.$objNilai[$i]['nis'].'</td>';
															echo '<td>'.$objNilai[$i]['nama'].'</td>';
															echo '<td>'.$objNilai[$i]['kelas'].'</td>';
															echo '<td>'.$objNilai[$i]['nama_mapel'].'</td>';
															echo '<td>
																	<input type="text" maxlength="3" size="3" name="n_tugas[]" value="'.$objNilai[$i]['nilai_tugas'].'">
																  </td>';
															echo '<td>
																  	<input type="text" maxlength="3" size="3" name="n_uh[]" value="'.$objNilai[$i]['nilai_uh'].'">
																  </td>';
															echo '<td>
																	<input type="text" maxlength="3" size="3" name="n_uts[]" value="'.$objNilai[$i]['nilai_uts'].'">
																  </td>';
															echo '<td>
																  	<input type="text" maxlength="3" size="3" name="n_uas[]" value="'.$objNilai[$i]['nilai_uas'].'">
																  </td>';
															echo '<td>
																	<input type="text" maxlength="3" size="3" name="sikap[]" value="'.$objNilai[$i]['sikap'].'">
																  </td>';
															echo '<td>
																  	<input type="text" maxlength="3" size="3" name="status[]" value="'.$objNilai[$i]['status'].'">
																  </td>';
															echo '</tr>';
														}
														
													}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<?php if(!$objNilai==null){
							echo '<div class="panel-footer">
									<div class="row">
										<div class="col-md-6" align="left">
											<a href="'.base_url('index.php/Nilai/nilaiKelas/?id_kelas='.$kelas['id_kelas']).'" class="btn btn-danger btn-md" ><i class="fa fa-angle-left"></i>&nbsp;&nbsp;Kembali</a>
										</div>
										<div class="col-md-6" align="right">
											<button type="submit" class="btn btn-success btn-md" id="save" ><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
										</div>	
									</div>
								</div>';
							echo '</form>';
						}
						?>

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
<script src="<?php echo base_url("assets/vendor/datatables/jquery.dataTables.min.js");?>"> </script> 
<script src="<?php echo base_url("assets/vendor/datatables/dataTables.bootstrap.min.js");?>"> </script> 
<script src="<?php echo base_url("assets/vendor/Select2/dist/js/select2.min.js")?>">
 </script> <script src="<?php echo base_url("assets/vendor/datepicker/bootstrap-datepicker.js");?>"> </script> 
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
	document.getElementById("tambahnilai").style.display = "none";
	document.getElementById("btnclosekey").style.display = "none";
	$("#btnaddkey").on("click", function () {
		$("#tambahnilai").show();
		document.getElementById("btnaddkey").style.display = "none";
		document.getElementById("btnclosekey").style.display = "initial";
	});
	$("#btnclosekey").on("click", function () {
		$("#tambahnilai").hide();
		document.getElementById("btnaddkey").style.display = "initial";
		document.getElementById("btnclosekey").style.display = "none";
	});
</script>


</body>

</html>