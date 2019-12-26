-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2019 at 07:10 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duo`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(199) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` int(11) NOT NULL COMMENT '0-residential/ 1-commercial/ 2-leisure/ 3-industrial/ 4-public',
  `status` int(11) NOT NULL COMMENT '0-past/ 1-ongoing/ 2-proposal',
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 0 COMMENT '0=inactive/1=active',
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `code`, `slug`, `location`, `description`, `type`, `status`, `image`, `active`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dimo', 'PRO_10001', 'dimo-1', 'Kurunegala', NULL, 1, 0, 'assets/uploads/projects/main_image/RodUKoiUAY.png', 1, 1, '2019-12-24 04:29:39', '2019-12-24 04:29:39', NULL),
(2, 'Ajith House', 'PRO_10002', 'ajith-house-2', 'Siripura, Thalawathugoda', NULL, 0, 0, 'assets/uploads/projects/main_image/mXvb2Kbbss.png', 1, 1, '2019-12-24 04:40:26', '2019-12-24 04:40:26', NULL),
(3, 'SS Labels', 'PRO_10003', 'ss-labels-3', 'Colombo', NULL, 3, 0, 'assets/uploads/projects/main_image/FiOjulVH8k.png', 1, 1, '2019-12-24 04:42:54', '2019-12-24 04:42:54', NULL),
(4, 'Ath Sewana', 'PRO_10004', 'ath-sewana-4', 'Colombo', NULL, 2, 0, 'assets/uploads/projects/main_image/dzcpbgRkDb.png', 1, 1, '2019-12-24 04:45:41', '2019-12-24 04:45:41', NULL),
(5, 'Municipal Council', 'PRO_10005', 'municipal-council-5', 'Colombo', NULL, 4, 0, 'assets/uploads/projects/main_image/6uXvFQF6pd.png', 1, 1, '2019-12-24 04:48:32', '2019-12-24 04:48:32', NULL),
(6, 'Bingumal', 'PRO_10006', 'bingumal-6', 'Aththidiya', NULL, 0, 0, 'assets/uploads/projects/main_image/5EWWiT2PQX.png', 1, 1, '2019-12-24 04:50:56', '2019-12-24 04:50:56', NULL),
(7, 'Dimo', 'PRO_10007', 'dimo-7', 'Negombo', NULL, 1, 0, 'assets/uploads/projects/main_image/Z1n1fcjUKt.png', 1, 1, '2019-12-24 04:52:24', '2019-12-24 04:52:24', NULL),
(8, 'Beli Resort', 'PRO_10008', 'beli-resort-8', 'Colombo', NULL, 2, 0, 'assets/uploads/projects/main_image/zP3O2Atr01.png', 1, 1, '2019-12-24 04:54:34', '2019-12-24 04:54:34', NULL),
(9, 'Chamara House', 'PRO_10009', 'chamara-house-9', 'Waragoda, Kelaniya', NULL, 0, 0, 'assets/uploads/projects/main_image/OFV9j6z4vQ.png', 1, 1, '2019-12-24 04:57:33', '2019-12-24 04:57:33', NULL),
(10, 'Daham House', 'PRO_10010', 'daham-house-10', 'Battaramulla', NULL, 0, 0, 'assets/uploads/projects/main_image/grPa9NOle8.png', 1, 1, '2019-12-24 05:00:16', '2019-12-24 05:00:16', NULL),
(11, 'Dimo', 'PRO_10011', 'dimo-11', 'Anuradhapura', NULL, 1, 0, 'assets/uploads/projects/main_image/Nt8frowFcX.png', 1, 1, '2019-12-24 05:01:17', '2019-12-24 05:01:17', NULL),
(12, 'Dimo', 'PRO_10012', 'dimo-12', 'Colombo', NULL, 1, 0, 'assets/uploads/projects/main_image/roJH1SLp1v.png', 1, 1, '2019-12-24 05:02:23', '2019-12-24 05:02:23', NULL),
(13, 'Dammika House', 'PRO_10013', 'dammika-house-13', 'Malabe', NULL, 0, 0, 'assets/uploads/projects/main_image/310xYad6Up.png', 1, 1, '2019-12-24 05:03:49', '2019-12-24 05:03:50', NULL),
(14, 'Darshana House', 'PRO_10014', 'darshana-house-14', 'Kalagoda', NULL, 0, 0, 'assets/uploads/projects/main_image/SIQt1HcPMz.png', 1, 1, '2019-12-24 05:06:17', '2019-12-24 05:06:17', NULL),
(15, 'Darshuba House', 'PRO_10015', 'darshuba-house-15', 'Mount Pleasant, Colombo 08', NULL, 0, 0, 'assets/uploads/projects/main_image/5Z2IqPQGlF.png', 1, 1, '2019-12-24 05:07:58', '2019-12-24 05:07:58', NULL),
(16, 'Dr. Obeysekara House', 'PRO_10016', 'dr-obeysekara-house-16', 'Hokandara', NULL, 0, 0, 'assets/uploads/projects/main_image/QgGzSF2006.png', 1, 1, '2019-12-24 05:09:59', '2019-12-24 05:09:59', NULL),
(17, 'Dr. Asanka House', 'PRO_10017', 'dr-asanka-house-17', 'Kandewatta Road, Nugegoda', NULL, 0, 0, 'assets/uploads/projects/main_image/gn831sitNd.png', 1, 1, '2019-12-24 05:11:59', '2019-12-24 05:11:59', NULL),
(18, 'Gahanath Waterhouse', 'PRO_10018', 'gahanath-waterhouse-18', 'Colombo', NULL, 2, 0, 'assets/uploads/projects/main_image/DK8MQdN78A.png', 1, 1, '2019-12-24 05:13:32', '2019-12-24 05:13:32', NULL),
(19, 'Dr. Dilhara House', 'PRO_10019', 'dr-dilhara-house-19', 'Sri Jayawardanapura', NULL, 0, 0, 'assets/uploads/projects/main_image/zL5eIq4Jfg.png', 1, 1, '2019-12-24 05:15:31', '2019-12-24 05:15:31', NULL),
(20, 'Dr. Katulanda House', 'PRO_10020', 'dr-katulanda-house-20', 'Madawelikada Road, Rajagiriya', NULL, 0, 0, 'assets/uploads/projects/main_image/ODZBogrLOD.png', 1, 1, '2019-12-24 05:18:45', '2019-12-24 05:18:45', NULL),
(21, 'Dr. Seetha House', 'PRO_10021', 'dr-seetha-house-21', 'Koswatta, Battaramulla', NULL, 0, 0, 'assets/uploads/projects/main_image/4zNQGuVktm.png', 1, 1, '2019-12-24 05:21:06', '2019-12-24 05:21:06', NULL),
(22, 'Dimo', 'PRO_10022', 'dimo-22', 'Trincomalee', NULL, 1, 0, 'assets/uploads/projects/main_image/EfNkJjANMa.png', 1, 1, '2019-12-24 05:22:53', '2019-12-24 05:22:53', NULL),
(23, 'Middeniya Lake Resort', 'PRO_10023', 'middeniya-lake-resort-23', 'Colombo', NULL, 2, 0, 'assets/uploads/projects/main_image/9jcLUy3IXY.png', 1, 1, '2019-12-24 05:24:59', '2019-12-24 05:24:59', NULL),
(24, 'Dulith House', 'PRO_10024', 'dulith-house-24', 'Thibirigasyaya', NULL, 0, 0, 'assets/uploads/projects/main_image/ZCh4LW7DBK.png', 1, 1, '2019-12-24 05:30:27', '2019-12-24 05:30:27', NULL),
(25, 'Janaki House', 'PRO_10025', 'janaki-house-25', 'Diyawanna Residence, Rajagiriya', NULL, 0, 0, 'assets/uploads/projects/main_image/i7ZLVtVFrH.png', 1, 1, '2019-12-24 05:37:36', '2019-12-24 05:37:36', NULL),
(26, 'Kattachchi House', 'PRO_10026', 'kattachchi-house-26', 'Swarnadisi Place, Koswatta, Rajagiriya', NULL, 0, 0, 'assets/uploads/projects/main_image/baoCON8ygZ.png', 1, 1, '2019-12-24 05:39:37', '2019-12-24 05:39:37', NULL),
(27, 'Madhawa House', 'PRO_10027', 'madhawa-house-27', 'Nawala', NULL, 0, 0, 'assets/uploads/projects/main_image/xuo0NxEOdG.png', 1, 1, '2019-12-24 05:40:57', '2019-12-24 05:40:57', NULL),
(28, 'Nimal Paluwawala House', 'PRO_10028', 'nimal-paluwawala-house-28', 'Nawagamuwa', NULL, 0, 0, 'assets/uploads/projects/main_image/CJ8vyYjbwh.png', 1, 1, '2019-12-24 05:42:42', '2019-12-24 05:42:42', NULL),
(29, 'Thippola', 'PRO_10029', 'thippola-29', 'Colombo', NULL, 2, 0, 'assets/uploads/projects/main_image/IsJrvS1fOe.png', 1, 1, '2019-12-24 05:44:23', '2019-12-24 05:44:23', NULL),
(30, 'Randy House', 'PRO_10030', 'randy-house-30', 'Akuregoda Road, Palawatta', NULL, 0, 0, 'assets/uploads/projects/main_image/MQiHaXc62h.png', 1, 1, '2019-12-24 05:46:32', '2019-12-24 05:46:32', NULL),
(31, 'Rukmal De Silva House', 'PRO_10031', 'rukmal-de-silva-house-31', 'Rajagiriya, Kalapuwawa', NULL, 0, 0, 'assets/uploads/projects/main_image/B3bYOJsKDG.png', 1, 1, '2019-12-24 05:48:08', '2019-12-24 05:48:08', NULL),
(32, 'Welle Wadiya Beach Hotel', 'PRO_10032', 'welle-wadiya-beach-hotel-32', 'Kalpitiya', NULL, 2, 0, 'assets/uploads/projects/main_image/adoiSZYwuf.png', 1, 1, '2019-12-24 05:49:31', '2019-12-24 05:49:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE `project_images` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `img_src` varchar(199) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_images`
--

INSERT INTO `project_images` (`id`, `project_id`, `img_src`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'assets/uploads/projects/project 1/images/JE3gGP4mNx.jpg', '2019-12-24 04:29:39', '2019-12-24 04:29:39', NULL),
(2, 1, 'assets/uploads/projects/project 1/images/pZlufnDlbl.jpg', '2019-12-24 04:29:40', '2019-12-24 04:29:40', NULL),
(3, 1, 'assets/uploads/projects/project 1/images/rOt9xVZhjx.jpg', '2019-12-24 04:29:40', '2019-12-24 04:29:40', NULL),
(4, 2, 'assets/uploads/projects/project 2/images/5kiSImdWLy.jpg', '2019-12-24 04:40:27', '2019-12-24 04:40:27', NULL),
(5, 2, 'assets/uploads/projects/project 2/images/9dChZPDxjk.jpg', '2019-12-24 04:40:28', '2019-12-24 04:40:28', NULL),
(6, 2, 'assets/uploads/projects/project 2/images/h6ltAG7v1m.jpg', '2019-12-24 04:40:29', '2019-12-24 04:40:29', NULL),
(7, 3, 'assets/uploads/projects/project 3/images/TwLThi6xcQ.jpg', '2019-12-24 04:42:55', '2019-12-24 04:42:55', NULL),
(8, 3, 'assets/uploads/projects/project 3/images/o1RyQ9OoQf.jpg', '2019-12-24 04:42:56', '2019-12-24 04:42:56', NULL),
(9, 3, 'assets/uploads/projects/project 3/images/Gz13JiDtyx.jpg', '2019-12-24 04:42:57', '2019-12-24 04:42:57', NULL),
(10, 4, 'assets/uploads/projects/project 4/images/mxWksWhBX9.jpg', '2019-12-24 04:45:41', '2019-12-24 04:45:41', NULL),
(11, 4, 'assets/uploads/projects/project 4/images/G7uKdE4nor.jpg', '2019-12-24 04:45:41', '2019-12-24 04:45:41', NULL),
(12, 4, 'assets/uploads/projects/project 4/images/PkX88nxE4Q.jpg', '2019-12-24 04:45:41', '2019-12-24 04:45:41', NULL),
(13, 5, 'assets/uploads/projects/project 5/images/PaOiriuMY7.jpg', '2019-12-24 04:48:32', '2019-12-24 04:48:32', NULL),
(14, 5, 'assets/uploads/projects/project 5/images/tefFbLMj5r.jpg', '2019-12-24 04:48:32', '2019-12-24 04:48:32', NULL),
(15, 5, 'assets/uploads/projects/project 5/images/hCTBBTiOAH.jpg', '2019-12-24 04:48:32', '2019-12-24 04:48:32', NULL),
(16, 6, 'assets/uploads/projects/project 6/images/h4nW5L5RIj.jpg', '2019-12-24 04:50:57', '2019-12-24 04:50:57', NULL),
(17, 6, 'assets/uploads/projects/project 6/images/IvO8oosVlD.jpg', '2019-12-24 04:50:58', '2019-12-24 04:50:58', NULL),
(18, 6, 'assets/uploads/projects/project 6/images/Z2CRjNUxdz.jpg', '2019-12-24 04:50:58', '2019-12-24 04:50:58', NULL),
(19, 7, 'assets/uploads/projects/project 7/images/NLqHkBYWlv.jpg', '2019-12-24 04:52:24', '2019-12-24 04:52:24', NULL),
(20, 8, 'assets/uploads/projects/project 8/images/aNXqUmpvLo.jpg', '2019-12-24 04:54:34', '2019-12-24 04:54:34', NULL),
(21, 8, 'assets/uploads/projects/project 8/images/2Hb6anNzPX.jpg', '2019-12-24 04:54:34', '2019-12-24 04:54:34', NULL),
(22, 8, 'assets/uploads/projects/project 8/images/iDy0H6z0KA.jpg', '2019-12-24 04:54:35', '2019-12-24 04:54:35', NULL),
(23, 9, 'assets/uploads/projects/project 9/images/nOs9DpvXZE.jpg', '2019-12-24 04:57:34', '2019-12-24 04:57:34', NULL),
(24, 9, 'assets/uploads/projects/project 9/images/nFiZlGZNSY.jpg', '2019-12-24 04:57:34', '2019-12-24 04:57:34', NULL),
(25, 9, 'assets/uploads/projects/project 9/images/YA2jv3vK1q.jpg', '2019-12-24 04:57:35', '2019-12-24 04:57:35', NULL),
(26, 10, 'assets/uploads/projects/project 10/images/YRxq8vQig7.jpg', '2019-12-24 05:00:16', '2019-12-24 05:00:16', NULL),
(27, 10, 'assets/uploads/projects/project 10/images/YoyUihQqlF.jpg', '2019-12-24 05:00:16', '2019-12-24 05:00:16', NULL),
(28, 10, 'assets/uploads/projects/project 10/images/dmVjdKeWrK.jpg', '2019-12-24 05:00:16', '2019-12-24 05:00:16', NULL),
(29, 11, 'assets/uploads/projects/project 11/images/J0jYBzJv9u.jpg', '2019-12-24 05:01:18', '2019-12-24 05:01:18', NULL),
(30, 12, 'assets/uploads/projects/project 12/images/vepHy9yIzV.jpg', '2019-12-24 05:02:23', '2019-12-24 05:02:23', NULL),
(31, 13, 'assets/uploads/projects/project 13/images/sWLFoQtp3w.jpg', '2019-12-24 05:03:50', '2019-12-24 05:03:50', NULL),
(32, 13, 'assets/uploads/projects/project 13/images/KjZJFtzWmy.jpg', '2019-12-24 05:03:51', '2019-12-24 05:03:51', NULL),
(33, 13, 'assets/uploads/projects/project 13/images/WdU0DzwogM.jpg', '2019-12-24 05:03:52', '2019-12-24 05:03:52', NULL),
(34, 14, 'assets/uploads/projects/project 14/images/s5Yv0Rhvdq.jpg', '2019-12-24 05:06:18', '2019-12-24 05:06:18', NULL),
(35, 14, 'assets/uploads/projects/project 14/images/GmTXxTosBB.jpg', '2019-12-24 05:06:19', '2019-12-24 05:06:19', NULL),
(36, 14, 'assets/uploads/projects/project 14/images/Ja0NsT5aJQ.jpg', '2019-12-24 05:06:20', '2019-12-24 05:06:20', NULL),
(37, 15, 'assets/uploads/projects/project 15/images/3tKslYTXcq.jpg', '2019-12-24 05:07:58', '2019-12-24 05:07:58', NULL),
(38, 15, 'assets/uploads/projects/project 15/images/p7TshBE9WX.jpg', '2019-12-24 05:07:58', '2019-12-24 05:07:58', NULL),
(39, 15, 'assets/uploads/projects/project 15/images/OdWYs8s7mR.jpg', '2019-12-24 05:07:58', '2019-12-24 05:07:58', NULL),
(40, 16, 'assets/uploads/projects/project 16/images/xHlN6YnOl7.jpg', '2019-12-24 05:09:59', '2019-12-24 05:09:59', NULL),
(41, 16, 'assets/uploads/projects/project 16/images/ZRw5KMgVZp.jpg', '2019-12-24 05:10:00', '2019-12-24 05:10:00', NULL),
(42, 16, 'assets/uploads/projects/project 16/images/uogWcMl87t.jpg', '2019-12-24 05:10:00', '2019-12-24 05:10:00', NULL),
(43, 17, 'assets/uploads/projects/project 17/images/glbiKm4gSc.jpg', '2019-12-24 05:11:59', '2019-12-24 05:11:59', NULL),
(44, 17, 'assets/uploads/projects/project 17/images/OfdmYtY1se.jpg', '2019-12-24 05:12:00', '2019-12-24 05:12:00', NULL),
(45, 17, 'assets/uploads/projects/project 17/images/cxNCdoUwPY.jpg', '2019-12-24 05:12:01', '2019-12-24 05:12:01', NULL),
(46, 18, 'assets/uploads/projects/project 18/images/UwpJ2xrkbp.jpg', '2019-12-24 05:13:33', '2019-12-24 05:13:33', NULL),
(47, 18, 'assets/uploads/projects/project 18/images/BWV4GLnlhm.jpg', '2019-12-24 05:13:33', '2019-12-24 05:13:33', NULL),
(48, 18, 'assets/uploads/projects/project 18/images/NRhKEhEF2V.jpg', '2019-12-24 05:13:33', '2019-12-24 05:13:33', NULL),
(49, 19, 'assets/uploads/projects/project 19/images/OzDRV7MOCF.jpg', '2019-12-24 05:15:32', '2019-12-24 05:15:32', NULL),
(50, 19, 'assets/uploads/projects/project 19/images/3Ewusx0tK2.jpg', '2019-12-24 05:15:33', '2019-12-24 05:15:33', NULL),
(51, 19, 'assets/uploads/projects/project 19/images/aaslixuXft.jpg', '2019-12-24 05:15:34', '2019-12-24 05:15:34', NULL),
(52, 20, 'assets/uploads/projects/project 20/images/deauKIAkXa.jpg', '2019-12-24 05:18:46', '2019-12-24 05:18:46', NULL),
(53, 20, 'assets/uploads/projects/project 20/images/yKOgr09kyQ.jpg', '2019-12-24 05:18:47', '2019-12-24 05:18:47', NULL),
(54, 20, 'assets/uploads/projects/project 20/images/PpHZYKwUQ8.jpg', '2019-12-24 05:18:47', '2019-12-24 05:18:47', NULL),
(55, 21, 'assets/uploads/projects/project 21/images/y0kiHI8ttw.jpg', '2019-12-24 05:21:07', '2019-12-24 05:21:07', NULL),
(56, 21, 'assets/uploads/projects/project 21/images/Ab2kjxiG1i.jpg', '2019-12-24 05:21:08', '2019-12-24 05:21:08', NULL),
(57, 21, 'assets/uploads/projects/project 21/images/4E282nv9NA.jpg', '2019-12-24 05:21:09', '2019-12-24 05:21:09', NULL),
(58, 22, 'assets/uploads/projects/project 22/images/qNt5IgG7te.jpg', '2019-12-24 05:22:53', '2019-12-24 05:22:53', NULL),
(59, 23, 'assets/uploads/projects/project 23/images/yBOlOOCxse.jpg', '2019-12-24 05:24:59', '2019-12-24 05:24:59', NULL),
(60, 23, 'assets/uploads/projects/project 23/images/2VprfG1Vva.jpg', '2019-12-24 05:24:59', '2019-12-24 05:24:59', NULL),
(61, 23, 'assets/uploads/projects/project 23/images/8QjzcqUjo5.jpg', '2019-12-24 05:25:00', '2019-12-24 05:25:00', NULL),
(64, 24, 'assets/uploads/projects/project 24/images/ikFK9Ua931.jpg', '2019-12-24 05:34:41', '2019-12-24 05:34:41', NULL),
(65, 24, 'assets/uploads/projects/project 24/images/jUHI2elJ1t.jpg', '2019-12-24 05:34:44', '2019-12-24 05:34:44', NULL),
(66, 25, 'assets/uploads/projects/project 25/images/nNdVClgpJq.jpg', '2019-12-24 05:37:37', '2019-12-24 05:37:37', NULL),
(67, 25, 'assets/uploads/projects/project 25/images/efhSR7j4e8.jpg', '2019-12-24 05:37:38', '2019-12-24 05:37:38', NULL),
(68, 25, 'assets/uploads/projects/project 25/images/zoED0rg2nn.jpg', '2019-12-24 05:37:40', '2019-12-24 05:37:40', NULL),
(69, 26, 'assets/uploads/projects/project 26/images/unGLCo2V6J.jpg', '2019-12-24 05:39:38', '2019-12-24 05:39:38', NULL),
(70, 26, 'assets/uploads/projects/project 26/images/q7MexIeBGP.jpg', '2019-12-24 05:39:39', '2019-12-24 05:39:39', NULL),
(71, 26, 'assets/uploads/projects/project 26/images/cljFEbiKS5.jpg', '2019-12-24 05:39:40', '2019-12-24 05:39:40', NULL),
(72, 27, 'assets/uploads/projects/project 27/images/lleGiO46pQ.jpg', '2019-12-24 05:40:58', '2019-12-24 05:40:58', NULL),
(73, 27, 'assets/uploads/projects/project 27/images/qQl0MayLPA.jpg', '2019-12-24 05:40:59', '2019-12-24 05:40:59', NULL),
(74, 27, 'assets/uploads/projects/project 27/images/ZuChfkfIJH.jpg', '2019-12-24 05:41:00', '2019-12-24 05:41:00', NULL),
(75, 28, 'assets/uploads/projects/project 28/images/RzhLH4Sidx.jpg', '2019-12-24 05:42:43', '2019-12-24 05:42:43', NULL),
(76, 28, 'assets/uploads/projects/project 28/images/xqCDxTbV5d.jpg', '2019-12-24 05:42:43', '2019-12-24 05:42:43', NULL),
(77, 28, 'assets/uploads/projects/project 28/images/ofCkqfgXE2.jpg', '2019-12-24 05:42:45', '2019-12-24 05:42:45', NULL),
(78, 29, 'assets/uploads/projects/project 29/images/UqZJ3vX1wP.jpg', '2019-12-24 05:44:24', '2019-12-24 05:44:24', NULL),
(79, 29, 'assets/uploads/projects/project 29/images/zNO2Ov6uKb.jpg', '2019-12-24 05:44:24', '2019-12-24 05:44:24', NULL),
(80, 29, 'assets/uploads/projects/project 29/images/U16DONdY7W.jpg', '2019-12-24 05:44:24', '2019-12-24 05:44:24', NULL),
(81, 30, 'assets/uploads/projects/project 30/images/ZdfjG3wc9W.jpg', '2019-12-24 05:46:32', '2019-12-24 05:46:32', NULL),
(82, 30, 'assets/uploads/projects/project 30/images/LAMz5FP2PJ.jpg', '2019-12-24 05:46:33', '2019-12-24 05:46:33', NULL),
(83, 30, 'assets/uploads/projects/project 30/images/zSE8pqAJTv.jpg', '2019-12-24 05:46:34', '2019-12-24 05:46:34', NULL),
(84, 31, 'assets/uploads/projects/project 31/images/fquL9436mb.jpg', '2019-12-24 05:48:08', '2019-12-24 05:48:08', NULL),
(85, 31, 'assets/uploads/projects/project 31/images/B0WXD9FmQN.jpg', '2019-12-24 05:48:08', '2019-12-24 05:48:08', NULL),
(86, 31, 'assets/uploads/projects/project 31/images/QgaGt7rn7b.jpg', '2019-12-24 05:48:09', '2019-12-24 05:48:09', NULL),
(87, 32, 'assets/uploads/projects/project 32/images/tTKSnwbD2Q.jpg', '2019-12-24 05:49:31', '2019-12-24 05:49:31', NULL),
(88, 32, 'assets/uploads/projects/project 32/images/4YdhEDN8Pa.jpg', '2019-12-24 05:49:32', '2019-12-24 05:49:32', NULL),
(89, 32, 'assets/uploads/projects/project 32/images/M0UnTr3Zil.jpg', '2019-12-24 05:49:32', '2019-12-24 05:49:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', '2018-11-21 19:38:36', '2018-11-21 19:38:36');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_no` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone_no`, `email`, `password`, `remember_token`, `active`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', '0712587412', 'duo@admin.lk', '$2y$10$07fGKyOH29tuHDTZv8kAOORNpcu.UoX0z3rWJ.GwoCJjayBWS/Lvu', 'ixCfRgvHPil6LdCbyVUbzxb3ZbYtRGWTuyFRnl2LIqhvMkwBybutrKwUWLvJ', 1, 1, '2019-10-01 10:02:39', NULL),
(2, 'Nipuni Dinushika', '0723698525', 'nipuni@gmail.com', '$2y$10$wY51vhL13sCXyI9iT.xKWenPIVMqtZ7QhwOEZ5q4e21Or8HDEqKCK', NULL, 1, 1, '2019-10-02 01:06:21', '2019-11-28 08:32:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
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
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
