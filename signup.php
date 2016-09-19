<?php
require_once('./includes/session.php');

if(loggedIn())
{
	redirect('./newsfeed.php');
}

if(isset($_POST['btn-signup']))
{
	$uname = e($_POST['txt_uname']);
	$umail = e($_POST['txt_umail']);
	$upass = e($_POST['txt_upass']);	
	
	if($uname=="")	{
		$error[] = '<span class="help is-danger">Please provide a username</span>';	
	}
	else if($umail=="")	{
		$error[] = '<span class="help is-danger">Please provide a email address</span>';
	}
	else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
	    $error[] = '<span class="help is-danger">Please provide a valid email address</span>';
	}
	else if($upass=="")	{
		$error[] = '<span class="help is-danger">Please provide a password</span>';
	}
	else if(strlen($upass) < 6){
		$error[] = '<span class="help is-danger">Password must be at least 6 characters long</span>';
	}
	else
	{
		try
		{
			$sql = "SELECT user_name, user_email FROM users WHERE user_name=:uname OR user_email=:umail";
			$stmt = $database->runQueryParam($sql, array(':uname'=>$uname, ':umail'=>$umail));

			$row=$stmt->fetch(PDO::FETCH_ASSOC);
				
			if($row['user_name']==$uname) {
				$error[] = '<span class="help is-danger">Sorry username is already taken</span>';
			}
			else if($row['user_email']==$umail) {
				$error[] = '<span class="help is-danger">Sorry email address is already registered</span>';
			}
			else
			{
				if($session->register($uname,$umail,$upass)){					
					redirect('./newsfeed.php?j=true');
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}	
}

require './views/signup.view.php';