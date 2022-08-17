-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2022 at 12:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoping`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) DEFAULT NULL,
  `cat_desc` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_by` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_by` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_desc`, `status`, `created_by`, `updated_by`) VALUES
(3, 'clothes', 'jeans,shirt,sweater', '0', '2022-08-02 06:35:28.245705', '2022-08-02 06:35:28.245705'),
(6, 'electronics', 'electronics', '0', '2022-08-02 06:42:48.609673', '2022-08-02 06:42:48.609673'),
(7, 'shoes', 'shoes', '0', '2022-08-02 06:43:07.202520', '2022-08-02 06:43:07.202520'),
(8, 'cosmetic', 'cosmetic', '0', '2022-08-02 06:43:18.782021', '2022-08-02 06:43:18.782021'),
(9, 'watch', 'watch', '0', '2022-08-03 09:58:14.350960', '2022-08-03 09:58:14.350960'),
(10, 'home appliance', 'yes', '0', '2022-08-03 13:18:51.724333', '2022-08-03 13:18:51.724333');

-- --------------------------------------------------------

--
-- Table structure for table `logo_slider`
--

CREATE TABLE `logo_slider` (
  `logo_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_by` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_by` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo_slider`
--

INSERT INTO `logo_slider` (`logo_id`, `image`, `created_by`, `updated_by`) VALUES
(14, 'vendor-1.jpg', '2022-08-04 06:39:01.009056', '2022-08-04 06:39:01.009056'),
(15, 'vendor-2.jpg', '2022-08-04 06:39:06.928983', '2022-08-04 06:39:06.928983'),
(16, 'vendor-3.jpg', '2022-08-04 06:39:19.870567', '2022-08-04 06:39:19.870567'),
(17, 'vendor-4.jpg', '2022-08-04 06:39:27.340700', '2022-08-04 06:39:27.340700'),
(18, 'vendor-5.jpg', '2022-08-04 06:39:32.965918', '2022-08-04 06:39:32.965918'),
(19, 'vendor-6.jpg', '2022-08-04 06:39:39.855769', '2022-08-04 06:39:39.855769'),
(20, 'vendor-7.jpg', '2022-08-04 06:39:45.757520', '2022-08-04 06:39:45.757520'),
(21, 'vendor-8.jpg', '2022-08-04 06:39:50.525027', '2022-08-04 06:39:50.525027');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `created_by` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_by` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `amount`, `payment_method`, `created_by`, `updated_by`) VALUES
(77, 2, '360', 'Direct Check', '2022-08-17 10:26:38.825620', '2022-08-17 10:26:38.825620'),
(78, 2, '300', 'Paypal', '2022-08-17 10:26:58.655910', '2022-08-17 10:26:58.655910'),
(79, 2, '600', 'Paypal', '2022-08-17 10:48:20.554313', '2022-08-17 10:48:20.554313');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `order_id`, `product_id`, `amount`, `product_name`, `quantity`) VALUES
(31, 77, 9, '120', 'wind-shirt', '3'),
(32, 78, 14, '100', 'table lamp', '3'),
(33, 79, 10, '120', 'drone', '2'),
(34, 79, 12, '120', 'shoes', '3');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_id` int(255) NOT NULL,
  `mrp` float NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `desc_text` text NOT NULL,
  `keyword` varchar(11) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `cat_id`, `sub_id`, `mrp`, `price`, `quantity`, `meta_desc`, `desc_text`, `keyword`, `image`) VALUES
