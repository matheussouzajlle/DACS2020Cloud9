use univille;

CREATE TABLE petshoop (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `horaentrada` varchar(200) DEFAULT NULL,
  `servico` varchar(200) DEFAULT NULL,
  `numerocel` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
);

GRANT ALL PRIVILEGES ON univille.* TO 'root'@'%' WITH GRANT OPTION; 
FLUSH PRIVILEGES; 