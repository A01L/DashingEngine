<?php
$uid = $_SESSION['admin']['id'];

$name = $_POST['name'];
$lname = $_POST['lname'];
$contact = $_POST['number'];
$login = $_POST['login'];	
$password = $_POST['password'];

if ($password == "") {
	$data = array(
		'name' => $name,
		'lname' => $lname,
		'contact' => $contact,
		'login' => $login,
	);
}else{
	$password = md5($password);
	$data = array(
		'name' => $name,
		'lname' => $lname,
		'contact' => $contact,
		'login' => $login,
		'password' => $password,
	);
}
update_data('organization', $data, $uid);
redirect('user-profile');
?>