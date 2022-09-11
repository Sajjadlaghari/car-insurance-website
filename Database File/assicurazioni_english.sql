-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 10:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assicurazioni_english`
--

-- --------------------------------------------------------

--
-- Table structure for table `accident`
--

CREATE TABLE `accident` (
  `incident_id` varchar(15) NOT NULL,
  `license_plate` varchar(7) NOT NULL,
  `policy_id` int(15) NOT NULL,
  `date_incident` datetime NOT NULL,
  `number_incident_verbal` varchar(15) NOT NULL,
  `reimbursement_Insurance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accident`
--

INSERT INTO `accident` (`incident_id`, `license_plate`, `policy_id`, `date_incident`, `number_incident_verbal`, `reimbursement_Insurance`) VALUES
('2', '12', 1, '2022-09-11 17:31:21', 'hjgjhg', 0),
('3', '123', 1, '2022-12-31 00:00:00', 'Acccient', 5);

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `license_plate` varchar(7) NOT NULL,
  `chassie_number` varchar(17) NOT NULL,
  `date_time` datetime NOT NULL,
  `IMF_number` varchar(10) DEFAULT NULL,
  `customer_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`license_plate`, `chassie_number`, `date_time`, `IMF_number`, `customer_id`) VALUES
('12', '3345', '2022-09-11 17:27:39', 'XYZ', 1),
('123', '54637', '2022-12-31 00:00:00', '46', 4);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_name` varchar(50) NOT NULL,
  `customer_address` varchar(200) NOT NULL,
  `customer_phone` int(20) NOT NULL,
  `customer_CF` varchar(16) NOT NULL,
  `customer_birth_place` varchar(50) NOT NULL,
  `customer_date_of_birth` date NOT NULL,
  `customer_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_name`, `customer_address`, `customer_phone`, `customer_CF`, `customer_birth_place`, `customer_date_of_birth`, `customer_id`) VALUES
('Ahmed', 'University Road Karachi', 300392958, 'XYZ', 'Karchi', '1992-09-13', 1),
('Sajjad Ali', 'sajjad@gmail.com', 30858785, 'CF', 'Naushahro', '0000-00-00', 3),
('Ali', 'Karachi NED', 384749, 'CF', 'Hyderabad', '2022-12-31', 4);

-- --------------------------------------------------------

--
-- Table structure for table `customer_has_incident`
--

CREATE TABLE `customer_has_incident` (
  `customer_idCustomer` int(15) NOT NULL,
  `accident_idIncident` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_has_incident`
--

INSERT INTO `customer_has_incident` (`customer_idCustomer`, `accident_idIncident`) VALUES
(1, '2');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_agency`
--

CREATE TABLE `insurance_agency` (
  `agency_Id` int(15) NOT NULL,
  `indirizzoAgenzia` varchar(200) NOT NULL,
  `agency_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insurance_agency`
--

INSERT INTO `insurance_agency` (`agency_Id`, `indirizzoAgenzia`, `agency_name`) VALUES
(1, 'xyz', 'xyz'),
(2, 'IndirizzoAgenzia', 'XYZ');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_agency_has_customer`
--

CREATE TABLE `insurance_agency_has_customer` (
  `insurance_agency_agency_id` int(15) NOT NULL,
  `customer_idCustomer` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insurance_agency_has_customer`
--

INSERT INTO `insurance_agency_has_customer` (`insurance_agency_agency_id`, `customer_idCustomer`) VALUES
(1, 1),
(1, 1),
(1, 1),
(1, 1),
(1, 1),
(1, 1),
(1, 1),
(1, 3),
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `policy_id` int(15) NOT NULL,
  `policy_cost` float NOT NULL,
  `license_plate` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`policy_id`, `policy_cost`, `license_plate`) VALUES
(1, 100, '12'),
(2, 0, '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accident`
--
ALTER TABLE `accident`
  ADD PRIMARY KEY (`incident_id`),
  ADD KEY `fk_accident_policy_id` (`policy_id`),
  ADD KEY `fk_accident_license_plate` (`license_plate`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`license_plate`),
  ADD KEY `fk_macchina_customer_id` (`customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_has_incident`
--
ALTER TABLE `customer_has_incident`
  ADD PRIMARY KEY (`customer_idCustomer`,`accident_idIncident`),
  ADD KEY `fk_customer_has_incident_accident1` (`accident_idIncident`);

--
-- Indexes for table `insurance_agency`
--
ALTER TABLE `insurance_agency`
  ADD PRIMARY KEY (`agency_Id`);

--
-- Indexes for table `insurance_agency_has_customer`
--
ALTER TABLE `insurance_agency_has_customer`
  ADD KEY `fk_insurance_agency_has_customer_customer` (`customer_idCustomer`),
  ADD KEY `insurance_agency_agency_id` (`insurance_agency_agency_id`,`customer_idCustomer`) USING BTREE;

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`policy_id`),
  ADD KEY `fk_policy_license_plate` (`license_plate`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accident`
--
ALTER TABLE `accident`
  ADD CONSTRAINT `fk_accident_license_plate` FOREIGN KEY (`license_plate`) REFERENCES `car` (`license_plate`),
  ADD CONSTRAINT `fk_accident_policy_id` FOREIGN KEY (`policy_id`) REFERENCES `policy` (`policy_id`);

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `fk_macchina_customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `customer_has_incident`
--
ALTER TABLE `customer_has_incident`
  ADD CONSTRAINT `fk_customer_has_incident_accident1` FOREIGN KEY (`accident_idIncident`) REFERENCES `accident` (`incident_id`),
  ADD CONSTRAINT `fk_customer_has_incident_customer1` FOREIGN KEY (`customer_idCustomer`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `insurance_agency_has_customer`
--
ALTER TABLE `insurance_agency_has_customer`
  ADD CONSTRAINT `fk_insurance_agency_has_customer_customer` FOREIGN KEY (`customer_idCustomer`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `fk_insurance_agency_has_customer_insurance_agency` FOREIGN KEY (`insurance_agency_agency_id`) REFERENCES `insurance_agency` (`agency_Id`);

--
-- Constraints for table `policy`
--
ALTER TABLE `policy`
  ADD CONSTRAINT `fk_policy_license_plate` FOREIGN KEY (`license_plate`) REFERENCES `car` (`license_plate`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
