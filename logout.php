<?php
	require_once('includes/session.php');

	if(!loggedIn())
	{
		redirect('./index.php');
	}

	doLogout();
	redirect('./index.php');
	
