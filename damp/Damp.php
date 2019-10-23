
CREATE SCHEMA IF NOT EXISTS `saep_senai` DEFAULT CHARACTER SET utf8 ;
USE `saep_senai` ;

-- -----------------------------------------------------
-- Table `saep_senai`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `saep_senai`.`cliente` (
  `codCli` INT(5) NOT NULL AUTO_INCREMENT,
  `nomCli` VARCHAR(60) NOT NULL,
  `endCli` VARCHAR(120) NULL DEFAULT NULL,
  `telCli` VARCHAR(11) NULL DEFAULT NULL,
  PRIMARY KEY (`codCli`))

