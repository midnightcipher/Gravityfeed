<?php
require_once('includes/session.php');

if(loggedIn())
{
	redirect('newsfeed.php');
}

if(isset($_POST['btn-login']))
{
	$uname = strip_tags($_POST['txt_uname_email']);
	$umail = strip_tags($_POST['txt_uname_email']);
	$upass = strip_tags($_POST['txt_password']);
		
	if($session->doLogin($uname,$umail,$upass))
	{
		redirect('newsfeed.php');
	}
	else
	{
		$error = "Wrong Details !";
	}	
}

require './views/login.view.php';
