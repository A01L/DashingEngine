<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<?php
		include('view/panel/components/head.php');
		?>
	<title>Редактирование сайта</title>
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
					<div class="breadcrumb-title pe-3">Редактирование</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Сайт</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				<?php
					$oid = $_SESSION['admin']['id'];
$conn = $GLOBALS['ectr_connect'];  
$sql = "SELECT * FROM `pages` WHERE `oid` = $oid";
if($result = $conn->query($sql)){
   $rowsCount = $result->num_rows; // ID - constant
   foreach($result as $row){
	
	   ?>
		<div class="row">
					<div class="col-xl-9 mx-auto">
						<div class="card border-top border-0 border-4 border-white">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div>
										</div>
										<h5 class="mb-0 text-white"><?php echo $row['name']; ?></h5>
									</div>
									<hr/>

									<form method="post" action="Editp">

										<input name="type" value="<?php echo $row['type']; ?>" readonly hidden>
									
										<div class="row mb-3">
											<label for="inputChoosePassword2" class="col-sm-3 col-form-label">Загловок</label>
											<div class="col-sm-9">
												<input name="title" type="text" class="form-control" id="inputChoosePassword2" placeholder="Заголовок..." value="<?php echo $row['title']; ?>">
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Подзаголовок</label>
											<div class="col-sm-9">
												<input name="title2" type="text" class="form-control" id="inputConfirmPassword2" placeholder="Подзаголовок..." value="<?php echo $row['title2']; ?>">
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputAddress4" class="col-sm-3 col-form-label">Контент</label>
											<div class="col-sm-9">
												<textarea name="data" class="form-control" id="inputAddress4" rows="3" placeholder="Основной контент..."><?php echo $row['data']; ?></textarea>
											</div>
										</div>
										<div class="row">
											<label class="col-sm-3 col-form-label"></label>
											<div class="col-sm-9">
												<button class="btn btn-light px-5">Обновить</button>
											</div>
										</div>

									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
	   <?php

   }
   if ($rowsCount == "0") {     
	   ?>
			<div class="card" data-select2-id="22">
							<div class="card-body" data-select2-id="21">
								<div class="border p-3 rounded">
								<form method="post" action="Install">
									<div class="mb-3" data-select2-id="289">
										<label class="form-label">Выберите шаблон веб-сайта по тематике</label>
										<div class="input-group" data-select2-id="288">
										
											<select name="template" class="form-select single-select select2-hidden-accessible" id="inputGroupSelect03" aria-label="Example select with button addon" data-select2-id="inputGroupSelect03" tabindex="-1" aria-hidden="true">
												<option value="eorox" data-select2-id="290">Eorox (Игровые клубы)</option>
												
											</select><span class="select2 select2-container select2-container--bootstrap4 select2-container--above" dir="ltr" data-select2-id="10"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-inputGroupSelect03-container"><span class="select2-selection__rendered" id="select2-inputGroupSelect03-container" role="textbox" aria-readonly="true"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
											<button class="btn btn-outline-secondary"><i class="bx bx-send"></i>
											</button>
										
										</div>
									</div>
								</form>
								</div>
							</div>
						</div>
	   <?php
      
   }
   $result->free();
} else{
      echo "Ошибка: " . $conn->error;
  }
				?>
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