-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.24-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para mvc
CREATE DATABASE IF NOT EXISTS `mvc` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `mvc`;

-- Copiando estrutura para tabela mvc.cadastro
CREATE TABLE IF NOT EXISTS `cadastro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(250) NOT NULL DEFAULT '0',
  `celular` int(11) NOT NULL DEFAULT 0,
  `senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela mvc.cadastro: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `cadastro` DISABLE KEYS */;
INSERT INTO `cadastro` (`id`, `nome`, `email`, `celular`, `senha`) VALUES
	(1, 'Sob', 'udreakjogos2@gmail.com', 2147483647, NULL),
	(13, 'Sob', 'udreakjogos2@gmail.com', 2147483647, NULL),
	(14, 'Sob', 'udreakjogos2@gmail.com', 2147483647, NULL),
	(15, 'Sob', 'udreakjogos2@gmail.com', 2147483647, NULL),
	(16, 'Cavalcante', 'udreakjogos2@gmail.com', 2147483647, NULL),
	(17, 'Sobeira', 'Sobeira', 123, 'Sobeira'),
	(18, 'Sobeira', 'Sobeira', 123, 'Sobeira'),
	(19, 'Sobeira', 'Sobeira', 123, 'Sobeira');
/*!40000 ALTER TABLE `cadastro` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
