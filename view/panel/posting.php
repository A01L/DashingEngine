<?php
$oid = $_SESSION['admin']['id'];
$title = $_POST['title'];
$data = $_POST['data'];

$img = storage_control('img', 'public/posts');
$path = $img['path']."".$img['name'];

$data = array(
	'id' => 'null',
	'oid' => $oid,
	'title' => $title,
	'data' => $data,
	'img' => $path,
);

add_data_db('blogs', $data);
redirect('Post');
?>