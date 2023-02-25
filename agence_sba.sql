-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2023 at 03:24 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agence_sba`
--

-- --------------------------------------------------------

--
-- Table structure for table `localtion`
--

CREATE TABLE `localtion` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `informations` text NOT NULL,
  `emplacement` varchar(255) NOT NULL,
  `nombre_chembre` int(11) NOT NULL,
  `description` text NOT NULL,
  `prix` int(11) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `localtion`
--

INSERT INTO `localtion` (`id`, `name`, `informations`, `emplacement`, `nombre_chembre`, `description`, `prix`, `images`) VALUES
(1, 'Résidence Les Platanes de NBN ', 'Agencement : Simplex,\r\nSpécificités Intérieures : Gaz de ville / Chauffage /Double vitrage / Cuisine équipée,\r\nSpécificités Extérieures : Caméra de surveillance/Agent de sécurité/Interphone/ Balcon / Terrasse / Ascenseur', 'Boulevards des Platanes, Bir El Djir, Algérie', 3, 'La résidence Les Platanes est constituée d&#039;un seul bloc R+15 avec des appartements de type F4 120 m2 et des F3 de 104 m2. Elle se situe dans un quartier résidentiel sur le grand boulevard les Platanes à Bir El Djir, Oran en face d&#039;une école primaire et d&#039;un collège.\nCommodités :\n- Accés par digicode\n- Agent de sécurité\n- Chauffage centrale\n- Cuisine équipée\n- 2 ascenseurs de marque Schindler\n\nLa résidence est en cours de finition et la livraison est prévue en septembre 2019.', 1000000, '1_product_63eaab9e4753d.jpeg,1_product_63eaabc961452.jpeg,1_product_63eaabcd6df4b.jpeg,1_product_63eaabd21c7bb.jpeg,1_product_63eaabd4a03d9.jpeg,1_product_63eabcdd34db6.jpeg'),
(2, 'Résidence Les Platanes de NBN ', 'Agencement : Simplex,\r\nSpécificités Intérieures : Gaz de ville / Chauffage /Double vitrage / Cuisine équipée,\r\nSpécificités Extérieures : Caméra de surveillance/Agent de sécurité/Interphone/ Balcon / Terrasse / Ascenseur', 'Boulevards des Platanes, Bir El Djir, Algérie', 3, 'La résidence Les Platanes est constituée d&#039;un seul bloc R+15 avec des appartements de type F4 120 m2 et des F3 de 104 m2. Elle se situe dans un quartier résidentiel sur le grand boulevard les Platanes à Bir El Djir, Oran en face d&#039;une école primaire et d&#039;un collège.\r\nCommodités :\r\n- Accés par digicode\r\n- Agent de sécurité\r\n- Chauffage centrale\r\n- Cuisine équipée\r\n- 2 ascenseurs de marque Schindler\r\n\r\nLa résidence est en cours de finition et la livraison est prévue en septembre 2019.', 1000000, '1_product_63eaab9e4753d.jpeg,1_product_63eaabc961452.jpeg,1_product_63eaabcd6df4b.jpeg,1_product_63eaabd21c7bb.jpeg,1_product_63eaabd4a03d9.jpeg,1_product_63eabcdd34db6.jpeg'),
(3, 'Résidence MELINA', 'Adresse : près de la mosquée Ben Achour jijel,\r\nSpécificités Intérieures : Gaz de ville / Climatisation Chauffage / Double vitrage Buanderie / Cuisine équipée,\r\nSpécificités Extérieures : Ascenseur Balcon / Terrasse Interphone Caméra de surveillance Résidence cloturée', 'près de la mosquée Ben Achour jijel', 4, 'Êtes-vous à la recherche d’un appartement à prix abordable à Jijel centre ?\r\nNotre projet résidentiel sis à Ben Achour prés de la mosquée est fait pour\r\nvous.\r\nUne résidence de haut standing équipée par un ascenseur et dotée d’une\r\nterrasse accessible commune, répond à vos attentes variées et vous propose des\r\nappartements de type F2 ; F3 et F4 ; deux par palier avec des superficies\r\nallant de 91m2 à 126m2.\r\nPour plus d’informations contactez nous sur la messagerie privée ou visitez\r\nnotre siège près de la mosquée Ben Achour.', 1000000, '3_product_63eaa6bbd5117.jpeg,3_product_63eaa6c0c5b34.jpeg,3_product_63eaa6c62e695.jpeg,3_product_63eaa6cd7684a.jpeg,3_product_63eaa6d069dc7.jpeg'),
(4, 'Résidence Les Platanes de NBN ', 'Agencement : Simplex,\r\nSpécificités Intérieures : Gaz de ville / Chauffage /Double vitrage / Cuisine équipée,\r\nSpécificités Extérieures : Caméra de surveillance/Agent de sécurité/Interphone/ Balcon / Terrasse / Ascenseur', 'Boulevards des Platanes, Bir El Djir, Algérie', 3, 'La résidence Les Platanes est constituée d&#039;un seul bloc R+15 avec des appartements de type F4 120 m2 et des F3 de 104 m2. Elle se situe dans un quartier résidentiel sur le grand boulevard les Platanes à Bir El Djir, Oran en face d&#039;une école primaire et d&#039;un collège.\r\nCommodités :\r\n- Accés par digicode\r\n- Agent de sécurité\r\n- Chauffage centrale\r\n- Cuisine équipée\r\n- 2 ascenseurs de marque Schindler\r\n\r\nLa résidence est en cours de finition et la livraison est prévue en septembre 2019.', 1000000, '1_product_63eaab9e4753d.jpeg,1_product_63eaabc961452.jpeg,1_product_63eaabcd6df4b.jpeg,1_product_63eaabd21c7bb.jpeg,1_product_63eaabd4a03d9.jpeg,1_product_63eabcdd34db6.jpeg'),
(5, 'Résidence Les Platanes de NBN ', 'Agencement : Simplex,\r\nSpécificités Intérieures : Gaz de ville / Chauffage /Double vitrage / Cuisine équipée,\r\nSpécificités Extérieures : Caméra de surveillance/Agent de sécurité/Interphone/ Balcon / Terrasse / Ascenseur', 'Boulevards des Platanes, Bir El Djir, Algérie', 3, 'La résidence Les Platanes est constituée d&#039;un seul bloc R+15 avec des appartements de type F4 120 m2 et des F3 de 104 m2. Elle se situe dans un quartier résidentiel sur le grand boulevard les Platanes à Bir El Djir, Oran en face d&#039;une école primaire et d&#039;un collège.\r\nCommodités :\r\n- Accés par digicode\r\n- Agent de sécurité\r\n- Chauffage centrale\r\n- Cuisine équipée\r\n- 2 ascenseurs de marque Schindler\r\n\r\nLa résidence est en cours de finition et la livraison est prévue en septembre 2019.', 1000000, '1_product_63eaab9e4753d.jpeg,1_product_63eaabc961452.jpeg,1_product_63eaabcd6df4b.jpeg,1_product_63eaabd21c7bb.jpeg,1_product_63eaabd4a03d9.jpeg,1_product_63eabcdd34db6.jpeg'),
(6, 'Résidence MELINA', 'Adresse : près de la mosquée Ben Achour jijel,\r\nSpécificités Intérieures : Gaz de ville / Climatisation Chauffage / Double vitrage Buanderie / Cuisine équipée,\r\nSpécificités Extérieures : Ascenseur Balcon / Terrasse Interphone Caméra de surveillance Résidence cloturée', 'près de la mosquée Ben Achour jijel', 4, 'Êtes-vous à la recherche d’un appartement à prix abordable à Jijel centre ?\r\nNotre projet résidentiel sis à Ben Achour prés de la mosquée est fait pour\r\nvous.\r\nUne résidence de haut standing équipée par un ascenseur et dotée d’une\r\nterrasse accessible commune, répond à vos attentes variées et vous propose des\r\nappartements de type F2 ; F3 et F4 ; deux par palier avec des superficies\r\nallant de 91m2 à 126m2.\r\nPour plus d’informations contactez nous sur la messagerie privée ou visitez\r\nnotre siège près de la mosquée Ben Achour.', 1000000, '3_product_63eaa6bbd5117.jpeg,3_product_63eaa6c0c5b34.jpeg,3_product_63eaa6c62e695.jpeg,3_product_63eaa6cd7684a.jpeg,3_product_63eaa6d069dc7.jpeg'),
(7, 'Résidence Les Platanes de NBN ', 'Agencement : Simplex,\r\nSpécificités Intérieures : Gaz de ville / Chauffage /Double vitrage / Cuisine équipée,\r\nSpécificités Extérieures : Caméra de surveillance/Agent de sécurité/Interphone/ Balcon / Terrasse / Ascenseur', 'Boulevards des Platanes, Bir El Djir, Algérie', 3, 'La résidence Les Platanes est constituée d&#039;un seul bloc R+15 avec des appartements de type F4 120 m2 et des F3 de 104 m2. Elle se situe dans un quartier résidentiel sur le grand boulevard les Platanes à Bir El Djir, Oran en face d&#039;une école primaire et d&#039;un collège.\r\nCommodités :\r\n- Accés par digicode\r\n- Agent de sécurité\r\n- Chauffage centrale\r\n- Cuisine équipée\r\n- 2 ascenseurs de marque Schindler\r\n\r\nLa résidence est en cours de finition et la livraison est prévue en septembre 2019.', 1000000, '1_product_63eaab9e4753d.jpeg,1_product_63eaabc961452.jpeg,1_product_63eaabcd6df4b.jpeg,1_product_63eaabd21c7bb.jpeg,1_product_63eaabd4a03d9.jpeg,1_product_63eabcdd34db6.jpeg'),
(8, 'Résidence Les Platanes de NBN ', 'Agencement : Simplex,\r\nSpécificités Intérieures : Gaz de ville / Chauffage /Double vitrage / Cuisine équipée,\r\nSpécificités Extérieures : Caméra de surveillance/Agent de sécurité/Interphone/ Balcon / Terrasse / Ascenseur', 'Boulevards des Platanes, Bir El Djir, Algérie', 3, 'La résidence Les Platanes est constituée d&#039;un seul bloc R+15 avec des appartements de type F4 120 m2 et des F3 de 104 m2. Elle se situe dans un quartier résidentiel sur le grand boulevard les Platanes à Bir El Djir, Oran en face d&#039;une école primaire et d&#039;un collège.\r\nCommodités :\r\n- Accés par digicode\r\n- Agent de sécurité\r\n- Chauffage centrale\r\n- Cuisine équipée\r\n- 2 ascenseurs de marque Schindler\r\n\r\nLa résidence est en cours de finition et la livraison est prévue en septembre 2019.', 1000000, '1_product_63eaab9e4753d.jpeg,1_product_63eaabc961452.jpeg,1_product_63eaabcd6df4b.jpeg,1_product_63eaabd21c7bb.jpeg,1_product_63eaabd4a03d9.jpeg,1_product_63eabcdd34db6.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(0, 'chaima', 'test@test.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `localtion`
--
ALTER TABLE `localtion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `localtion`
--
ALTER TABLE `localtion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
