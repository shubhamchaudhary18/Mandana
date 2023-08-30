SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` varchar(11) NOT NULL,
  `adminpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bookapp`
--

CREATE TABLE `bookapp` (
  `AppoID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `patientID` int(11) NOT NULL,
  `docID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `X` int(11) NOT NULL,
  `descID` int(11) NOT NULL,
  `descName` varchar(30) NOT NULL,
  `treatment` varchar(50) NOT NULL,
  `Note` varchar(200) NOT NULL,
  `doctorIDdesc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `DoctorID` int(11) NOT NULL,
  `Doctorname` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNumber` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `categorey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `pID` int(11) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNumber` varchar(40) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Bloodtype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `AdminID` (`AdminID`);

--
-- Indexes for table `bookapp`
--
ALTER TABLE `bookapp`
  ADD PRIMARY KEY (`AppoID`),
  ADD UNIQUE KEY `Time` (`Time`),
  ADD KEY `patientoapp` (`patientID`),
  ADD KEY `doctopatient` (`docID`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`X`),
  ADD KEY `descpatientID` (`descID`),
  ADD KEY `descDoctorID` (`doctorIDdesc`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`DoctorID`);

--


--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD UNIQUE KEY `feedback_2` (`feedback`),
  ADD KEY `feedback` (`pID`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookapp`
--
ALTER TABLE `bookapp`
  MODIFY `AppoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `X` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `DoctorID` int(11) NOT NULL AUTO_INCREMENT;

--


--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookapp`
--
ALTER TABLE `bookapp`
  ADD CONSTRAINT `doctopatient` FOREIGN KEY (`docID`) REFERENCES `doctor` (`DoctorID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patientoapp` FOREIGN KEY (`patientID`) REFERENCES `patients` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `description`
--
ALTER TABLE `description`
  ADD CONSTRAINT `descDoctorID` FOREIGN KEY (`doctorIDdesc`) REFERENCES `doctor` (`DoctorID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `descpatientID` FOREIGN KEY (`descID`) REFERENCES `patients` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback` FOREIGN KEY (`pID`) REFERENCES `patients` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

