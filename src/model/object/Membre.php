<?php


class Membre {

 private $id;
    private $nom;
    private $password;
    private $mail;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
    	$this->id = $id;
    }
    
    public function setNom($nom) {
        $this->nom = $nom;
	 }

    public function getNom() {
        return $this->nom;
    }

   	public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }
    
    public function getMail() {
    	return $this->mail;
    }
    
    public function setMail($mail) {
    	$this->mail = $mail;
    }
}
	