<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<?php
		include('view/panel/components/head.php');
	?>
	<title>Конактная форма</title>
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
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tables</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Контактная форма</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
					<br>
						<div class="card">
					<div class="card-body">
						<h5 class="card-title">Все сообщение</h5>
						<hr>
						<div class="accordion accordion-flush" id="accordionFlushExample">
										<?php
										$oid = $_SESSION['admin']['id'];
										$conn = $GLOBALS['ectr_connect'];  
										$sql = "SELECT * FROM `formbox` where `oid` = $oid";
										if($result = $conn->query($sql)){
										   $rowsCount = $result->num_rows; // ID - constant
										   foreach($result as $row){
										   ?>
												<div class="accordion-item">
														<h2 class="accordion-header" id="flush-headingOne">
															<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $row['id']; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
															   <?php echo $row['date']; ?> | <?php echo $row['title']; ?>
															</button>
														</h2>

														<div id="flush-collapse<?php echo $row['id']; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
															<div class="accordion-body">
																<h6>Отправитель: <?php echo $row['name']; ?></h6>
																<h6>Контакты: <?php echo $row['phone']; ?></h6>
																<hr>
																<p><?php echo $row['data']; ?></p>
																
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

							<!-- end box-->
						</div>
					</div>
				</div>
					</div>
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
	<!--start switcher-->
	<?php
		include('view/panel/components/switch.php');
		?>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<?php
		include('view/panel/components/js-require.php');
		?>
</body>

</html>