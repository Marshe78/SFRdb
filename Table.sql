CREATE DATABASE IF NOT EXISTS sfrdb;



DROP TABLE IF EXISTS `user`; 
CREATE TABLE `user`( 
 `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
 `civilite` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL, 
 `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL, 
 `prenom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
 `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
 `listeconnu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
 `commentaire` varchar(1800) COLLATE utf8mb4_unicode_ci NOT NULL,
 `copieCoche` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL )
 ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;