

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `fitnesshub_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Dumbell', 'Dumbell 1', 99.00, './assets/products/dumbell1.webp', '2024-02-25 06:30:25'), -- NOW()
(2, 'Kettle-Bell', 'Kettle Bell 1', 89.00, './assets/products/kb1.webp', '2024-02-25 06:30:25'),
(3, 'Weight-Plate', 'Weight Plate 1', 95.00, './assets/products/wp1.webp', '2024-02-25 06:30:25'),
(4, 'Yoga-Mat', 'Yoga Mat 1', 25.00, './assets/products/ym1.webp', '2024-02-25 06:30:25'),
(5, 'Flooring', 'Flooring 1', 59.00, './assets/products/gym-flooring1.webp', '2024-02-25 06:30:25'),
(6, 'Accessories', 'Finger Exerciser', 09.00, './assets/products/finger-exerciser.webp', '2024-02-25 06:30:25'),
(7, 'Machine', 'Treadmill', 349.00, './assets/products/treadmill.webp', '2024-02-25 06:30:25'),
(8, 'Supplement', 'Supplement 1', 199.00, './assets/products/supplement1.webp', '2024-02-25 06:30:25'),
(9, 'Bottle', 'Bottle 1', 15.00, './assets/products/bottle1.webp', '2024-02-25 06:30:25'),
(10, 'Tracker', 'Tracker 1', 119.00, './assets/products/shoes1.webp', '2024-02-25 06:30:25'),
(11, 'Bag', 'Bag 1', 49.00, './assets/products/bag1.webp', '2024-02-25 06:30:25'),
(12, 'Dumbell', 'Dumbell 2', 99.00, './assets/products/dumbell2.webp', '2024-02-25 06:30:25'),
(13, 'Kettle-Bell', 'Kettle Bell 2', 89.00, './assets/products/kb2.webp', '2024-02-25 06:30:25'),
(14, 'Weight-Plate', 'Weight Plate 2', 95.00, './assets/products/wp2.webp', '2024-02-25 06:30:25'),
(15, 'Yoga-Mat', 'Yoga Mat 2', 25.00, './assets/products/ym2.webp', '2024-02-25 06:30:25'),
(16, 'Flooring', 'Flooring 2', 59.00, './assets/products/gym-flooring2.webp', '2024-02-25 06:30:25'),
(17, 'Accessories', 'Wrist Band', 09.00, './assets/products/wrist-band.webp', '2024-02-25 06:30:25'),
(18, 'Machine', 'Pedal Machine', 159.00, './assets/products/pedal-machine.webp', '2024-02-25 06:30:25'),
(19, 'Supplement', 'Supplement 2', 199.00, './assets/products/supplement2.webp', '2024-02-25 06:30:25'),
(20, 'Bottle', 'Bottle 2', 15.00, './assets/products/bottle2.webp', '2024-02-25 06:30:25'),
(21, 'Tracker', 'Tracker 2', 119.00, './assets/products/shoes2.webp', '2024-02-25 06:30:25'),
(22, 'Bag', 'Bag 2', 49.00, './assets/products/bag2.webp', '2024-02-25 06:30:25'),
(23, 'Dumbell', 'Dumbell 3', 99.00, './assets/products/dumbell3.webp', '2024-02-25 06:30:25'),
(24, 'Kettle-Bell', 'Kettle Bell 3', 89.00, './assets/products/kb3.webp', '2024-02-25 06:30:25'),
(25, 'Weight-Plate', 'Weight Plate 3', 95.00, './assets/products/wp3.webp', '2024-02-25 06:30:25'),
(26, 'Yoga-Mat', 'Yoga Mat 3', 25.00, './assets/products/ym3.webp', '2024-02-25 06:30:25'),
(27, 'Flooring', 'Flooring 3', 59.00, './assets/products/gym-flooring3.webp', '2024-02-25 06:30:25'),
(28, 'Accessories', 'Skipping Rope', 09.00, './assets/products/skipping-rope.webp', '2024-02-25 06:30:25'),
(29, 'Machine', 'Cycle', 299.00, './assets/products/cycle.webp', '2024-02-25 06:30:25'),
(30, 'Supplement', 'Supplement 3', 199.00, './assets/products/supplement3.webp', '2024-02-25 06:30:25'),
(31, 'Bottle', 'Bottle 3', 15.00, './assets/products/bottle3.webp', '2024-02-25 06:30:25'),
(32, 'Tracker', 'Tracker 3', 119.00, './assets/products/shoes3.webp', '2024-02-25 06:30:25'),
(33, 'Bag', 'Bag 3', 49.00, './assets/products/bag3.webp', '2024-02-25 06:30:25'),
(34, 'Dumbell', 'Dumbell 4', 99.00, './assets/products/dumbell4.webp', '2024-02-25 06:30:25'),
(35, 'Kettle-Bell', 'Kettle Bell 4', 89.00, './assets/products/kb4.webp', '2024-02-25 06:30:25'),
(36, 'Weight-Plate', 'Weight Plate 4', 95.00, './assets/products/wp4.webp', '2024-02-25 06:30:25'),
(37, 'Yoga-Mat', 'Yoga Mat 4', 25.00, './assets/products/ym4.webp', '2024-02-25 06:30:25'),
(38, 'Accessories', 'Hiking Knee', 09.00, './assets/products/hiking-knee.webp', '2024-02-25 06:30:25'),
(39, 'Supplement', 'Supplement 4', 199.00, './assets/products/supplement4.webp', '2024-02-25 06:30:25'),
(40, 'Tracker', 'Tracker 4', 119.00, './assets/products/shoes4.webp', '2024-02-25 06:30:25'),
(41, 'Bag', 'Bag 4', 49.00, './assets/products/bag4.webp', '2024-02-25 06:30:25'),
(42, 'Dumbell', 'Dumbell 5', 99.00, './assets/products/dumbell5.webp', '2024-02-25 06:30:25'),
(43, 'Supplement', 'Supplement 5', 199.00, './assets/products/supplement5.webp', '2024-02-25 06:30:25'),
(44, 'Tracker', 'Tracker 5', 119.00, './assets/products/shoes5.webp', '2024-02-25 06:30:25'),
(45, 'Bag', 'Bag 5', 49.00, './assets/products/bag5.webp', '2024-02-25 06:30:25'),
(46, 'Supplement', 'Supplement 6', 199.00, './assets/products/supplement6.webp', '2024-02-25 06:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Kunal', 'Mahor', '2024-02-25 06:30:25'),
(2, 'Anurag', 'Chauhan', '2024-02-25 06:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

