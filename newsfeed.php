<?php

require_once("includes/session.php");

if(!loggedIn())
{
	redirect('index.php');
}

$user_id = $_SESSION['user_session'];
$stmt = $database->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

// $PersonalDropletCount =  $droplets->getCountUserDroplet($user_id);


/********************************************
	SETTINGS
 ********************************************/

// Timeline New Droplets
if (isset($_POST['timelineNewDropletPost'])){

	$timelineNewDropletPost = $_POST["timelineNewDropletPost"];

	if(!empty($timelineNewDropletPost)){
		if($droplets->postNewDropletPost($timelineNewDropletPost, $user_id, $userRow['user_name'])){
			$updatePostNewDropletMessage = '<span class="help is-success">You have successfully drop a new droplet</span>';
		}else {
			$updatePostNewDropletMessage = '<span class="help is-success">There was an error when trying to drop this droplet</span>';
		}
	}else{
		$updatePostNewDropletMessage = '<span class="help is-danger">Please write something to drop</span>';
	}
}



/********************************************
	PROFILE
 ********************************************/

// Search Profile Droplets
// if (isset($_POST['profileSearchDroplets'])){

// 	$q = $_POST["profileSearchDroplets"];
// 	$SearchedUsersDroplets = $droplets->searchUserDroplets($q, $user_id);
// 	//die(var_dump($SearchedUsersDroplets));
// }




require './views/newsfeed.view.php';