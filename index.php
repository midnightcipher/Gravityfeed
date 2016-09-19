<?php
require_once('includes/session.php');
if(loggedIn())
{
	redirect('newsfeed.php');
}
require './views/index.view.php';