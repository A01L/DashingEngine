<?php
$bin = $_POST['bin'];
$main = curl_init("https://old.stat.gov.kz/api/juridical/counter/api/?bin=$bin&lang=ru");
curl_setopt($main, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($main, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.7.62 Version/11.01');
curl_setopt($main, CURLOPT_FOLLOWLOCATION, 1);
if ($main) {
$html = curl_exec($main);
}
$json = $html;
$jsonDe = json_decode($json,true);

$status = $jsonDe["success"];
if ($status != 1) {
	redirect('Verify');
}

$name_org = $jsonDe["obj"]["name"];
$category = $jsonDe["obj"]["okedName"];
$addres = $jsonDe["obj"]["katoAddress"];
$boss = $jsonDe["obj"]["fio"];
?>
<?php
$oid = $_SESSION['admin']['id'];
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
	<title>Проверка БИН</title>
</head>

<body class="bg-theme bg-theme2">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-lock-screen d-flex align-items-center justify-content-center">
			<div class="card shadow-none bg-transparent" style="width: 60%;">
				<div class="card-body p-md-5 text-center">
					<form method="post" action="update_bin">
						<div class="mb-3 mt-3">
						<label>БИН</label>
							<input type="number" class="form-control" value='<?php echo $bin; ?>' name="bin" readonly/>
							<hr>
						<label>Организация</label>
							<input class="form-control" value='<?php echo $name_org; ?>' readonly/>
							<hr>
						<label>Деятельность</label>
							<input class="form-control" value='<?php echo $category; ?>' readonly/>
							<hr>
						<label>Юр. Адрес</label>
							<input class="form-control" value='<?php echo $addres; ?>' readonly/>
							<hr>
						<label>Руководитель</label>
							<input class="form-control" value='<?php echo $boss; ?>' readonly/>
						</div>
						<div class="d-grid">
							<button class="btn btn-light">ПОТВЕРДИТЬ</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>

</html>