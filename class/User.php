<?php


class User
{
	public $database;
	public function __construct($database)
	{
		$this->database = $database;
	}

	public function register($uname,$umail,$upass)
	{
		try
		{
			$new_password = password_hash($upass, PASSWORD_DEFAULT);	
			$sql = ("INSERT INTO users(user_name,user_email,user_pass)VALUES(:uname, :umail, :upass)");
			$stmt = $this->database->runQueryParam($sql, array(':uname'=>$uname, ':umail'=>$umail, ':upass'=>$new_password));
			
			$this->doLogin($uname, $umail, $upass);
			return $stmt->rowCount() > 0;	
		}					
		catch(PDOException $e)
		{			
			echo $e->getMessage();
		}
		return false;
	}

	public function doLogin($uname,$umail,$upass)
	{
		try
		{
			$sql = "SELECT user_id, user_name, user_email, user_pass FROM users WHERE user_name=:uname OR user_email=:umail ";
			$stmt = $this->database->runQueryParam($sql, array(':uname'=>$uname, ':umail'=>$umail));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if(password_verify($upass, $userRow['user_pass']))
				{
					$_SESSION['user_session'] = $userRow['user_id'];
					return true;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		return false;
	}

	public function updateUsername($newUsername, $user_id)
	{
		try
		{
			$sql = "UPDATE users SET user_name=:newUsername WHERE user_id=:uid";
			$stmt = $this->database->runQueryParam($sql, array(':newUsername'=>$newUsername, ':uid'=>$user_id));
			$newUserDetails=$stmt;
			
				return $newUserDetails;
			
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		return false;
	}

	public function checkIfUsernameAvailable($newUsername)
	{
		try
		{

			$stmt = $this->database->runQuery("SELECT * FROM users WHERE user_name= :newUsername");
			$stmt->bindParam(':newUsername', $newUsername, PDO::PARAM_STR);
			$stmt->execute();

			$checkedUsernameAvailability=$stmt->fetchAll(PDO::FETCH_ASSOC);
			if($stmt->rowCount() > 0)
				{
					return true;
				}
			}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		return false;
	}



}
?>