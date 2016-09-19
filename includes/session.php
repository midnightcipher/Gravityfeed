<?php

	session_start();
	require_once 'functions.php';
	require_once 'class/Database.php';
	require_once 'class/Droplets.php';
	require_once 'class/User.php';
	
	$database = new Database();
	$session = new User($database);
	$droplets = new Droplets($database);
	
	// if user session is not active(not loggedin) this page will help 'home.php and profile.php' to redirect to login page
	// put this file within secured pages that users (users can't access without login)
	