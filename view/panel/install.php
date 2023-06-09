<?php
$tml = $_POST['template'];
$oid = $_SESSION['admin']['id'];

$data = array(
	'type' => $tml,
);

$id = get_data('route', 'id', 'oid', $oid);
update_data('route', $data, $id);

include("view/template/$tml/install.php");

redirect('Edit');
?>