(8, 'camera', 6, 5, 123, 120, 10, 'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc ipsum et, labore clita lorem magna duo dolor no sea Nonumy', 'Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.\r\n\r\nDolore magna est eirmod sanctus dolor, amet diam et eirmod et ipsum. Amet dolore tempor consetetur sed lorem dolor sit lorem tempor. Gubergren amet amet labore sadipscing clita clita diam clita. Sea amet et sed ipsum lorem elitr et, amet et labore voluptua sit rebum. Ea erat sed et diam takimata sed justo. Magna takimata justo et amet magna et.', 'sku1', 'product-1.jpg'),
(9, 'wind-shirt', 3, 1, 123, 120, 10, 'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc ipsum et, labore clita lorem magna duo dolor no sea Nonumy', 'Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.\r\n\r\nDolore magna est eirmod sanctus dolor, amet diam et eirmod et ipsum. Amet dolore tempor consetetur sed lorem dolor sit lorem tempor. Gubergren amet amet labore sadipscing clita clita diam clita. Sea amet et sed ipsum lorem elitr et, amet et labore voluptua sit rebum. Ea erat sed et diam takimata sed justo. Magna takimata justo et amet magna et.', 'sku2', 'product-2.jpg'),
(10, 'drone', 6, 7, 123, 120, 10, 'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc ipsum et, labore clita lorem magna duo dolor no sea Nonumy', 'Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.\r\n\r\nDolore magna est eirmod sanctus dolor, amet diam et eirmod et ipsum. Amet dolore tempor consetetur sed lorem dolor sit lorem tempor. Gubergren amet amet labore sadipscing clita clita diam clita. Sea amet et sed ipsum lorem elitr et, amet et labore voluptua sit rebum. Ea erat sed et diam takimata sed justo. Magna takimata justo et amet magna et.', 'sku3', 'product-5.jpg'),
(11, 'watch', 9, 11, 123, 120, 5, 'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc ipsum et, labore clita lorem magna duo dolor no sea Nonumy', 'Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.\r\n\r\nDolore magna est eirmod sanctus dolor, amet diam et eirmod et ipsum. Amet dolore tempor consetetur sed lorem dolor sit lorem tempor. Gubergren amet amet labore sadipscing clita clita diam clita. Sea amet et sed ipsum lorem elitr et, amet et labore voluptua sit rebum. Ea erat sed et diam takimata sed justo. Magna takimata justo et amet magna et.', 'sku4', 'product-6.jpg'),
(12, 'shoes', 7, 3, 123, 120, 1, 'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc ipsum et, labore clita lorem magna duo dolor no sea Nonumy', 'Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.\r\n\r\nDolore magna est eirmod sanctus dolor, amet diam et eirmod et ipsum. Amet dolore tempor consetetur sed lorem dolor sit lorem tempor. Gubergren amet amet labore sadipscing clita clita diam clita. Sea amet et sed ipsum lorem elitr et, amet et labore voluptua sit rebum. Ea erat sed et diam takimata sed justo. Magna takimata justo et amet magna et.', 'sku5', 'cat-3.jpg'),
(13, 'face cream', 8, 6, 90, 100, 2, 'Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum r', 'Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.\r\n\r\nDolore magna est eirmod sanctus dolor, amet diam et eirmod et ipsum. Amet dolore tempor consetetur sed lorem dolor sit lorem tempor. Gubergren amet amet labore sadipscing clita clita diam clita. Sea amet et sed ipsum lorem elitr et, amet et labore voluptua sit rebum. Ea erat sed et diam takimata sed justo. Magna takimata justo et amet magna et.', 'sku6', 'cat-4.jpg'),
(14, 'table lamp', 10, 12, 120, 100, 2, 'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc ipsum et, labore clita lorem magna duo dolor no sea Nonumy', 'Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.\r\n\r\nDolore magna est eirmod sanctus dolor, amet diam et eirmod et ipsum. Amet dolore tempor consetetur sed lorem dolor sit lorem tempor. Gubergren amet amet labore sadipscing clita clita diam clita. Sea amet et sed ipsum lorem elitr et, amet et labore voluptua sit rebum. Ea erat sed et diam takimata sed justo. Magna takimata justo et amet magna et.', 'sku7', 'product-3.jpg'),
(15, 'top-shirt', 3, 1, 90, 70, 3, 'Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum r', 'Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.\r\n\r\nDolore magna est eirmod sanctus dolor, amet diam et eirmod et ipsum. Amet dolore tempor consetetur sed lorem dolor sit lorem tempor. Gubergren amet amet labore sadipscing clita clita diam clita. Sea amet et sed ipsum lorem elitr et, amet et labore voluptua sit rebum. Ea erat sed et diam takimata sed justo. Magna takimata justo et amet magna et.', 'sku8', 'product-7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shoping_table`
--

CREATE TABLE `shoping_table` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `psw` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `created_by` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_by` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoping_table`
--

INSERT INTO `shoping_table` (`id`, `first_name`, `last_name`, `email`, `psw`, `phone`, `gender`, `image`, `user_type`, `created_by`, `updated_by`) VALUES
(1, 'abhishek', 'kashyap', 'abhikumar06071998@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '8351998565', 'male', 'service-image-02.jpg', 'admin', '2022-08-01 06:32:33.620698', '2022-08-01 06:32:33.620698'),
(2, 'vishal', 'kumar', 'kvishal801@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '9805925723', 'male', 'slide-03.jpg', NULL, '2022-08-01 06:36:00.865202', '2022-08-01 06:36:00.865202'),
(3, 'vishal', 'kumar', 'kvishal802@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '9805925723', 'male', 'slide-03.jpg', NULL, '2022-08-01 06:36:30.033577', '2022-08-01 06:36:30.033577');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(255) DEFAULT NULL,
  `slider_desc` varchar(255) DEFAULT NULL,
  `slider_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_name`, `slider_desc`, `slider_img`) VALUES
(1, 'Women Fashion', 'Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam', 'carousel-2.jpg'),
(2, 'Men Fashion', 'Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam', 'carousel-1.jpg'),
(3, 'Kids Fashion', 'Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam', 'carousel-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(255) DEFAULT NULL,
  `cat_id` int(11) NOT NULL,
  `created_by` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_by` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_id`, `sub_name`, `cat_id`, `created_by`, `updated_by`) VALUES
(1, 'Shirts', 3, '2022-08-02 07:24:21.967680', '2022-08-02 07:24:21.967680'),
(2, 'Jeans', 3, '2022-08-02 07:24:48.720225', '2022-08-02 07:24:48.720225'),
(3, 'casual', 7, '2022-08-02 07:25:41.484254', '2022-08-02 07:25:41.484254'),
(4, 'sports', 7, '2022-08-02 07:25:48.617695', '2022-08-02 07:25:48.617695'),
(5, 'camera', 6, '2022-08-02 07:25:56.779677', '2022-08-02 07:25:56.779677'),
(6, 'cream', 8, '2022-08-02 07:26:36.179466', '2022-08-02 07:26:36.179466'),
(7, 'Drone', 6, '2022-08-02 07:27:11.243980', '2022-08-02 07:27:11.243980'),
(11, 'hand watch', 9, '2022-08-03 09:58:28.632786', '2022-08-03 09:58:28.632786'),
(12, 'home lamp', 10, '2022-08-03 13:19:09.563916', '2022-08-03 13:19:09.563916');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `logo_slider`
--
ALTER TABLE `logo_slider`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shoping_table`
--
ALTER TABLE `shoping_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `logo_slider`
--
ALTER TABLE `logo_slider`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `shoping_table`
--
ALTER TABLE `shoping_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
