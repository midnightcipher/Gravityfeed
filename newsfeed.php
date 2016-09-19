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

require './views/newsfeed.view.php';