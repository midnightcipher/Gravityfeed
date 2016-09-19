<?php

	function loggedIn()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
		return false;
	}
	
	function redirect($url)																											
	{
		header("Location: $url");																			    					
	}
	
	function doLogout()													
	{
		session_destroy();
		unset($_SESSION['user_session']);																
		return true;
	}

	function e($value){
		return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');											
	}

	function escape($value){																			
		return e($value);
	}

	function getTime($t_time){
		$pt = time() - $t_time;
		if ($pt>=86400)
			$p = date("F j, Y",$t_time);
		elseif ($pt>=3600)
			$p = (floor($pt/3600))."h";
		elseif ($pt>=60)
			$p = (floor($pt/60))."m";
		else 
			$p = $pt."s";
		return $p;
	}

	function checkIfPostSet($field){
		return isset($_POST[$field])?$_POST[$field]:'';
	}
