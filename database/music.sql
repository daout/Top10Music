#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Compte
#------------------------------------------------------------

CREATE TABLE Compte(
        cpt_id     int (11) Auto_increment  NOT NULL ,
        cpt_pseudo Varchar (30) NOT NULL ,
        cpt_mdp    Varchar (30) NOT NULL ,
        cpt_mail   Varchar (50) NOT NULL ,
        top_id     Int NOT NULL ,
        PRIMARY KEY (cpt_id )
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: Top10
#------------------------------------------------------------

CREATE TABLE Top10(
        top_id       int (11) Auto_increment  NOT NULL ,
        top_auteur   Varchar (30) NOT NULL ,
        top_morceau  Varchar (50) NOT NULL ,
        top_notation Int NOT NULL ,
        top_lien     Varchar (60) NOT NULL ,
        PRIMARY KEY (top_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Rating
#------------------------------------------------------------


CREATE TABLE IF NOT EXISTS `rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `vote` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;


ALTER TABLE Compte ADD CONSTRAINT FK_Compte_top_id FOREIGN KEY (top_id) REFERENCES Top10(top_id);
