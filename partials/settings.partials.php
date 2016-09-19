<?php

/********************************************
	SETTINGS
 ********************************************/

// CHANGE USERNAME
	
if (isset($_POST['newUsername'])){

	$newUsername = $_POST["newUsername"];
	if(!empty($newUsername)){

		$usernameExist = $session->checkIfUsernameAvailable($newUsername);

		if($usernameExist)
		{
			$updateUsernameMessage = '<span class="help is-danger">Sorry this username is unavailable</span>';
		}else {
			$newUsernameSet = $session->updateUsername($newUsername, $user_id);
			$updateUsernameMessage = '<span class="help is-success">You have successfully udated your username</span>';
		}
	}else{
		$updateUsernameMessage = '<span class="help is-danger">Please enter a username</span>';
	}
}