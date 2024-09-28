-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2024 at 05:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sacco`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Pattern` varchar(10) DEFAULT 'Admin',
  `No` int(11) NOT NULL,
  `FirstName` text DEFAULT NULL,
  `SecondName` text DEFAULT NULL,
  `ID` text DEFAULT NULL,
  `KRA` text DEFAULT NULL,
  `DateOfRegistration` text DEFAULT NULL,
  `MobileNo` text DEFAULT NULL,
  `Username` text DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `RegistrationFee` int(11) DEFAULT NULL,
  `MemberType` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Pattern`, `No`, `FirstName`, `SecondName`, `ID`, `KRA`, `DateOfRegistration`, `MobileNo`, `Username`, `Password`, `RegistrationFee`, `MemberType`) VALUES
('Admin', 1, 'ADMIN', 'ADMIN', '0000', '00000', '2021-10-18', '878787878', 'Admin', 'Admin9090', NULL, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `expensecategories`
--

CREATE TABLE `expensecategories` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `expensecategories`
--

INSERT INTO `expensecategories` (`Id`, `Name`) VALUES
(10, 'air time'),
(11, 'meetings'),
(9, 'travelling'),
(8, 'website');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `Id` int(11) NOT NULL,
  `Name` text DEFAULT NULL,
  `Amount` decimal(11,2) DEFAULT NULL,
  `Date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `feedback` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `incomes`
--

CREATE TABLE `incomes` (
  `Id` int(11) NOT NULL,
  `Income` decimal(11,2) DEFAULT NULL,
  `ReceiptDate` text DEFAULT NULL,
  `Transaction_Id` int(11) NOT NULL,
  `IncomeType` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaninformation`
--

CREATE TABLE `loaninformation` (
  `Id` int(11) NOT NULL,
  `LoanTypes` text DEFAULT NULL,
  `Interest` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `loaninformation`
--

INSERT INTO `loaninformation` (`Id`, `LoanTypes`, `Interest`) VALUES
(1, 'School', 10),
(2, 'Business', 10),
(3, 'Development', 10);

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `Id` int(11) NOT NULL,
  `No` text DEFAULT NULL,
  `LoanAmount` decimal(11,2) DEFAULT NULL,
  `InterestRate` int(11) DEFAULT NULL,
  `Principal` decimal(11,2) DEFAULT NULL,
  `LoanType` text DEFAULT NULL,
  `IssuanceDate` text DEFAULT NULL,
  `Duration` int(11) DEFAULT NULL,
  `MonthlyInterest` decimal(11,2) DEFAULT NULL,
  `TotalInterest` decimal(11,2) DEFAULT NULL,
  `LoanToBePaid` decimal(11,2) NOT NULL,
  `LoanId` int(11) DEFAULT NULL,
  `Status` varchar(200) DEFAULT 'Not Fully Paid',
  `Transaction_Id` int(11) NOT NULL,
  `Loan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_receipts`
--

CREATE TABLE `loan_receipts` (
  `Id` int(11) NOT NULL,
  `No` text DEFAULT NULL,
  `LoanType` text DEFAULT NULL,
  `ReceiptDate` text DEFAULT NULL,
  `Total` decimal(11,2) NOT NULL,
  `LoanRepaymentAmount` decimal(11,2) DEFAULT NULL,
  `MonthlyInterest` decimal(11,2) NOT NULL,
  `Interest` decimal(11,2) DEFAULT NULL,
  `AccruedInterest` decimal(11,2) NOT NULL,
  `AccruedInterestPayment` decimal(11,2) NOT NULL,
  `PaymentMethod` text DEFAULT NULL,
  `LoanPenalty` decimal(11,2) DEFAULT NULL,
  `LoanBalance` decimal(11,2) NOT NULL,
  `LoanId` int(11) DEFAULT NULL,
  `Transaction_Id` int(11) NOT NULL,
  `NextLoanServiceDate` text NOT NULL,
  `PreviousLoanServiceDate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `saccoinformation`
--

CREATE TABLE `saccoinformation` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `saccoinformation`
--

INSERT INTO `saccoinformation` (`Id`, `Name`) VALUES
(1, 'Josajo Investments LTD');

-- --------------------------------------------------------

--
-- Table structure for table `savings_shares_receipts`
--

CREATE TABLE `savings_shares_receipts` (
  `Id` int(11) NOT NULL,
  `No` text DEFAULT NULL,
  `Deposits` decimal(11,2) DEFAULT NULL,
  `Shares` decimal(11,2) DEFAULT NULL,
  `ReceiptDate` text DEFAULT NULL,
  `PaymentMethod` text DEFAULT NULL,
  `Transaction_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Pattern` varchar(20) DEFAULT 'JOSAJO',
  `No` int(11) NOT NULL,
  `FirstName` text DEFAULT NULL,
  `SecondName` text DEFAULT NULL,
  `ID` text DEFAULT NULL,
  `KRA` text DEFAULT NULL,
  `DateOfRegistration` text DEFAULT NULL,
  `MobileNo` text DEFAULT NULL,
  `Username` text DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `MemberType` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE `users2` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `Loggins` varchar(10) NOT NULL DEFAULT '0',
  `gender` text NOT NULL,
  `phoneno` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`id`, `name`, `password`, `Loggins`, `gender`, `phoneno`) VALUES
(1, 'charles', 'admin2021', '9', 'Male', '0722114781'),
(2, 'caro', 'caro123', '1', 'Female', ''),
(3, 'peter', 'peter123', '0', 'Male', ''),
(4, 'juliana', 'juliana123', '0', 'Female', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `expensecategories`
--
ALTER TABLE `expensecategories`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incomes`
--
ALTER TABLE `incomes`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `loaninformation`
--
ALTER TABLE `loaninformation`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `loan_receipts`
--
ALTER TABLE `loan_receipts`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saccoinformation`
--
ALTER TABLE `saccoinformation`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `savings_shares_receipts`
--
ALTER TABLE `savings_shares_receipts`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expensecategories`
--
ALTER TABLE `expensecategories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `incomes`
--
ALTER TABLE `incomes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaninformation`
--
ALTER TABLE `loaninformation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_receipts`
--
ALTER TABLE `loan_receipts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saccoinformation`
--
ALTER TABLE `saccoinformation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `savings_shares_receipts`
--
ALTER TABLE `savings_shares_receipts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users2`
--
ALTER TABLE `users2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
