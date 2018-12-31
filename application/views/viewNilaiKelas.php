<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<h3 class="page-title">Data Semua Nilai Siswa <?php echo $kelas['nama_kelas'];?></h3>
			<div class="row">
				<div class="col-md-12">
					<!-- BUTTONS -->

					<!-- END BUTTONS -->
					<!-- INPUTS -->
					<div class="panel">
						<div class="panel-body">

							<?php
							if($objUser['jabatan']==1){
								echo '<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<h4><u>Data Nilai Siswa Kelas '.$kelas['nama_kelas'].'</u></h4>
											</div>
										</div>
									  </div>';
							} else {
								echo '<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<h4><u>Data Nilai Siswa Kelas '.$kelas['nama_kelas'].'</u></h4>
									</div>
								</div>
								<div class="col-md-8" align="right">
									<div class="form-group">
										<button type="button" class="btn btn-success btn-xs" id="btnaddkey" style="font-size:15px;"><i class="fa fa-plus-square" ></i>&nbsp; Add/Edit</button>
										<button type="button" class="btn btn-danger btn-xs" id="btnclosekey" style="font-size:15px;"><i class="fa fa-minus-square" ></i>&nbsp; Close</button>
									</div>
								</div>
							</div>
							<div class="row" id="tambahnilai">
							<form action="'.base_url('index.php/Nilai/nilaiMapel').'" method="GET">
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label ">Kelas </label>
										<input type="text" class="form-control" placeholder="Kelas" name="id_kelas" value="'.$kelas['id_kelas'].'"readonly>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label ">Mata Pelajaran</label>
										<select class="js-example-placeholder-single form-control" id="selectmapel"  name="id_mapel">
											<option></option>';
												for($i=0;$i<sizeof($mapel);$i++) {	
													echo '<option value="'.$mapel[$i]['id_mapel'].'">';
													echo  $mapel[$i]['nama_mapel'];
													echo '</option>';
												}

						echo '</select>
						</div>
					</div>
					<div class="col-md-4" style="padding-top: 12px;">
						<div class="form-group" align="left" style="padding-top: 10pt;">
							<button type="submit" class="btn btn-warning btn-md"> <i class="lnr lnr-eye"></i>&nbsp;&nbsp;View</button>
						</div>
					</div>
					</form>
				</div>';}

				?>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<table id="data1" class="table table-striped" >
								<thead>
									<tr>
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
									<?php
										print_r($objNilai);
										if(!$objNilai==null){
											for($i=0; $i<sizeof($objNilai);$i++){
												echo '<input type="hidden" name="id_nilai[]" value="'.$objNilai[$i]['id_nilai'].'">';
												echo '<tr>';
												echo '<td>'.$objNilai[$i]['nis'].'</td>';
												echo '<td>'.$objNilai[$i]['nama'].'</td>';
												echo '<td>'.$objNilai[$i]['kelas'].'</td>';
												echo '<td>'.$objNilai[$i]['nama_mapel'].'</td>';
												echo '<td>'.$objNilai[$i]['nilai_tugas'].'</td>';
												echo '<td>'.$objNilai[$i]['nilai_uh'].'</td>';
												echo '<td>'.$objNilai[$i]['nilai_uts'].'</td>';
												echo '<td>'.$objNilai[$i]['nilai_uas'].'</td>';
												echo '<td>'.$objNilai[$i]['sikap'].'</td>';
												echo '<td>'.$objNilai[$i]['status'].'</td>';
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
<script src="<?php echo base_url("assets/vendor/datatables/jquery.dataTables.min.js");?>"></script>
	<script src="<?php echo base_url("assets/vendor/datatables/dataTables.bootstrap.min.js");?>"></script>
	<script src="<?php echo base_url("assets/vendor/Select2/dist/js/select2.min.js")?>"></script>
	<script src="<?php echo base_url("assets/vendor/datepicker/bootstrap-datepicker.js");?>"></script>
<script src="<?php echo base_url(" assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"); ?>
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
	  $('#selectmapel').select2({
			  placeholder: "Pilih Mata Pelajaran",
			  allowClear : true
		});
		document.getElementById("tambahnilai").style.display = "none";
		document.getElementById("btnclosekey").style.display = "none";
      $("#btnaddkey").on("click", function(){
			$("#tambahnilai").show();
    		document.getElementById("btnaddkey").style.display = "none";
			document.getElementById("btnclosekey").style.display = "initial";
		});
       $("#btnclosekey").on("click", function(){
			$("#tambahnilai").hide();
    		document.getElementById("btnaddkey").style.display = "initial";
			document.getElementById("btnclosekey").style.display = "none";
		});

	</script>
	

</body>

</html>