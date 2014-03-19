SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `db_develop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `db_develop` ;

-- -----------------------------------------------------
-- Table `db_develop`.`location`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_develop`.`location` ;

CREATE TABLE IF NOT EXISTS `db_develop`.`location` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `country` VARCHAR(100) NOT NULL,
  `city` VARCHAR(100) NOT NULL,
  `streetname` VARCHAR(100) NULL,
  `number` VARCHAR(10) NULL,
  `zipcode` VARCHAR(10) NULL,
  `latitude` FLOAT NOT NULL,
  `longitude` FLOAT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`storytype`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_develop`.`storytype` ;

CREATE TABLE IF NOT EXISTS `db_develop`.`storytype` (
  `name` VARCHAR(45) NOT NULL,
  `description` VARCHAR(45) NULL,
  PRIMARY KEY (`name`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`organization`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_develop`.`organization` ;

CREATE TABLE IF NOT EXISTS `db_develop`.`organization` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` TEXT NULL,
  `website` VARCHAR(245) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`student`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_develop`.`student` ;

CREATE TABLE IF NOT EXISTS `db_develop`.`student` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(45) NOT NULL,
  `insertion` VARCHAR(45) NULL,
  `surname` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`school`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_develop`.`school` ;

CREATE TABLE IF NOT EXISTS `db_develop`.`school` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `website` VARCHAR(245) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`study`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_develop`.`study` ;

CREATE TABLE IF NOT EXISTS `db_develop`.`study` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` TEXT NULL,
  `school_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `school-study_idx` (`school_id` ASC),
  CONSTRAINT `school-study`
    FOREIGN KEY (`school_id`)
    REFERENCES `db_develop`.`school` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`story`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_develop`.`story` ;

CREATE TABLE IF NOT EXISTS `db_develop`.`story` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(45) NOT NULL,
  `organization_id` INT NOT NULL,
  `student_id` INT NOT NULL,
  `study_id` INT NOT NULL,
  `startdate` DATE NOT NULL,
  `enddate` DATE NOT NULL,
  `description` TEXT NOT NULL,
  `schoolyear` INT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `idstory_UNIQUE` (`id` ASC),
  INDEX `type_idx` (`type` ASC),
  INDEX `organization-story_idx` (`organization_id` ASC),
  INDEX `student-story_idx` (`student_id` ASC),
  INDEX `study-story_idx` (`study_id` ASC),
  CONSTRAINT `storytype-story`
    FOREIGN KEY (`type`)
    REFERENCES `db_develop`.`storytype` (`name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `organization-story`
    FOREIGN KEY (`organization_id`)
    REFERENCES `db_develop`.`organization` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `student-story`
    FOREIGN KEY (`student_id`)
    REFERENCES `db_develop`.`student` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `study-story`
    FOREIGN KEY (`study_id`)
    REFERENCES `db_develop`.`study` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_develop`.`user` ;

CREATE TABLE IF NOT EXISTS `db_develop`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`page`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_develop`.`page` ;

CREATE TABLE IF NOT EXISTS `db_develop`.`page` (
  `type` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`type`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`crud_operation`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_develop`.`crud_operation` ;

CREATE TABLE IF NOT EXISTS `db_develop`.`crud_operation` (
  `type` VARCHAR(6) NOT NULL,
  PRIMARY KEY (`type`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`access`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_develop`.`access` ;

CREATE TABLE IF NOT EXISTS `db_develop`.`access` (
  `user_id` INT NOT NULL,
  `page` VARCHAR(40) NOT NULL,
  `crud_operations` VARCHAR(6) NOT NULL,
  `item_id` INT NULL,
  `release` DATETIME NULL,
  `end` DATETIME NULL,
  PRIMARY KEY (`user_id`, `page`, `crud_operations`),
  INDEX `page_idx` (`page` ASC),
  INDEX `crud_operations_idx` (`crud_operations` ASC),
  CONSTRAINT `page-access`
    FOREIGN KEY (`page`)
    REFERENCES `db_develop`.`page` (`type`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `crud_operation-access`
    FOREIGN KEY (`crud_operations`)
    REFERENCES `db_develop`.`crud_operation` (`type`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `user-access`
    FOREIGN KEY (`user_id`)
    REFERENCES `db_develop`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`link`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_develop`.`link` ;

CREATE TABLE IF NOT EXISTS `db_develop`.`link` (
  `story_id` INT NOT NULL,
  `link` VARCHAR(245) NOT NULL,
  PRIMARY KEY (`link`, `story_id`),
  UNIQUE INDEX `link_UNIQUE` (`link` ASC),
  CONSTRAINT `story-link`
    FOREIGN KEY (`story_id`)
    REFERENCES `db_develop`.`story` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`locationtype`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_develop`.`locationtype` ;

CREATE TABLE IF NOT EXISTS `db_develop`.`locationtype` (
  `name` VARCHAR(45) NOT NULL,
  `description` TEXT NULL,
  PRIMARY KEY (`name`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`storylocation`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_develop`.`storylocation` ;

CREATE TABLE IF NOT EXISTS `db_develop`.`storylocation` (
  `story_id` INT NOT NULL,
  `location_id` INT NOT NULL,
  `location_type` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`story_id`, `location_id`, `location_type`),
  INDEX `location-storylocation_idx` (`location_id` ASC),
  INDEX `locationtype-storylocation_idx` (`location_type` ASC),
  CONSTRAINT `story-storylocation`
    FOREIGN KEY (`story_id`)
    REFERENCES `db_develop`.`story` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `location-storylocation`
    FOREIGN KEY (`location_id`)
    REFERENCES `db_develop`.`location` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `locationtype-storylocation`
    FOREIGN KEY (`location_type`)
    REFERENCES `db_develop`.`locationtype` (`name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
