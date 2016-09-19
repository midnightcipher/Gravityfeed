<?php

$UserDroplets = $droplets->getUserDroplets($user_id);
$PersonalDropletCount =  $droplets->getCountUserDroplet($user_id);

// Search Profile Droplets
if (isset($_POST['profileSearchDroplets'])){

	$q = $_POST["profileSearchDroplets"];
	$SearchedUsersDroplets = $droplets->searchUserDroplets($q, $user_id);
	//die(var_dump($SearchedUsersDroplets));
}



