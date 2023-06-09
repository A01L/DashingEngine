<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="public/panel/assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="public/panel/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="public/panel/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="public/panel/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="public/panel/assets/css/pace.min.css" rel="stylesheet" />
	<script src="public/panel/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="public/panel/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="public/panel/assets/css/app.css" rel="stylesheet">
	<link href="public/panel/assets/css/icons.css" rel="stylesheet">
	<title>Registration in Dashing</title>
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">
		<div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col mx-auto">
						<div class="my-4 text-center">
							<img src="public/panel/assets/images/logo-img.png" width="180" alt="" />
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									
									
									<div class="login-separater text-center mb-4"> <span>РЕГИСТРАЦИЯ</span>
										<hr/>
									</div>
									<div class="form-body">
										<form class="row g-3" method="post" action="signup">
											<div class="col-sm-6">
												<label for="inputFirstName" class="form-label">Имя</label>
												<input type="text" class="form-control" id="inputFirstName" placeholder="Иван" name='name'>
											</div>
											<div class="col-sm-6">
												<label for="inputLastName" class="form-label">Фамилия</label>
												<input type="text" class="form-control" id="inputLastName" placeholder="Иванов" name='lname'>
											</div>
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Название сайта</label>
												<input type="text" class="form-control" id="inputEmailAddress" placeholder="ExamplePro" name='organization'>
											</div>
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Контакты</label>
												<input type="text" class="form-control" id="inputEmailAddress" placeholder="+7xxx-xxx-xx-xx" name='number'>
											</div>
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Логин</label>
												<input type="text" class="form-control" id="inputEmailAddress" placeholder="Ivanov" name='login'>
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Пароль</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="inputChoosePassword" placeholder="Введите новый пароль..."  name='password'> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
										
											
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-light"><i class='bx bx-user'></i>Создать учетную запись</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="public/panel/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="public/panel/assets/js/jquery.min.js"></script>
	<script src="public/panel/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="public/panel/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="public/panel/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="public/panel/assets/js/app.js"></script>
</body>

</html>