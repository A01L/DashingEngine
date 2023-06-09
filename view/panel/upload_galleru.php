<?php
$oid = $_SESSION['admin']['id'];
$img = storage_control('imgs', 'public/gallery');
$path = $img['path']."".$img['name'];
$data = array('id' => 'null', 'oid' => $oid, 'path' => $path);

add_data_db('gallery', $data);
redirect('Galery');
?>