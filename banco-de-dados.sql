CREATE DATABASE IF NOT EXISTS `empresas_php`;

USE `empresas_php`;

CREATE USER 'app_user'@'localhost' IDENTIFIED BY 'senha_segura';
GRANT ALL PRIVILEGES ON empresas_php.* TO 'app_user'@'localhost';
FLUSH PRIVILEGES;

CREATE TABLE `pessoas` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(100) NOT NULL,
    `email` VARCHAR(150) NOT NULL UNIQUE,
    `telefone` VARCHAR(20) NOT NULL,
    `endereco` VARCHAR(255) NOT NULL,
    `data_nascimento` DATE NOT NULL,
    `foto` VARCHAR(255),
    PRIMARY KEY (`id`)
);

INSERT INTO `pessoas` (`nome`, `email`, `telefone`, `endereco`, `data_nascimento`) 
VALUES 
('Ana Souza', 'ana.souza@gmail.com', '11977776666', 'Rua das Palmeiras, 45', '1992-03-10'),
('Lucas Pereira', 'lucas.pereira@gmail.com', '11966665555', 'Av. Brasil, 200', '1988-07-22'),
('Mariana Costa', 'mariana.costa@gmail.com', '11955554444', 'Rua das Rosas, 78', '1995-11-05');
