<?php
	include 'koneksi.php';
	$id_artikel=$_GET['id_artikel'];
	$query=mysqli_query($koneksi, "SELECT * from artikel where id_artikel=$id_artikel");
?>


<?php include 'dashboard.php'; ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit Artikel</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Artikel</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-default">
					<div class="panel-heading">Forms</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="POST" action="update_artikel.php" name="update_artikel" enctype="multipart/form-data">
								<?php
									while ($row=mysqli_fetch_array($query)) {
									?>
								<input type="hidden" name="id_artikel" value="<?php echo $id_artikel ?>">
								<div class="form-group">
									<label>Judul</label>
									<input class="form-control" placeholder="Masukkan Judul" name="judul" value="<?php echo 
									$row['judul']; ?>">
								</div>
								<div class="form-group">
									<label>Penulis</label>
									<input class="form-control" placeholder="Masukkan Penulis" name="penulis" value="<?php echo $row['penulis']; ?>">
								</div>
								<div class="form-group">
									<label>Isi</label>
									<textarea class="form-control" rows="3" name="isi" value="<?php echo $row['isi']; ?>"></textarea>
								</div>
								<div class="form-group">
									<label>Gambar</label>
									<input type="file" name="gambar">
								</div>

								
									<input type="submit" class="btn btn-primary" name="insert_artikel">
									<button type="reset" class="btn btn-default">Reset Button</button>
								</div>
								<?php } ?>
							</form>
						</div>
					</div>
				</div><!-- /.panel-->		
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>