-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 24, 2024 at 11:14 AM
-- Server version: 10.11.6-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u578114789_bookyourdrone`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_Drone`
--

CREATE TABLE `assign_Drone` (
  `id` int(11) NOT NULL,
  `pilotId` varchar(50) NOT NULL DEFAULT 'NA',
  `dronrId` varchar(50) NOT NULL DEFAULT 'NA',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_Drone`
--

INSERT INTO `assign_Drone` (`id`, `pilotId`, `dronrId`, `created_at`, `updated_at`) VALUES
(2, '6', '14', '2023-10-04 10:37:18', '2023-10-04 10:37:18'),
(3, '12', '13', '2023-10-05 08:45:52', '2023-10-05 08:45:52');

-- --------------------------------------------------------

--
-- Table structure for table `assign_order`
--

CREATE TABLE `assign_order` (
  `id` int(11) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `pilot_id` varchar(50) NOT NULL,
  `copilot_id` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_order`
--

INSERT INTO `assign_order` (`id`, `order_id`, `pilot_id`, `copilot_id`, `date`, `status`, `created_at`, `updated_at`) VALUES
(2, 'ORD29237080', '6', '7', '06-09-2023', '1', '2023-09-05 16:16:28', '2023-09-26 12:43:24'),
(3, 'ORD06033036', '6', '7', '10-09-2023', '1', '2023-09-05 16:53:10', '2023-09-25 18:45:30'),
(4, 'ORD45832872', '10', '9', '26-09-2023', '0', '2023-09-11 13:06:50', '2023-09-11 13:06:50'),
(5, 'ORD67050998', '10', '9', '20-09-2023', '1', '2023-09-21 12:20:43', '2023-09-26 13:06:09'),
(6, 'ORD86666915', '11', '9', '29-09-2023', '1', '2023-09-28 18:01:44', '2023-09-28 18:12:00'),
(7, 'ORD86284796', '6', '7', '06-10-2023', '0', '2023-10-04 12:27:58', '2023-10-04 12:27:58');

-- --------------------------------------------------------

--
-- Table structure for table `complain_table`
--

CREATE TABLE `complain_table` (
  `id` int(11) NOT NULL,
  `user_code` varchar(50) NOT NULL DEFAULT 'NA',
  `order_id` varchar(100) NOT NULL DEFAULT 'NA',
  `name` varchar(50) NOT NULL DEFAULT 'NA',
  `email` varchar(100) NOT NULL DEFAULT 'NA',
  `mob` varchar(50) NOT NULL DEFAULT 'NA',
  `type` varchar(50) NOT NULL DEFAULT 'NA',
  `msg` varchar(100) NOT NULL DEFAULT 'NA',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complain_table`
--

INSERT INTO `complain_table` (`id`, `user_code`, `order_id`, `name`, `email`, `mob`, `type`, `msg`, `created_at`, `updated_at`) VALUES
(2, '637065', 'ORD29237080', 'TAPAS RANJAN PRUSTI', 'tpasranjanprusti007@gmail.com', '7894909013', '1', 'test feed back', '2023-08-17 17:13:46', '2023-08-17 17:13:46'),
(3, '637065', 'ORD29237080', 'sagarika padhi', 'sagarika@gmail.com', '7894909013', '2', 'test compline', '2023-08-17 17:14:00', '2023-08-17 17:14:00'),
(4, '637065', 'ORD29237080', 'SURAJ SARANGI', 'suraj@gmail.com', '789469', '3', 'test enquery', '2023-08-17 17:14:12', '2023-08-17 17:14:12'),
(5, '637065', 'ORD29237080', 'mansd', 'suraj@gmail.com', '789469', '4', 'rest refund', '2023-08-17 17:14:34', '2023-08-17 17:14:34'),
(6, '637065', 'ORD29237080', 'rajesh nial', 'rahesh@gmail.com', '7894909013', '5', 'other ticket', '2023-08-17 17:23:48', '2023-08-17 17:23:48');

-- --------------------------------------------------------

--
-- Table structure for table `crops`
--

CREATE TABLE `crops` (
  `id` int(11) NOT NULL,
  `crop_name` varchar(50) NOT NULL DEFAULT 'NA',
  `image` varchar(150) NOT NULL DEFAULT 'NA',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crops`
--

INSERT INTO `crops` (`id`, `crop_name`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Sugar cane', '1691561641_sugarcan.jpg', '2023-08-09 11:44:01', '2023-08-09 11:44:01'),
(3, 'Rice', '1691561859_rice.jpg', '2023-08-09 11:47:39', '2023-08-09 11:47:39'),
(4, 'Cashew', '1691561944_Cashew.jpg', '2023-08-09 11:49:04', '2023-08-09 11:49:04'),
(5, 'Cotton', '1691561981_Cotton.jpg', '2023-08-09 11:49:41', '2023-08-09 11:49:41'),
(6, 'tamoto', '1691826238_sugarcan.jpg', '2023-08-12 13:13:58', '2023-08-12 13:13:58');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(11) NOT NULL,
  `state_id` varchar(50) NOT NULL DEFAULT 'NA',
  `district_name` varchar(100) NOT NULL DEFAULT 'NA',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `state_id`, `district_name`, `created_at`) VALUES
(1, '19', 'Angul', '2023-08-03 11:17:50'),
(2, '19', 'Balangir', '2023-08-03 11:17:50'),
(3, '19', 'Balasore (Baleswar)', '2023-08-03 11:17:50'),
(4, '19', 'Bargarh', '2023-08-03 11:17:50'),
(5, '19', 'Bhadrak', '2023-08-03 11:17:50'),
(6, '19', 'Boudh (Bauda)', '2023-08-03 11:17:50'),
(7, '19', 'Cuttack', '2023-08-03 11:17:50'),
(8, '19', 'Deogarh (Debagarh)', '2023-08-03 11:17:50'),
(9, '19', 'Dhenkanal', '2023-08-03 11:17:50'),
(10, '19', 'Gajapati', '2023-08-03 11:17:50'),
(11, '19', 'Ganjam', '2023-08-03 11:17:50'),
(12, '19', 'Jagatsinghpur', '2023-08-03 11:17:50'),
(13, '19', 'Jajpur', '2023-08-03 11:17:50'),
(14, '19', 'Jharsuguda', '2023-08-03 11:17:50'),
(15, '19', 'Kalahandi', '2023-08-03 11:17:50'),
(16, '19', 'Kandhamal', '2023-08-03 11:17:50'),
(17, '19', 'Kendrapara', '2023-08-03 11:17:50'),
(18, '19', 'Kendujhar (Keonjhar)', '2023-08-03 11:17:50'),
(19, '19', 'Khordha', '2023-08-03 11:17:50'),
(20, '19', 'Koraput', '2023-08-03 11:17:50'),
(21, '19', 'Malkangiri', '2023-08-03 11:17:50'),
(22, '19', 'Mayurbhanj', '2023-08-03 11:17:50'),
(23, '19', 'Nabarangpur', '2023-08-03 11:17:50'),
(24, '19', 'Nayagarh', '2023-08-03 11:17:50'),
(25, '19', 'Nuapada', '2023-08-03 11:17:50'),
(26, '19', 'Puri', '2023-08-03 11:17:50'),
(27, '19', 'Rayagada', '2023-08-03 11:17:50'),
(28, '19', 'Sambalpur', '2023-08-03 11:17:50'),
(29, '19', 'Subarnapur (Sonepur)', '2023-08-03 11:17:50'),
(30, '19', 'Sundargarh', '2023-08-03 11:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `drones`
--

CREATE TABLE `drones` (
  `id` int(11) NOT NULL,
  `model_name` varchar(100) NOT NULL DEFAULT 'NA',
  `district` varchar(50) NOT NULL DEFAULT 'NA',
  `spraying_tank` varchar(50) NOT NULL DEFAULT 'NA',
  `endurance` varchar(50) NOT NULL DEFAULT 'NA',
  `flight_range` varchar(50) NOT NULL DEFAULT 'NA',
  `height_range` varchar(50) NOT NULL DEFAULT 'NA',
  `price` varchar(50) NOT NULL DEFAULT 'NA',
  `image` varchar(100) NOT NULL DEFAULT 'NA',
  `status` varchar(50) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drones`
--

INSERT INTO `drones` (`id`, `model_name`, `district`, `spraying_tank`, `endurance`, `flight_range`, `height_range`, `price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(6, 'anugul dronr moel 1', '1', '11', '20', '30', '200', '2000', '1692012993_drone1.jpg', '1', '2023-08-14 17:06:33', '2023-08-19 08:08:29'),
(7, 'anugul dronr moel 2', '1', '13', '45', '50', '40', '3000', '1692013053_drone2.jpg', '1', '2023-08-14 17:07:33', '2023-08-17 18:31:06'),
(8, 'Balangir drone moel 1', '2', '19', '55', '50', '300', '4000', '1692013118_drone3.jpg', '1', '2023-08-14 17:08:38', '2023-08-18 12:30:40'),
(9, 'Balangir drone moel 2', '2', '20', '120', '60', '30', '5000', '1692013191_drone5.webp', '0', '2023-08-14 17:09:51', '2023-08-19 08:12:06'),
(10, 'Balangir drone moel 3', '2', '25', '18', '72', '40', '6000', '1692013241_drone6.jpg', '1', '2023-08-14 17:10:41', '2023-08-19 08:11:50'),
(12, 'GanjamModel1', '11', '25', '3', 'NA', '40', '3000', '1695294553_client-5.png', '1', '2023-09-21 16:39:13', '2023-09-21 16:39:13'),
(13, 'Nuapada Drone Model345', '25', '25', '18', '72', '25', '3000', '1695903905_drone10.png', '1', '2023-09-28 17:55:05', '2023-09-28 17:55:05'),
(14, 'tapasdroneModel', '25', '40', '18', '72', '16', '7325', 'NA', '1', '2023-10-04 15:57:17', '2023-10-04 15:57:17'),
(15, 'tapastestdroneModel', '25', '40', '18', 'NA', '30', '2000', '1696415320_drone.png', '1', '2023-10-04 15:58:40', '2023-10-04 15:58:40'),
(16, 'Ghtfr Agricultural Drone Camera 22 L V2(Basic Model)', '25', '40', '3', '10', '25', '2000', '1696836071_drone2.png', '1', '2023-10-09 12:51:11', '2023-10-09 12:51:11');

-- --------------------------------------------------------

--
-- Table structure for table `dronestatus`
--

CREATE TABLE `dronestatus` (
  `id` int(11) NOT NULL,
  `droneId` varchar(50) NOT NULL DEFAULT 'NA',
  `orderId` varchar(50) NOT NULL DEFAULT 'NA',
  `user_code` varchar(50) NOT NULL DEFAULT 'NA',
  `droneBookFrom` varchar(50) NOT NULL DEFAULT 'NA',
  `dronrBookTo` varchar(50) NOT NULL DEFAULT 'NA',
  `status` varchar(50) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dronestatus`
--

INSERT INTO `dronestatus` (`id`, `droneId`, `orderId`, `user_code`, `droneBookFrom`, `dronrBookTo`, `status`, `created_at`, `updated_at`) VALUES
(8, '1', 'ORD29237080', '637065', '15-08-2023', '16-08-2023', '1', '2023-08-14 15:32:47', '2023-08-14 15:32:47'),
(9, '8', 'ORD06033036', '637065', '14-08-2023', '14-08-2023', '1', '2023-08-14 17:53:29', '2023-08-14 17:53:29'),
(10, '8', 'ORD45832872', '637065', '19-08-2023', '19-08-2023', '1', '2023-08-19 13:46:49', '2023-08-19 13:46:49'),
(11, '10', 'ORD86284796', '637065', '30-08-2023', '30-08-2023', '1', '2023-08-29 15:40:49', '2023-08-29 15:40:49'),
(12, '8', 'ORD67050998', '637065', 'NA', 'NA', '1', '2023-09-04 08:21:47', '2023-09-04 08:21:47'),
(13, '8', 'ORD86666915', '637065', '30-09-2023', '30-09-2023', '1', '2023-09-28 18:00:44', '2023-09-28 18:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `DroneStockDetails`
--

CREATE TABLE `DroneStockDetails` (
  `id` int(11) NOT NULL,
  `droneid` varchar(50) NOT NULL DEFAULT 'NA',
  `propellerClockWise` varchar(50) NOT NULL DEFAULT 'NA',
  `propellerAntiClockWise` varchar(50) NOT NULL DEFAULT 'NA',
  `armsQnt` varchar(50) NOT NULL DEFAULT 'NA',
  `motorQnt` varchar(50) NOT NULL DEFAULT 'NA',
  `landingGearQnt` varchar(50) NOT NULL DEFAULT 'NA',
  `nozzleQnt` varchar(50) NOT NULL DEFAULT 'NA',
  `nutBoldQnt` varchar(50) NOT NULL DEFAULT 'NA',
  `bableQnt` varchar(50) NOT NULL DEFAULT 'NA',
  `lnKey` varchar(50) NOT NULL DEFAULT 'NA',
  `waterPump` varchar(50) NOT NULL DEFAULT 'NA',
  `pipe6_mm` varchar(50) NOT NULL DEFAULT 'NA',
  `pipe8_mm` varchar(50) NOT NULL DEFAULT 'NA',
  `pipe10_mm` varchar(50) NOT NULL DEFAULT 'NA',
  `chargerQnt` varchar(50) NOT NULL DEFAULT 'NA',
  `chargerPowerCable` varchar(50) NOT NULL DEFAULT 'NA',
  `extationBoard` varchar(50) NOT NULL DEFAULT 'NA',
  `bettaryQnt` varchar(50) NOT NULL DEFAULT 'NA',
  `transmeaterQnt` varchar(50) NOT NULL DEFAULT 'NA',
  `updateBy_Id` varchar(50) NOT NULL DEFAULT 'NA',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `DroneStockDetails`
--

INSERT INTO `DroneStockDetails` (`id`, `droneid`, `propellerClockWise`, `propellerAntiClockWise`, `armsQnt`, `motorQnt`, `landingGearQnt`, `nozzleQnt`, `nutBoldQnt`, `bableQnt`, `lnKey`, `waterPump`, `pipe6_mm`, `pipe8_mm`, `pipe10_mm`, `chargerQnt`, `chargerPowerCable`, `extationBoard`, `bettaryQnt`, `transmeaterQnt`, `updateBy_Id`, `created_at`, `updated_at`) VALUES
(1, '12', '5', '8', '10', '20', '23', '32', '45', '32', '42', '36', '78', '95', '32', '52', '35', '25', '48', '52', 'NA', '2023-09-21 16:39:13', '2023-09-21 16:39:13'),
(2, '13', '23564524245', '25', '30', '58', '23', '32', '45', '32', '42', '36', '78', '95', '32', '3', '8', '6', '7', '9', '12', '2023-09-28 17:55:05', '2023-10-05 08:46:31'),
(3, '14', '777777', '666666666', '10', 'NA', '23', '32', '45', 'NA', '42', '36', '78', '95', '32', '24', '23', '4', '3', 'NA', '1', '2023-10-04 15:57:17', '2023-10-04 13:37:30'),
(4, '15', '5', '8', '10', '20', '23', '32', '45', '32', '42', '36', '78', '95', '32', '52', '35', '25', '3', '2', 'NA', '2023-10-04 15:58:40', '2023-10-04 15:58:40'),
(5, '16', '5', '8', '10', '20', '23', '32', '45', '32', '42', '36', '78', '95', '32', '52', '35', '25', '48', '52', 'NA', '2023-10-09 12:51:11', '2023-10-09 12:51:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_code` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT '3',
  `mob` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'NA',
  `state` varchar(80) NOT NULL,
  `district` varchar(80) NOT NULL,
  `pin` varchar(80) NOT NULL,
  `village` varchar(80) NOT NULL,
  `panchayat` varchar(80) NOT NULL,
  `organisation` varchar(80) NOT NULL DEFAULT 'NA',
  `password` varchar(80) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `name`, `user_code`, `role`, `mob`, `email`, `image`, `state`, `district`, `pin`, `village`, `panchayat`, `organisation`, `password`, `created_at`, `updated_at`) VALUES
(9, 'Tapas Farmer Account', '637065', '3', '6370658717', 'tapasfarmer@gmail.com', '1691491547_4.webp', '19', '2', '766107', 'khariar', 'khorda', 'NA', '$2y$10$fLt/DA/2i2phQDLlUVAJzO1oq0Vn4nj9jdD23bhCDm7XjB8T1wSb6', '2023-08-08 10:45:47', '2023-08-08 10:45:47'),
(13, 'Swarnita Dash', '8167658', '3', '7894697070', 'swarnita@gmail.com', 'NA', '19', '1', '751024', 'khariar', 'chindaguda', 'NA', '$2y$10$0ZkaKwsMngC7UEgrYh0d6erKtp9wmFCuGdjA1HJxyNwWVnAan22Iq', '2023-08-14 11:44:51', '2023-08-14 11:44:51'),
(14, 'TAPAS RANJAN PRUSTI', '0749017', '3', '7894909013', 'admin@gmail.com', '1699420451_5.png', '19', '21', '751021', 'bbsr', 'khorda', 'NA', '$2y$10$BXQQL2jeyXX7gzbfigZcMOEFk0TWZzcgY3.HliVODCcGhaRKPDSAy', '2023-11-08 10:44:11', '2023-11-08 10:44:11'),
(15, 'Tapas ranjan prusti', '0818182', '3', '6370658717', 'tapas@gmail.com', 'NA', '19', '13', '789876', 'Ggh', 'Hhj', 'NA', '$2y$10$FKgCZ9zAL0hZJsKE.pDebemMTKo1k3cjedQIGK3C3jNr4/qnQ3X9y', '2023-11-08 12:58:33', '2023-11-08 12:58:33'),
(16, 'Baba', '9813100', '3', '7978798542', 'babapatraetc@gmail.com', 'NA', '19', '18', '758029', 'abc', 'abc', 'NA', '$2y$10$xSVA9McEGVwS77iHYyoG0.Wxmto9.UwxVBnOls279k.4DyXHQ3Vcy', '2023-11-15 20:00:19', '2023-11-15 20:00:19'),
(17, 'Rajendra', '4022256', '3', '9078140061', 'rajendrabera.raja96@gmail.com', '1701964479_WhatsApp Image 2023-10-13 at 11.29.45.jpeg', '19', '19', '751005', 'sjgfsjhf', 'fchgcjghc', 'NA', '$2y$10$JXpqI4Kpo6NKgLtDIzEajOhkfrwrRHuWbCl55i/DnseF48raQaZgW', '2023-12-07 21:24:39', '2023-12-07 21:24:39');

-- --------------------------------------------------------

--
-- Table structure for table `lands`
--

CREATE TABLE `lands` (
  `id` int(11) NOT NULL,
  `frm_lnd` varchar(50) NOT NULL DEFAULT 'NA',
  `to_lnd` varchar(50) NOT NULL DEFAULT 'NA',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lands`
--

INSERT INTO `lands` (`id`, `frm_lnd`, `to_lnd`, `created_at`, `updated_at`) VALUES
(2, '10', '15', '2023-08-09 12:17:06', '2023-08-09 12:17:06'),
(3, '15', '30', '2023-08-09 13:04:00', '2023-08-09 13:04:00'),
(4, '30', '45', '2023-08-09 13:04:07', '2023-08-09 13:04:07'),
(5, '45', '60', '2023-08-09 13:04:20', '2023-08-09 13:04:20'),
(6, '60', '75', '2023-08-09 13:04:27', '2023-08-09 13:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `user_code` varchar(50) NOT NULL DEFAULT 'NA',
  `message` varchar(50) NOT NULL DEFAULT 'NA',
  `urls` varchar(50) NOT NULL DEFAULT 'NA',
  `read_at` varchar(50) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updted_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `orderId` varchar(100) NOT NULL DEFAULT 'NA',
  `user_code` varchar(50) NOT NULL DEFAULT 'NA',
  `drone_id` int(11) NOT NULL,
  `crop` varchar(50) NOT NULL DEFAULT 'NA',
  `landRangeId` varchar(50) NOT NULL DEFAULT 'NA',
  `specificLand` varchar(50) NOT NULL DEFAULT 'NA',
  `totalPay` varchar(100) NOT NULL DEFAULT 'NA',
  `advance` varchar(100) NOT NULL DEFAULT 'NA',
  `street_address` varchar(100) NOT NULL DEFAULT 'NA',
  `villege` varchar(100) NOT NULL DEFAULT 'NA',
  `panchayat` varchar(100) NOT NULL DEFAULT 'NA',
  `pin` varchar(50) NOT NULL DEFAULT 'NA',
  `phone` varchar(50) NOT NULL DEFAULT 'NA',
  `email` varchar(50) NOT NULL DEFAULT 'NA',
  `user_cancel_status` varchar(50) NOT NULL DEFAULT '0',
  `cancel_reason` varchar(50) NOT NULL DEFAULT 'NA',
  `cancel_msg` varchar(100) NOT NULL DEFAULT 'NA',
  `status` varchar(50) NOT NULL DEFAULT '0',
  `assigned` varchar(50) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderId`, `user_code`, `drone_id`, `crop`, `landRangeId`, `specificLand`, `totalPay`, `advance`, `street_address`, `villege`, `panchayat`, `pin`, `phone`, `email`, `user_cancel_status`, `cancel_reason`, `cancel_msg`, `status`, `assigned`, `created_at`, `updated_at`) VALUES
(8, 'ORD29237080', '637065', 1, '2', '3', '20', '90000', '500', 'fr2/5', 'khariar', 'khorda', '766107', '6370658717', 'tapasfarmer@gmail.com', '1', 'Order placed by mistake', 'ryjtyj', '0', '1', '2023-08-14 15:32:47', '2023-09-05 16:16:28'),
(9, 'ORD06033036', '637065', 8, '2', '2', '11', '33000', '500', 'ggg', 'khariar', 'khorda', '766107', '6370658717', 'tapasfarmer@gmail.com', '1', 'Extended delivery time is too long', 'fgbfhgnghgh hfnfhn fgnfh  fhnfyg', '0', '1', '2023-08-14 17:53:29', '2023-09-05 16:53:10'),
(10, 'ORD45832872', '637065', 8, '2', '2', '10', '3000', '500', 'at-gadramunda po-chindaguda', 'khariar', 'khorda', '766107', '+617894909013', 'tpasranjanprusti007@gmail.com', '1', 'Order placed by mistake', 'fhnfg hn hgn  testtttttttttttttttttttttttttttttttttttttttttttttttttttttt', '0', '1', '2023-08-19 13:46:49', '2023-09-11 13:06:50'),
(11, 'ORD86284796', '637065', 10, '2', '2', '12', '3600', '500', 'EB-13, Pani Tanki Lane, Near Laxmisagar Police Station', 'khariar', 'khorda', '751006', '+918280183416', 'swarnitabbsr@gmail.com', '0', 'NA', 'NA', '0', '1', '2023-08-29 15:40:49', '2023-10-04 12:27:58'),
(12, 'ORD67050998', '637065', 8, '2', '2', '10', '3000', '500', 'Gggt', 'khariar', 'khorda', '766107', '6370658717', 'tapasfarmer@gmail.com', '0', 'NA', 'NA', '0', '1', '2023-09-04 08:21:47', '2023-09-21 12:20:43'),
(13, 'ORD86666915', '637065', 8, '2', '2', '12', '3600', '500', 'Khariar', 'khariar', 'khorda', '766107', '6370658717', 'tapasfarmer@gmail.com', '0', 'NA', 'NA', '0', '1', '2023-09-28 18:00:44', '2023-09-28 18:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `PilotWorkFlow`
--

CREATE TABLE `PilotWorkFlow` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL DEFAULT 'NA',
  `orderId` varchar(100) NOT NULL,
  `pilotStartLocation` varchar(250) NOT NULL DEFAULT 'NA',
  `droneLocation` varchar(50) NOT NULL DEFAULT 'NA',
  `startTime` varchar(50) NOT NULL DEFAULT 'NA',
  `reachFarmerLocation` varchar(50) NOT NULL DEFAULT 'NA',
  `distance` varchar(50) NOT NULL DEFAULT 'NA',
  `sparingTime` varchar(50) NOT NULL DEFAULT 'NA',
  `completeTime` varchar(50) NOT NULL DEFAULT 'NA',
  `AcearCompleted` varchar(50) NOT NULL DEFAULT 'NA',
  `day` varchar(50) NOT NULL DEFAULT 'NA',
  `restOfWork` varchar(50) NOT NULL DEFAULT 'NA',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `PilotWorkFlow`
--

INSERT INTO `PilotWorkFlow` (`id`, `date`, `orderId`, `pilotStartLocation`, `droneLocation`, `startTime`, `reachFarmerLocation`, `distance`, `sparingTime`, `completeTime`, `AcearCompleted`, `day`, `restOfWork`, `created_at`, `updated_at`) VALUES
(1, '24-09-2023', 'ORD06033036', 'Latitude: 20.2522976, Longitude: 85.7565395', '1', '03:11', 'Latitude: 20.2522976, Longitude: 85.7565395', '59', '08:14', '20:29', '45', '1', '1', '2023-09-25 13:08:35', '2023-09-25 18:30:06'),
(2, '26-09-2023', 'ORD06033036', 'Latitude: 20.2522935, Longitude: 85.7565353', '1', '20:37', 'Latitude: 20.2522935, Longitude: 85.7565353', '45', '21:40', '21:45', '45', '2', '1', '2023-09-25 18:37:52', '2023-09-25 18:45:30'),
(3, '24-09-2023', 'ORD29237080', 'Latitude: 20.2522967, Longitude: 85.7565399', '1', '09:43', 'Latitude: 20.2522967, Longitude: 85.7565399', '78', '12:30', '18:30', '125', '1', '2', '2023-09-26 12:25:12', '2023-09-26 12:28:31'),
(4, '25-09-2023', 'ORD29237080', 'NA', '2', 'NA', 'NA', 'NA', '07:29', '19:40', '130', '2', '2', '2023-09-26 12:35:53', '2023-09-26 12:40:03'),
(5, '26-09-2023', 'ORD29237080', 'NA', '2', 'NA', 'NA', 'NA', '07:44', '20:45', '100', '3', '1', '2023-09-26 12:42:48', '2023-09-26 12:43:24'),
(6, '25-09-2023', 'ORD67050998', 'Latitude: 20.2522967, Longitude: 85.7565399', '1', '06:58', 'Latitude: 20.2522967, Longitude: 85.7565399', '78', '20:00', '20:00', '178', '1', '2', '2023-09-26 12:56:47', '2023-09-26 12:57:50'),
(7, '26-09-2023', 'ORD67050998', 'NA', '2', 'NA', 'NA', 'NA', '07:10', '20:08', '196', '2', '1', '2023-09-26 13:05:42', '2023-09-26 13:06:09'),
(8, '27-09-2023', 'ORD86666915', 'Latitude: 20.2522946, Longitude: 85.7565351', '1', '08:04', 'Latitude: 20.2522946, Longitude: 85.7565351', '89', '10:09', '17:25', '80', '1', '2', '2023-09-28 18:04:51', '2023-09-28 18:06:15'),
(9, '28-09-2023', 'ORD86666915', 'NA', '2', 'NA', 'NA', 'NA', '08:15', '19:11', '78', '2', '1', '2023-09-28 18:11:33', '2023-09-28 18:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `crop` varchar(50) NOT NULL DEFAULT 'NA',
  `land` varchar(50) NOT NULL DEFAULT 'NA',
  `working_day` varchar(50) NOT NULL DEFAULT 'NA',
  `price` varchar(100) NOT NULL DEFAULT 'NA',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `crop`, `land`, `working_day`, `price`, `created_at`, `updated_at`) VALUES
(1, '2', '2', '1', '300', '2023-08-09 13:06:09', '2023-08-09 13:06:09'),
(2, '2', '3', '2', '4500', '2023-08-09 13:06:51', '2023-08-09 13:06:51'),
(3, '3', '3', '2', '6000', '2023-08-09 13:36:45', '2023-08-09 13:36:45'),
(4, '6', '3', '3', '5000', '2023-08-12 13:15:03', '2023-08-12 13:15:03'),
(5, '6', '2', '1', '500', '2023-08-12 13:31:29', '2023-08-12 13:31:29'),
(6, '6', '4', '3', '490', '2023-08-12 13:32:04', '2023-08-12 13:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `state_name` varchar(100) NOT NULL DEFAULT 'NA',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state_name`, `created_at`, `updated_at`) VALUES
(1, 'Andhra Pradesh', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(2, 'Arunachal Pradesh', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(3, 'Assam', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(4, 'Bihar', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(5, 'Chhattisgarh', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(6, 'Goa', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(7, 'Gujarat', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(8, 'Haryana', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(9, 'Himachal Pradesh', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(10, 'Jharkhand', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(11, 'Karnataka', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(12, 'Kerala', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(13, 'Madhya Pradesh', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(14, 'Maharashtra', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(15, 'Manipur', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(16, 'Meghalaya', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(17, 'Mizoram', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(18, 'Nagaland', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(19, 'Odisha', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(20, 'Punjab', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(21, 'Rajasthan', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(22, 'Sikkim', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(23, 'Tamil Nadu', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(24, 'Telangana', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(25, 'Tripura', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(26, 'Uttar Pradesh', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(27, 'Uttarakhand', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(28, 'West Bengal', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(29, 'Andaman and Nicobar Islands', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(30, 'Chandigarh', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(31, 'Dadra and Nagar Haveli and Daman and Diu', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(32, 'Lakshadweep', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(33, 'Delhi', '2023-08-03 11:06:44', '2023-08-03 11:06:44'),
(34, 'Puducherry', '2023-08-03 11:06:44', '2023-08-03 11:06:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(50) DEFAULT '2',
  `mob` varchar(50) NOT NULL DEFAULT 'Null',
  `email` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'NA',
  `state` varchar(50) NOT NULL DEFAULT 'NA',
  `district` varchar(50) NOT NULL DEFAULT 'NA',
  `pin` varchar(50) NOT NULL DEFAULT 'NA',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `mob`, `email`, `image`, `state`, `district`, `pin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tapas', '1', '8249507765', '', '1691237474_3.jpg', 'NA', 'NA', '', NULL, '$2a$04$inNhqwRCRVVj1DZr5bbl/.WwfqP9rg6zKzdKQkbkcPF45qUyfwSky', NULL, NULL, NULL),
(3, 'Binmaya Dashh', '2', '123456789', 'binmaya@gmail.com', '1691237474_3.jpg', '19', '19', '766107', NULL, '$2y$10$Ypp248iFNwZ3egEd26oZ3.d6tmqx6uMsPPk7.1dH6/4csyyb.SXry', NULL, '2023-08-05 12:11:14', '2023-08-12 02:15:53'),
(4, 'Binmaya Dash', '2', '546645645', 'tapas@gmail.com', 'NA', '19', '15', '766107', NULL, '$2y$10$PoBfj9ChsO2hz4uqzjH0Au.DObEMSScELh5UU9B7JlwRfAp3/cyv.', NULL, '2023-08-12 07:36:35', '2023-08-12 07:36:35'),
(6, 'sarita', '5', '3333333333', 'sarita@gmail.com', '1693574562_Screenshot (911).png', '19', '25', 'NA', NULL, '$2y$10$t3NtwsXV4nBvYKZ49itt8ez4TjU/XL0rBk4Jw5SuG1GCjyrQqCp6K', NULL, '2023-09-01 18:52:42', '2023-09-01 18:52:42'),
(7, 'Sambit dash', '6', '2222333344', 'sambit@gmail.com', '1693908407_logodronr.jpg', 'NA', 'NA', 'NA', NULL, '$2y$10$b/cm58BDvLvfJMw1Ng1bNeoCqo/0AfldsQyz.vHK.6fVoteLoDkca', NULL, '2023-09-05 15:36:47', '2023-09-05 15:36:47'),
(8, 'Aniket Tiwari', '5', '99999999', 'aniket@gmail.com', '1694417722_Screenshot (911).png', 'NA', 'NA', 'NA', NULL, '$2y$10$y7NtRv2yA.a/CXILAhCj9eConTfYZw0oOAaVKJIICcbGyUryWhtAa', NULL, '2023-09-11 13:05:22', '2023-09-11 13:05:22'),
(9, 'Lovit Rana', '6', '8888888888', 'lovit@gmail.com', '1694417771_Screenshot (923).png', 'NA', 'NA', 'NA', NULL, '$2y$10$I9FGDzBcRkVBNzcQup1vjOLdVws4jI5pqxYMlCzwxMbbMlGMU9gwC', NULL, '2023-09-11 13:06:11', '2023-09-11 13:06:11'),
(10, 'dipa', '5', '6666666666', 'dipa@gmail.com', 'NA', 'NA', 'NA', 'NA', NULL, '$2y$10$2rrtuSNqiTJRfWYtgHHyC.FZiVGYV/ZrlhjGjnu5s35c1DsY7r7MK', NULL, '2023-09-21 12:17:26', '2023-09-21 12:17:26'),
(11, 'Rajan Meher', '5', '1111111111', 'rajan@gmail.com', 'NA', 'NA', 'NA', 'NA', NULL, '$2y$10$rJhKbPYvU1fH2tb9FUyZWugkgDa3Dp2ihg4M20H.34yOFa3XQd24.', NULL, '2023-09-28 17:56:59', '2023-09-28 17:56:59'),
(12, 'Rasmi Ranjan Swain', '5', '7575757575', 'rashmi@gmail.com', 'NA', '19', '25', '766107', NULL, '$2y$10$U/2WytuIoZ35qawdxHFExu6C5tvS0R0Y46jIgHPL5MrxWT0OTwF2.', NULL, '2023-10-05 13:28:20', '2023-10-05 13:28:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_Drone`
--
ALTER TABLE `assign_Drone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_order`
--
ALTER TABLE `assign_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain_table`
--
ALTER TABLE `complain_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drones`
--
ALTER TABLE `drones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dronestatus`
--
ALTER TABLE `dronestatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DroneStockDetails`
--
ALTER TABLE `DroneStockDetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lands`
--
ALTER TABLE `lands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `PilotWorkFlow`
--
ALTER TABLE `PilotWorkFlow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_Drone`
--
ALTER TABLE `assign_Drone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assign_order`
--
ALTER TABLE `assign_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `complain_table`
--
ALTER TABLE `complain_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `crops`
--
ALTER TABLE `crops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `drones`
--
ALTER TABLE `drones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `dronestatus`
--
ALTER TABLE `dronestatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `DroneStockDetails`
--
ALTER TABLE `DroneStockDetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lands`
--
ALTER TABLE `lands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `PilotWorkFlow`
--
ALTER TABLE `PilotWorkFlow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
