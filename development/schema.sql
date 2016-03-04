-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2016 at 08:21 PM
-- Server version: 5.6.28-1
-- PHP Version: 5.6.18-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `potestas`
--

-- --------------------------------------------------------

--
-- Table structure for table `baseItems`
--

CREATE TABLE `baseItems` (
  `ID` int(11) NOT NULL,
  `characterFK` int(11) NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `baseSpells`
--

CREATE TABLE `baseSpells` (
  `ID` int(11) NOT NULL,
  `characterFK` int(11) NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `baseWeapons`
--

CREATE TABLE `baseWeapons` (
  `ID` int(11) NOT NULL,
  `characterFK` int(11) NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `buffs`
--

CREATE TABLE `buffs` (
  `ID` int(11) NOT NULL,
  `gameFK` int(11) NOT NULL,
  `characterFK` int(11) NOT NULL,
  `propertyFK` int(11) NOT NULL,
  `value` int(11) NOT NULL COMMENT 'relative'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `ID` int(11) NOT NULL,
  `userFK` int(11) NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `created` int(11) NOT NULL COMMENT 'time'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `enemies`
--

CREATE TABLE `enemies` (
  `ID` int(11) NOT NULL,
  `gameFK` int(11) NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `life` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `enemyDamage`
--

CREATE TABLE `enemyDamage` (
  `ID` int(11) NOT NULL,
  `enemyFK` int(11) NOT NULL,
  `value` int(11) NOT NULL COMMENT 'relative'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `enemyProperties`
--

CREATE TABLE `enemyProperties` (
  `ID` int(11) NOT NULL,
  `enemyFK` int(11) NOT NULL,
  `propertyTypeFK` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `gameCharacters`
--

CREATE TABLE `gameCharacters` (
  `ID` int(11) NOT NULL,
  `gameFK` int(11) NOT NULL,
  `characterFK` int(11) NOT NULL,
  `dead` tinyint(4) NOT NULL,
  `joined` int(11) NOT NULL COMMENT 'time'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `gameItems`
--

CREATE TABLE `gameItems` (
  `ID` int(11) NOT NULL,
  `gameFK` int(11) NOT NULL,
  `characterFK` int(11) NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `ID` int(11) NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `created` int(11) NOT NULL COMMENT 'time',
  `creatorFK` int(11) NOT NULL,
  `gamemasterFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `gameSpells`
--

CREATE TABLE `gameSpells` (
  `ID` int(11) NOT NULL,
  `gameFK` int(11) NOT NULL,
  `characterFK` int(11) NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `gameWeapons`
--

CREATE TABLE `gameWeapons` (
  `ID` int(11) NOT NULL,
  `gameFK` int(11) NOT NULL,
  `characterFK` int(11) NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `ID` int(11) NOT NULL,
  `gameFK` int(11) NOT NULL,
  `time` int(11) NOT NULL COMMENT 'time',
  `entry` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `ID` int(11) NOT NULL,
  `gameFK` int(11) NOT NULL,
  `time` int(11) NOT NULL COMMENT 'time',
  `entry` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `ID` int(11) NOT NULL,
  `characterFK` int(11) NOT NULL,
  `propertyTypeFK` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `propertyTypes`
--

CREATE TABLE `propertyTypes` (
  `ID` int(11) NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `ID` int(11) NOT NULL,
  `gameFK` int(11) NOT NULL,
  `characterFK` int(11) NOT NULL,
  `propertyFK` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `termporaryChanges`
--

CREATE TABLE `termporaryChanges` (
  `ID` int(11) NOT NULL,
  `gameFK` int(11) NOT NULL,
  `characterFK` int(11) NOT NULL,
  `propertyFK` int(11) NOT NULL,
  `value` int(11) NOT NULL COMMENT 'relative'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `googleID` text COLLATE utf8_bin NOT NULL,
  `firstUse` int(11) NOT NULL COMMENT 'time'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baseItems`
--
ALTER TABLE `baseItems`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `characterFK` (`characterFK`);

--
-- Indexes for table `baseSpells`
--
ALTER TABLE `baseSpells`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `characterFK` (`characterFK`);

--
-- Indexes for table `baseWeapons`
--
ALTER TABLE `baseWeapons`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `characterFK` (`characterFK`);

--
-- Indexes for table `buffs`
--
ALTER TABLE `buffs`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `gameFK` (`gameFK`),
  ADD KEY `characterFK` (`characterFK`),
  ADD KEY `propertyFK` (`propertyFK`);

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `userFK` (`userFK`);

--
-- Indexes for table `enemies`
--
ALTER TABLE `enemies`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `gameFK` (`gameFK`);

--
-- Indexes for table `enemyDamage`
--
ALTER TABLE `enemyDamage`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `enemyFK` (`enemyFK`);

--
-- Indexes for table `enemyProperties`
--
ALTER TABLE `enemyProperties`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `enemyFK` (`enemyFK`),
  ADD KEY `propertyTypeFK` (`propertyTypeFK`);

--
-- Indexes for table `gameCharacters`
--
ALTER TABLE `gameCharacters`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `gameFK` (`gameFK`),
  ADD KEY `characterFK` (`characterFK`);

--
-- Indexes for table `gameItems`
--
ALTER TABLE `gameItems`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `gameFK` (`gameFK`),
  ADD KEY `characterFK` (`characterFK`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `creatorFK` (`creatorFK`),
  ADD KEY `gamemasterFK` (`gamemasterFK`);

--
-- Indexes for table `gameSpells`
--
ALTER TABLE `gameSpells`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `gameFK` (`gameFK`),
  ADD KEY `characterFK` (`characterFK`);

--
-- Indexes for table `gameWeapons`
--
ALTER TABLE `gameWeapons`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `gameFK` (`gameFK`),
  ADD KEY `characterFK` (`characterFK`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `gameFK` (`gameFK`);

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `gameFK` (`gameFK`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `characterFK` (`characterFK`),
  ADD KEY `propertyTypeFK` (`propertyTypeFK`);

--
-- Indexes for table `propertyTypes`
--
ALTER TABLE `propertyTypes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `gameFK` (`gameFK`),
  ADD KEY `characterFK` (`characterFK`),
  ADD KEY `propertyFK` (`propertyFK`);

--
-- Indexes for table `termporaryChanges`
--
ALTER TABLE `termporaryChanges`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `gameFK` (`gameFK`),
  ADD KEY `characterFK` (`characterFK`),
  ADD KEY `propertyFK` (`propertyFK`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baseItems`
--
ALTER TABLE `baseItems`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `baseSpells`
--
ALTER TABLE `baseSpells`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `baseWeapons`
--
ALTER TABLE `baseWeapons`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `buffs`
--
ALTER TABLE `buffs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `enemies`
--
ALTER TABLE `enemies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `enemyDamage`
--
ALTER TABLE `enemyDamage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `enemyProperties`
--
ALTER TABLE `enemyProperties`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gameCharacters`
--
ALTER TABLE `gameCharacters`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gameItems`
--
ALTER TABLE `gameItems`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gameSpells`
--
ALTER TABLE `gameSpells`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gameWeapons`
--
ALTER TABLE `gameWeapons`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `propertyTypes`
--
ALTER TABLE `propertyTypes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `termporaryChanges`
--
ALTER TABLE `termporaryChanges`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `baseItems`
--
ALTER TABLE `baseItems`
  ADD CONSTRAINT `baseItems_ibfk_1` FOREIGN KEY (`characterFK`) REFERENCES `characters` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `baseSpells`
--
ALTER TABLE `baseSpells`
  ADD CONSTRAINT `baseSpells_ibfk_1` FOREIGN KEY (`characterFK`) REFERENCES `characters` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `baseWeapons`
--
ALTER TABLE `baseWeapons`
  ADD CONSTRAINT `baseWeapons_ibfk_1` FOREIGN KEY (`characterFK`) REFERENCES `characters` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `buffs`
--
ALTER TABLE `buffs`
  ADD CONSTRAINT `buffs_ibfk_1` FOREIGN KEY (`gameFK`) REFERENCES `games` (`ID`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `buffs_ibfk_2` FOREIGN KEY (`characterFK`) REFERENCES `characters` (`ID`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `buffs_ibfk_3` FOREIGN KEY (`propertyFK`) REFERENCES `properties` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `characters`
--
ALTER TABLE `characters`
  ADD CONSTRAINT `characters_ibfk_1` FOREIGN KEY (`userFK`) REFERENCES `users` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `enemies`
--
ALTER TABLE `enemies`
  ADD CONSTRAINT `enemies_ibfk_1` FOREIGN KEY (`gameFK`) REFERENCES `games` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `enemyDamage`
--
ALTER TABLE `enemyDamage`
  ADD CONSTRAINT `enemyDamage_ibfk_1` FOREIGN KEY (`enemyFK`) REFERENCES `enemies` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `enemyProperties`
--
ALTER TABLE `enemyProperties`
  ADD CONSTRAINT `enemyProperties_ibfk_1` FOREIGN KEY (`enemyFK`) REFERENCES `enemies` (`ID`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `enemyProperties_ibfk_2` FOREIGN KEY (`propertyTypeFK`) REFERENCES `propertyTypes` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `gameCharacters`
--
ALTER TABLE `gameCharacters`
  ADD CONSTRAINT `gameCharacters_ibfk_1` FOREIGN KEY (`gameFK`) REFERENCES `games` (`ID`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `gameCharacters_ibfk_2` FOREIGN KEY (`characterFK`) REFERENCES `characters` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `gameItems`
--
ALTER TABLE `gameItems`
  ADD CONSTRAINT `gameItems_ibfk_1` FOREIGN KEY (`gameFK`) REFERENCES `games` (`ID`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `gameItems_ibfk_2` FOREIGN KEY (`characterFK`) REFERENCES `characters` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`creatorFK`) REFERENCES `users` (`ID`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `games_ibfk_2` FOREIGN KEY (`gamemasterFK`) REFERENCES `users` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `gameSpells`
--
ALTER TABLE `gameSpells`
  ADD CONSTRAINT `gameSpells_ibfk_1` FOREIGN KEY (`gameFK`) REFERENCES `games` (`ID`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `gameSpells_ibfk_2` FOREIGN KEY (`characterFK`) REFERENCES `characters` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `gameWeapons`
--
ALTER TABLE `gameWeapons`
  ADD CONSTRAINT `gameWeapons_ibfk_1` FOREIGN KEY (`gameFK`) REFERENCES `games` (`ID`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `gameWeapons_ibfk_2` FOREIGN KEY (`characterFK`) REFERENCES `characters` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_ibfk_1` FOREIGN KEY (`gameFK`) REFERENCES `games` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `logbook`
--
ALTER TABLE `logbook`
  ADD CONSTRAINT `logbook_ibfk_1` FOREIGN KEY (`gameFK`) REFERENCES `games` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_ibfk_1` FOREIGN KEY (`characterFK`) REFERENCES `characters` (`ID`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `properties_ibfk_2` FOREIGN KEY (`propertyTypeFK`) REFERENCES `propertyTypes` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`gameFK`) REFERENCES `games` (`ID`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `skills_ibfk_2` FOREIGN KEY (`characterFK`) REFERENCES `characters` (`ID`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `skills_ibfk_3` FOREIGN KEY (`propertyFK`) REFERENCES `properties` (`ID`) ON UPDATE NO ACTION;

--
-- Constraints for table `termporaryChanges`
--
ALTER TABLE `termporaryChanges`
  ADD CONSTRAINT `termporaryChanges_ibfk_1` FOREIGN KEY (`gameFK`) REFERENCES `games` (`ID`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `termporaryChanges_ibfk_2` FOREIGN KEY (`characterFK`) REFERENCES `characters` (`ID`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `termporaryChanges_ibfk_3` FOREIGN KEY (`propertyFK`) REFERENCES `properties` (`ID`) ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
