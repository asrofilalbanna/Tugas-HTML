-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.5.27 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.5119
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for cendana
CREATE DATABASE IF NOT EXISTS `cendana` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cendana`;

-- Dumping structure for table cendana.tb_jk
CREATE TABLE IF NOT EXISTS `tb_jk` (
  `id_jk` int(1) NOT NULL AUTO_INCREMENT,
  `kelamin` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_jk`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table cendana.tb_jk: ~2 rows (approximately)
DELETE FROM `tb_jk`;
/*!40000 ALTER TABLE `tb_jk` DISABLE KEYS */;
INSERT INTO `tb_jk` (`id_jk`, `kelamin`) VALUES
	(1, 'Laki-laki'),
	(2, 'Perempuan');
/*!40000 ALTER TABLE `tb_jk` ENABLE KEYS */;

-- Dumping structure for table cendana.tb_kota
CREATE TABLE IF NOT EXISTS `tb_kota` (
  `id_kota` int(2) NOT NULL AUTO_INCREMENT,
  `nama_kota` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kota`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table cendana.tb_kota: ~5 rows (approximately)
DELETE FROM `tb_kota`;
/*!40000 ALTER TABLE `tb_kota` DISABLE KEYS */;
INSERT INTO `tb_kota` (`id_kota`, `nama_kota`) VALUES
	(1, 'Malang'),
	(2, 'Surabaya'),
	(3, 'Tulungagung'),
	(4, 'Jakarta'),
	(5, 'Bali');
/*!40000 ALTER TABLE `tb_kota` ENABLE KEYS */;

-- Dumping structure for table cendana.tb_login
CREATE TABLE IF NOT EXISTS `tb_login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_pegawai` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table cendana.tb_login: ~2 rows (approximately)
DELETE FROM `tb_login`;
/*!40000 ALTER TABLE `tb_login` DISABLE KEYS */;
INSERT INTO `tb_login` (`username`, `password`, `id_pegawai`) VALUES
	('admin', '21232f297a57a5a743894a0e4a801fc3', 0),
	('hafiizh', '9ecd5368d38d4e5e55bd916f43288dda', 12);
/*!40000 ALTER TABLE `tb_login` ENABLE KEYS */;

-- Dumping structure for table cendana.tb_pegawai
CREATE TABLE IF NOT EXISTS `tb_pegawai` (
  `id_pegawai` varchar(255) NOT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `tlp_pegawai` varchar(255) DEFAULT NULL,
  `kota_pegawai` int(5) DEFAULT NULL,
  `jk_pegawai` int(1) DEFAULT NULL,
  `id_posisi` varchar(255) DEFAULT NULL,
  `ket` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table cendana.tb_pegawai: ~2 rows (approximately)
DELETE FROM `tb_pegawai`;
/*!40000 ALTER TABLE `tb_pegawai` DISABLE KEYS */;
INSERT INTO `tb_pegawai` (`id_pegawai`, `nama_pegawai`, `username`, `tlp_pegawai`, `kota_pegawai`, `jk_pegawai`, `id_posisi`, `ket`) VALUES
	('12', '1231', 'hafiizh', '123123', 1, 2, '2', 1),
	('c2c2d864ba5cde69526af33d37ca0f49', '0000', NULL, '0000', 3, 1, '2', 1);
/*!40000 ALTER TABLE `tb_pegawai` ENABLE KEYS */;

-- Dumping structure for table cendana.tb_posisi
CREATE TABLE IF NOT EXISTS `tb_posisi` (
  `id_posisi` int(2) NOT NULL AUTO_INCREMENT,
  `nama_posisi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_posisi`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table cendana.tb_posisi: ~4 rows (approximately)
DELETE FROM `tb_posisi`;
/*!40000 ALTER TABLE `tb_posisi` DISABLE KEYS */;
INSERT INTO `tb_posisi` (`id_posisi`, `nama_posisi`) VALUES
	(1, 'IT'),
	(2, 'HRD'),
	(3, 'Keuangan'),
	(4, 'Produk');
/*!40000 ALTER TABLE `tb_posisi` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
