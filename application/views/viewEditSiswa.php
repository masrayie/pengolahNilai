<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<h3 class="page-title">Edit Data Siswa</h3>
			<div class="row">
				<div class="col-md-6">
					<!-- BUTTONS -->

					<!-- END BUTTONS -->
					<!-- INPUTS -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Form Edit Siswa</h3>
						</div>
						<div class="panel-body">
							<form action="<?php echo base_url('index.php/Siswa/put/'.$objSiswa->getNis())?>" method="POST">
								<div class="form-group">
									<label class="control-label ">NIS </label>
									<input type="text" class="form-control" placeholder="NIS" name="nis" value="<?php echo $objSiswa->getNis();?>">
								</div>
								<div class="form-group">
									<label class="control-label ">Kelas </label>
									<input type="text" class="form-control" placeholder="Kelas" name="id_kelas" value="<?php echo $objSiswa->getIdKelas();?>">
								</div>
								<div class="form-group">
									<label class="control-label ">Nama Siswa </label>
									<input type="text" class="form-control" placeholder="Nama Siswa" name="nama_siswa" value="<?php echo $objSiswa->getNamaSiswa();?>">
								</div>
								<div class="form-group">
									<label class="control-label ">Jenis Kelamin </label>
									<input type="text" class="form-control" placeholder="Jenis Kelamin" name="jenkel" value="<?php echo $objSiswa->getJenkel();?>">
								</div>
								<div class="form-group">
									<label class="control-label ">Agama </label>
									<input type="text" class="form-control" placeholder="Agama" name="agama" value="<?php echo $objSiswa->getAgama();?>">
								</div>
								<div class="form-group">
									<label class="control-label ">Telepon </label>
									<input type="text" class="form-control" placeholder="Telepon" name="telepon_siswa" value="<?php echo $objSiswa->getTeleponSiswa();?>">
								</div>
								<div class="form-group">
									<label class="control-label ">Alamat </label>
									<input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $objSiswa->getAlamat();?>">
								</div>
								<div class="form-group">
									<label class="control-label ">Semester</label>
									<input type="text" class="form-control" placeholder="Semester" name="semester" value="<?php echo $objSiswa->getSemester();?>">
								</div>
								<div class="form-group">
									<label class="control-label ">No. Ijazah</label>
									<input type="text" class="form-control" placeholder="No. Ijazah" name="ijazah_no" value="<?php echo $objSiswa->getIjazah();?>">
								</div>
								<div class="form-group">
									<label class="control-label ">No. SKUHN</label>
									<input type="text" class="form-control" placeholder="No. SKHUN" name="skhun_no" value="<?php echo $objSiswa->getSkhun();?>">
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
<script>
	$(function () {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function (percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function () {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
</script>
</body>

</html>