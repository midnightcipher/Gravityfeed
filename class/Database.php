<?php

class Database
{	
	private $host = "localhost";
	private $db_name = "gravityfeed";
	private $username = "root";
	private $password = "";
	public $conn;

	public function __construct()
	{

		$this->conn = null;    
		try
		{
			$this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
		}
		catch(PDOException $exception)
		{
			die ("Connection error: " . $exception->getMessage());
		}

		return $this->conn;
	}

	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	
	public function runQueryParam($sql, $params)
	{
		$stmt = $this->conn->prepare($sql);
		foreach ($params as $key => &$param) {
			$stmt->bindParam($key, $param);
		}
		
		$stmt->execute();
		return $stmt;
	}

}