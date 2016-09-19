<?php


class Droplets
{
	public $database;
	public function __construct($database)
	{
		$this->database = $database;
	}

	public function getCountUserDroplet($user_id)
	{	
		try
		{
		$sql = ("SELECT COUNT(*) FROM droplets WHERE user_id=:uid");
		$stmt = $this->database->runQueryParam($sql, array(':uid'=>$user_id));
	
			return $stmt->fetch()[0];
		} 
		catch(PDOException $e)
		{
			die($e->getMessage());
		}
	}

	public function getUserDroplets($uid)
	{
		try
		{
			$sql = "SELECT * FROM droplets WHERE user_id=:uid ORDER BY timestamp DESC";
			$stmt = $this->database->runQueryParam($sql, array(':uid'=>$uid));
			$userDroplets=$stmt->fetchAll(PDO::FETCH_ASSOC);
			if($stmt->rowCount() > 0)
				{
					return $userDroplets;
				}
			}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		return false;
	}


	public function searchUserDroplets($q, $uid)
	{
		try
		{
			$sql = ("SELECT * FROM droplets WHERE droplet LIKE :q AND user_id=:uid ORDER BY timestamp DESC");
			$stmt = $this->database->runQueryParam($sql, array(':q'=>'%' . $q . '%', ':uid'=>$uid));
			$SearchedUsersDroplets=$stmt->fetchAll(PDO::FETCH_ASSOC);
			if($stmt->rowCount() > 0)
				{
					return $SearchedUsersDroplets;
				}
			}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		return false;
	}

	public function postNewDropletPost($dropletContent,$uid, $uname)
	{
		try
		{
			$sql = ("INSERT INTO droplets(user_id, username, droplet, timestamp)VALUES(:uid, :uname, :dropletContent, CURRENT_TIMESTAMP)");
			$stmt = $this->database->runQueryParam($sql, array(':uid'=>$uid, ':uname'=>$uname, ':dropletContent'=>$dropletContent));
			
			return true;	
		}					
		catch(PDOException $e)
		{			
			echo $e->getMessage();
		}
		return false;
	}






}