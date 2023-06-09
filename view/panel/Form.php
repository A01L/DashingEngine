<?php
$oid = $_POST['oid'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$title = $_POST['title'];
$data = $_POST['data'];
$date = date("Y-m-d H:i:s"); 

$data = array(
	'id' => 'null',
	'oid' => $oid,
	'date' => $date,
	'name' => $name,
	'phone' => $phone,
	'title' => $title,
	'data' => $data,
);

add_data_db('formbox', $data);

$link = get_data('route', 'name', 'oid', $oid);
redirect("/$link");
?>