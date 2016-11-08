<?php

require_once constant("SITE_PATH") . "/src/model/dao/Connection.php";
require_once constant("SITE_PATH") .  "/src/model/object/Membre.php";

class MembreDao
{
	public static function create()
	{
			try
		{
			$bdd = Connection::getConnection();
			$stmt = $bdd->prepare ("INSERT INTO compte(cpt_pseudo, cpt_mdp, cpt_mail) VALUES (?, ?, ?)");
				
			if ($stmt->execute(array($_POST["pseudo"], $_POST["password"], $_POST["mail"])))
			{
				// var_dump($bdd->lastInsertId());
				
				$membre = new Membre();
				$membre->setId($bdd->lastInsertId());
				$membre->setNom($_POST["pseudo"]);
				$membre->setPassword($_POST["password"]);
				$membre->setMail($_POST["mail"]);
				
				return $membre;
			}
		}
		catch (Exception $e)
		{
			die ("Erreur : " . $e->getMessage ());
		}
	}
	
	public static function read($id)
	{
		try
		{
			$bdd = Connection::getConnection();
			$stmt = $bdd->prepare ("SELECT * FROM compte WHERE cpt_id = ?");
				
			if ($stmt->execute(array($id)))
			{
				$row = $stmt->fetch();
	
				// var_dump($row);
					
				$membre = new Client();
				$membre->setId($row["cpt_id"]);
				$membre->setNom($row["cpt_nom"]);
				$membre->setMail($row["cpt_prenom"]);
				
				return $membre;
			}
		}
		catch (Exception $e)
		{
			die ("Erreur : " . $e->getMessage ());
		}
	}
}