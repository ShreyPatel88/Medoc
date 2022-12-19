SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `fromm` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `too` varchar(255) NOT NULL,
  `cTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `appointment` (`id`, `name`, `fromm`, `phone`, `message`, `too`, `cTime`) VALUES
(1, 'Ken Jason', '4066', '0725667841', 'Requesting for appointment', '7854uiplk87dadkl87', '1554916571'),
(2, 'Doctor Jake', '7854uiplk87dadkl87', '0725895256', 'Okay, no problem I will be available', '4066', '1554917369');


CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dateOfBirth` varchar(255) NOT NULL,
  `cTime` varchar(255) NOT NULL,
  `diagnosis` text NOT NULL,
  `prescription` text NOT NULL,
  `token` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `number` varchar(255) DEFAULT NULL,
  `pcondition` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `patients` (`id`, `name`, `location`, `age`, `gender`, `phone`, `dateOfBirth`, `cTime`, `diagnosis`, `prescription`, `token`, `doctor`, `number`, `pcondition`) VALUES
(1, 'Jason Bane', 'California', '30', 'Male', '0725667841', '04 - 04 - 1979', '1554756586', 'Cold\r<br />Vomiting\r<br />Nausea', 'C/h4 x3\r<br />Cs4/w\r<br />CQ-WS', 'c760e767719b5196ce99cb0ed4b29c63', '7854uiplk87dadkl87', '4066', NULL),
(2, 'Bruce Bayne', 'California', '26', 'Male', '0725667841', '04 - 04 - 1979', '1554756586', 'Cold\r<br />Vomiting\r<br />Nausea', 'C/h4 x3\r<br />Cs4/w\r<br />CQ-WS', 'c760e767719b5196ce99cb0ed4b29c63', '7854uiplk87dadkl87', '4066', NULL),
(3, 'Seline Kay', 'California', '33', 'Female', '0713345678', '01 - 01 - 1979', '1554817535', 'Cold\r<br />Coughing\r<br />Nausea', 'i9\r<br />op09jk\r<br />kjdkfa', '6dc616e76193284f5078080b97067e30', '7854uiplk87dadkl87', '1234', NULL),


CREATE TABLE `payments` (
  `id` bigint(20) NOT NULL,
  `patient_name` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `payments` (`id`, `patient_name`, `amount`, `date`, `token`) VALUES
(1, 'Jason Bane', '200', '2022-11-29', 'f71672eb344b5183dc0a502415dd1e0d'),
(2, 'Bruce Bayne', '2500', '2022-11-29', '5121d7d346a6ade8821f48cdd6a2d62d');


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `secondName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `users` (`id`, `firstName`, `secondName`, `email`, `password`, `token`, `status`, `phone`, `profile`, `gender`, `role`) VALUES
(1, 'Jason', 'Bane', 'test@gmail.com', '12345', '1236548lpoik58965', 1, '0712345678', NULL, 'Male', NULL),
(2, 'Bruce', 'Wayne', 'batman@gmail.com', '12345', '7854uiplk87dadkl87', 2, '0712345672', NULL, 'Male', 'Surgeon'),


ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `payments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

