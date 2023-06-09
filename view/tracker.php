<?php
$trac = $_GET['r'];
tracker($trac);

$link = get_data('links', 'link', 'trac', $trac);
redirect($link);
?>