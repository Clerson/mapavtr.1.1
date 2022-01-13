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
DROP DATABASE IF EXISTS `mapavtr`;
CREATE DATABASE IF NOT EXISTS `mapavtr` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `mapavtr`;

-- Copiando dados para a tabela mapavtr.detmapa: ~60 rows (aproximadamente)
DELETE FROM `detmapa`;
/*!40000 ALTER TABLE `detmapa` DISABLE KEYS */;
INSERT INTO `detmapa` (`iddetmp`, `idmapa`, `idvtr`, `idpessoa`, `odomsaida`, `odomentr`, `horasaida`, `horaentr`, `destino`, `obs`) VALUES
	(4, 6, 21, 12, '0', '0', '00:00:00', '07:47:00', 'Ocorrencia', ''),
	(5, 6, 30, 12, '0', '0', '00:00:00', '07:47:00', 'Ocorrencia', ''),
	(6, 6, 9, 12, '0', '10', '00:00:00', '07:51:00', 'Ocorrencia', ''),
	(7, 6, 9, 12, '10', '16', '00:00:00', '07:52:00', 'Ocorrencia', ''),
	(8, 6, 9, 12, '31', '35', '07:54:00', '07:54:00', 'Ocorrencia', ''),
	(9, 6, 9, 12, '40', '46', '07:55:00', '07:55:00', 'Ocorrencia', ''),
	(10, 6, 9, 12, '46', '51', '00:00:00', '07:55:00', 'Ocorrencia', ''),
	(11, 6, 12, 34, '0', '0', '07:56:00', '10:33:00', 'Ocorrencia', ''),
	(15, 9, 9, 12, '51', '51', '07:51:00', '09:15:00', 'Ocorrencia', ''),
	(16, 3, 9, 12, '51', '51', '07:51:00', '09:21:00', 'Ocorrencia', ''),
	(21, 2, 21, 12, '0', '0', '07:47:00', '10:00:00', 'Ocorrencia', ''),
	(22, 2, 22, 12, '2', '2', '07:42:00', '10:01:00', 'Ocorrencia', ''),
	(23, 2, 23, 12, '6', '6', '08:02:00', '10:01:00', 'Ocorrencia', ''),
	(25, 2, 23, 12, '6', '6', '00:06:00', '00:07:00', 'Oficina', 'NÂ° RAI:'),
	(29, 6, 9, 12, '51', '51', '07:51:00', '10:08:00', 'Ocorrencia', ''),
	(30, 6, 38, 12, '0', '0', '00:00:00', '10:08:00', 'Ocorrencia', ''),
	(31, 6, 38, 12, '0', '0', '00:00:00', '10:10:00', 'Ocorrencia', ''),
	(32, 6, 38, 32, '0', '2', '00:00:00', '10:27:00', 'Ocorrencia', ''),
	(33, 7, 19, 12, '2', '2', '09:14:00', '10:46:00', 'Ocorrencia', ''),
	(34, 7, 19, 77, '2', '4', '11:42:00', '11:43:00', 'Ocorrencia', ''),
	(35, 7, 19, 12, '8', '8', '14:18:00', '14:20:00', 'Ocorrencia', 'NÂ° RAI:'),
	(36, 7, 40, 12, '2', '2', '14:09:00', '14:08:00', 'Ocorrencia', 'NÂ° RAI:'),
	(37, 8, 30, 12, '0', '3', '00:00:00', '12:31:00', 'Ocorrencia', 'NÂ° RAI:'),
	(38, 5, 3, 33, '0', '3', '00:00:00', '14:16:00', 'Ocorrencia', 'NÂ° RAI:'),
	(39, 10, 43, 12, '5', '8', '22:01:00', '22:02:00', 'Ocorrencia', 'NÂ° RAI:'),
	(40, 7, 19, 12, '8', '8', '09:14:00', '16:30:00', 'Ocorrencia', 'NÂ° RAI:'),
	(41, 7, 19, 12, '8', '8', '09:14:00', '16:30:00', 'Ocorrencia', 'NÂ° RAI:'),
	(42, 7, 19, 12, '8', '8', '09:14:00', '16:30:00', 'Ocorrencia', 'NÂ° RAI:'),
	(43, 7, 19, 12, '8', '8', '09:14:00', '16:30:00', 'Ocorrencia', 'NÂ° RAI:'),
	(50, 11, 29, 12, '0', '0', '00:00:00', '21:05:00', 'Ocorrencia', 'NÂ° RAI:'),
	(51, 10, 38, 12, '0', '0', '10:08:00', '21:14:00', 'Ocorrencia', 'NÂ° RAI:'),
	(52, 6, 34, 12, '0', '0', '00:00:00', '21:25:00', 'Ocorrencia', 'NÂ° RAI:'),
	(54, 12, 38, 12, '0', '0', '10:08:00', '23:28:00', 'Ocorrencia', 'NÂ° RAI:'),
	(55, 2, 29, 12, '0', '0', '00:02:00', '00:03:00', 'Ordem de ServiÃ§o', 'NÂ° RAI:'),
	(56, 5, 38, 12, '0', '3', '10:08:00', '21:32:00', 'Ocorrencia', 'NÂ° RAI:'),
	(57, 5, 41, 12, '0', '2', '00:00:00', '21:33:00', 'Ocorrencia', 'NÂ° RAI:'),
	(58, 5, 3, 12, '3', '6', '14:16:00', '21:34:00', 'Ocorrencia', 'NÂ° RAI:'),
	(59, 10, 43, 12, '8', '10', '22:02:00', '22:03:00', 'Ocorrencia', 'NÂ° RAI:'),
	(60, 11, 29, 12, '0', '2', '21:05:00', '22:06:00', 'Ocorrencia', 'NÂ° RAI:'),
	(61, 11, 29, 12, '2', '5', '21:05:00', '22:06:00', 'Ocorrencia', 'NÂ° RAI:'),
	(62, 11, 16, 12, '0', '0', '00:00:00', '14:09:00', 'Ocorrencia', 'NÂ° RAI:'),
	(63, 11, 43, 12, '10', '12', '22:02:00', '14:40:00', 'Abastecimento', 'NÂ° RAI:'),
	(64, 4, 19, 12, '8', '8', '10:46:00', '15:25:00', 'Ocorrencia', 'NÂ° RAI:'),
	(65, 12, 29, 12, '5', '5', '21:05:00', '15:33:00', 'Ocorrencia', 'NÂ° RAI:'),
	(66, 12, 23, 12, '6', '6', '10:01:00', '15:33:00', 'Ocorrencia', 'NÂ° RAI:'),
	(67, 12, 9, 12, '51', '51', '07:51:00', '15:33:00', 'Ocorrencia', 'NÂ° RAI:'),
	(68, 12, 29, 12, '5', '10', '21:05:00', '15:39:00', 'Ocorrencia', 'NÂ° RAI:'),
	(69, 12, 29, 12, '10', '13', '21:05:00', '15:40:00', 'Ocorrencia', 'NÂ° RAI:'),
	(70, 13, 29, 12, '13', '27', '21:05:00', '22:44:00', 'Ordem de ServiÃ§o', 'NÂ° RAI: 345345'),
	(71, 13, 43, 12, '12', '12', '22:02:00', '17:30:00', 'Ocorrencia', 'NÂ° RAI: 345345'),
	(72, 13, 16, 12, '0', '2', '14:09:00', '17:31:00', 'Ocorrencia', 'NÂ° RAI: 4564564'),
	(73, 13, 23, 38, '6', '10', '10:01:00', '20:31:00', 'Ordem de ServiÃ§o', 'NÂ° RAI: 345345'),
	(74, 13, 19, 12, '8', '11', '10:46:00', '17:31:00', 'Vistoria', 'NÂ° RAI: 34534'),
	(75, 13, 22, 12, '2', '6', '17:40:00', '17:47:00', 'Ocorrencia', 'NÂ° RAI: 345345'),
	(76, 13, 38, 12, '3', '6', '10:08:00', '17:50:00', 'Vistoria', 'NÂ° RAI:'),
	(77, 13, 9, 12, '51', '53', '07:51:00', '17:51:00', 'Ocorrencia', 'NÂ° RAI:'),
	(78, 13, 9, 12, '53', '53', '07:51:00', '17:51:00', 'Ponto Base', 'NÂ° RAI:'),
	(79, 13, 16, 12, '2', '2', '14:09:00', '17:51:00', 'Ordem de ServiÃ§o', 'NÂ° RAI:'),
	(80, 12, 41, 12, '2', '2', '21:33:00', '09:17:00', 'Outros', 'NÂ° RAI:'),
	(81, 10, 38, 12, '6', '6', '10:08:00', '09:43:00', 'Outros', 'NÂ° RAI:'),
	(82, 6, 3, 31, '6', '6', '14:16:00', '11:25:00', 'Outros', 'NÂ° RAI:');
