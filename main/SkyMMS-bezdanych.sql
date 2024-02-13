-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 31, 2022 at 08:51 AM
-- Server version: 8.0.29-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SkyMMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `Device`
--

CREATE TABLE `Device` (
  `ID_Device` int NOT NULL,
  `Device_Name` text NOT NULL,
  `Device_Description` text NOT NULL,
  `Device_Type` int NOT NULL,
  `Ports_Qty` text NOT NULL,
  `Location` int NOT NULL,
  `Serial_Number` text,
  `IP_Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Device_Ports`
--

CREATE TABLE `Device_Ports` (
  `ID_Port` int NOT NULL,
  `Port_Number` int NOT NULL,
  `Device_Name` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Device_Type`
--

CREATE TABLE `Device_Type` (
  `ID_Type` int NOT NULL,
  `Type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Log`
--

CREATE TABLE `Log` (
  `ID_Logu` int NOT NULL,
  `Uzytkownik` text NOT NULL,
  `Tabela` text NOT NULL,
  `Data_modyfikacji` text NOT NULL,
  `Opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Lokalizacja`
--

CREATE TABLE `Lokalizacja` (
  `ID_LOK` int NOT NULL,
  `Nazwa_Lokalizacji` text NOT NULL,
  `Opis_lokalizacji` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `PathPanel`
--

CREATE TABLE `PathPanel` (
  `ID_PP` int NOT NULL,
  `Nazwa_PP` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'Ska',
  `Lokalizacji_PP` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Polaczenia`
--

CREATE TABLE `Polaczenia` (
  `ID_Polaczenie` int NOT NULL,
  `ID_Porty` int NOT NULL,
  `ID_Room` int NOT NULL,
  `ID_Device_Ports` int NOT NULL,
  `ID_Socket` int NOT NULL,
  `ID_Pathpanel` int NOT NULL,
  `Data_Polaczenia` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Porty`
--

CREATE TABLE `Porty` (
  `ID_PortPP` int NOT NULL,
  `Numer_Portu` int NOT NULL,
  `PathPanel` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Room`
--

CREATE TABLE `Room` (
  `ID_Room` int NOT NULL,
  `Room_Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Socket`
--

CREATE TABLE `Socket` (
  `ID_Socket` int NOT NULL,
  `Nr_Socket` int NOT NULL,
  `Loc_Socket` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Telefony`
--

CREATE TABLE `Telefony` (
  `ID_Telefonu` int NOT NULL,
  `Patchpanel_1` int NOT NULL,
  `Port_1` int NOT NULL,
  `Patchpanel_2` int DEFAULT NULL,
  `Port_2` int DEFAULT NULL,
  `Nr_telefonu` text NOT NULL,
  `Nr_Gniazda` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Uzytkownik`
--

CREATE TABLE `Uzytkownik` (
  `ID_Login` int NOT NULL,
  `Uprawnienia` text NOT NULL,
  `Imie` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Nazwisko` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Login` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Haslo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Device`
--
ALTER TABLE `Device`
  ADD PRIMARY KEY (`ID_Device`),
  ADD KEY `Device_Type` (`Device_Type`),
  ADD KEY `Location` (`Location`);

--
-- Indexes for table `Device_Ports`
--
ALTER TABLE `Device_Ports`
  ADD PRIMARY KEY (`ID_Port`),
  ADD KEY `Device_Name` (`Device_Name`);

--
-- Indexes for table `Device_Type`
--
ALTER TABLE `Device_Type`
  ADD PRIMARY KEY (`ID_Type`);

--
-- Indexes for table `Log`
--
ALTER TABLE `Log`
  ADD PRIMARY KEY (`ID_Logu`);

--
-- Indexes for table `Lokalizacja`
--
ALTER TABLE `Lokalizacja`
  ADD PRIMARY KEY (`ID_LOK`);

--
-- Indexes for table `PathPanel`
--
ALTER TABLE `PathPanel`
  ADD PRIMARY KEY (`ID_PP`),
  ADD KEY `Lokalizacji_PP` (`Lokalizacji_PP`);

--
-- Indexes for table `Polaczenia`
--
ALTER TABLE `Polaczenia`
  ADD PRIMARY KEY (`ID_Polaczenie`),
  ADD KEY `ID_Porty` (`ID_Porty`),
  ADD KEY `ID_Room` (`ID_Room`),
  ADD KEY `ID_Device_Path` (`ID_Device_Ports`),
  ADD KEY `ID_Socket` (`ID_Socket`),
  ADD KEY `ID_Patchpanel` (`ID_Pathpanel`);

--
-- Indexes for table `Porty`
--
ALTER TABLE `Porty`
  ADD PRIMARY KEY (`ID_PortPP`),
  ADD KEY `PathPanel` (`PathPanel`);

--
-- Indexes for table `Room`
--
ALTER TABLE `Room`
  ADD PRIMARY KEY (`ID_Room`);

--
-- Indexes for table `Socket`
--
ALTER TABLE `Socket`
  ADD PRIMARY KEY (`ID_Socket`),
  ADD KEY `Loc_Socket` (`Loc_Socket`);

--
-- Indexes for table `Telefony`
--
ALTER TABLE `Telefony`
  ADD PRIMARY KEY (`ID_Telefonu`),
  ADD KEY `Patchpanel_1` (`Patchpanel_1`),
  ADD KEY `Port_1` (`Port_1`),
  ADD KEY `Patchpanel_2` (`Patchpanel_2`),
  ADD KEY `Port_2` (`Port_2`),
  ADD KEY `Nr_Gniazda` (`Nr_Gniazda`);

--
-- Indexes for table `Uzytkownik`
--
ALTER TABLE `Uzytkownik`
  ADD PRIMARY KEY (`ID_Login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Device`
--
ALTER TABLE `Device`
  MODIFY `ID_Device` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Device_Ports`
--
ALTER TABLE `Device_Ports`
  MODIFY `ID_Port` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Device_Type`
--
ALTER TABLE `Device_Type`
  MODIFY `ID_Type` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Log`
--
ALTER TABLE `Log`
  MODIFY `ID_Logu` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Lokalizacja`
--
ALTER TABLE `Lokalizacja`
  MODIFY `ID_LOK` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `PathPanel`
--
ALTER TABLE `PathPanel`
  MODIFY `ID_PP` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Polaczenia`
--
ALTER TABLE `Polaczenia`
  MODIFY `ID_Polaczenie` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Porty`
--
ALTER TABLE `Porty`
  MODIFY `ID_PortPP` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Room`
--
ALTER TABLE `Room`
  MODIFY `ID_Room` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Socket`
--
ALTER TABLE `Socket`
  MODIFY `ID_Socket` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Telefony`
--
ALTER TABLE `Telefony`
  MODIFY `ID_Telefonu` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Uzytkownik`
--
ALTER TABLE `Uzytkownik`
  MODIFY `ID_Login` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Device`
--
ALTER TABLE `Device`
  ADD CONSTRAINT `connect_devtype_devID` FOREIGN KEY (`Device_Type`) REFERENCES `Device_Type` (`ID_Type`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `connect_Location_ID_LOK` FOREIGN KEY (`Location`) REFERENCES `Lokalizacja` (`ID_LOK`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Device_Ports`
--
ALTER TABLE `Device_Ports`
  ADD CONSTRAINT `connect_DeviceName_ID_Device` FOREIGN KEY (`Device_Name`) REFERENCES `Device` (`ID_Device`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `PathPanel`
--
ALTER TABLE `PathPanel`
  ADD CONSTRAINT `PathPanel_ibfk_1` FOREIGN KEY (`Lokalizacji_PP`) REFERENCES `Lokalizacja` (`ID_LOK`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Polaczenia`
--
ALTER TABLE `Polaczenia`
  ADD CONSTRAINT `Polaczenia_ibfk_1` FOREIGN KEY (`ID_Porty`) REFERENCES `Porty` (`ID_PortPP`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Polaczenia_ibfk_2` FOREIGN KEY (`ID_Room`) REFERENCES `Room` (`ID_Room`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Polaczenia_ibfk_3` FOREIGN KEY (`ID_Device_Ports`) REFERENCES `Device_Ports` (`ID_Port`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Polaczenia_ibfk_4` FOREIGN KEY (`ID_Socket`) REFERENCES `Socket` (`ID_Socket`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Polaczenia_ibfk_5` FOREIGN KEY (`ID_Pathpanel`) REFERENCES `PathPanel` (`ID_PP`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Porty`
--
ALTER TABLE `Porty`
  ADD CONSTRAINT `RELPP_PORT` FOREIGN KEY (`PathPanel`) REFERENCES `PathPanel` (`ID_PP`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Socket`
--
ALTER TABLE `Socket`
  ADD CONSTRAINT `connect_Locsock_roomID` FOREIGN KEY (`Loc_Socket`) REFERENCES `Room` (`ID_Room`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Telefony`
--
ALTER TABLE `Telefony`
  ADD CONSTRAINT `Telefony_ibfk_1` FOREIGN KEY (`Patchpanel_1`) REFERENCES `PathPanel` (`ID_PP`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Telefony_ibfk_2` FOREIGN KEY (`Patchpanel_2`) REFERENCES `PathPanel` (`ID_PP`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Telefony_ibfk_3` FOREIGN KEY (`Port_1`) REFERENCES `Porty` (`ID_PortPP`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Telefony_ibfk_4` FOREIGN KEY (`Port_2`) REFERENCES `Porty` (`ID_PortPP`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Telefony_ibfk_5` FOREIGN KEY (`Nr_Gniazda`) REFERENCES `Socket` (`ID_Socket`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
