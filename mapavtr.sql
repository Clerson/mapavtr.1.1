-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para mapavtr
CREATE DATABASE IF NOT EXISTS `mapavtr` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `mapavtr`;

-- Copiando estrutura para tabela mapavtr.detmapa
CREATE TABLE IF NOT EXISTS `detmapa` (
  `iddetmp` int(11) NOT NULL AUTO_INCREMENT,
  `idmapa` int(11) DEFAULT NULL,
  `idvtr` int(11) DEFAULT NULL,
  `idpessoa` int(11) DEFAULT NULL,
  `odomsaida` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `odomentr` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horasaida` time NOT NULL,
  `horaentr` time NOT NULL,
  `destino` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obs` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detmp_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aberta',
  PRIMARY KEY (`iddetmp`),
  KEY `idmapa` (`idmapa`),
  KEY `idvtr` (`idvtr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela mapavtr.detmapa: ~0 rows (aproximadamente)
DELETE FROM `detmapa`;
/*!40000 ALTER TABLE `detmapa` DISABLE KEYS */;
/*!40000 ALTER TABLE `detmapa` ENABLE KEYS */;

-- Copiando estrutura para tabela mapavtr.mapas
CREATE TABLE IF NOT EXISTS `mapas` (
  `idmapa` int(11) NOT NULL AUTO_INCREMENT,
  `ala` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idofdia` int(11) NOT NULL DEFAULT '0',
  `idchefe` int(11) NOT NULL DEFAULT '0',
  `idtelefonista1` int(11) NOT NULL DEFAULT '0',
  `idtelefonista2` int(11) NOT NULL DEFAULT '0',
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`idmapa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela mapavtr.mapas: ~0 rows (aproximadamente)
DELETE FROM `mapas`;
/*!40000 ALTER TABLE `mapas` DISABLE KEYS */;
/*!40000 ALTER TABLE `mapas` ENABLE KEYS */;

-- Copiando estrutura para tabela mapavtr.pessoas
CREATE TABLE IF NOT EXISTS `pessoas` (
  `codmil` int(11) NOT NULL AUTO_INCREMENT,
  `grad` text COLLATE utf8mb4_unicode_ci,
  `rg` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomeguerra` text COLLATE utf8mb4_unicode_ci,
  `nome` text COLLATE utf8mb4_unicode_ci,
  `contato` text COLLATE utf8mb4_unicode_ci,
  `img` text COLLATE utf8mb4_unicode_ci,
  `pstatus` text COLLATE utf8mb4_unicode_ci,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `senha` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`codmil`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela mapavtr.pessoas: ~80 rows (aproximadamente)
DELETE FROM `pessoas`;
/*!40000 ALTER TABLE `pessoas` DISABLE KEYS */;
INSERT INTO `pessoas` (`codmil`, `grad`, `rg`, `nomeguerra`, `nome`, `contato`, `img`, `pstatus`, `login`, `senha`) VALUES
	(1, 'Cel QOC', '01.073', 'QUEIROZ', 'Mauro GonÃ§alves de QUEIROZ', '64 3455-2311 e 64 9983-9605', NULL, 'n', NULL, NULL),
	(4, 'Cap QOC', '02.310', 'INÃCIO teste', 'Niccolo INÃCIO Alves de Sousa', '62 9338-3239 - 62 8130-1216 - 61 9125-8714 - 64 9240-8214', NULL, 'n', NULL, NULL),
	(6, 'ST QP/Comb.', '01.096', 'MARÇAL', 'Ueliston MARAL Silveira', '64 8131-8474', NULL, 'n', NULL, NULL),
	(7, 'MAJ QOA/Adm', '00.509', 'WANDERLEI', 'WANDERLEI Francisco Pereira', '64 9212-0327 e 64 8145-5315 e 9963-5137 e 3454-1197', NULL, 'n', NULL, NULL),
	(8, '2§ TEN QOA/Adm', '01.117', 'HUGSON', 'HUGSON Dias de Souza', '64 3454-1101 e 64 9283-4189 64 8409-8449', NULL, 'n', NULL, NULL),
	(9, 'ST QP/Comb', '00.967', 'GUILHERME', 'GUILHERME Moreira', '64 3453-3278 e 64 8417-7491', NULL, 'n', NULL, NULL),
	(10, '1ï¿½ Ten QOA/Adm', '01.546', 'MACEDO', 'Hely Mï¿½rcio de MACEDO Fagundes', '64 8422-4893 e 64 8412-7822', NULL, 'n', NULL, NULL),
	(11, 'ST QPC', '01.351', 'MESQUITA', 'FÃ¡bio Carneiro de MESQUITA', '64 8112-2909 e 64 9208-4415', 'mesquita.jpg', 's', NULL, NULL),
	(12, 'ST QPC', '01.569', 'JOEL', 'JOEL Carneiro de Mesquita', '64 9203-4888', 'joel.jpg', 's', NULL, NULL),
	(13, 'CAP QOA/Adm', '01.704', 'Rï¿½MULO', 'Rï¿½MULO Rocha de Oliveira', '64 9989-5757 - 64 3453-8640 - 64 8403-7778', NULL, 'n', NULL, NULL),
	(14, 'Cap QOA', '01.489', 'DUARTE', 'Eduardo Aparecido DUARTE', '64 8409-2098', 'duarte.jpg', 's', NULL, NULL),
	(15, 'ST QPC', '01.552', 'REZENDE', 'Hudson REZENDE Alves', '64 99212 8146', NULL, 'n', NULL, NULL),
	(17, '1Âº Ten QOA', '02.017', 'CUNHA', 'JosÃ© Orlando Messias da CUNHA', '64 9212-5180', 'cunha.jpg', 's', NULL, NULL),
	(19, '2§ TEN QOA/Adm', '01.680', 'RODRIGUES', 'Renato RODRIGUES da Silva', '64 9949-3819 - 9991-6995', NULL, 'n', NULL, NULL),
	(21, 'ST QPC', '00.495', 'GILBERTO', 'GILBERTO da Silva', '64 9218-3740 e 64 8125-1062', NULL, 'n', NULL, NULL),
	(22, '2§ TEN QOA/Adm', '01.741', 'LOPES', 'Vandeir LOPES Barbosa', '64 9244-3088 e 3453-3037 pai', NULL, 'n', NULL, NULL),
	(23, '1ř Sgt QP/Comb', '00.552', 'ODAILTON', 'ODAÖLTON Rodrigues', '64 9255-2595', NULL, 'n', NULL, NULL),
	(24, '1ř Sgt QP/Comb', '00.777', 'AZEVEDO', 'Marcos Ramos AZEVEDO', '64 8122-7444', NULL, 'n', NULL, NULL),
	(25, 'St QP/Comb', '00.935', 'ADÇO ROBERTO', 'ADÇO ROBERTO da Silva', '64 3453-0767 64 9240-2379 64 8137-0179', NULL, 'n', NULL, NULL),
	(26, '1ř Sgt QP/Comb', '00.816', 'WELLINGTON', 'WELLINGTON Rodrigues dos Santos', '64 3455 - 4866 64 9263-7489', NULL, 'n', NULL, NULL),
	(27, '1Âº Sgt QPC', '01.233', 'REGINALDO', 'REGINALDO Francisco dos Santos', '64 9274-8007 e 3453-8670 e 64 9957-2420', 'reginaldo.jpg', 's', NULL, NULL),
	(28, 'ST QPC', '01.736', 'MORAIS', 'Valdiney Augusto de MORAIS', '8402-6968 e 9238-7818 e 64 3454-2381 (mĆe)', 'moraes.jpg', 's', NULL, NULL),
	(29, 'ST QPC', '01.721', 'ESTRELA', 'Srgio ESTRELA Vaz', '64 8413-2203', NULL, 'n', NULL, NULL),
	(30, '1ř Sgt QP/Comb', '00.654', 'COSTA', 'Rogrio Ferreira da COSTA', '64 3453-8612 e 64 8409-6953', NULL, 'n', NULL, NULL),
	(31, '1Âº Sgt QPC', '01.181', 'DE RAMOS', 'LÃºcio GuimarÃ£es de Ramos', '64 3453-1198 e 9252-2239 e 9264-6814 (esposa)', 'deramos.jpg', 's', NULL, NULL),
	(32, '1Âº Sgt QPC', '01.281', 'JEAN CARLOS', 'JEAN CARLOS Martins', '64 8442-5472 8442-5473', 'jeancarlos.jpg', 's', NULL, NULL),
	(33, '1Âº Sgt QPC', '01.356', 'OLIVEIRA', 'AntÃ´nio Marcelo OLIVEIRA de AraÃºjo', '64 8119-4334', 'oliveira.jpg', 's', NULL, NULL),
	(34, '1Âº Sgt QPC', '01.486', 'DOS SANTOS', 'Edmar Martins dos SANTOS', '64 3491-5426 m?e  64 8409-7250, 64 9227-6519', 'dossantos.jpg', 's', NULL, NULL),
	(35, '1ř Sgt QP/Comb', '01.503', 'GARCEZ', 'Elissandra GARCEZ Carvalho', '64 9695-9394 - 8121-5603 - 9255-5784', NULL, 'n', NULL, NULL),
	(36, '2ř Sgt QP/Comb', '01.422', 'BORGES', 'Alcinede BORGES da Silva', '64 8118-3617 e 64 9237-0193', NULL, 'n', NULL, NULL),
	(37, '1Âº Sgt QPC', '01.770', 'VENÃ‚NCIO', 'Wander VENÃ‚NCIO da Cruz', '64 9203-8519', 'venancio.jpg', 's', NULL, NULL),
	(39, '2§ Sgt QP/Comb', '01.566', 'PRIMO', 'JoĆo Cordeiro de Faria PRIMO', '64 9257-5447 e 62 9927-2144 Efignia-mĆe', NULL, 'n', NULL, NULL),
	(40, 'ST QPC', '01.932', 'FABRÃCIO', 'FABRÃCIO Rodrigues de AraÃºjo', '64 8131-7273 ou 64 8415-3257', 'fabricio.jpg', 's', NULL, NULL),
	(43, '3§ Sgt QP/Comb', '01.781', 'AGNALDO', 'AGNALDO Gonalves da Silva', '64 8117-7734 e 64 8137-2649', NULL, 'n', NULL, NULL),
	(45, '1Âº Sgt QPC', '02.181', 'ALVES', 'Ronan Francino Gomides ALVES', '64 3462-1424 (m?e) e 9207-2977 e 64 8408-8887 64 8147-9747', 'alves.jpg', 's', NULL, NULL),
	(46, '1Âº Sgt QPC', '01.910', 'ENIET', 'ENIET de FÃ¡tima Kamenach', '64 9216-7473', 'eniet.jpg', 's', NULL, NULL),
	(47, '2Âº Sgt QPC', '01.891', 'BATISTA', 'Eder GerÃ´ncio BATISTA', '64 9237-9016  e 8425-6015', 'batista.jpg', 's', NULL, NULL),
	(49, '2Âº Sgt QPC', '01.915', 'ERIVELTON', 'ERIVELTON Pereira da Silva', '64 9997-9096 e 64 9989-7414 (m?e)', 'erivelton.jpg', 's', NULL, NULL),
	(50, '2Âº Sgt QPC', '02.118', 'MIGUEL', 'MIGUEL Mariano JÃºnior', '63 8414-2591 e 64 9983-2707 (esposa) e 64 9646-3975(pai-fazen)', 'miguel.jpg', 's', NULL, NULL),
	(51, '1Âº Sgt QPC', '01.570', 'JONATHAS', 'Jonathas de Sousa MACHADO', '64 8405-7993 e 64 3454-2102 e 8405-7990 (esposa)', 'jonathas.jpg', 's', NULL, NULL),
	(53, '3§ Sgt QP/Comb', '02.378', 'DIOGO', 'DIOGO Oliveira de Castro de Almeida LŁcio', '64 3453-3258 - 64 8414-0800', NULL, 'n', NULL, NULL),
	(54, '3Âº Sgt QPC', '02.509', 'BUENO', 'Pedro Paulo de Siqueira BUENO', '64 9221-7568 e 64 8116-6646', 'bueno.jpg', 's', NULL, NULL),
	(55, '3§ Sgt QP/Comb', '02.381', 'GALVÇO', 'Domingos GALVÇO da Silva', '64 3465-1428 e 64 9236-7883 e 64 9263-2164', NULL, 'n', NULL, NULL),
	(56, '3Âº Sgt QPC', '02.590', 'CASSIUS', 'CASSIUS Albert Knuivers', '64 9625-8181', 'cassius.jpg', 's', NULL, NULL),
	(57, '3Âº Sgt QPC', '02.585', 'CLERSON', 'CLERSON Borges de Menezes', '64 3453-6863, 64 9215-3385 e 64 9216-9963 (esposa)', 'clerson.jpg', 's', NULL, NULL),
	(59, '2Âº Sgt QPC', '02.877', 'CLEMENTE', 'Danillo Henrique CLEMENTE', '64 9238-2036', 'clemente.jpg', 's', NULL, NULL),
	(60, '3Âº Sgt QPC', '03.153', 'TALITA', 'TALITA Maria Cursino de Faria', '34 8403-0581 e 64 8136-8588 e 34 3242-6270', 'talita.jpg', 's', NULL, NULL),
	(61, '3Âº Sgt QPC', '03.091', 'UNGARELLI', 'Mariella Naves UNGARELLI', '64 9220-2150 64 3453-0587', 'ungarelli.jpg', 's', NULL, NULL),
	(64, 'Sd QP/Comb', '03.193', 'KAYSSON', 'KAYSSON Oliveira Barbosa', '62 8103-0895', NULL, 'n', NULL, NULL),
	(65, '3Âº Sgt QPC', '03.056', 'BRITO', 'Jhonatan dos Santos BRITO', '64 3453-1612 e 64 8401-6120', 'brito.jpg', 's', NULL, NULL),
	(68, '3Âº Sgt QPC', '02.994', 'MENDONÃ‡A', 'Danilo MENDONÃ‡A Batista', '62 8132-8536 e 62 8132-8640 e 62 9999-2630', 'mendonca.jpg', 's', NULL, NULL),
	(70, '3Âº Sgt QPC', '03.232', 'RAFAEL', 'RAFAEL Jesus de Andrade', '64 3453-4630 64 9224-7546', 'rafaeljesus.jpg', 's', NULL, NULL),
	(73, '3Âº Sgt QPC', '03.220', 'DOURADO', 'VIRGÃNIA Teixeira DOURADO', '62 9946-7584 62 99528114', 'virginia.jpg', 's', NULL, NULL),
	(77, 'Cb QPC', '03.265', 'WELITON FREIRE', 'WELITON FREIRE de Oliveira', '62 9657-7011 e 9121-6701', 'welitonfreire.jpg', 's', NULL, NULL),
	(81, 'Sd QP/Comb', '03.480', 'CARLEONI', 'Carleoni Augusto Oliveira Leal', '', NULL, 'n', NULL, NULL),
	(82, 'Cb QPC', '03.593', 'ELIAS', 'ELIAS Alves da Silva', '000000000', 'elias.jpg', 's', NULL, NULL),
	(83, '3Âº Sgt QPC', '03.463', 'AUGUSTO', 'Ricardo AUGUSTO de Morais', '6492429887 E 34542381', 'augusto.jpg', 's', NULL, NULL),
	(85, 'Sd QP/Comb', '03.282', 'ANDERSON', 'Anderson Gomes de Oliveira', '62-84813547 / 62-82255333', NULL, 'n', NULL, NULL),
	(86, 'Sd QP/Comb', '03.396', 'ADRIANO', 'Adriano Pereira Cuba', '', NULL, 'n', NULL, NULL),
	(87, 'Cb QPC', '03.392', 'FELICIANO', 'Thiago Silva FELICIANO', '34 3316-3132/9194-4199', 'feliciano.jpg', 's', NULL, NULL),
	(88, 'TC QOC', '01.396', 'TIAGO', 'Tiago Dias Coelho', '9277-0000', 'tiago.jpg', 's', NULL, NULL),
	(89, 'CAP QOC', '02.456', 'JOYCE', 'Joyce Ferreira Faria', '9246-6538', 'joyce.jpg', 's', NULL, NULL),
	(90, 'Sd QP/Comb', '03.394', 'ISAQUE', 'Isaque de Souza Martins', '9652-7810', NULL, 'n', NULL, NULL),
	(92, '3§ QP/Comb', '01.643', 'PEDROSO', 'Miguel Candido Pedroso', '9231-9448', NULL, 'n', NULL, NULL),
	(93, 'CAP QOS', '02.626', 'DANTAS', 'Leonardo Dantas Cavalcante', '9209-1305', 'dantas.jpg', 's', NULL, NULL),
	(94, 'Sd QP/Comb', '03.501', 'CAMILA', 'Camila cunha alves', '6282931707', NULL, 'n', NULL, NULL),
	(95, 'Sd QP/Comb', '03.523', 'BASILIO', 'Basilio da Silva Campos', '6281022981', NULL, 'n', NULL, NULL),
	(96, 'Cb QPC', '03.681', 'ROGÃˆRIO', 'JosÃ© RogÃ©rio Ferreira dos Santos', '6493017168', 'rogerio.jpg', 's', NULL, NULL),
	(97, 'Cb QPC', '03.622', 'RENATO', 'RENATO Ferreira dos Santos', '6492872724', 'renato.jpg', 's', NULL, NULL),
	(98, 'Cb QPC', '03.502', 'CRISTIANO', 'CRISTIANO Augusto de Moraes', '649212-6001/8159-0334', 'cristiano.jpg', 's', NULL, NULL),
	(99, '2§ Sgt QP/Comb', '01.683', 'ABRÇO', 'Ricardo ABRÇO Ribeiro', '6281476864/6299007702', NULL, 'n', NULL, NULL),
	(100, 'Sd QP/Comb', '03.500', 'DE ASSIS', 'Thiago Silva DE ASSIS', '6492594453', NULL, 'n', NULL, NULL),
	(101, 'Cb QPC', '03.652', 'FERRAREZI', 'Rafael FERRAREZI Ramos', '6283109800', 'ferrarezi.jpg', 's', NULL, NULL),
	(105, '1Âº Ten QOC', '02.478', 'MAICO', 'MAICO Cipriano de Melo', '6492471530', 'maico.jpg', 's', NULL, NULL),
	(106, 'ST QPC', '01.617', 'VIEIRA', 'Marcelo AntÃ´nio VIEIRA', '6492929829', 'vieira.jpg', 's', NULL, NULL),
	(107, '1Âº Ten QOC', '02.209', 'TARCÃSIO', 'TARCÃSIO Duarte Celestino', '81246810', 'tarcisio.jpg', 's', NULL, NULL),
	(108, 'Cb QPC', '03.685', 'DE CASTRO', 'LUIZ CARLOS DE CASTRO ABREU JÃšNIOR', '6299930203', 'decastro.jpg', 's', NULL, NULL),
	(109, '2§  Sgt QP/Comb', '01.589', 'MARIANO', 'Leandro dos Reis TRISTÇO Mariano', '', NULL, 'n', NULL, NULL),
	(110, '2Âº Sgt QPC', '01.979', 'DO VALE', 'Igor Antunes Rodrigues DO VALE', '64-9999-9999', 'dovale.jpg', 's', NULL, NULL),
	(111, 'Maj QOC', '02.296', 'MAJ BATISTA', 'Daniel Freire Pereira BATISTA', '(62)99556-7375', 'batista_maj.jpg', 's', NULL, NULL),
	(112, '1§ Ten QOA/Adm', '01.137', 'ROGRIO CARNEIRO', 'Rogrio Roberto Carneiro', '', NULL, 'n', NULL, NULL),
	(113, '2ř Sgt QP/Comb', '01.136', 'WESLEY', 'WESLEY Rodrigues dos Santos', '64-99214-7709', NULL, 'n', NULL, NULL),
	(114, 'MAJ QOC', '02.272', 'DOS SANTOS', 'Adriano Loureno DOS SANTOS', '', NULL, 'n', NULL, NULL),
	(119, '1Âº Sgt QPC', '01.414', 'ADEVALDO', 'Adevaldo Ananias da Silva', '6499999999', 'adevaldo.jpg', 's', NULL, NULL);
/*!40000 ALTER TABLE `pessoas` ENABLE KEYS */;

-- Copiando estrutura para tabela mapavtr.vtr
CREATE TABLE IF NOT EXISTS `vtr` (
  `vtrid` int(11) NOT NULL AUTO_INCREMENT,
  `vtrpref` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vtrtipo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vtrmarcamod` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vtrano` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vtrstatus` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vtrimg` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'thumb.png',
  PRIMARY KEY (`vtrid`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela mapavtr.vtr: ~43 rows (aproximadamente)
DELETE FROM `vtr`;
/*!40000 ALTER TABLE `vtr` DISABLE KEYS */;
INSERT INTO `vtr` (`vtrid`, `vtrpref`, `vtrtipo`, `vtrmarcamod`, `vtrano`, `vtrstatus`, `vtrimg`) VALUES
	(2, '8010', 'ABS-02', 'BENZ / L1113', '1974', 'INATIVA', 'thumb.png'),
	(3, '80304545we', 'ABT-09', 'VW / 16220', '1998', 'ATIVA', 'abt09.png'),
	(4, '00.061', 'MOB-24', 'HONDA / CG TITAN', '1999', 'INATIVA', 'thumb.png'),
	(5, '00.000', 'MOB-49', 'HONDA / NX FALCON', '2007', 'INATIVA', 'thumb.png'),
	(6, '00.000', 'MOB-50', 'HONDA / NX FALCON', '2007', 'INATIVA', 'thumb.png'),
	(7, '00.070', 'CLIO 70', 'RENAULT / CLIO', '2000', 'INATIVA', 'thumb.png'),
	(8, '00.093', 'CLIO 93', 'RENAULT / CLIO', '2001', 'INATIVA', 'thumb.png'),
	(9, '00.349', 'AV-208', 'RENAULT/SANDERO', '2009', 'ATIVA', 'av208.png'),
	(10, '00.353', 'AV-212', 'RENAULT/SANDERO', '2009', 'INATIVA', 'thumb.png'),
	(11, '8047', 'UR-05', 'FORD / F-1000', '1998', 'INATIVA', 'thumb.png'),
	(12, '8198', 'ATC-19', 'PEUGEOT / BOXER', '2008', 'INATIVA', 'thumb.png'),
	(13, '8232', 'UR-102', 'MB 313 CDI SPRINTER', '2008', 'INATIVA', 'thumb.png'),
	(14, '8233', 'UR-103', 'MB 313 CDI SPRINTER', '2008', 'INATIVA', 'thumb.png'),
	(15, '8309', 'URS-15', 'RENAULT / MASTER', '2009', 'ATIVA', 'urs15.png'),
	(16, '8137', 'ASA-06', 'MITSUBISCH / L-200', '2005', 'ATIVA', 'asa06.png'),
	(17, '8193', 'ASA-25', 'FRONTIER / NISSAN', '2008', 'INATIVA', 'thumb.png'),
	(18, '0000', 'AV-278', 'FIAT/PALIO', '2011', 'INATIVA', 'thumb.png'),
	(19, '', 'AT-05', 'SCANIA/112H', '', 'ATIVA', 'thumb.png'),
	(20, '', 'AV-349', '', '', 'INATIVA', 'thumb.png'),
	(21, '', 'AV-210', 'RENAULT/SANDERO', '2008', 'ATIVA', 'thumb.png'),
	(22, '8047', 'ATC-10', 'FORD/F-1000', '}', 'ATIVA', 'atc10.png'),
	(23, '8010444', 'ATP-10', '4154', '1974', 'ATIVA', 'atp10.png'),
	(25, '08181', 'USA-09', 'RENAULT/MASTER', '2007', 'INATIVA', 'thumb.png'),
	(26, '08400', 'UR-166', 'SPRINTER', '2013', 'ATIVA', 'ur166.png'),
	(27, '08169', 'ABTS-4', '', '', 'INATIVA', 'thumb.png'),
	(28, '08133', 'ABT-22', '', '', 'INATIVA', 'thumb.png'),
	(29, '', 'ABT-38', 'IVECO/170E28', '2014', 'ATIVA', 'abt38.png'),
	(30, '', 'AV-404', 'FIAT/PALIO', '2015', 'ATIVA', 'av404.png'),
	(31, '', 'MOB-55', 'YBR ED', '2008', 'INATIVA', 'thumb.png'),
	(32, '', 'AV-417', 'GOLF', '', 'INATIVA', 'thumb.png'),
	(33, '', 'UR-223', 'SPRINTER', '', 'ATIVA', 'ur223.png'),
	(34, '', 'ABS-19', 'FORD/CARGO', '', 'INATIVA', 'thumb.png'),
	(35, '', 'AV-417', 'VOLKSWAGEN/POLO', '', 'ATIVA', 'av417.png'),
	(36, '', 'ATC-29', 'SAVEIRO/VERMELHO', '', 'INATIVA', 'thumb.png'),
	(37, '', 'AV-463', 'VOLKSWAGEN/GOL', '', 'ATIVA', 'thumb.png'),
	(38, '333333', 'ASA-105', 'FORD', '', 'ATIVA', 'asa105.png'),
	(39, 'ertertasdasd', 'AA-09', 'SPRINTER', '3333', 'INATIVA', 'thumb.png'),
	(40, '', 'AV-503', 'CHEVROLET/ONIX', '', 'ATIVA', 'thumb.png'),
	(41, '', 'ASA-127', 'FORD/RANGER', '2021', 'ATIVA', 'asa127.png'),
	(42, '', 'UR-185', 'RENALT/MST 11M SOBERANA', '2014', 'INATIVA', 'thumb.png'),
	(43, '', 'ABT-27', 'VOLVO', '', 'INATIVA', 'thumb.png'),
	(90, '000', 'UR-265', 'VOLVO', '2015', 'ATIVA', 'ur265.png');
/*!40000 ALTER TABLE `vtr` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
