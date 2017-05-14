-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2016 at 05:22 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commarce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_income`
--

CREATE TABLE `admin_income` (
  `userName` varchar(20) NOT NULL,
  `Income` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_income`
--

INSERT INTO `admin_income` (`userName`, `Income`) VALUES
('admin', 257600);

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `P_C_Code` varchar(10) NOT NULL,
  `P_C_Catagory` varchar(20) NOT NULL,
  `P_C_Brand` varchar(50) NOT NULL,
  `P_C_Price` int(10) NOT NULL,
  `P_C_Quantity` int(10) NOT NULL,
  `Product_C_Pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`P_C_Code`, `P_C_Catagory`, `P_C_Brand`, `P_C_Price`, `P_C_Quantity`, `Product_C_Pic`) VALUES
('444444', 'Laptop', 'Asus', 45000, 2, 'Product Pic/444444.jpg'),
('444445', 'Laptop', 'Apple', 900000, 15, 'Product Pic/444445.jpg'),
('444446', 'Laptop', 'Microsoft', 110000, 10, 'Product Pic/444446.jpg'),
('444447', 'PC', 'Asus', 150000, 9, 'Product Pic/444447.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `computer_accessory`
--

CREATE TABLE `computer_accessory` (
  `P_CA_Code` varchar(10) NOT NULL,
  `P_CA_Catagory` varchar(20) NOT NULL,
  `P_CA_Brand` varchar(50) NOT NULL,
  `P_CA_Price` int(10) NOT NULL,
  `P_CA_Quantity` int(10) NOT NULL,
  `Product_CA_Pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer_accessory`
--

INSERT INTO `computer_accessory` (`P_CA_Code`, `P_CA_Catagory`, `P_CA_Brand`, `P_CA_Price`, `P_CA_Quantity`, `Product_CA_Pic`) VALUES
('555555', 'Keyboard', 'A4tech', 2500, 9, 'Product Pic/555555.jpg'),
('555556', 'Gamepad', 'Logitech', 3000, 15, 'Product Pic/555556.jpg'),
('555557', 'Mouse', 'A4tech', 2000, 18, 'Product Pic/555557.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `P_E_Code` varchar(10) NOT NULL,
  `P_E_Catagory` varchar(20) NOT NULL,
  `P_E_Brand` varchar(50) NOT NULL,
  `P_E_Price` int(10) NOT NULL,
  `P_E_Quantity` int(10) NOT NULL,
  `Product_E_Pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`P_E_Code`, `P_E_Catagory`, `P_E_Brand`, `P_E_Price`, `P_E_Quantity`, `Product_E_Pic`) VALUES
