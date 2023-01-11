-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2023 at 06:03 PM
-- Server version: 10.5.18-MariaDB-0+deb11u1
-- PHP Version: 7.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rflzfr_nursemed_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Adresse`
--

CREATE TABLE `Adresse` (
  `idadresse` int(11) NOT NULL,
  `rue` varchar(45) NOT NULL,
  `ville` varchar(45) NOT NULL,
  `codepostal` varchar(45) NOT NULL,
  `typehabitation` varchar(45) NOT NULL,
  `user_iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Arbre`
--

CREATE TABLE `Arbre` (
  `idArbre` int(11) NOT NULL,
  `Timestamp` datetime DEFAULT NULL,
  `KitDiagnostique_idKitDiagnostique` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Capteur`
--

CREATE TABLE `Capteur` (
  `idCapteur` int(11) NOT NULL,
  `Unite` varchar(45) DEFAULT NULL,
  `KitDiagnostique_idKitDiagnostique` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Diagnostique`
--

CREATE TABLE `Diagnostique` (
  `idDiagnostique` int(11) NOT NULL,
  `user_iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `FAQ`
--

CREATE TABLE `FAQ` (
  `idFAQ` int(11) NOT NULL,
  `question` varchar(45) NOT NULL,
  `reponse` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `KitDiagnostique`
--

CREATE TABLE `KitDiagnostique` (
  `idKitDiagnostique` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `KitDiagnostique`
--

INSERT INTO `KitDiagnostique` (`idKitDiagnostique`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25);

-- --------------------------------------------------------

--
-- Table structure for table `Mesure`
--

CREATE TABLE `Mesure` (
  `idMesure` int(11) NOT NULL,
  `Valeur` varchar(45) DEFAULT NULL,
  `Timestamp` datetime DEFAULT NULL,
  `Capteur_idCapteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Questionnaire`
--

CREATE TABLE `Questionnaire` (
  `idQuestionnaire` int(11) NOT NULL,
  `Question` varchar(45) DEFAULT NULL,
  `Reponse` varchar(45) DEFAULT NULL,
  `Diagnostique_idDiagnostique` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_reponse`
--

CREATE TABLE `question_reponse` (
  `idquestion` int(11) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `reponse` varchar(255) DEFAULT NULL,
  `Questionnaire_idQuestionnaire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `creation_time` datetime NOT NULL DEFAULT current_timestamp(),
  `username` varchar(45) NOT NULL,
  `familyname` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` int(11) NOT NULL,
  `sexe` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(45) NOT NULL,
  `code_timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `code` int(8) NOT NULL,
  `is_verified` int(1) DEFAULT 0,
  `KitDiagnostiqueidKitDiagnostique` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `creation_time`, `username`, `familyname`, `name`, `email`, `phone`, `sexe`, `password`, `role`, `code_timestamp`, `code`, `is_verified`, `KitDiagnostiqueidKitDiagnostique`) VALUES
(1, '2022-12-29 22:20:33', 'Sh0lf', 'Yoplait', 'VinSang', 'test@test.com', 778266459, 'Homme', '$2y$10$y1wI1PX./qxXLBKXgT3oeuYAQDLjYI4KGE8eD8b5ImSIe7kEOWhki', 'client', '2022-12-29 22:19:02', 0, 0, 1),
(14, '2022-12-29 22:20:33', 'Sh0lfyyyy', 'Yappy', 'VinSang', 'vyvincentyap@gmail.com', 778266459, 'Homme', '$2y$10$BTYWiUjT5lRJIgz7rIvNuey.fMsmSiwc9HyBuaIqK158OwoOcW/gS', 'admin', '2023-01-06 10:55:52', 55792749, 1, 10),
(18, '2023-01-06 13:59:49', 'idirouille', 'Couille', 'Idi', 'idircoutant@gmail.com', 1564851564, 'Femme', '$2y$10$467yLruSKMv.b27NajCgJuWgQJTKeS8Vf1ia0k6cwitGeFA0DyuEe', 'client', '2023-01-06 13:59:49', 651141296, 1, 3),
(20, '2023-01-10 15:37:17', 'junior123', 'YAMEUNDEU', 'JUNIOR ERIC', 'juniortitcheu@gmail.com', 652051901, 'Homme', '$2y$10$yh3C1vFbLxa8JqmBUCWjIuwiJccMKBaAatG8n9N0kkrM7d.O6cYde', 'admin', '2023-01-11 13:49:42', 1193111792, 1, 15),
(22, '2023-01-11 10:10:46', 'ClemLaReine', 'DEBEUGNY', 'Clémentine', 'clementine.debeugny@gmail.com', 782785616, 'Femme', '$2y$10$cAf1.s6uiIFZpvXfQF4bo.YHCG1yudOWmUKePr7mv7idqQya5yzTS', 'admin', '2023-01-11 10:10:46', 1031044169, 1, 1),
(23, '2023-01-11 10:11:59', 'marieeve', 'de la Broise', 'Marie-Evangéline', 'marieevangeline.dlb@gmail.com', 695449403, 'Femme', '$2y$10$IcS8finkfXUsY8xRFvxnJe2CKaewT4NwgEWeXGXLNNCil/QPjWFJu', 'admin', '2023-01-11 10:11:59', 1900620721, 1, 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Adresse`
--
ALTER TABLE `Adresse`
  ADD PRIMARY KEY (`idadresse`),
  ADD KEY `fk_adresse_user_idx` (`user_iduser`);

--
-- Indexes for table `Arbre`
--
ALTER TABLE `Arbre`
  ADD PRIMARY KEY (`idArbre`,`KitDiagnostique_idKitDiagnostique`),
  ADD KEY `fk_Arbre_KitDiagnostique1_idx` (`KitDiagnostique_idKitDiagnostique`);

--
-- Indexes for table `Capteur`
--
ALTER TABLE `Capteur`
  ADD PRIMARY KEY (`idCapteur`),
  ADD KEY `fk_Capteur_KitDiagnostique1_idx` (`KitDiagnostique_idKitDiagnostique`);

--
-- Indexes for table `Diagnostique`
--
ALTER TABLE `Diagnostique`
  ADD PRIMARY KEY (`idDiagnostique`),
  ADD KEY `fk_Diagnostique_user1_idx` (`user_iduser`);

--
-- Indexes for table `FAQ`
--
ALTER TABLE `FAQ`
  ADD PRIMARY KEY (`idFAQ`);

--
-- Indexes for table `KitDiagnostique`
--
ALTER TABLE `KitDiagnostique`
  ADD PRIMARY KEY (`idKitDiagnostique`);

--
-- Indexes for table `Mesure`
--
ALTER TABLE `Mesure`
  ADD PRIMARY KEY (`idMesure`),
  ADD KEY `fk_Mesure_Capteur1_idx` (`Capteur_idCapteur`);

--
-- Indexes for table `Questionnaire`
--
ALTER TABLE `Questionnaire`
  ADD PRIMARY KEY (`idQuestionnaire`),
  ADD KEY `fk_Questionnaire_Diagnostique1_idx` (`Diagnostique_idDiagnostique`);

--
-- Indexes for table `question_reponse`
--
ALTER TABLE `question_reponse`
  ADD PRIMARY KEY (`idquestion`),
  ADD KEY `fk_question_reponse_Questionnaire1_idx` (`Questionnaire_idQuestionnaire`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`,`KitDiagnostiqueidKitDiagnostique`),
  ADD KEY `fk_user_KitDiagnostique1_idx` (`KitDiagnostiqueidKitDiagnostique`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Adresse`
--
ALTER TABLE `Adresse`
  MODIFY `idadresse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Capteur`
--
ALTER TABLE `Capteur`
  MODIFY `idCapteur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Diagnostique`
--
ALTER TABLE `Diagnostique`
  MODIFY `idDiagnostique` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `FAQ`
--
ALTER TABLE `FAQ`
  MODIFY `idFAQ` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `KitDiagnostique`
--
ALTER TABLE `KitDiagnostique`
  MODIFY `idKitDiagnostique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `Mesure`
--
ALTER TABLE `Mesure`
  MODIFY `idMesure` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Questionnaire`
--
ALTER TABLE `Questionnaire`
  MODIFY `idQuestionnaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Adresse`
--
ALTER TABLE `Adresse`
  ADD CONSTRAINT `fk_adresse_user` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Arbre`
--
ALTER TABLE `Arbre`
  ADD CONSTRAINT `fk_Arbre_KitDiagnostique1` FOREIGN KEY (`KitDiagnostique_idKitDiagnostique`) REFERENCES `KitDiagnostique` (`idKitDiagnostique`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Capteur`
--
ALTER TABLE `Capteur`
  ADD CONSTRAINT `fk_Capteur_KitDiagnostique1` FOREIGN KEY (`KitDiagnostique_idKitDiagnostique`) REFERENCES `KitDiagnostique` (`idKitDiagnostique`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Diagnostique`
--
ALTER TABLE `Diagnostique`
  ADD CONSTRAINT `fk_Diagnostique_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Mesure`
--
ALTER TABLE `Mesure`
  ADD CONSTRAINT `fk_Mesure_Capteur1` FOREIGN KEY (`Capteur_idCapteur`) REFERENCES `Capteur` (`idCapteur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Questionnaire`
--
ALTER TABLE `Questionnaire`
  ADD CONSTRAINT `fk_Questionnaire_Diagnostique1` FOREIGN KEY (`Diagnostique_idDiagnostique`) REFERENCES `Diagnostique` (`idDiagnostique`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `question_reponse`
--
ALTER TABLE `question_reponse`
  ADD CONSTRAINT `fk_question_reponse_Questionnaire1` FOREIGN KEY (`Questionnaire_idQuestionnaire`) REFERENCES `Questionnaire` (`idQuestionnaire`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_KitDiagnostique1` FOREIGN KEY (`KitDiagnostiqueidKitDiagnostique`) REFERENCES `KitDiagnostique` (`idKitDiagnostique`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
