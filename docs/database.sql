-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema seg4pilares
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema seg4pilares
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `seg4pilares` DEFAULT CHARACTER SET utf8 ;
USE `seg4pilares` ;

-- -----------------------------------------------------
-- Table `seg4pilares`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seg4pilares`.`cliente` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` TEXT NOT NULL,
  `cpf` VARCHAR(30) NOT NULL,
  `ddd` VARCHAR(3) NOT NULL,
  `telefone` VARCHAR(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `seg4pilares`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seg4pilares`.`usuario` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` TEXT NOT NULL,
  `senha` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