('777777', 'Television', 'Sony', 50000, 9, 'Product Pic/777777.jpg'),
('777778', 'Oven', 'General Electric', 8000, 15, 'Product Pic/777778.jpg'),
('777779', 'Camera', 'Canon', 36000, 19, 'Product Pic/777779.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

CREATE TABLE `kids` (
  `P_K_Code` varchar(10) NOT NULL,
  `P_K_Catagory` varchar(20) NOT NULL,
  `P_K_Brand` varchar(50) NOT NULL,
  `P_K_Price` int(10) NOT NULL,
  `P_K_Quantity` int(10) NOT NULL,
  `Product_K_Pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`P_K_Code`, `P_K_Catagory`, `P_K_Brand`, `P_K_Price`, `P_K_Quantity`, `Product_K_Pic`) VALUES
('333333', 'Toy', 'MEGA Bloks', 2500, 4, 'Product Pic/333333.jpg'),
('333334', 'Others', 'Petit Collage', 2400, 5, 'Product Pic/333334.jpg'),
('333335', 'Toy', 'MEGA Bloks', 6000, 29, 'Product Pic/333335.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `User_ID` varchar(10) NOT NULL,
  `PassWord` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`User_ID`, `PassWord`) VALUES
('abid112', '123456'),
('admin', 'admin123'),
('neamulbd95', '147852');

-- --------------------------------------------------------

--
-- Table structure for table `men`
--

CREATE TABLE `men` (
  `P_M_Code` varchar(10) NOT NULL,
  `P_M_Catagory` varchar(20) NOT NULL,
  `P_M_Brand` varchar(50) NOT NULL,
  `P_M_Price` int(10) NOT NULL,
  `P_M_Quantity` int(10) NOT NULL,
  `Product_M_Pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men`
--

INSERT INTO `men` (`P_M_Code`, `P_M_Catagory`, `P_M_Brand`, `P_M_Price`, `P_M_Quantity`, `Product_M_Pic`) VALUES
('111111', 'Shirt', 'Westin', 1800, 23, 'Product Pic/111111.jpg'),
('111112', 'T-shirt', 'Polo', 500, 13, 'Product Pic/111112.jpg'),
('111113', 'Shirt', 'Richman', 2500, 9, 'Product Pic/111113.jpg'),
('111114', 'Shirt', 'Cats Eye', 2000, 7, 'Product Pic/111114.jpg'),
('111115', 'Shirt', 'Yellow', 2200, 20, 'Product Pic/111115.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `P_Mo_Code` varchar(10) NOT NULL,
  `P_Mo_Catagory` varchar(20) NOT NULL,
  `P_Mo_Brand` varchar(50) NOT NULL,
  `P_Mo_Price` int(10) NOT NULL,
  `P_Mo_Quantity` int(10) NOT NULL,
  `Product_Mo_Pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`P_Mo_Code`, `P_Mo_Catagory`, `P_Mo_Brand`, `P_Mo_Price`, `P_Mo_Quantity`, `Product_Mo_Pic`) VALUES
('666666', 'Mobile Phone', 'Samsung', 20000, 5, 'Product Pic/666666.jpg'),
('666667', 'Mobile Phone', 'Apple', 45000, 9, 'Product Pic/666667.jpg'),
('666668', 'Mobile', 'LG', 30000, 29, 'Product Pic/666668.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `P_O_Code` varchar(10) NOT NULL,
  `P_O_Catagory` varchar(20) NOT NULL,
  `P_O_Brand` varchar(50) NOT NULL,
  `P_O_Price` int(10) NOT NULL,
  `P_O_Quantity` int(10) NOT NULL,
  `Product_O_Pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`P_O_Code`, `P_O_Catagory`, `P_O_Brand`, `P_O_Price`, `P_O_Quantity`, `Product_O_Pic`) VALUES
('888888', 'Furniture', 'Otobi', 15000, 4, 'Product Pic/888888.jpg'),
('888889', 'Gift', 'MenRock', 12000, 14, 'Product Pic/888889.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(40) NOT NULL,
  `UserID` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `Mobile` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `UserID`, `Email`, `Pass`, `gender`, `Mobile`) VALUES
('abid ', 'abid112', 'abid_hasan112@gmail.com', '123456', 'Male', '01711111111'),
('neamul haque ', 'neamulbd95', 'neamulhaque.naem@gmail.com', '147852', 'Male', '01511111111');

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE `women` (
  `P_W_Code` varchar(10) NOT NULL,
  `P_W_Catagory` varchar(20) NOT NULL,
  `P_W_Brand` varchar(50) NOT NULL,
  `P_W_Price` int(10) NOT NULL,
  `P_W_Quantity` int(10) NOT NULL,
  `Product_W_Pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`P_W_Code`, `P_W_Catagory`, `P_W_Brand`, `P_W_Price`, `P_W_Quantity`, `Product_W_Pic`) VALUES
('222222', 'Shari', 'Anjons', 4500, 4, 'Product Pic/222222.jpg'),
('222223', 'Jewelry', 'Roxi', 300000, 3, 'Product Pic/222223.jpg'),
('222224', 'Three-Piece', 'Artisti', 5000, 19, 'Product Pic/222224.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_income`
--
ALTER TABLE `admin_income`
  ADD PRIMARY KEY (`userName`);

--
-- Indexes for table `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`P_C_Code`);

--
-- Indexes for table `computer_accessory`
--
ALTER TABLE `computer_accessory`
  ADD PRIMARY KEY (`P_CA_Code`);

--
-- Indexes for table `electronics`
--
ALTER TABLE `electronics`
  ADD PRIMARY KEY (`P_E_Code`);

--
-- Indexes for table `kids`
--
ALTER TABLE `kids`
  ADD PRIMARY KEY (`P_K_Code`);

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `men`
--
ALTER TABLE `men`
  ADD PRIMARY KEY (`P_M_Code`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`P_Mo_Code`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`P_O_Code`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`P_W_Code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
