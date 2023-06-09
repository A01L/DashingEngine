<?php
$pid = cut_text(6, $_SERVER['REQUEST_URI'], 0);
$oid = get_data('blogs', 'oid', 'id', $pid);
$rid = get_data('route', 'id', 'oid', $oid);
$type = get_data('route', 'type', 'id', $rid);

require("view/template/$type/blog.php");