/*!40000 ALTER TABLE `detmapa` ENABLE KEYS */;

-- Copiando dados para a tabela mapavtr.mapas: ~13 rows (aproximadamente)
DELETE FROM `mapas`;
/*!40000 ALTER TABLE `mapas` DISABLE KEYS */;
INSERT INTO `mapas` (`idmapa`, `ala`, `idofdia`, `idchefe`, `idtelefonista1`, `idtelefonista2`, `data`) VALUES
	(1, 'Charlie', 10, 11, 14, 28, '2022-01-06 00:00:00'),
	(2, 'Delta', 11, 12, 14, 27, '2022-01-06 00:00:00'),
	(3, 'Charlie', 14, 14, 27, 34, '2022-01-07 00:00:00'),
	(4, 'Charlie', 27, 31, 28, 32, '2022-01-07 00:00:00'),
	(5, 'Charlie', 17, 31, 33, 38, '2022-01-07 00:00:00'),
	(6, 'Delta', 14, 27, 28, 32, '2022-01-07 00:00:00'),
	(7, 'Delta', 14, 27, 28, 32, '2022-01-07 00:00:00'),
	(8, 'Delta', 17, 33, 34, 37, '2022-01-08 00:00:00'),
	(9, 'Delta', 17, 33, 34, 37, '2022-01-08 00:00:00'),
	(10, 'Charlie', 28, 31, 40, 32, '2022-01-08 00:00:00'),
	(11, 'Charlie', 27, 27, 32, 34, '2022-01-08 00:00:00'),
	(12, 'Delta', 17, 27, 31, 32, '2022-01-08 00:00:00'),
	(13, 'Charlie', 17, 31, 32, 34, '2022-01-10 00:00:00'),
	(14, 'Charlie', 17, 34, 40, 46, '2022-01-11 00:00:00'),
	(15, 'Alpha', 27, 31, 34, 31, '2022-01-12 00:00:00'),
	(16, 'Bravo', 14, 28, 31, 27, '2022-01-12 00:00:00'),
	(17, 'Bravo', 17, 28, 34, 32, '2022-01-12 00:00:00'),
	(18, 'Charlie', 28, 31, 33, 33, '2022-01-12 00:00:00'),
	(19, 'Bravo', 17, 27, 32, 31, '2022-01-12 00:00:00');
