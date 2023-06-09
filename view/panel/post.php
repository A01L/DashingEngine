<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<?php
		include('view/panel/components/head.php');
		?>
	<title>Управление блогом</title>
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
			
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Управление блогом</li>
							</ol>
						</nav>
					</div>
				
				</div>
				<!--end breadcrumb-->

				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Новый пост</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-white">
							<div class="card-body">
								<div class="border p-4 rounded">
								<form method="post" action="Posting" enctype="multipart/form-data">
									<div class="row mb-3">
										<label for="inputChoosePassword2" class="col-sm-3 col-form-label">Обложка</label>
										<div class="col-sm-9">
											<input name="img" type="file" class="form-control" id="inputGroupFile01">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Заголовок поста</label>
										<div class="col-sm-9">
											<input name="title" type="text" class="form-control" id="inputConfirmPassword2" placeholder="О чем пост...?">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputAddress4" class="col-sm-3 col-form-label">Контент</label>
										<div class="col-sm-9">
											<textarea name="data" class="form-control" id="inputAddress4" rows="3" placeholder="Содержание поста..."></textarea>
										</div>
									</div>
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button class="btn btn-light px-5">Опубликовать</button>
										</div>
									</div>
								</form>
								</div>
							</div>
						</div>







						<div class="card">
							<div class="card-body">
								<table class="table mb-0 table-striped">
									<thead>
										<tr>
											<th scope="col">ID</th>
											<th scope="col">Заголовок</th>
											<th scope="col">Редактирование</th>
											<th scope="col">Удаление</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$oid = $_SESSION['admin']['id'];
										$conn = $GLOBALS['ectr_connect'];  
										$sql = "SELECT * FROM `blogs` where `oid` = $oid";
										if($result = $conn->query($sql)){
										   $rowsCount = $result->num_rows; // ID - constant
										   foreach($result as $row){
										   ?>
												<tr>
													<th scope="row"><?php echo $row['id']; ?></th>
													<td><?php echo $row['title']; ?></td>
													<td><a href="EditP?id=<?php echo $row['id']; ?>">Измемнить</a></td>
													<td><a href="DeleteP?id=<?php echo $row['id']; ?>">Удалить</a></td>
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
									</tbody>
								</table>
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
		include('view/panel/components/switch.php')
	?>
	<!--end switcher-->
	<?php
		include('view/panel/components/js-require.php');
		?>
</body>

</html>