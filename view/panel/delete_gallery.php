<?php
$id = $_GET['id'];
del_data('gallery', 'id', $id);
redirect('/Galery');
?>