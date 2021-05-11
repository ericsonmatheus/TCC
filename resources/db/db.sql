-- MySQL Script generated by MySQL Workbench
-- Sun Apr 25 19:27:55 2021
-- Model: BURGUER BOSS   Version: 1.0
-- MySQL Workbench Forward Engineering
-- drop database burguerboss;
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema burguerboss
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema burguerboss
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS burguerboss DEFAULT CHARACTER SET utf8 ;
USE burguerboss ;

-- -----------------------------------------------------
-- Table categorias
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS categorias (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  tipo VARCHAR(45) NOT NULL,
  updated_at TIMESTAMP NULL,
  created_at TIMESTAMP NULL,
  PRIMARY KEY (id))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table lanches
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS lanches (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  descricao VARCHAR(45) NOT NULL,
  pathlanche VARCHAR(255),
  valor DOUBLE NOT NULL,
  updated_at TIMESTAMP NULL,
  created_at TIMESTAMP NULL,
  idcategoria INT NOT NULL,
  PRIMARY KEY (id),
    FOREIGN KEY (idcategoria)
    REFERENCES categorias (id))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table funcionarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS funcionarios (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  email VARCHAR(100) NOT NULL,
  login VARCHAR(45) NOT NULL DEFAULT 'UNIQUE',
  senha VARCHAR(256) NOT NULL,
  created_at TIMESTAMP NULL,
  updated_at TIMESTAMP NULL,
  PRIMARY KEY (id))
ENGINE = InnoDB;

insert into funcionarios(nome, email, login, senha) values ('Administrador', 'adm@adm.com', 'admburguer', '$2y$10$xCn7AwpNIoYz10c.Xz4jluPzktf7AKLMhmwlaaGYPiMoL4KJJ5eXi');

-- -----------------------------------------------------
-- Table carrinhos
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS carrinhos (
  id INT NOT NULL AUTO_INCREMENT,
  created_at TIMESTAMP NULL,
  updated_at TIMESTAMP NULL,
  PRIMARY KEY (id))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table comandas
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS comandas (
  id INT NOT NULL AUTO_INCREMENT,
  created_at TIMESTAMP NULL,
  updated_at TIMESTAMP NULL,
  idlanche INT NOT NULL,
  idcarrinho INT NOT NULL,
  PRIMARY KEY (id),
    FOREIGN KEY (idlanche)
    REFERENCES lanches (id),
    FOREIGN KEY (idcarrinho)
    REFERENCES carrinhos (id))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


insert into categorias (nome, tipo) values('Hamburguer','comida');
insert into categorias (nome, tipo) values('Refrigerante','bebida');
insert into categorias (nome, tipo) values('Batata','comida');
insert into categorias (nome, tipo) values('Combo','comida');

