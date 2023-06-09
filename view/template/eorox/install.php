<?php
$oid = $_SESSION['admin']['id'];
$rid = get_data('route', 'id', 'oid', $oid);

//require
$organization = get_data('organization', 'organization', 'id', $oid);

//switch template in table ROUTE
$upd = array(
	'type' => 'eorox',
);
update_data('route', $upd, $rid);

$intro = array(
	'id' => 'null',
	'oid' => $oid,
	'name' => 'Интро',
	'type' => 'intro',
	'title' => 'Кто Победит?',
	'title2' => 'Еще катка',
	'data' => 'ПОДРОБНЕЕ',
);

$join = array(
	'id' => 'null',
	'oid' => $oid,
	'name' => 'Приглашение',
	'type' => 'join',
	'title' => 'Будь первым!',
	'title2' => 'Подписаться',
	'data' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
);

$about = array(
	'id' => 'null',
	'oid' => $oid,
	'name' => 'О нас',
	'type' => 'about',
	'title' => 'Играй В',
	'title2' => $organization,
	'data' => 'Lpsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
);

$sub_footer = array(
	'id' => 'null',
	'oid' => $oid,
	'name' => 'Контакты',
	'type' => 'sub_footer',
	'title' => 'Контактные информации',
	'title2' => 'None',
	'data' => 'Dhaka In Twin Tower Concord',
);

$footerr = array(
	'id' => 'null',
	'oid' => $oid,
	'name' => 'Контактная форма',
	'type' => 'footer2',
	'title' => 'Будь на',
	'title2' => 'Связи!',
	'data' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
);

$footerl = array(
	'id' => 'null',
	'oid' => $oid,
	'name' => 'Адрес',
	'type' => 'footer1',
	'title' => 'Наш адрес',
	'title2' => 'Клуба',
	'data' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
);

//clean old blocks
$conn = $GLOBALS['ectr_connect'];  
$sql = "SELECT * FROM `pages` WHERE `oid` = $oid";
if($result = $conn->query($sql)){
   $rowsCount = $result->num_rows; // ID - constant
   foreach($result as $row){
   $id = $row['id'];
   del_data('pages', 'id', $id);

   }
   if ($rowsCount == "0") {           
      
   }
   $result->free();
} else{
      echo "Ошибка: " . $conn->error;
  }


//add new blocks in DB
add_data_db('pages', $intro);
add_data_db('pages', $about);
add_data_db('pages', $join);
add_data_db('pages', $footerl);
add_data_db('pages', $footerr);
add_data_db('pages', $sub_footer);

redirect('Edit');

?>