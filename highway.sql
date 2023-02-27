-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 25, 2022 lúc 08:52 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `highway`
--
CREATE DATABASE IF NOT EXISTS `bankinh` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bankinh`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `name_admin` varchar(50) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dateOfBirth` date DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `name_admin`, `phone_number`, `address`, `email`, `user_name`, `password`, `dateOfBirth`) VALUES
(10, 'Nguyễn Nam Phong', '0999999999', 'abcxyz', 'phong123@gmail.com', 'lam phong nguyen', '123456789', '2022-06-16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `id_bill` int(10) NOT NULL AUTO_INCREMENT,
  `bill_type` varchar(50) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_bill`),
  KEY `id_customer` (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id_bill`, `bill_type`, `id_customer`, `date`, `status`) VALUES
(6, '', 2, '2022-06-08', 1),
(7, '', 2, '2022-06-08', 0),
(8, '', 2, '2022-06-08', 0),
(9, '', 2, '2022-06-08', 0),
(10, '', 2, '2022-06-08', 0),
(11, '', 2, '2022-06-08', 0),
(12, '', 2, '2022-06-08', 0),
(13, '', 2, '2022-06-08', 0),
(14, '', 2, '2022-06-08', 0),
(16, '', 2, '2022-06-09', 0),
(17, '', 2, '2022-06-09', 0),
(18, '', 2, '2022-06-09', 0),
(19, '', 2, '2022-06-09', 0),
(20, '', 2, '2022-06-09', 0),
(21, '', 2, '2022-06-09', 0),
(22, '', 2, '2022-06-09', 0),
(23, '', 2, '2022-06-09', 0),
(24, '', 2, '2022-06-09', 0),
(25, '', 2, '2022-06-09', 0),
(26, '', 2, '2022-06-09', 0),
(27, '', 2, '2022-06-09', 0),
(28, '', 2, '2022-06-09', 0),
(29, '', 2, '2022-06-09', 0),
(30, '', 2, '2022-06-09', 0),
(31, '', 2, '2022-06-09', 0),
(32, '', 2, '2022-06-09', 0),
(33, '', 2, '2022-06-09', 0),
(34, '', 2, '2022-06-10', 0),
(35, '', 2, '2022-06-10', 0),
(36, '', 2, '2022-06-10', 0),
(37, '', 2, '2022-06-10', 0),
(38, '', 2, '2022-06-10', 0),
(39, '', 2, '2022-06-10', 0),
(40, '', 2, '2022-06-11', 0),
(41, '', 2, '2022-06-11', 0),
(42, '', 2, '2022-06-11', 0),
(43, '', 2, '2022-06-11', 0),
(44, '', 2, '2022-06-13', 1),
(45, '', 2, '2022-06-14', 0),
(46, '', 2, '2022-06-14', 0),
(47, '', 2, '2022-06-15', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `billdetail`
--

CREATE TABLE IF NOT EXISTS `billdetail` (
  `id_billDetail` int(10) NOT NULL AUTO_INCREMENT,
  `id_bill` int(10) NOT NULL,
  `total_money` int(50) NOT NULL,
  `prices` int(50) NOT NULL,
  `quantity` int(250) NOT NULL,
  `date` date NOT NULL,
  `id_productDetail` int(10) NOT NULL,
  PRIMARY KEY (`id_billDetail`),
  KEY `id_productDetail` (`id_productDetail`),
  KEY `id_bill` (`id_bill`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `billdetail`
--

INSERT INTO `billdetail` (`id_billDetail`, `id_bill`, `total_money`, `prices`, `quantity`, `date`, `id_productDetail`) VALUES
(17, 35, 0, 580000, 7, '0000-00-00', 16),
(18, 36, 0, 0, 0, '0000-00-00', 16),
(19, 37, 4060000, 580000, 7, '0000-00-00', 16),
(20, 38, 5800000, 580000, 10, '2022-06-10', 16),
(21, 39, 5800000, 580000, 10, '2022-06-10', 16),
(22, 40, 5800000, 580000, 10, '2022-06-11', 16),
(23, 41, 5800000, 580000, 10, '2022-06-11', 16),
(24, 42, 5800000, 580000, 10, '2022-06-11', 16),
(25, 43, 5800000, 580000, 10, '2022-06-11', 16),
(26, 44, 3480000, 580000, 6, '2022-06-13', 21),
(27, 45, 9600000, 1200000, 8, '2022-06-14', 20),
(28, 46, 2900000, 580000, 5, '2022-06-14', 21),
(29, 47, 3480000, 580000, 6, '2022-06-15', 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `name_customer` varchar(50) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dateofBirth` date NOT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id_customer`, `name_customer`, `phone_number`, `address`, `email`, `user_name`, `password`, `dateofBirth`) VALUES
(1, 'abc', '099999999', 'abcd', 'haminhchi@gmail.com', 'chi', '123', '2022-05-03'),
(2, 'phong lam', '0999999999', 'avc', 'phong@gmail.com', 'phong lâm abc', '123456789', '2022-06-16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `link_anh` varchar(255) NOT NULL,
  `id_anh` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_anh`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `picture`
--

INSERT INTO `picture` (`link_anh`, `id_anh`) VALUES
('ESSENTIA1.1.jpg', 3),
('ESSENTIA1.1.jpg', 4),
('ESSENTIA1.1.jpg', 17),
('cse1.4.jpg', 20),
('cse1.2.jpg', 21),
('bkj1.2.jpg', 22),
('ESSENTIA2.3.jpg', 23),
('ESSENTIA2.2.jpg', 24),
('ESSENTIA1.5.jpg', 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id_product` int(10) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `id_productType` int(10) NOT NULL,
  PRIMARY KEY (`id_product`),
  KEY `id_productType` (`id_productType`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `product_name`, `id_productType`) VALUES
(3, 'abc', 1),
(4, 'abc', 1),
(6, 'abc', 1),
(13, 'abc', 2),
(26, 'es1', 1),
(30, 'casual event', 2),
(31, 'Áo da thể thao', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_detail`
--

CREATE TABLE IF NOT EXISTS `product_detail` (
  `id_productDetail` int(10) NOT NULL AUTO_INCREMENT,
  `id_product` int(10) NOT NULL,
  `id_color` int(50) DEFAULT NULL,
  `quantity` varchar(50) NOT NULL,
  `prices` int(50) NOT NULL,
  `id_size` int(50) DEFAULT NULL,
  `id_anh` int(255) NOT NULL,
  PRIMARY KEY (`id_productDetail`),
  KEY `id_product` (`id_product`),
  KEY `id_color` (`id_color`),
  KEY `id_size` (`id_size`),
  KEY `id_anh` (`id_anh`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product_detail`
--

INSERT INTO `product_detail` (`id_productDetail`, `id_product`, `id_color`, `quantity`, `prices`, `id_size`, `id_anh`) VALUES
(16, 26, NULL, '7', 580000, NULL, 17),
(20, 30, NULL, '12', 1200000, NULL, 21),
(21, 31, NULL, '5', 580000, NULL, 22);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_type`
--

CREATE TABLE IF NOT EXISTS `product_type` (
  `id_productType` int(10) NOT NULL AUTO_INCREMENT,
  `typeName` varchar(100) NOT NULL,
  PRIMARY KEY (`id_productType`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product_type`
--

INSERT INTO `product_type` (`id_productType`, `typeName`) VALUES
(1, 'ESSENTIAL'),
(2, 'CASUAL EVENT'),
(3, 'BIKER TOUCH');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);

--
-- Các ràng buộc cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  ADD CONSTRAINT `billdetail_ibfk_1` FOREIGN KEY (`id_productDetail`) REFERENCES `product_detail` (`id_productDetail`),
  ADD CONSTRAINT `billdetail_ibfk_2` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id_bill`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_productType`) REFERENCES `product_type` (`id_productType`);

--
-- Các ràng buộc cho bảng `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `product_detail_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`),
  ADD CONSTRAINT `product_detail_ibfk_4` FOREIGN KEY (`id_anh`) REFERENCES `picture` (`id_anh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
