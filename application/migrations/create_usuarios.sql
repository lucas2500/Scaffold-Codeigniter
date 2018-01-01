CREATE TABLE `usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) DEFAULT NULL, 
  `email` VARCHAR(255) DEFAULT NULL, 
  `idade` INT DEFAULT NULL, 
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME DEFAULT NULL,
  PRIMARY KEY (`id`)
);

SELECT * FROM usuarios;
