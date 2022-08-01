

--
-- Table structure for table `tovar`
--

DROP TABLE IF EXISTS `tovar`;
CREATE TABLE IF NOT EXISTS `tovar` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nazov` varchar(20) DEFAULT NULL,
  `vyrobca` varchar(20) NOT NULL,
  `popis` varchar(100) DEFAULT NULL,
  `farba` varchar(20) DEFAULT NULL,
  `cena` int(7) DEFAULT NULL,
  `kod` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

--
-- Dumping data for table `tovar`
--

INSERT INTO `tovar` (`nazov`, `vyrobca`, `popis`, `farba`, `cena`, `kod`) VALUES
('TV', 'Samsung', 'Samsung smartTV 65"', 'cierna', 629, 'sam_smart_tv65'),
('TV', 'Samsung', 'Samsung smartTV 65"', 'cierna', 1299, 'sam_smart_tv65'),
('TV', 'LG', 'LG smartTV 55"', 'cierna', 1259, 'lg_smart_tv65'),
('TV', 'LG', 'LG smartTV 48"', 'cierna', 1499, 'lg_smart_tv48'),
('Notebook', 'Lenovo Think Pad', 'i5 10210U, 15.6, RAM 8GB,Intel UHD Graphics, SSD 256GB', 'cierna', 769, 'len_nb'),
('Notebook', 'Lenovo Legion', 'i7 10750H, 17.3, RAM 16GB, NVIDIA GeForce RTX 2060 6GB, SSD 1000GB', 'cierna', 1459, 'len_nb'),
('Notebook', 'Asus ROG', 'i7 10750H, 17.3, RAM 8GB, NVIDIA GeForce RTX 2070 Super 8GB, SSD 1000GB', 'cierna', 2259, 'asus_nb'),
('Notebook', 'Asus ROG', 'i7 10750H, 15.6, RAM 8GB, NVIDIA GeForce RTX 2070 Super 8GB, SSD 1000GB', 'cierna', 1459, 'asus_nb');
