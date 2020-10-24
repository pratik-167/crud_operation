

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




CREATE TABLE `users` (
  `userId` int(100) NOT NULL,
  `employeename` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `mobilenumber` varchar(250) NOT NULL,
  `salary` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `users` (`userId`, `employeename`, `designation`, `mobilenumber`, `salary`) VALUES
(1, 'Vetrivel pandian', 'Admin', '8940379384', 20000),
(7, 'Vetri Selvan', 'Team Lead', '9751513231', 15000),
(17, 'Jeya Bashkaran', 'Manager', '9600418806', 17000),
(18, 'Jeya Krishnan', 'Founder', '9865649423', 30000);


ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);


ALTER TABLE `users`
  MODIFY `userId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

