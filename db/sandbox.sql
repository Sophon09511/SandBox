-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 06:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sandbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `ACHIEVEMENT_ASSESSMENT`
--

CREATE TABLE `ACHIEVEMENT_ASSESSMENT` (
  `AchievementAssessmentYear` int(4) NOT NULL,
  `SchoolID` text NOT NULL,
  `SchoolAssessmentName` text NOT NULL,
  `SchoolAssessmentDescription` text NOT NULL,
  `AssessmentorName` text NOT NULL,
  `AchievementAssessmentPassingFlag` tinyint(1) NOT NULL,
  `AchievementAssessmentAttachmentURL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ASSESSMENT_CRITERIA`
--

CREATE TABLE `ASSESSMENT_CRITERIA` (
  `CriteriaID` int(16) NOT NULL,
  `CriteriaName` text NOT NULL,
  `CriteriaDescription` text NOT NULL,
  `CriteriaLevelAmount` int(2) NOT NULL,
  `CriteriaCompositionAmount` int(2) NOT NULL,
  `CriteriaPassingScorePercentage` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ASSESSMENT_CRITERIA_COMPOSITION`
--

CREATE TABLE `ASSESSMENT_CRITERIA_COMPOSITION` (
  `CriteriaID` varchar(16) NOT NULL,
  `CompositionIndex` int(2) NOT NULL,
  `CompositionName` text NOT NULL,
  `CompositionWeightScore` int(3) NOT NULL,
  `CompositionGuideline` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ASSESSMENT_CRITERIA_COMPOSITION_LEVEL`
--

CREATE TABLE `ASSESSMENT_CRITERIA_COMPOSITION_LEVEL` (
  `CriteriaID` text NOT NULL,
  `CompositionIndex` int(2) NOT NULL,
  `LevelIndex` int(2) NOT NULL,
  `CompositionLevelDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ASSESSMENT_CRITERIA_LEVEL`
--

CREATE TABLE `ASSESSMENT_CRITERIA_LEVEL` (
  `CriteriaID` int(16) NOT NULL,
  `LevelIndex` int(2) NOT NULL,
  `LevelName` text NOT NULL,
  `LevelScore` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `BEST_PRACTICE`
--

CREATE TABLE `BEST_PRACTICE` (
  `BestPracticeID` int(16) NOT NULL,
  `EducationYear` int(4) NOT NULL,
  `Semester` int(1) NOT NULL,
  `BestPracticeName` text NOT NULL,
  `BestPracticeTypeCode` text NOT NULL,
  `TargetEducationLevelCode` text NOT NULL,
  `Benefit` text NOT NULL,
  `RecognizedCode` text NOT NULL,
  `Abstract` text NOT NULL,
  `SearchKeyword` text NOT NULL,
  `AttachmentURL` text NOT NULL,
  `PracticeProcess` text NOT NULL,
  `Source` text NOT NULL,
  `PublishDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `BEST_PRACTICE_CREATOR`
--

CREATE TABLE `BEST_PRACTICE_CREATOR` (
  `BestPracticeID` int(16) NOT NULL,
  `CreatorPersonalID` int(13) NOT NULL,
  `CreatorPersonalIDTypeCode` text NOT NULL,
  `CreatorPrefixCode` text NOT NULL,
  `CreatorNameThai` text NOT NULL,
  `CreatorNameEnglish` text NOT NULL,
  `CreatorMiddleNameThai` text NOT NULL,
  `CreatorMiddleNameEnglish` text NOT NULL,
  `CreatorLastNameThai` text NOT NULL,
  `CreatorLastNameEnglish` text NOT NULL,
  `ParticipantRatio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `COMMITTEE`
--

CREATE TABLE `COMMITTEE` (
  `CommitteeProvinceCode` int(2) NOT NULL,
  `CommitteeYear` int(4) NOT NULL,
  `CommitteeAppointmentNumber` int(6) NOT NULL,
  `CommitteeAppointmentTypeCode` text NOT NULL,
  `CommitteeAppointmentAttachmentURL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `COMMITTEE_MEMBER`
--

CREATE TABLE `COMMITTEE_MEMBER` (
  `CommitteeProvinceCode` int(2) NOT NULL,
  `CommitteeYear` int(4) NOT NULL,
  `CommitteeAppointmentNumber` int(6) NOT NULL,
  `CommitteeMemberPrefixCode` text NOT NULL,
  `CommitteeMemberNameThai` text NOT NULL,
  `CommitteeMemberNameEnglish` text NOT NULL,
  `CommitteeMemberMiddleNameThai` text NOT NULL,
  `CommitteeMemberMiddleNameEnglish` text NOT NULL,
  `CommitteeMemberLastNameThai` text NOT NULL,
  `CommitteeMemberLastNameEnglish` text NOT NULL,
  `CommitteeMemberPositionCode` int(2) NOT NULL,
  `CommitteeMemberOrganizationPosition` text NOT NULL,
  `CommitteeMemberTermStartDate` date NOT NULL,
  `CommitteeMemberTermEndDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `INNOVATION`
--

CREATE TABLE `INNOVATION` (
  `InnovationID` int(16) NOT NULL,
  `EducationYear` int(4) NOT NULL,
  `Semester` int(1) NOT NULL,
  `InnovationName` varchar(255) NOT NULL,
  `InnovationTypeCode` varchar(2) NOT NULL,
  `TargetEducationLevelCode` varchar(20) NOT NULL,
  `InnovationBenefit` text NOT NULL,
  `Abstract` text NOT NULL,
  `AttachmentURL` varchar(255) NOT NULL,
  `Source` varchar(255) NOT NULL,
  `PublishDate` date NOT NULL,
  `SearchKeyword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `INNOVATION_CREATOR`
--

CREATE TABLE `INNOVATION_CREATOR` (
  `InnovationID` int(16) NOT NULL,
  `CreatorPersonalID` int(13) NOT NULL,
  `CreatorPersonalIDTypeCode` text NOT NULL,
  `CreatorPrefixCode` text NOT NULL,
  `CreatorNameThai` text NOT NULL,
  `CreatorNameEnglish` text NOT NULL,
  `CreatorMiddleNameThai` text NOT NULL,
  `CreatorMiddleNameEnglish` text NOT NULL,
  `CreatorLastNameThai` text NOT NULL,
  `CreatorLastNameEnglish` text NOT NULL,
  `ParticipantRatio` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `LEARNING_TECHNOLOGY_MEDIA`
--

CREATE TABLE `LEARNING_TECHNOLOGY_MEDIA` (
  `MediaID` int(16) NOT NULL,
  `EducationYear` int(4) NOT NULL,
  `Semester` int(1) NOT NULL,
  `MediaName` text NOT NULL,
  `MediaTypeCode` text NOT NULL,
  `TargetEducationLevelCode` text NOT NULL,
  `MediaBenefit` text NOT NULL,
  `Abstract` text NOT NULL,
  `SearchKeyword` text NOT NULL,
  `AttachmentURL` text NOT NULL,
  `Source` text NOT NULL,
  `PublishDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `LEARNING_TECHNOLOGY_MEDIA_CREATOR`
--

CREATE TABLE `LEARNING_TECHNOLOGY_MEDIA_CREATOR` (
  `MediaID` int(16) NOT NULL,
  `CreatorPersonalID` int(13) NOT NULL,
  `CreatorPersonalIDTypeCode` text NOT NULL,
  `CreatorPrefixCode` text NOT NULL,
  `CreatorNameThai` text NOT NULL,
  `CreatorNameEnglish` text NOT NULL,
  `CreatorMiddleNameThai` text NOT NULL,
  `CreatorMiddleNameEnglish` text NOT NULL,
  `CreatorLastNameThai` text NOT NULL,
  `CreatorLastNameEnglish` text NOT NULL,
  `ParticipantRatio` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `PARTICIPANT`
--

CREATE TABLE `PARTICIPANT` (
  `ParticipantID` int(16) NOT NULL,
  `ParticipantName` text NOT NULL,
  `ParticipantTypeCode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `PARTICIPANT_CONTACT`
--

CREATE TABLE `PARTICIPANT_CONTACT` (
  `ContactName` text NOT NULL,
  `ContactPhone` text NOT NULL,
  `ContactMobilePhone` text NOT NULL,
  `ContactEmail` text NOT NULL,
  `ContactOrganizationPosition` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `PARTICIPANT_COOPERATION`
--

CREATE TABLE `PARTICIPANT_COOPERATION` (
  `CooperationStartDate` date NOT NULL,
  `CooperationEndDate` date NOT NULL,
  `CooperationStatusCode` text NOT NULL,
  `CooperationActivity` text NOT NULL,
  `CooperationLevelCode` text NOT NULL,
  `CooperationSchoolID` text NOT NULL,
  `CooperationAttachmentURL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `PARTICIPANT_NOTE`
--

CREATE TABLE `PARTICIPANT_NOTE` (
  `Note` text NOT NULL,
  `NoteReporterName` text NOT NULL,
  `NoteReporterPhone` text NOT NULL,
  `NoteReporterMobilePhone` text NOT NULL,
  `NoteReporterEmail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `SCHOOL_ASSESSMENT`
--

CREATE TABLE `SCHOOL_ASSESSMENT` (
  `SchoolAssessmentEducationYear` int(4) NOT NULL,
  `SchoolAssessmentSemester` int(1) NOT NULL,
  `SchoolID` text NOT NULL,
  `SchoolAssessmentName` text NOT NULL,
  `SchoolAssessmentDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `SCHOOL_ASSESSMENT_CRITERIA`
--

CREATE TABLE `SCHOOL_ASSESSMENT_CRITERIA` (
  `SchoolAssessmentEducationYear` int(4) NOT NULL,
  `SchoolAssessmentSemester` int(1) NOT NULL,
  `SchoolID` text NOT NULL,
  `CriteriaID` text NOT NULL,
  `AssessmentorName` text NOT NULL,
  `SchoolAssessmentScore` double(5,2) NOT NULL,
  `SchoolAssessmentCode` text NOT NULL,
  `SchoolAssessmentAttachmentURL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `SCHOOL_ASSESSMENT_RESULT`
--

CREATE TABLE `SCHOOL_ASSESSMENT_RESULT` (
  `SchoolAssessmentEducationYear` int(4) NOT NULL,
  `SchoolAssessmentSemester` int(1) NOT NULL,
  `SchoolID` text NOT NULL,
  `CriteriaID` text NOT NULL,
  `CompositionIndex` int(2) NOT NULL,
  `LevelIndex` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ACHIEVEMENT_ASSESSMENT`
--
ALTER TABLE `ACHIEVEMENT_ASSESSMENT`
  ADD UNIQUE KEY `AchievementAssessmentYear` (`AchievementAssessmentYear`),
  ADD UNIQUE KEY `SchoolID` (`SchoolID`) USING HASH;

--
-- Indexes for table `ASSESSMENT_CRITERIA`
--
ALTER TABLE `ASSESSMENT_CRITERIA`
  ADD PRIMARY KEY (`CriteriaID`);

--
-- Indexes for table `ASSESSMENT_CRITERIA_COMPOSITION`
--
ALTER TABLE `ASSESSMENT_CRITERIA_COMPOSITION`
  ADD PRIMARY KEY (`CompositionIndex`),
  ADD UNIQUE KEY `CriteriaID` (`CriteriaID`);

--
-- Indexes for table `ASSESSMENT_CRITERIA_COMPOSITION_LEVEL`
--
ALTER TABLE `ASSESSMENT_CRITERIA_COMPOSITION_LEVEL`
  ADD UNIQUE KEY `CompositionIndex` (`CompositionIndex`),
  ADD UNIQUE KEY `LevelIndex` (`LevelIndex`),
  ADD UNIQUE KEY `CriteriaID` (`CriteriaID`) USING HASH;

--
-- Indexes for table `ASSESSMENT_CRITERIA_LEVEL`
--
ALTER TABLE `ASSESSMENT_CRITERIA_LEVEL`
  ADD UNIQUE KEY `CriteriaID` (`CriteriaID`);

--
-- Indexes for table `BEST_PRACTICE`
--
ALTER TABLE `BEST_PRACTICE`
  ADD PRIMARY KEY (`BestPracticeID`);

--
-- Indexes for table `BEST_PRACTICE_CREATOR`
--
ALTER TABLE `BEST_PRACTICE_CREATOR`
  ADD PRIMARY KEY (`BestPracticeID`,`CreatorPersonalID`);

--
-- Indexes for table `COMMITTEE`
--
ALTER TABLE `COMMITTEE`
  ADD PRIMARY KEY (`CommitteeProvinceCode`,`CommitteeYear`,`CommitteeAppointmentNumber`);

--
-- Indexes for table `COMMITTEE_MEMBER`
--
ALTER TABLE `COMMITTEE_MEMBER`
  ADD PRIMARY KEY (`CommitteeProvinceCode`,`CommitteeYear`,`CommitteeAppointmentNumber`,`CommitteeMemberPositionCode`),
  ADD UNIQUE KEY `CommitteeMemberNameThai` (`CommitteeMemberNameThai`) USING HASH,
  ADD UNIQUE KEY `CommitteeMemberLastNameThai` (`CommitteeMemberLastNameThai`) USING HASH;

--
-- Indexes for table `INNOVATION`
--
ALTER TABLE `INNOVATION`
  ADD PRIMARY KEY (`InnovationID`) USING BTREE;

--
-- Indexes for table `INNOVATION_CREATOR`
--
ALTER TABLE `INNOVATION_CREATOR`
  ADD PRIMARY KEY (`InnovationID`,`CreatorPersonalID`);

--
-- Indexes for table `LEARNING_TECHNOLOGY_MEDIA`
--
ALTER TABLE `LEARNING_TECHNOLOGY_MEDIA`
  ADD PRIMARY KEY (`MediaID`);

--
-- Indexes for table `LEARNING_TECHNOLOGY_MEDIA_CREATOR`
--
ALTER TABLE `LEARNING_TECHNOLOGY_MEDIA_CREATOR`
  ADD PRIMARY KEY (`MediaID`,`CreatorPersonalID`);

--
-- Indexes for table `PARTICIPANT`
--
ALTER TABLE `PARTICIPANT`
  ADD PRIMARY KEY (`ParticipantID`);

--
-- Indexes for table `SCHOOL_ASSESSMENT`
--
ALTER TABLE `SCHOOL_ASSESSMENT`
  ADD PRIMARY KEY (`SchoolAssessmentEducationYear`,`SchoolAssessmentSemester`),
  ADD UNIQUE KEY `SchoolID` (`SchoolID`) USING HASH;

--
-- Indexes for table `SCHOOL_ASSESSMENT_CRITERIA`
--
ALTER TABLE `SCHOOL_ASSESSMENT_CRITERIA`
  ADD PRIMARY KEY (`SchoolAssessmentEducationYear`),
  ADD UNIQUE KEY `SchoolAssessmentSemester` (`SchoolAssessmentSemester`),
  ADD UNIQUE KEY `SchoolID` (`SchoolID`) USING HASH,
  ADD UNIQUE KEY `CriteriaID` (`CriteriaID`) USING HASH;

--
-- Indexes for table `SCHOOL_ASSESSMENT_RESULT`
--
ALTER TABLE `SCHOOL_ASSESSMENT_RESULT`
  ADD UNIQUE KEY `SchoolAssessmentSemester` (`SchoolAssessmentSemester`),
  ADD UNIQUE KEY `SchoolAssessmentEducationYear` (`SchoolAssessmentEducationYear`),
  ADD UNIQUE KEY `CompositionIndex` (`CompositionIndex`),
  ADD UNIQUE KEY `SchoolID` (`SchoolID`) USING HASH,
  ADD UNIQUE KEY `CriteriaID` (`CriteriaID`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
