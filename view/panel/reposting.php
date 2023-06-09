<?php
$oid = $_SESSION['admin']['id'];
$title = $_POST['title'];
$data = $_POST['data'];
$pid = $_POST['pid'];

$data = array(
	'title' => $title,
	'data' => $data,
);

update_data('blogs', $data, $pid);
redirect('Post');
?>