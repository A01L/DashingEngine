<?php
$name = $_POST['name'];
$lname = $_POST['lname'];

$organization = $_POST['organization'];
$number = $_POST['number'];
$login = $_POST['login'];
$password = $_POST['password'];
$password = md5($password);
$token = rand_sn(40);

$check = count_rows('organization', 'login', $login);
if ($check != 0) {
	redirect('Register');
}

$q = array(
	'id' => 'null',
	'name' => $name,
	'lname' => $lname,
	'organization' => $organization,
	'bin' => '0',
	'contact' => $number,
	'ava' => 'default.png',
	'login' => $login,
	'password' => $password,
	'type' => 'start',
	'token' => $token,
);
add_data_db('organization', $q);

$oid = get_data('organization', 'id', 'login', $login);
$namer = "@$organization";

$rq = array(
	'id' => 'null',
	'oid' => $oid,
	'name' => $namer,
	'type' => 'none',
);

add_data_db('route', $rq);

redirect('Login');
?>