<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<?php
		include('view/panel/components/head.php');
		?>
	<title>Dashing | Галерея</title>
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<?php
		include('view/panel/components/sidebar.php');
		?>
		<!--end sidebar wrapper -->
		<!--start header -->
		<?php
		include('view/panel/components/header.php');
		?>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
		
				<!--end row-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Загрузить фото на галерею</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<form action="galup" method="post" enctype="multipart/form-data">
									<input name="imgs" id="image-uploadify" type="file">
									<input type="submit" value="Загрузить" style="border: none; border-radius: 10px; padding: 3px; padding-left: 20px; padding-right: 20px;">
								</form>
							</div>
						</div>
					</div>
				</div>


				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
				<?php
				$oid = $_SESSION['admin']['id'];
				$conn = $GLOBALS['ectr_connect'];  
				$sql = "SELECT * FROM `gallery` WHERE `oid` = '$oid' ORDER BY `id` DESC";
				if($result = $conn->query($sql)){
				   $rowsCount = $result->num_rows; // ID - constant
				   foreach($result as $row){
				   ?>
						<div class="col">
							<div class="card radius-15">
								<div class="card-body text-center">
									<div class="p-4 border radius-15">
										<img src="public/gallery/<?php echo $row['path']; ?>" width="150" height="150" class="shadow" alt="" style="border-radius: 10px;">
										<br><br>
										
										<div class="d-grid"> <a href="DellGall?id=<?php echo $row['id']; ?>" class="btn btn-light radius-15">Удалить</a>
										</div>
									</div>
								</div>
							</div>
						</div>
				   <?php
				   }
				   if ($rowsCount == "0") {           
      
				   }
				   $result->free();
				} else{
					  echo "Ошибка: " . $conn->error;
				  }
				?>
				</div>
				<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<?php
			include('view/panel/components/footer.php')
		?>
	</div>
	<!--end wrapper-->
	<?php
		include('view/panel/components/switch.php')
	?>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="public/panel/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="public/panel/assets/js/jquery.min.js"></script>
	<script src="public/panel/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="public/panel/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="public/panel/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="public/panel/assets/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
	<script src="public/panel/assets/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
	<script src="public/panel/assets/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
	<script src="public/panel/assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
	<script src="public/panel/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>
	<script>
		$('#fancy-file-upload').FancyFileUpload({
			params: {
				action: 'fileuploader'
			},
			maxfilesize: 1000000
		});
	</script>
	<script>
		$(document).ready(function () {
			$('#image-uploadify').imageuploadify();
		})
	</script>
	<!--app JS-->
	<script src="public/panel/assets/js/app.js"></script>
</body>

</html>