/*!40000 ALTER TABLE `mapas` ENABLE KEYS */;

-- Copiando dados para a tabela mapavtr.pessoas: ~84 rows (aproximadamente)
DELETE FROM `pessoas`;
/*!40000 ALTER TABLE `pessoas` DISABLE KEYS */;
INSERT INTO `pessoas` (`codmil`, `grad`, `rg`, `nomeguerra`, `nome`, `contato`, `img`, `status`, `login`, `senha`) VALUES
	(1, 'Cel QOC', '01.073', 'QUEIROZ', 'Mauro GonÃ§alves de QUEIROZ', '64 3455-2311 e 64 9983-9605', NULL, 'n', NULL, NULL),
	(4, 'Cap QOC', '02.310', 'INÃCIO', 'Niccolo INÃCIO Alves de Sousa', '62 9338-3239 - 62 8130-1216 - 61 9125-8714 - 64 9240-8214', NULL, 'n', NULL, NULL),
	(6, 'ST QP/Comb.', '01.096', 'MARÇAL', 'Ueliston MARAL Silveira', '64 8131-8474', NULL, 'n', NULL, NULL),
	(7, 'MAJ QOA/Adm', '00.509', 'WANDERLEI', 'WANDERLEI Francisco Pereira', '64 9212-0327 e 64 8145-5315 e 9963-5137 e 3454-1197', NULL, 'n', NULL, NULL),
	(8, '2§ TEN QOA/Adm', '01.117', 'HUGSON', 'HUGSON Dias de Souza', '64 3454-1101 e 64 9283-4189 64 8409-8449', NULL, 'n', NULL, NULL),
	(9, 'ST QP/Comb', '00.967', 'GUILHERME', 'GUILHERME Moreira', '64 3453-3278 e 64 8417-7491', NULL, 'n', NULL, NULL),
	(10, '1ï¿½ Ten QOA/Adm', '01.546', 'MACEDO', 'Hely Mï¿½rcio de MACEDO Fagundes', '64 8422-4893 e 64 8412-7822', NULL, 'n', NULL, NULL),
	(11, 'ST QPC', '01.351', 'MESQUITA', 'FÃ¡bio Carneiro de MESQUITA', '64 8112-2909 e 64 9208-4415', NULL, 's', NULL, NULL),
	(12, 'ST QPC', '01.569', 'JOEL', 'JOEL Carneiro de Mesquita', '64 9203-4888', NULL, 's', NULL, NULL),
	(13, 'CAP QOA/Adm', '01.704', 'Rï¿½MULO', 'Rï¿½MULO Rocha de Oliveira', '64 9989-5757 - 64 3453-8640 - 64 8403-7778', NULL, 'n', NULL, NULL),
	(14, 'Cap QOA', '01.489', 'DUARTE', 'Eduardo Aparecido DUARTE', '64 8409-2098', NULL, 's', NULL, NULL),
	(15, 'ST QPC', '01.552', 'REZENDE', 'Hudson REZENDE Alves', '64 99212 8146', NULL, 'n', NULL, NULL),
	(17, '1Âº Ten QOA', '02.017', 'CUNHA', 'JosÃ© Orlando Messias da CUNHA', '64 9212-5180', NULL, 's', NULL, NULL),
	(19, '2§ TEN QOA/Adm', '01.680', 'RODRIGUES', 'Renato RODRIGUES da Silva', '64 9949-3819 - 9991-6995', NULL, 'n', NULL, NULL),
	(21, 'ST QPC', '00.495', 'GILBERTO', 'GILBERTO da Silva', '64 9218-3740 e 64 8125-1062', NULL, 'n', NULL, NULL),
	(22, '2§ TEN QOA/Adm', '01.741', 'LOPES', 'Vandeir LOPES Barbosa', '64 9244-3088 e 3453-3037 pai', NULL, 'n', NULL, NULL),
	(23, '1ř Sgt QP/Comb', '00.552', 'ODAILTON', 'ODAÖLTON Rodrigues', '64 9255-2595', NULL, 'n', NULL, NULL),
	(24, '1ř Sgt QP/Comb', '00.777', 'AZEVEDO', 'Marcos Ramos AZEVEDO', '64 8122-7444', NULL, 'n', NULL, NULL),
	(25, 'St QP/Comb', '00.935', 'ADÇO ROBERTO', 'ADÇO ROBERTO da Silva', '64 3453-0767 64 9240-2379 64 8137-0179', NULL, 'n', NULL, NULL),
	(26, '1ř Sgt QP/Comb', '00.816', 'WELLINGTON', 'WELLINGTON Rodrigues dos Santos', '64 3455 - 4866 64 9263-7489', NULL, 'n', NULL, NULL),
	(27, '1Âº Sgt QPC', '01.233', 'REGINALDO', 'REGINALDO Francisco dos Santos', '64 9274-8007 e 3453-8670 e 64 9957-2420', NULL, 's', NULL, NULL),
	(28, 'ST QPC', '01.736', 'MORAIS', 'Valdiney Augusto de MORAIS', '8402-6968 e 9238-7818 e 64 3454-2381 (mĆe)', NULL, 's', NULL, NULL),
	(29, 'ST QPC', '01.721', 'ESTRELA', 'Srgio ESTRELA Vaz', '64 8413-2203', NULL, 'n', NULL, NULL),
	(30, '1ř Sgt QP/Comb', '00.654', 'COSTA', 'Rogrio Ferreira da COSTA', '64 3453-8612 e 64 8409-6953', NULL, 'n', NULL, NULL),
	(31, '1Âº Sgt QPC', '01.181', 'DE RAMOS', 'LÃºcio GuimarÃ£es de Ramos', '64 3453-1198 e 9252-2239 e 9264-6814 (esposa)', NULL, 's', NULL, NULL),
	(32, '1Âº Sgt QPC', '01.281', 'JEAN CARLOS', 'JEAN CARLOS Martins', '64 8442-5472 8442-5473', NULL, 's', NULL, NULL),
	(33, '1Âº Sgt QPC', '01.356', 'OLIVEIRA', 'AntÃ´nio Marcelo OLIVEIRA de AraÃºjo', '64 8119-4334', NULL, 's', NULL, NULL),
	(34, '1Âº Sgt QPC', '01.486', 'DOS SANTOS', 'Edmar Martins dos SANTOS', '64 3491-5426 m?e  64 8409-7250, 64 9227-6519', NULL, 's', NULL, NULL),
	(35, '1ř Sgt QP/Comb', '01.503', 'GARCEZ', 'Elissandra GARCEZ Carvalho', '64 9695-9394 - 8121-5603 - 9255-5784', NULL, 'n', NULL, NULL),
	(36, '2ř Sgt QP/Comb', '01.422', 'BORGES', 'Alcinede BORGES da Silva', '64 8118-3617 e 64 9237-0193', NULL, 'n', NULL, NULL),
	(37, '1Âº Sgt QPC', '01.770', 'VENÃ‚NCIO', 'Wander VENÃ‚NCIO da Cruz', '64 9203-8519', NULL, 's', NULL, NULL),
	(38, '1Âº Sgt QPC', '01.414', 'ADEVALDO', 'ADEVALDO Ananias da Silva', '64 9282-3234', NULL, 's', NULL, NULL),
	(39, '2§ Sgt QP/Comb', '01.566', 'PRIMO', 'JoĆo Cordeiro de Faria PRIMO', '64 9257-5447 e 62 9927-2144 Efignia-mĆe', NULL, 'n', NULL, NULL),
	(40, 'ST QPC', '01.932', 'FABRÃCIO', 'FABRÃCIO Rodrigues de AraÃºjo', '64 8131-7273 ou 64 8415-3257', NULL, 's', NULL, NULL),
	(43, '3§ Sgt QP/Comb', '01.781', 'AGNALDO', 'AGNALDO Gonalves da Silva', '64 8117-7734 e 64 8137-2649', NULL, 'n', NULL, NULL),
	(45, '1Âº Sgt QPC', '02.181', 'ALVES', 'Ronan Francino Gomides ALVES', '64 3462-1424 (m?e) e 9207-2977 e 64 8408-8887 64 8147-9747', NULL, 's', NULL, NULL),
	(46, '1Âº Sgt QPC', '01.910', 'ENIET', 'ENIET de FÃ¡tima Kamenach', '64 9216-7473', NULL, 's', NULL, NULL),
	(47, '2Âº Sgt QPC', '01.891', 'BATISTA', 'Eder GerÃ´ncio BATISTA', '64 9237-9016  e 8425-6015', NULL, 's', NULL, NULL),
	(49, '2Âº Sgt QPC', '01.915', 'ERIVELTON', 'ERIVELTON Pereira da Silva', '64 9997-9096 e 64 9989-7414 (m?e)', NULL, 's', NULL, NULL),
	(50, '2Âº Sgt QPC', '02.118', 'MIGUEL', 'MIGUEL Mariano JÃºnior', '63 8414-2591 e 64 9983-2707 (esposa) e 64 9646-3975(pai-fazen)', NULL, 's', NULL, NULL),
	(51, '1Âº Sgt QPC', '01.570', 'JONATHAS', 'Jonathas de Sousa MACHADO', '64 8405-7993 e 64 3454-2102 e 8405-7990 (esposa)', NULL, 's', NULL, NULL),
	(53, '3§ Sgt QP/Comb', '02.378', 'DIOGO', 'DIOGO Oliveira de Castro de Almeida LŁcio', '64 3453-3258 - 64 8414-0800', NULL, 'n', NULL, NULL),
	(54, '3Âº Sgt QPC', '02.509', 'BUENO', 'Pedro Paulo de Siqueira BUENO', '64 9221-7568 e 64 8116-6646', NULL, 's', NULL, NULL),
	(55, '3§ Sgt QP/Comb', '02.381', 'GALVÇO', 'Domingos GALVÇO da Silva', '64 3465-1428 e 64 9236-7883 e 64 9263-2164', NULL, 'n', NULL, NULL),
	(56, '3Âº Sgt QPC', '02.590', 'CASSIUS', 'CASSIUS Albert Knuivers', '64 9625-8181', NULL, 's', NULL, NULL),
	(57, '3Âº Sgt QPC', '02.585', 'CLERSON', 'CLERSON Borges de Menezes', '64 3453-6863, 64 9215-3385 e 64 9216-9963 (esposa)', NULL, 's', NULL, NULL),
	(59, '2Âº Sgt QPC', '02.877', 'CLEMENTE', 'Danillo Henrique CLEMENTE', '64 9238-2036', NULL, 's', NULL, NULL),
	(60, '3Âº Sgt QPC', '03.153', 'TALITA', 'TALITA Maria Cursino de Faria', '34 8403-0581 e 64 8136-8588 e 34 3242-6270', NULL, 's', NULL, NULL),
	(61, '3Âº Sgt QPC', '03.091', 'UNGARELLI', 'Mariella Naves UNGARELLI', '64 9220-2150 64 3453-0587', NULL, 's', NULL, NULL),
	(64, 'Sd QP/Comb', '03.193', 'KAYSSON', 'KAYSSON Oliveira Barbosa', '62 8103-0895', NULL, 'n', NULL, NULL),
	(65, '3Âº Sgt QPC', '03.056', 'BRITO', 'Jhonatan dos Santos BRITO', '64 3453-1612 e 64 8401-6120', NULL, 's', NULL, NULL),
	(68, '3Âº Sgt QPC', '02.994', 'MENDONÃ‡A', 'Danilo MENDONÃ‡A Batista', '62 8132-8536 e 62 8132-8640 e 62 9999-2630', NULL, 's', NULL, NULL),
	(70, '3Âº Sgt QPC', '03.232', 'RAFAEL', 'RAFAEL Jesus de Andrade', '64 3453-4630 64 9224-7546', NULL, 's', NULL, NULL),
	(73, '3Âº Sgt QPC', '03.220', 'DOURADO', 'VIRGÃNIA Teixeira DOURADO', '62 9946-7584 62 99528114', NULL, 's', NULL, NULL),
	(77, 'Cb QPC', '03.265', 'WELITON FREIRE', 'WELITON FREIRE de Oliveira', '62 9657-7011 e 9121-6701', NULL, 's', NULL, NULL),
	(81, 'Sd QP/Comb', '03.480', 'CARLEONI', 'Carleoni Augusto Oliveira Leal', '', NULL, 'n', NULL, NULL),
	(82, 'Cb QPC', '03.593', 'ELIAS', 'ELIAS Alves da Silva', '000000000', NULL, 's', NULL, NULL),
	(83, '3Âº Sgt QPC', '03.463', 'AUGUSTO', 'Ricardo AUGUSTO de Morais', '6492429887 E 34542381', NULL, 's', NULL, NULL),
	(85, 'Sd QP/Comb', '03.282', 'ANDERSON', 'Anderson Gomes de Oliveira', '62-84813547 / 62-82255333', NULL, 'n', NULL, NULL),
	(86, 'Sd QP/Comb', '03.396', 'ADRIANO', 'Adriano Pereira Cuba', '', NULL, 'n', NULL, NULL),
	(87, 'Cb QPC', '03.392', 'FELICIANO', 'Thiago Silva FELICIANO', '34 3316-3132/9194-4199', NULL, 's', NULL, NULL),
	(88, 'TC QOC', '01.396', 'TIAGO', 'Tiago Dias Coelho', '9277-0000', NULL, 's', NULL, NULL),
	(89, 'CAP QOC', '02.456', 'JOYCE', 'Joyce Ferreira Faria', '9246-6538', NULL, 's', NULL, NULL),
	(90, 'Sd QP/Comb', '03.394', 'ISAQUE', 'Isaque de Souza Martins', '9652-7810', NULL, 'n', NULL, NULL),
	(92, '3§ QP/Comb', '01.643', 'PEDROSO', 'Miguel Candido Pedroso', '9231-9448', NULL, 'n', NULL, NULL),
	(93, 'CAP QOS', '02.626', 'DANTAS', 'Leonardo Dantas Cavalcante', '9209-1305', NULL, 's', NULL, NULL),
	(94, 'Sd QP/Comb', '03.501', 'CAMILA', 'Camila cunha alves', '6282931707', NULL, 'n', NULL, NULL),
	(95, 'Sd QP/Comb', '03.523', 'BASILIO', 'Basilio da Silva Campos', '6281022981', NULL, 'n', NULL, NULL),
	(96, 'Cb QPC', '03.681', 'ROGÃˆRIO', 'JosÃ© RogÃ©rio Ferreira dos Santos', '6493017168', NULL, 's', NULL, NULL),
	(97, 'Cb QPC', '03.622', 'RENATO', 'RENATO Ferreira dos Santos', '6492872724', NULL, 's', NULL, NULL),
	(98, 'Cb QP/Comb', '03.502', 'CRISTIANO', 'CRISTIANO Augusto de Moraes', '649212-6001/8159-0334', NULL, 's', NULL, NULL),
	(99, '2§ Sgt QP/Comb', '01.683', 'ABRÇO', 'Ricardo ABRÇO Ribeiro', '6281476864/6299007702', NULL, 'n', NULL, NULL),
	(100, 'Sd QP/Comb', '03.500', 'DE ASSIS', 'Thiago Silva DE ASSIS', '6492594453', NULL, 'n', NULL, NULL),
	(101, 'Cb QPC', '03.652', 'FERRAREZI', 'Rafael FERRAREZI Ramos', '6283109800', NULL, 's', NULL, NULL),
	(105, '1Âº Ten QOC', '02.478', 'MAICO', 'MAICO Cipriano de Melo', '6492471530', NULL, 's', NULL, NULL),
	(106, 'ST QPC', '01.617', 'VIEIRA', 'Marcelo AntÃ´nio VIEIRA', '6492929829', NULL, 's', NULL, NULL),
	(107, '1Âº Ten QOC', '02.209', 'TARCÃSIO', 'TARCÃSIO Duarte Celestino', '81246810', NULL, 's', NULL, NULL),
	(108, 'Cb QPC', '03.685', 'DE CASTRO', 'LUIZ CARLOS DE CASTRO ABREU JÃšNIOR', '6299930203', NULL, 's', NULL, NULL),
	(109, '2§  Sgt QP/Comb', '01.589', 'MARIANO', 'Leandro dos Reis TRISTÇO Mariano', '', NULL, 'n', NULL, NULL),
	(110, '2Âº Sgt QPC', '01.979', 'DO VALE', 'Igor Antunes Rodrigues DO VALE', '64-9999-9999', NULL, 's', NULL, NULL),
	(111, 'Maj QOC', '02.296', 'MAJ BATISTA', 'Daniel Freire Pereira BATISTA', '(62)99556-7375', NULL, 's', NULL, NULL),
	(112, '1§ Ten QOA/Adm', '01.137', 'ROGRIO CARNEIRO', 'Rogrio Roberto Carneiro', '', NULL, 'n', NULL, NULL),
	(113, '2ř Sgt QP/Comb', '01.136', 'WESLEY', 'WESLEY Rodrigues dos Santos', '64-99214-7709', NULL, 'n', NULL, NULL),
	(114, 'MAJ QOC', '02.272', 'DOS SANTOS', 'Adriano Loureno DOS SANTOS', '', NULL, 'n', NULL, NULL);
