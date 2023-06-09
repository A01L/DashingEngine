<?php
$pid = $_GET['id'];
del_data('blogs', 'id', $pid);
redirect('/Post');
?>