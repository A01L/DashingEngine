<?php
$oid = $_SESSION['admin']['id'];
$type = $_POST['type'];

$title = $_POST['title'];
$title2 = $_POST['title2'];
$data = $_POST['data'];


	$data_upd = array(
		'title' => $title,
		'title2' => $title2,
		'data' => $data,
	);

	$pid = get_data_two('pages', 'id', 'oid', $oid, 'type', $type);

	update_data('pages', $data_upd, $pid);

redirect('Edit');
?>