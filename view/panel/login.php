<?php
route_sess("admin", "mypanel");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="public/panel/assets/images/favicon-32x32.png" type="image/png" />
	<!-- loader-->
	<link href="public/panel/assets/css/pace.min.css" rel="stylesheet" />
	<script src="public/panel/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="public/panel/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="public/panel/assets/css/app.css" rel="stylesheet">
	<link href="public/panel/assets/css/icons.css" rel="stylesheet">
	<title>Login to Dashing</title>
</head>

<body class="bg-theme bg-theme2">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-lock-screen d-flex align-items-center justify-content-center">
			<div class="card shadow-none bg-transparent">
				<div class="card-body p-md-5 text-center">
				
					<div class="">
						<img src="public/panel/assets/images/icons/user.png" class="mt-5" width="120" alt="" />
					</div>
					<p class="mt-2 text-white">Добро пожаловать</p>
					<form method="post" action="signin">
						<div class="mb-3 mt-3">
							<input type="text" class="form-control" placeholder="Ваш логин..." name="login"/>
							<br>
							<input type="password" class="form-control" placeholder="Ваш пароль..." name="password" />
						</div>
						<div class="d-grid">
							<button class="btn btn-light">Войти</button>
						</div>
						<hr>
						<a href="/Register">Нет акаунта? Регистрация</a>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>

</html>