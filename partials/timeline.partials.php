<?php

$PersonalDropletCount =  $droplets->getCountUserDroplet($user_id);

// POST NEW DROPLET
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
