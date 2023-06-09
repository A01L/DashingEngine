<?php
$link = cut_text(1, $_SERVER['REQUEST_URI'], 0);
$rid = get_data('route', 'id', 'name', $link);
$oid = get_data('route', 'oid', 'name', $link);

$tml = get_data('route', 'type', 'id', $rid);

if ($tml != "none") {
	include("view/template/$tml/index.php");
}
else{
	include("view/error_pages/soon.php");
}
