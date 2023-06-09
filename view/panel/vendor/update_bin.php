<?php
$uid = $_SESSION['admin']['id'];

$bin = $_POST['bin'];
	$data = array('bin' => $bin);
update_data('organization', $data, $uid);
redirect('user-profile');
?>