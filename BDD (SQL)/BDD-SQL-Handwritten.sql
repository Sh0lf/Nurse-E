SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Projet-Autodiagnostique
-- -----------------------------------------------------

CREATE SCHEMA IF NOT EXISTS `Projet-Autodiagnostique` DEFAULT CHARACTER SET utf8 ;
USE `Projet-Autodiagnostique` ;

-- -----------------------------------------------------
-- Table `Projet-Autodiagnostique`.`KitDiagnostique`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet-Autodiagnostique`.`KitDiagnostique` (
  `idKitDiagnostique` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idKitDiagnostique`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `Projet-Autodiagnostique`.`Réponse`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet-Autodiagnostique`.`Réponse` (
  `idRéponse` INT NOT NULL AUTO_INCREMENT,
  `Réponse` VARCHAR(45) NULL,
  PRIMARY KEY (`idRéponse`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `Projet-Autodiagnostique`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet-Autodiagnostique`.`user` (
  `Id_User` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(32) CHARACTER SET 'ascii' NOT NULL,
  `password` VARCHAR(32) CHARACTER SET 'ascii' NOT NULL,
  `familyname` VARCHAR(45) CHARACTER SET 'ascii' NOT NULL,
  `name` VARCHAR(45) CHARACTER SET 'ascii' NOT NULL,
  `email` VARCHAR(45) CHARACTER SET 'ascii' NOT NULL,
  `phonenum` INT NOT NULL,
  `Medicalspe` VARCHAR(45) CHARACTER SET 'ascii' NULL,
  `role` VARCHAR(16) CHARACTER SET 'ascii' NOT NULL,
  `KitDiagnostique_idKitDiagnostique` INT NOT NULL,
  `Réponse_idRéponse` INT NOT NULL,
  PRIMARY KEY (`Id_User`),
  INDEX `fk_user_KitDiagnostique1_idx` (`KitDiagnostique_idKitDiagnostique` ASC),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC),
  INDEX `fk_user_Réponse1_idx` (`Réponse_idRéponse` ASC),
  CONSTRAINT `fk_user_KitDiagnostique1`
    FOREIGN KEY (`KitDiagnostique_idKitDiagnostique`)
    REFERENCES `mydb`.`KitDiagnostique` (`idKitDiagnostique`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_Réponse1`
    FOREIGN KEY (`Réponse_idRéponse`)
    REFERENCES `mydb`.`Réponse` (`idRéponse`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
    
    -- -----------------------------------------------------
-- Table `Projet-Autodiagnostique`.`FAQ`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet-Autodiagnostique`.`FAQ` (
  `idFAQ` INT NOT NULL AUTO_INCREMENT,
  `Question` VARCHAR(256) CHARACTER SET 'ascii' NULL,
  `Reponse` VARCHAR(256) NULL,
  PRIMARY KEY (`idFAQ`),
  UNIQUE INDEX `Questions_UNIQUE` (`Question` ASC),
  UNIQUE INDEX `Reponses_UNIQUE` (`Reponse` ASC))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `Projet-Autodiagnostique`.`Addresse`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet-Autodiagnostique`.`Addresse` (
  `idAddresse` INT NOT NULL AUTO_INCREMENT,
  `Rue` VARCHAR(256) CHARACTER SET 'ascii' NULL,
  `CodePostal` INT NULL,
  `Ville` VARCHAR(45) NULL,
  `TypeHabitation` VARCHAR(45) NULL,
  `user_Id_User` VARCHAR(16) CHARACTER SET 'ascii' NOT NULL,
  `user_username` VARCHAR(32) CHARACTER SET 'ascii' NOT NULL,
  PRIMARY KEY (`idAddresse`),
  INDEX `fk_Addresse_user_idx` (`user_Id_User` ASC, `user_username` ASC),
  CONSTRAINT `fk_Addresse_user`
    FOREIGN KEY (`user_Id_User` , `user_username`)
    REFERENCES `mydb`.`user` (`Id_User` , `username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projet-Autodiagnostique`.`Diagnostique`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet-Autodiagnostique`.`Diagnostique` (
  `idDiagnostique` INT NOT NULL AUTO_INCREMENT,
  `user_Id_User` VARCHAR(16) CHARACTER SET 'ascii' NOT NULL,
  `user_username` VARCHAR(32) CHARACTER SET 'ascii' NOT NULL,
  PRIMARY KEY (`idDiagnostique`),
  INDEX `fk_Diagnostique_user1_idx` (`user_Id_User` ASC, `user_username` ASC),
  CONSTRAINT `fk_Diagnostique_user1`
    FOREIGN KEY (`user_Id_User` , `user_username`)
    REFERENCES `mydb`.`user` (`Id_User` , `username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projet-Autodiagnostique`.`Question`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet-Autodiagnostique`.`Question` (
  `idQuestion` INT NOT NULL AUTO_INCREMENT,
  `Question` VARCHAR(45) NULL,
  `Réponse_idRéponse` INT NOT NULL,
  `Diagnostique_idDiagnostique` INT NOT NULL,
  PRIMARY KEY (`idQuestion`),
  INDEX `fk_Question_Réponse1_idx` (`Réponse_idRéponse` ASC),
  INDEX `fk_Question_Diagnostique2_idx` (`Diagnostique_idDiagnostique` ASC),
  CONSTRAINT `fk_Question_Réponse1`
    FOREIGN KEY (`Réponse_idRéponse`)
    REFERENCES `mydb`.`Réponse` (`idRéponse`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Question_Diagnostique2`
    FOREIGN KEY (`Diagnostique_idDiagnostique`)
    REFERENCES `mydb`.`Diagnostique` (`idDiagnostique`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projet-Autodiagnostique`.`user_reponse`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet-Autodiagnostique`.`user_reponse` (
  `user_Id_User` VARCHAR(16) CHARACTER SET 'ascii' NOT NULL,
  `user_username` VARCHAR(32) CHARACTER SET 'ascii' NOT NULL,
  `Question_idQuestion` INT NOT NULL,
  `Question_Diagnostique_idDiagnostique` INT NOT NULL,
  `Question_Diagnostique_user_Id_User` VARCHAR(16) CHARACTER SET 'ascii' NOT NULL,
  `Question_Diagnostique_user_username` VARCHAR(32) CHARACTER SET 'ascii' NOT NULL,
  `id_reponse` INT NOT NULL AUTO_INCREMENT,
  `reponse` VARCHAR(256) NULL,
  PRIMARY KEY (`id_reponse`),
  INDEX `fk_user_has_Question_Question1_idx` (`Question_idQuestion` ASC, `Question_Diagnostique_idDiagnostique` ASC, `Question_Diagnostique_user_Id_User` ASC, `Question_Diagnostique_user_username` ASC),
  INDEX `fk_user_has_Question_user1_idx` (`user_Id_User` ASC, `user_username` ASC),
  CONSTRAINT `fk_user_has_Question_user1`
    FOREIGN KEY (`user_Id_User` , `user_username`)
    REFERENCES `mydb`.`user` (`Id_User` , `username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_Question_Question1`
    FOREIGN KEY (`Question_idQuestion` , `Question_Diagnostique_idDiagnostique` , `Question_Diagnostique_user_Id_User` , `Question_Diagnostique_user_username`)
    REFERENCES `mydb`.`Question` (`idQuestion` , `Diagnostique_idDiagnostique` , `Diagnostique_user_Id_User` , `Diagnostique_user_username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `Projet-Autodiagnostique`.`Eco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet-Autodiagnostique`.`Eco` (
  `idArbre` INT NOT NULL AUTO_INCREMENT,
  `Timestamp` DATETIME NOT NULL,
  `KitDiagnostique_idKitDiagnostique` INT NOT NULL,
  PRIMARY KEY (`idArbre`),
  INDEX `fk_Eco_KitDiagnostique1_idx` (`KitDiagnostique_idKitDiagnostique` ASC),
  CONSTRAINT `fk_Eco_KitDiagnostique1`
    FOREIGN KEY (`KitDiagnostique_idKitDiagnostique`)
    REFERENCES `mydb`.`KitDiagnostique` (`idKitDiagnostique`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projet-Autodiagnostique`.`Capteur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet-Autodiagnostique`.`Capteur` (
  `idCapteur` INT NOT NULL AUTO_INCREMENT,
  `Unité` VARCHAR(45) NOT NULL,
  `KitDiagnostique_idKitDiagnostique` INT NOT NULL,
  PRIMARY KEY (`idCapteur`),
  INDEX `fk_Capteur_KitDiagnostique1_idx` (`KitDiagnostique_idKitDiagnostique` ASC),
  CONSTRAINT `fk_Capteur_KitDiagnostique1`
    FOREIGN KEY (`KitDiagnostique_idKitDiagnostique`)
    REFERENCES `mydb`.`KitDiagnostique` (`idKitDiagnostique`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projet-Autodiagnostique`.`Mesure`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet-Autodiagnostique`.`Mesure` (
  `idMesure` INT NOT NULL AUTO_INCREMENT,
  `Timestamp` DATETIME NULL,
  `Valeur` INT NULL,
  `Capteur_idCapteur` INT NOT NULL,
  PRIMARY KEY (`idMesure`),
  INDEX `fk_Mesure_Capteur2_idx` (`Capteur_idCapteur` ASC),
  CONSTRAINT `fk_Mesure_Capteur2`
    FOREIGN KEY (`Capteur_idCapteur`)
    REFERENCES `mydb`.`Capteur` (`idCapteur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projet-Autodiagnostique`.`Mesure`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet-Autodiagnostique`.`Mesure` (
  `idMesure` INT NOT NULL AUTO_INCREMENT,
  `Timestamp` DATETIME NULL,
  `Valeur` INT NULL,
  `Capteur_idCapteur` INT NOT NULL,
  PRIMARY KEY (`idMesure`),
  INDEX `fk_Mesure_Capteur2_idx` (`Capteur_idCapteur` ASC),
  CONSTRAINT `fk_Mesure_Capteur2`
    FOREIGN KEY (`Capteur_idCapteur`)
    REFERENCES `mydb`.`Capteur` (`idCapteur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Projet-Autodiagnostique`.`Question`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Projet-Autodiagnostique`.`Question` (
  `idQuestion` INT NOT NULL AUTO_INCREMENT,
  `Question` VARCHAR(45) NULL,
  `Réponse_idRéponse` INT NOT NULL,
  `Diagnostique_idDiagnostique` INT NOT NULL,
  PRIMARY KEY (`idQuestion`),
  INDEX `fk_Question_Réponse1_idx` (`Réponse_idRéponse` ASC),
  INDEX `fk_Question_Diagnostique2_idx` (`Diagnostique_idDiagnostique` ASC),
  CONSTRAINT `fk_Question_Réponse1`
    FOREIGN KEY (`Réponse_idRéponse`)
    REFERENCES `mydb`.`Réponse` (`idRéponse`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Question_Diagnostique2`
    FOREIGN KEY (`Diagnostique_idDiagnostique`)
    REFERENCES `mydb`.`Diagnostique` (`idDiagnostique`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;