/*!40000 ALTER TABLE `pessoas` ENABLE KEYS */;

-- Copiando dados para a tabela mapavtr.pessoas_categ: ~0 rows (aproximadamente)
DELETE FROM `pessoas_categ`;
/*!40000 ALTER TABLE `pessoas_categ` DISABLE KEYS */;
/*!40000 ALTER TABLE `pessoas_categ` ENABLE KEYS */;

-- Copiando dados para a tabela mapavtr.usuario: ~4 rows (aproximadamente)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`usuid`, `usunome`, `usulogin`, `ususenha`, `usuimg`, `usuperfil`, `usustatus`) VALUES
	(1, 'Clerson Borges de Menezes', 'clersonbm82@gmail.com', '444444', 'clerson.jpg', '1', 'ativo'),
	(2, 'Sylvia Sanae Inaba', 'ssinaba', 'ss1234', 'sylviasanae.jpg', '1', 'ativo'),
	(3, 'Usuário', 'usuario', 'asdfasd', '', '1', 'ativo'),
	(4, 'Xanda Por Amor', 'xandaporamor', 'xpa0000', '', '1', 'ativo');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

-- Copiando dados para a tabela mapavtr.vtr: ~42 rows (aproximadamente)
DELETE FROM `vtr`;
/*!40000 ALTER TABLE `vtr` DISABLE KEYS */;
INSERT INTO `vtr` (`vtrid`, `vtrpref`, `vtrtipo`, `vtrmarcamod`, `vtrano`, `vtrstatus`, `vtrimg`) VALUES
	(39, '', 'AA-09', 'SPRINTER', '', 'INATIVA', 'thumb.png'),
	(2, '8010', 'ABS-02', 'BENZ / L1113', '1974', 'INATIVA', 'thumb.png'),
	(34, '', 'ABS-19', 'FORD/CARGO', '', 'INATIVA', 'thumb.png'),
	(3, '8030', 'ABT-09', 'VW / 16220', '1998', 'ATIVA', 'abt09.png'),
	(28, '08133', 'ABT-22', '', '', 'INATIVA', 'thumb.png'),
	(43, '', 'ABT-27', 'VOLVO', '', 'ATIVA', 'abt27.png'),
	(29, '', 'ABT-38', 'IVECO/170E28', '2014', 'ATIVA', 'abt38.png'),
	(27, '08169', 'ABTS-4', '', '', 'INATIVA', 'thumb.png'),
	(16, '8137', 'ASA-06', 'MITSUBISCH / L-200', '2005', 'ATIVA', 'asa06.png'),
	(38, '', 'ASA-105', 'FORD', '', 'ATIVA', 'asa105.png'),
	(41, '', 'ASA-127', 'FORD/RANGER', '2021', 'ATIVA', 'asa127.png'),
	(17, '8193', 'ASA-25', 'FRONTIER / NISSAN', '2008', 'INATIVA', 'thumb.png'),
	(19, '', 'AT-05', 'SCANIA/112H', '', 'ATIVA', 'thumb.png'),
	(22, '8047', 'ATC-10', 'FORD/F-1000', '}', 'ATIVA', 'atc10.png'),
	(12, '8198', 'ATC-19', 'PEUGEOT / BOXER', '2008', 'INATIVA', 'thumb.png'),
	(36, '', 'ATC-29', 'SAVEIRO/VERMELHO', '', 'INATIVA', 'thumb.png'),
	(23, '8010', 'ATP-10', '4154', '1974', 'ATIVA', 'thumb.png'),
	(9, '00.349', 'AV-208', 'RENAULT/SANDERO', '2009', 'ATIVA', 'av208.png'),
	(21, '', 'AV-210', 'RENAULT/SANDERO', '2008', 'ATIVA', 'av210.png'),
	(10, '00.353', 'AV-212', 'RENAULT/SANDERO', '2009', 'INATIVA', 'thumb.png'),
	(18, '0000', 'AV-278', 'FIAT/PALIO', '2011', 'INATIVA', 'thumb.png'),
	(20, '', 'AV-349', '', '', 'INATIVA', 'thumb.png'),
	(30, '', 'AV-404', 'FIAT/PALIO', '2015', 'ATIVA', 'av404.png'),
	(35, '', 'AV-417', 'VOLKSWAGEN/POLO', '', 'ATIVA', 'av417.png'),
	(32, '', 'AV-417', 'GOLF', '', 'INATIVA', 'thumb.png'),
	(37, '', 'AV-463', 'VOLKSWAGEN/GOL', '', 'ATIVA', 'thumb.png'),
	(40, '', 'AV-503', 'CHEVROLET/ONIX', '', 'ATIVA', 'thumb.png'),
	(7, '00.070', 'CLIO 70', 'RENAULT / CLIO', '2000', 'INATIVA', 'thumb.png'),
	(8, '00.093', 'CLIO 93', 'RENAULT / CLIO', '2001', 'INATIVA', 'thumb.png'),
	(4, '00.061', 'MOB-24', 'HONDA / CG TITAN', '1999', 'INATIVA', 'thumb.png'),
	(5, '00.000', 'MOB-49', 'HONDA / NX FALCON', '2007', 'INATIVA', 'thumb.png'),
	(6, '00.000', 'MOB-50', 'HONDA / NX FALCON', '2007', 'INATIVA', 'thumb.png'),
	(31, '', 'MOB-55', 'YBR ED', '2008', 'INATIVA', 'thumb.png'),
	(11, '8047', 'UR-05', 'FORD / F-1000', '1998', 'INATIVA', 'thumb.png'),
	(13, '8232', 'UR-102', 'MB 313 CDI SPRINTER', '2008', 'INATIVA', 'thumb.png'),
	(14, '8233', 'UR-103', 'MB 313 CDI SPRINTER', '2008', 'INATIVA', 'thumb.png'),
	(26, '08400', 'UR-166', 'SPRINTER', '2013', 'ATIVA', 'ur166.png'),
	(42, '', 'UR-185', 'RENALT/MST 11M SOBERANA', '2014', 'INATIVA', 'thumb.png'),
	(33, '', 'UR-223', 'SPRINTER', '', 'ATIVA', 'ur223.png'),
	(15, '8309', 'URS-15', 'RENAULT / MASTER', '2009', 'ATIVA', 'urs15.png'),
	(25, '08181', 'USA-09', 'RENAULT/MASTER', '2007', 'INATIVA', 'thumb.png'),
	(NULL, '05845', 'teste', 'testse etset', '2012', 's', 'thumb.png');
/*!40000 ALTER TABLE `vtr` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
