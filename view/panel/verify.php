<?php
$oid = $_SESSION['admin']['id'];
$bin = get_data('organization', 'bin', 'id', $oid);
if($bin != '0'){
	redirect('/mypanel');
}
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
	<title>Верификация в Dashing</title>
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
					<p class="mt-2 text-white">Для верификации надо ввести БИН организации</p>
					<form method="post" action="verificate">
						<div class="mb-3 mt-3">
							<input type="number" class="form-control" placeholder="Введите БИН..." name="bin"/>
						</div>
						<div class="d-grid">
							<button class="btn btn-light">ПРОВЕРИТЬ</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>

</html>