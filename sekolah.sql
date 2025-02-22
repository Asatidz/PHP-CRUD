-- Dumping database structure for sekolah
DROP DATABASE IF EXISTS `sekolah`;
CREATE DATABASE IF NOT EXISTS `sekolah` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sekolah`;

-- Dumping structure for table sekolah.siswa
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `kelas` int NOT NULL,
  `jurusan` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sekolah.siswa: ~9 rows (approximately)
DELETE FROM `siswa`;
INSERT INTO `siswa` (`id`, `nama`, `kelas`, `jurusan`) VALUES
	(11, 'Jamalu', 10, 'AKL'),
	(12, 'Fatihu', 12, 'PPLg'),
	(13, 'Fatmwa', 11, 'PPLg'),
	(15, 'Najma', 11, 'PPLg'),
	(17, 'Fatma', 11, 'PPLG'),
	(18, 'nata', 11, 'PPLG'),
	(19, 'Jamalu', 10, 'PPLG'),
	(20, 'Fatihu', 10, 'AKL'),
	(21, 'Atid', 10, 'AKL');
