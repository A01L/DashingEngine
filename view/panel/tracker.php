<?php
$oid = $_SESSION['admin']['id'];
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
<?php
		include('view/panel/components/head.php');
		?>
	<title>Трекер | Stat Basic | <?php echo get_data('route', 'name', 'oid', $oid); ?></title>
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
					<div class="breadcrumb-title pe-3">Stat Basic</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Трекер</li>
							</ol>
						</nav>
					</div>
				
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Статистика трафика </h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Название</th>
										<th>Внешняя ссылка</th>
										<th>Посещение</th>
										<th>ПК</th>
										<th>Смартфоны</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$conn = $GLOBALS['ectr_connect'];  
										$sql = "SELECT * FROM `links` WHERE `oid` = $oid";
										if($result = $conn->query($sql)){
										   $rowsCount = $result->num_rows; // ID - constant
										   foreach($result as $row){
										   ?>
												<tr>
													<td><?php echo $row['name']; ?></td>
													<td><?php echo $row['link']; ?></td>
													<td><?php echo count_rows('data', 'trac', $row['trac']); ?></td>
													<td><?php echo count_rows_two('data', 'trac', $row['trac'], 'device', 'PC'); ?></td>
													<td><?php echo count_rows_two('data', 'trac', $row['trac'], 'device', 'Phone'); ?></td>
												</tr>
										   <?php

										   }
										   if ($rowsCount == "0") {           
      
										   }
										   $result->free();
										} else{
											  echo "Ошибка: " . $conn->error;
										  }
										?>
									<tr>
										<td>Главный сайт</td>
										<td>https://dash.jcodes.space/<?php echo get_data('route', 'name', 'oid', $oid); ?></td>
										<td><?php echo count_rows('data', 'trac', get_data('route', 'name', 'oid', $oid)); ?></td>
										<td><?php echo count_rows_two('data', 'trac', get_data('route', 'name', 'oid', $oid), 'device', 'PC'); ?></td>
										<td><?php echo count_rows_two('data', 'trac', get_data('route', 'name', 'oid', $oid), 'device', 'Phone'); ?></td>
									</tr>
									
								</tbody>
								
							</table>
						</div>

					</div>
				</div>


				<h6 class="mb-0 text-uppercase">Географическая статистика </h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example3" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Страна</th>
										<th>Регионы</th>
										<th>Посещение</th>
									</tr>
								</thead>
								<tbody>
									<?php
            $connect = $conn;
            // sql query 
			$names = get_data('route', 'name', 'oid', $oid);
            $sql = "SELECT * FROM `data` WHERE `trac` = '$names'";
            if($result = $conn->query($sql)){
                $rowsCount = $result->num_rows; // ID - constant
                $list = array("lim");
                foreach($result as $row){

					if (in_array($row["region"], $list)) {
					}
					else{
						array_push($list, $row["region"]);
                   ?>
					   <tr>
							<td><?php echo $row['country']; ?></td>
							<td><?php echo $row['region']; ?></td>
							<td><?php echo count_rows_two('data', 'trac', $names, 'region', $row['region']); ?></td>
						</tr>
					<?php	
					}

                }
                if ($rowsCount == "0") {           
                                echo "<h2 class='msg_not'>Список пустой</h2>";
                }

                echo "</table>";
                $result->free();
            } else{
                echo "Ошибка: " . $conn->error;
            }
    
?>
									
								</tbody>
								
							</table>
						</div>

					</div>
				</div>
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
	<script src="public/panel/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="public/panel/assets/js/jquery.min.js"></script>
	<script src="public/panel/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="public/panel/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="public/panel/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="public/panel/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="public/panel/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: ['excel', 'pdf']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );

		$(document).ready(function() {
			var table = $('#example3').DataTable( {
				lengthChange: false,
				buttons: ['excel', 'pdf']
			} );
		 
			table.buttons().container()
				.appendTo( '#example3_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	<!--app JS-->
	<script src="public/panel/assets/js/app.js"></script>
</body>

</html>