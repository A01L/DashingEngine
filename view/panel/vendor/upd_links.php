<?php
//Param for operation
$uid = $_SESSION['admin']['id'];
$ectr_connect = $GLOBALS['ectr_connect'];

//Param for update data
$organization = $_POST['org'];
$instagram = $_POST['instagram'];
$facebook = $_POST['facebook'];
$whatsapp = $_POST['whatsapp'];
$map = $_POST['map'];

//Update organization
$data = array(
	'organization' => $organization,
);
update_data('organization', $data, $uid);


//Start function 
function updater($type, $data){
	$uid = $_SESSION['admin']['id'];
	global $ectr_connect;
	if($data){
		$querry = mysqli_query($ectr_connect, "SELECT * FROM `links` WHERE `name` = '$type' AND `oid` = '$uid'");
		$datas = mysqli_fetch_assoc($querry);
		if($datas['link'] == ""){
			$trac = rand_sn(30);
			$datat = array(
				'id' => 'null',
				'oid' => $uid,
				'name' => $type,
				'trac' => $trac,
				'link' => $data,
			);
			add_data_db('links', $datat);
		}
		else{
			$datat = array(
				'link' => $data,
			);
			update_data('links', $datat, $datas['id']);
		}
	}else{
		return 0;
	}
}
//End function

updater('instagram', $instagram);
updater('facebook', $facebook);
updater('whatsapp', $whatsapp);
updater('map', $map);

redirect('user-profile');

?>