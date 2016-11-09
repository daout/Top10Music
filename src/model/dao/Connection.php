<?php

class Connection
{
	private static $connexion = null;
	
	public static function getConnection()
	{
		if (Connection::$connexion == null)
		{
			Connection::$connexion = new PDO ( 'mysql:host=localhost:3306;dbname=music;charset=utf8', 'root', '' );
			echo ("connection ok");
		}
		
		return Connection::$connexion;
	}
}