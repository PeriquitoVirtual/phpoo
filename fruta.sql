CREATE DATABASE  IF NOT EXISTS `fruta` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `fruta`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: fruta
-- ------------------------------------------------------
-- Server version	5.7.17-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Sucos'),(2,'Polpas'),(3,'Saladas'),(4,'Tapiocas'),(5,'Sobremesas');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cidade`
--

DROP TABLE IF EXISTS `cidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cidade` (
  `id` int(11) NOT NULL,
  `nome` text,
  `id_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cidade`
--

LOCK TABLES `cidade` WRITE;
/*!40000 ALTER TABLE `cidade` DISABLE KEYS */;
INSERT INTO `cidade` VALUES (1,'Aracajú',26),(2,'Belém',14),(3,'Belo Horizonte',13),(4,'Boa Vista',23),(5,'Brasília',7),(6,'Campo Grande',12),(7,'Cuiabá',11),(8,'Curitiba',16),(9,'Florianópolis',24),(10,'Fortaleza',6),(11,'Goiânia',9),(12,'João Pessoa',15),(13,'Macap ',3),(14,'Maceió',2),(15,'Manaus',4),(16,'Natal',20),(17,'Palmas',27),(18,'Porto Alegre',21),(19,'Porto Velho',22),(20,'Recife',17),(21,'Rio Branco',1),(22,'Rio de Janeiro',19),(23,'Salvador',5),(24,'São Luis',10),(25,'São Paulo',25),(26,'Teresina',18),(27,'Vitória',8);
/*!40000 ALTER TABLE `cidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conta`
--

DROP TABLE IF EXISTS `conta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conta` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `dt_emissao` date DEFAULT NULL,
  `dt_vencimento` date DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `paga` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conta`
--

LOCK TABLES `conta` WRITE;
/*!40000 ALTER TABLE `conta` DISABLE KEYS */;
INSERT INTO `conta` VALUES (1,1,'2015-04-18','2015-04-20',195,'N'),(2,1,'2015-04-18','2015-05-20',195,'N'),(3,2,'2015-04-18','2015-04-20',132.5,'S'),(4,2,'2015-04-18','2015-05-20',132.5,'N');
/*!40000 ALTER TABLE `conta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `sigla` char(2) DEFAULT NULL,
  `nome` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT INTO `estado` VALUES (1,'AC','Acre'),(2,'AL','Alagoas'),(3,'AP','Amapá'),(4,'AM','Amazonas'),(5,'BA','Bahia'),(6,'CE','Ceará'),(7,'DF','Distrito Federal'),(8,'ES','Espírito Santo'),(9,'GO','Goiás'),(10,'MA','Maranhão'),(11,'MT','Mato Grosso'),(12,'MS','Mato Grosso do Sul'),(13,'MG','Minas Gerais'),(14,'PA','Pará'),(15,'PB','Paraíba'),(16,'PR','Paraná'),(17,'PE','Pernambuco'),(18,'PI','Piauí'),(19,'RJ','Rio de Janeiro'),(20,'RN','Rio Grande do Norte'),(21,'RS','Rio Grande do Sul'),(22,'RO','Rondônia'),(23,'RR','Roraima'),(24,'SC','Santa Catarina'),(25,'SP','São Paulo'),(26,'SE','Sergipe'),(27,'TO','Tocantins');
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingrediente`
--

DROP TABLE IF EXISTS `ingrediente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ingrediente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ingrediente` varchar(45) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingrediente`
--

LOCK TABLES `ingrediente` WRITE;
/*!40000 ALTER TABLE `ingrediente` DISABLE KEYS */;
INSERT INTO `ingrediente` VALUES (1,'Abacaxi',0.99),(2,'Abacate',0.99),(3,'Água de Coco',0.99),(4,'Alga Wakame',2.99),(5,'Alho Poró',2.50),(6,'Almeirão',10.00),(7,'Amora',20.00),(8,'Banana',NULL),(9,'Batata Doce',NULL),(10,'Beterraba',NULL),(11,'Bifum',NULL),(12,'Blueberry',NULL),(13,'Brócolis',NULL),(14,'Broto de feijão',NULL),(15,'Castanha do Pará',NULL),(16,'Cenoura',NULL),(17,'Cogumelo Paris',NULL),(18,'Couve',NULL),(19,'Cúrcuma',NULL),(20,'Ervilha',NULL),(21,'Espinafre',NULL),(22,'Framboesa',NULL),(23,'Gengibre',NULL),(24,'Gergelim',NULL),(25,'Gergelim Preto',NULL),(26,'Grão de bico',NULL),(27,'Hortelã',NULL),(28,'Kiwi',NULL),(29,'Laranja',NULL),(30,'Lichia',NULL),(31,'Limão Siciliano',NULL),(32,'Limão Taiti',NULL),(33,'Linhaça',NULL),(34,'Maçã',NULL),(35,'Mamão',NULL),(36,'Manga',NULL),(37,'Manjericão',NULL),(38,'Maracujá',NULL),(39,'Melancia',NULL),(40,'Melão',NULL),(41,'Milho',NULL),(42,'Mirtilo',NULL),(43,'Morango',NULL),(44,'Mulungu',NULL),(45,'Pepino',NULL),(46,'Pimenta Caiena',NULL),(47,'Pimenta rosa',NULL),(48,'Quinoa',NULL),(49,'Salsinha',NULL),(50,'Semente de girassol',NULL),(51,'Shitake',NULL),(52,'Tofu',NULL),(53,'Tomate',NULL);
/*!40000 ALTER TABLE `ingrediente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(45) DEFAULT NULL,
  `id_subcategoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idsubcategoria_idx` (`id_subcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (1,'Aquaman',3),(2,'Apocalipse',1),(3,'Popeye',1),(4,'She-Ra',2),(5,'Encantadora',1),(6,'Kriptonita',1),(7,'Arlequina',4),(8,'Coringa',4),(9,'Hera Venenosa',1),(10,'Hulk',1),(11,'Perséfone',1),(12,'Homem Toupeira',5),(13,'Viúva Negra',4),(14,'Olho de Tandera',1),(15,'Caça-Fantasma',1),(16,'Thor',2),(17,'Feiticeira Escarlate',4),(18,'Senhor Fantástico',5),(19,'Blanka',1),(20,'Malévola',2),(21,'Overman',3),(22,'Tornado',2),(23,'Gladiador',2),(24,'Magia',2),(25,'Marciano',1),(26,'Wolwerine',3),(27,'Elektra',1),(28,'Indiana Jones',5),(29,'Corra Lola',5),(30,'Cheetara',5),(31,'Cavaleiros do Zodíaco',3),(32,'Super Gêmeos',3),(33,'Gengiskhan',5),(34,'Laranja Mecânica',5),(35,'Tocha Humana',5),(36,'Lanterna Verde',1),(37,'Galactus',1),(38,'UltraVioleta',4),(39,'Basquiat',4),(40,'Deadpool',4),(41,'Wall-e',2),(42,'Arqueiro Verde',1),(43,'Branca de Neve',2),(44,'Triplo X',4),(45,'Pantera cor de rosa',4),(46,'Mumm-Rá',1),(47,'Quarteto Fantástico',4),(48,'Demolidor',5),(49,'Magaiver',3),(50,'Super amigos',2),(51,'Super Liga',3),(52,'Planeta dos Macacos',5),(53,'Capitão Marvel',5),(54,'Super Mário',3),(55,'Capitão Caverna',2),(56,'Tropical',3),(57,'O Coisa',4),(58,'Krakatoa',3),(59,'Frozen',2),(60,'Aquaman',3),(61,'Detox Day',6);
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_ingrediente`
--

DROP TABLE IF EXISTS `item_ingrediente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_ingrediente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idingrediente` int(11) NOT NULL,
  `iditem` int(11) NOT NULL,
  `quantidade` decimal(2,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idingrediente_idx` (`idingrediente`),
  KEY `iditem` (`iditem`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_ingrediente`
--

LOCK TABLES `item_ingrediente` WRITE;
/*!40000 ALTER TABLE `item_ingrediente` DISABLE KEYS */;
INSERT INTO `item_ingrediente` VALUES (1,1,1,0.25),(2,5,1,0.50),(3,6,1,0.10),(4,7,1,0.50);
/*!40000 ALTER TABLE `item_ingrediente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_pedido`
--

DROP TABLE IF EXISTS `item_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iditem` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `idpedido` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `iditens_idx` (`iditem`),
  KEY `idepedido_idx` (`idpedido`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_pedido`
--

LOCK TABLES `item_pedido` WRITE;
/*!40000 ALTER TABLE `item_pedido` DISABLE KEYS */;
INSERT INTO `item_pedido` VALUES (1,1,2,1),(2,3,1,2),(3,4,3,7),(4,6,5,9),(5,7,5,10),(6,9,2,11),(7,10,1,11),(8,10,5,12),(9,10,5,13);
/*!40000 ALTER TABLE `item_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_valor_tamanho`
--

DROP TABLE IF EXISTS `item_valor_tamanho`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_valor_tamanho` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_item` int(11) NOT NULL,
  `tamanho` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `volume` int(11) DEFAULT NULL,
  `valor` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_item_idx` (`id_item`),
  CONSTRAINT `id_item` FOREIGN KEY (`id_item`) REFERENCES `item` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_valor_tamanho`
--

LOCK TABLES `item_valor_tamanho` WRITE;
/*!40000 ALTER TABLE `item_valor_tamanho` DISABLE KEYS */;
INSERT INTO `item_valor_tamanho` VALUES (1,1,'Master',500,12),(2,1,'Júnior',250,7.5),(3,61,'Único',1,85),(4,6,'Master',500,16),(5,6,'Júnior',250,9),(6,10,'Master',500,18),(7,10,'Júnior',250,11.5),(9,15,'Júnior',250,8.5),(10,15,'Master',500,16);
/*!40000 ALTER TABLE `item_valor_tamanho` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dataPedido` datetime DEFAULT NULL,
  `dataEntrega` datetime DEFAULT NULL,
  `idpessoa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` VALUES (1,'2017-02-09 00:00:00','2017-02-09 00:00:00',2),(2,'2017-03-25 15:00:00','2017-03-25 17:00:00',3),(7,'2017-04-20 00:00:00','2017-04-22 00:00:00',4),(9,'2017-04-28 00:00:00','2017-04-29 00:00:00',3),(10,'2017-04-28 00:00:00','2017-05-01 00:00:00',4),(11,'2017-05-10 00:00:00','2017-05-11 00:00:00',6),(12,'2018-06-27 00:00:00','2018-06-27 00:00:00',3),(13,'2018-06-27 00:00:00','2018-06-27 00:00:00',3);
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (1,'Cliente'),(2,'Fornecedor'),(3,'Revendedor'),(4,'Colaborador');
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` int(11) DEFAULT NULL,
  `nome` text,
  `endereco` text,
  `cep` text,
  `telefone` text,
  `email` text,
  `id_cidade` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `perfil_idx` (`perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoa`
--

LOCK TABLES `pessoa` WRITE;
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` VALUES (2,1,'Ariane','Rua 16-A, Ed. La Selle, apt. 1502','74070045','30917210','naoenvie@email.com',11),(3,2,'Cícero','Rua 22, Qd. 61, Lt. 20','74555340','39261221','cicero.ice@gmail.com',11),(4,2,'Beatriz Naves','Rua 22, Qd. 61, Lt. 20','74555340','39261221','bianavemkt@gmail.com',11),(6,2,'Marisa Ribeiro','rua 22 , qd 61, lt. 20','74555340','39261221','marisa@gmail.com',11);
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcategoria`
--

DROP TABLE IF EXISTS `subcategoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subcategoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idcategoria_idx` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategoria`
--

LOCK TABLES `subcategoria` WRITE;
/*!40000 ALTER TABLE `subcategoria` DISABLE KEYS */;
INSERT INTO `subcategoria` VALUES (1,'Suco Verde',1),(2,'Suco Vermelho',1),(3,'Suco Amarelo',1),(4,'Suco Roxo',1),(5,'Suco Laranja',1),(6,'Kit Detox',1),(7,'Combo',1),(8,'Salada Vegana',3),(9,'Salada de Frutas',3);
/*!40000 ALTER TABLE `subcategoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unidade`
--

DROP TABLE IF EXISTS `unidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unidade` (
  `id` int(11) NOT NULL,
  `sigla` text,
  `nome` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unidade`
--

LOCK TABLES `unidade` WRITE;
/*!40000 ALTER TABLE `unidade` DISABLE KEYS */;
INSERT INTO `unidade` VALUES (1,'cm','Centímetro'),(2,'m','Metro'),(3,'cm2','Centímetro quadrado'),(4,'m2','Metro quadrado'),(5,'cm3','Centímetro cúbico'),(6,'m3','Metro cúbico'),(7,'Kg','Kilograma'),(8,'Gr','Grama'),(9,'L','Litro'),(10,'PC','Peça'),(11,'PCT','Pacote'),(12,'CX','Caixa'),(13,'SAC','Saco'),(14,'TON','Tonelada'),(15,'KIT','Kit'),(16,'GL','Galão'),(17,'FD','Fardo'),(18,'BL','Bloco');
/*!40000 ALTER TABLE `unidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `valor_item`
--

DROP TABLE IF EXISTS `valor_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `valor_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iditem` int(11) DEFAULT NULL,
  `tamanho` varchar(45) DEFAULT NULL,
  `valor_item` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `iditem_idx` (`iditem`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `valor_item`
--

LOCK TABLES `valor_item` WRITE;
/*!40000 ALTER TABLE `valor_item` DISABLE KEYS */;
INSERT INTO `valor_item` VALUES (1,1,'250',7.00),(2,1,'500',12.00);
/*!40000 ALTER TABLE `valor_item` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-04 10:06:43
