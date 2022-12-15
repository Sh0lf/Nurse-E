-- MySQL Script generated by MySQL Workbench
-- Tue Dec 13 11:39:12 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Projet_BDD_APP
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Projet_BDD_APP
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Projet_BDD_APP` DEFAULT CHARACTER SET utf8 ;
USE `Projet_BDD_APP` ;

-- -----------------------------------------------------
-- Table `Projet_BDD_APP`.`KitDiagnostique`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet_BDD_APP`.`KitDiagnostique` (
  `idKitDiagnostique` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idKitDiagnostique`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projet_BDD_APP`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet_BDD_APP`.`user` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `familyname` VARCHAR(45) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `phone` INT NOT NULL,
  `sexe` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
<<<<<<< HEAD
<<<<<<< HEAD
=======
  `speMed` VARCHAR(45) NOT NULL,
>>>>>>> 96b0494 (Add files via upload)
=======
>>>>>>> 79778f3 (Add files via upload)
  `role` VARCHAR(45) NOT NULL,
  `KitDiagnostique_idKitDiagnostique` INT NOT NULL,
  PRIMARY KEY (`iduser`, `KitDiagnostique_idKitDiagnostique`),
  INDEX `fk_user_KitDiagnostique1_idx` (`KitDiagnostique_idKitDiagnostique` ASC),
  CONSTRAINT `fk_user_KitDiagnostique1`
    FOREIGN KEY (`KitDiagnostique_idKitDiagnostique`)
    REFERENCES `Projet_BDD_APP`.`KitDiagnostique` (`idKitDiagnostique`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projet_BDD_APP`.`Adresse`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet_BDD_APP`.`Adresse` (
  `idadresse` INT NOT NULL AUTO_INCREMENT,
  `rue` VARCHAR(45) NOT NULL,
  `ville` VARCHAR(45) NOT NULL,
  `codepostal` VARCHAR(45) NOT NULL,
  `typehabitation` VARCHAR(45) NOT NULL,
  `user_iduser` INT NOT NULL,
  PRIMARY KEY (`idadresse`),
  INDEX `fk_adresse_user_idx` (`user_iduser` ASC),
  CONSTRAINT `fk_adresse_user`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `Projet_BDD_APP`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projet_BDD_APP`.`FAQ`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet_BDD_APP`.`FAQ` (
  `idFAQ` INT NOT NULL AUTO_INCREMENT,
  `question` VARCHAR(45) NOT NULL,
  `reponse` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idFAQ`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projet_BDD_APP`.`Diagnostique`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet_BDD_APP`.`Diagnostique` (
  `idDiagnostique` INT NOT NULL AUTO_INCREMENT,
  `user_iduser` INT NOT NULL,
  PRIMARY KEY (`idDiagnostique`),
  INDEX `fk_Diagnostique_user1_idx` (`user_iduser` ASC),
  CONSTRAINT `fk_Diagnostique_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `Projet_BDD_APP`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
<<<<<<< HEAD
<<<<<<< HEAD
=======
-- Table `Projet_BDD_APP`.`Questionnaire`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet_BDD_APP`.`Questionnaire` (
  `idQuestionnaire` INT NOT NULL AUTO_INCREMENT,
  `Question` VARCHAR(45) NULL,
  `Reponse` VARCHAR(45) NULL,
  `Diagnostique_idDiagnostique` INT NOT NULL,
  PRIMARY KEY (`idQuestionnaire`),
  INDEX `fk_Questionnaire_Diagnostique1_idx` (`Diagnostique_idDiagnostique` ASC),
  CONSTRAINT `fk_Questionnaire_Diagnostique1`
    FOREIGN KEY (`Diagnostique_idDiagnostique`)
    REFERENCES `Projet_BDD_APP`.`Diagnostique` (`idDiagnostique`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
>>>>>>> 96b0494 (Add files via upload)
=======
>>>>>>> 79778f3 (Add files via upload)
-- Table `Projet_BDD_APP`.`Arbre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet_BDD_APP`.`Arbre` (
  `idArbre` INT NOT NULL,
  `Timestamp` DATETIME NULL,
  `KitDiagnostique_idKitDiagnostique` INT NOT NULL,
  PRIMARY KEY (`idArbre`, `KitDiagnostique_idKitDiagnostique`),
  INDEX `fk_Arbre_KitDiagnostique1_idx` (`KitDiagnostique_idKitDiagnostique` ASC),
  CONSTRAINT `fk_Arbre_KitDiagnostique1`
    FOREIGN KEY (`KitDiagnostique_idKitDiagnostique`)
    REFERENCES `Projet_BDD_APP`.`KitDiagnostique` (`idKitDiagnostique`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projet_BDD_APP`.`Capteur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet_BDD_APP`.`Capteur` (
  `idCapteur` INT NOT NULL AUTO_INCREMENT,
  `Unite` VARCHAR(45) NULL,
  `KitDiagnostique_idKitDiagnostique` INT NOT NULL,
  PRIMARY KEY (`idCapteur`),
  INDEX `fk_Capteur_KitDiagnostique1_idx` (`KitDiagnostique_idKitDiagnostique` ASC),
  CONSTRAINT `fk_Capteur_KitDiagnostique1`
    FOREIGN KEY (`KitDiagnostique_idKitDiagnostique`)
    REFERENCES `Projet_BDD_APP`.`KitDiagnostique` (`idKitDiagnostique`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projet_BDD_APP`.`Mesure`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet_BDD_APP`.`Mesure` (
  `idMesure` INT NOT NULL AUTO_INCREMENT,
  `Valeur` VARCHAR(45) NULL,
  `Timestamp` DATETIME NULL,
  `Capteur_idCapteur` INT NOT NULL,
  PRIMARY KEY (`idMesure`),
  INDEX `fk_Mesure_Capteur1_idx` (`Capteur_idCapteur` ASC),
  CONSTRAINT `fk_Mesure_Capteur1`
    FOREIGN KEY (`Capteur_idCapteur`)
    REFERENCES `Projet_BDD_APP`.`Capteur` (`idCapteur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projet_BDD_APP`.`Questionnaire`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet_BDD_APP`.`Questionnaire` (
  `idQuestionnaire` INT NOT NULL,
  `Diagnostique_idDiagnostique` INT NOT NULL,
  PRIMARY KEY (`idQuestionnaire`, `Diagnostique_idDiagnostique`),
  INDEX `fk_Questionnaire_Diagnostique1_idx` (`Diagnostique_idDiagnostique` ASC),
  CONSTRAINT `fk_Questionnaire_Diagnostique1`
    FOREIGN KEY (`Diagnostique_idDiagnostique`)
    REFERENCES `Projet_BDD_APP`.`Diagnostique` (`idDiagnostique`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projet_BDD_APP`.`question_reponse`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet_BDD_APP`.`question_reponse` (
  `idquestion` INT NOT NULL,
  `question` VARCHAR(255) NULL,
  `reponse` VARCHAR(255) NULL,
  `Questionnaire_idQuestionnaire` INT NOT NULL,
  PRIMARY KEY (`idquestion`),
  INDEX `fk_question_reponse_Questionnaire1_idx` (`Questionnaire_idQuestionnaire` ASC),
  CONSTRAINT `fk_question_reponse_Questionnaire1`
    FOREIGN KEY (`Questionnaire_idQuestionnaire`)
    REFERENCES `Projet_BDD_APP`.`Questionnaire` (`idQuestionnaire`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
