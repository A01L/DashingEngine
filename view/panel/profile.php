<?php
$uid = $_SESSION['admin']['id'];
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<?php
		include('view/panel/components/head.php');
		?>
	<title>Профиль | <?php echo get_data('organization', 'organization', 'id', $uid); ?></title>
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
								<li class="breadcrumb-item active" aria-current="page">Профиль</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="d-flex flex-column align-items-center text-center">
											<img src="public/panel/ava/<?php echo get_data('organization', 'ava', 'id', $uid); ?>" alt="dmin" class="rounded-circle p-1" width="110">
											<div class="mt-3">
												<h4><?php echo get_data('organization', 'name', 'id', $uid); ?> <?php echo get_data('organization', 'lname', 'id', $uid); ?></h4>
												<p class="mb-1"><?php echo get_data('organization', 'organization', 'id', $uid); ?></p>
												<p class="font-size-sm"><?php echo get_data('organization', 'bin', 'id', $uid); ?></p>
												<?php
													$bin = get_data('organization', 'bin', 'id', $uid);
													if($bin == "0"){
														?>
															<a href="Verify"><button class="btn btn-light">Верификация</button></a>
														<?php
													}else{
														?>
															<a href="Myorg"><button class="btn btn-light">Орагнизация</button></a>
														<?php
													}
												?>
										
											</div>
										</div>
										<hr class="my-4" />
										<ul class="list-group list-group-flush">
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Ваш сайт</h6>
												<span class="text-white"><?php echo locate("@".get_data('organization', 'organization', 'id', $uid)); ?></span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
												<span class="text-white">
													<?php
														$ectr_connect = $GLOBALS['ectr_connect'];
														$querry = mysqli_query($ectr_connect, "SELECT * FROM `links` WHERE `name` = 'instagram' AND `oid` = '$uid'");
														$datas = mysqli_fetch_assoc($querry);
										
														if($datas['link'] == ""){
															echo "Не установлен";
														}
														else{
															echo $datas['link'];
														}
													?>
												</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
												<span class="text-white">
													<?php
														$querry = mysqli_query($ectr_connect, "SELECT * FROM `links` WHERE `name` = 'facebook' AND `oid` = '$uid'");
														$datas = mysqli_fetch_assoc($querry);
										
														if($datas['link'] == ""){
															echo "Не установлен";
														}
														else{
															echo $datas['link'];
														}
													?>
												</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0">WhatsApp</h6>
												<span class="text-white">
													<?php
											
														$querry = mysqli_query($ectr_connect, "SELECT * FROM `links` WHERE `name` = 'whatsapp' AND `oid` = '$uid'");
														$datas = mysqli_fetch_assoc($querry);
										
														if($datas['link'] == ""){
															echo "Не установлен";
														}
														else{
															echo $datas['link'];
														}
													?>
												</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="card">
									<!--Account settings-->
									<form method="post" action="upd_account">
										<div class="card-body">
											<h3>Учетная запись</h3>
											<hr>
											<!--Name input-->
											<div class="row mb-3">
												<div class="col-sm-3">
													<h6 class="mb-0">Имя</h6>
												</div>
												<div class="col-sm-9">
													<input name="name" type="text" class="form-control" value="<?php echo get_data('organization', 'name', 'id', $uid); ?>" />
												</div>
											</div>
											<!--Lname input-->
											<div class="row mb-3">
												<div class="col-sm-3">
													<h6 class="mb-0">Фамилия</h6>
												</div>
												<div class="col-sm-9">
													<input name="lname" type="text" class="form-control" value="<?php echo get_data('organization', 'lname', 'id', $uid); ?>" />
												</div>
											</div>
											<!--number input-->
											<div class="row mb-3">
												<div class="col-sm-3">
													<h6 class="mb-0">Номер</h6>
												</div>
												<div class="col-sm-9">
													<input name="number" type="number" class="form-control" value="<?php echo get_data('organization', 'contact', 'id', $uid); ?>" />
												</div>
											</div>
											<!--Login input-->
											<div class="row mb-3">
												<div class="col-sm-3">
													<h6 class="mb-0">Логин</h6>
												</div>
												<div class="col-sm-9">
													<input name="login" type="text" class="form-control" value="<?php echo get_data('organization', 'login', 'id', $uid); ?>" />
												</div>
											</div>
											<!--Password input-->
											<div class="row mb-3">
												<div class="col-sm-3">
													<h6 class="mb-0">Новый Пароль</h6>
												</div>
												<div class="col-sm-9">
													<input name="password" type="text" class="form-control"/>
												</div>
											</div>
											<!--BIN input-->
											<div class="row">
												<div class="col-sm-3"></div>
												<div class="col-sm-9">
													<input type="submit" class="btn btn-light px-4" value="Сохранить" />
												</div>
											</div>
										</div>
									</form>

									<form method="post" action="upd_links">
									<!--Links settings-->
										<div class="card-body">
											<h3>Ссылки</h3>
											<hr>
											<!--Organization input-->
											<div class="row mb-3">
												<div class="col-sm-3">
													<h6 class="mb-0">Dashing</h6>
												</div>
												<div class="col-sm-9">
													<input name="org" type="text" class="form-control" value="<?php echo get_data('organization', 'organization', 'id', $uid); ?>" />
												</div>
											</div>
											<!--Instagram input-->
											<div class="row mb-3">
												<div class="col-sm-3">
													<h6 class="mb-0">Instagram</h6>
												</div>
												<div class="col-sm-9">
													<input name="instagram" type="text" class="form-control" value="<?php
															$querry = mysqli_query($ectr_connect, "SELECT * FROM `links` WHERE `name` = 'instagram' AND `oid` = '$uid'");
															$datas = mysqli_fetch_assoc($querry);
										
															if($datas['link'] == ""){
																$null = 0;
															}
															else{
																echo $datas['link'];
															}
														?>" />
												</div>
											</div>
											<!--Facebook input-->
											<div class="row mb-3">
												<div class="col-sm-3">
													<h6 class="mb-0">Facebook</h6>
												</div>
												<div class="col-sm-9">
													<input name="facebook" type="text" class="form-control" value="<?php
															$querry = mysqli_query($ectr_connect, "SELECT * FROM `links` WHERE `name` = 'facebook' AND `oid` = '$uid'");
															$datas = mysqli_fetch_assoc($querry);
										
															if($datas['link'] == ""){
																$null = 0;
															}
															else{
																echo $datas['link'];
															}
														?>" />
												</div>
											</div>
											<!--WhatsApp input-->
											<div class="row mb-3">
												<div class="col-sm-3">
													<h6 class="mb-0">WhatsApp (номер)</h6>
												</div>
												<div class="col-sm-9">
													<input name="whatsapp" type="text" class="form-control" value="<?php
															$querry = mysqli_query($ectr_connect, "SELECT * FROM `links` WHERE `name` = 'whatsapp' AND `oid` = '$uid'");
															$datas = mysqli_fetch_assoc($querry);
										
															if($datas['link'] == ""){
																$null = 0;
															}
															else{
																echo $datas['link'];
															}
														?>" />
												</div>
											</div>
											<!--Google map input-->
											<div class="row mb-3">
												<div class="col-sm-3">
													<h6 class="mb-0">Google map</h6>
												</div>
												<div class="col-sm-9">
													<input name="map" type="text" class="form-control" value="<?php
															$querry = mysqli_query($ectr_connect, "SELECT * FROM `links` WHERE `name` = 'map' AND `oid` = '$uid'");
															$datas = mysqli_fetch_assoc($querry);
										
															if($datas['link'] == ""){
																$null = 0;
															}
															else{
																echo $datas['link'];
															}
														?>"/>
												</div>
											</div>
											<!--BIN input-->
											<div class="row">
												<div class="col-sm-3"></div>
												<div class="col-sm-9">
													<input type="submit" class="btn btn-light px-4" value="Сохранить" />
												</div>
											</div>
										</div>
									</form>

								</div>
							
							</div>


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
	<?php
		include('view/panel/components/js-require.php');
		?>
</body>

</html>