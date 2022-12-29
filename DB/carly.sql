-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 ديسمبر 2022 الساعة 20:19
-- إصدار الخادم: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carly`
--

-- --------------------------------------------------------

--
-- بنية الجدول `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `dl_image` varchar(255) NOT NULL,
  `national_id` varchar(14) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `booking`
--

INSERT INTO `booking` (`booking_id`, `name`, `email`, `phone`, `address`, `car_name`, `dl_image`, `national_id`, `start_date`, `end_date`, `user_id`) VALUES
(2, 'Sara Mahmoud', 'sara88@gmail.com', 1278885591, 'Giza Egypt', 'red- Tata Altroz', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_sVV8dm7MhT-AhH8hWhesHpL2JgiCvVEd3w&usqp=CAU', '30201478530215', '2023-01-03', '2023-01-07', 20),
(4, 'Aliaa Mohamed', 'aliaa96@gmail.com', 1123654798, 'Alex,Egypt', 'blue- Nissan Magnite', 'https://media.istockphoto.com/id/1186932138/vector/icon-drivers-license-in-flat-style-identity-card-id-card-identification-card-identity.jpg?s=612x612&w=0&k=20&c=E0Ad1FQYjguQRBXnulJ_lzTp7NrvB10FLZviQf6eq9o=', '30124569870333', '2022-12-14', '2022-12-25', 22),
(5, 'Ahmed Saad', 'ahmedsaad5000@gmail.com', 1587985638, 'Cairo,Egypt', 'Yellow- Merceds_Benz AMG', 'https://www.godigit.com/content/dam/godigit/directportal/en/contenthm/telangana-driving-licence.jpg', '30201157895230', '2022-12-27', '2023-01-01', 23),
(6, 'Zien Ahmed', 'zienahmed77@gmail.com', 1236489611, 'Damnhour,Egypt', ' Dark Metal Gray- Nissan Qashqai', 'https://cdn5.vectorstock.com/i/1000x1000/54/34/car-driver-licence-card-vector-16395434.jpg', '30201478530215', '2023-01-02', '2023-01-07', 6),
(8, 'Khalad Mohamed', 'khalad66@gmail.com', 1587985638, 'Egypt', 'Orange- Suzukiswift 2022', 'https://cdn.vectorstock.com/i/1000x1000/53/76/car-driver-licence-card-vector-16395376.webp', '30124569870333', '2023-01-06', '2023-01-13', 15),
(9, 'Rewan Mahmoud', 'rewan4563@gmail.com', 1587985638, 'Damnhour,Egypt', 'Yellow- Merceds_Benz AMG', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_sVV8dm7MhT-AhH8hWhesHpL2JgiCvVEd3w&usqp=CAU', '30201478530215', '2022-12-29', '2023-01-07', 31),
(11, 'Hassan Ahmed', 'hassan4521@gmail.com', 1587985638, 'Damnhour,Egypt', 'Yellow- Merceds_Benz AMG', 'https://cdn.vectorstock.com/i/1000x1000/53/76/car-driver-licence-card-vector-16395376.webp', '30201478530215', '2022-12-29', '2023-01-07', 34);

-- --------------------------------------------------------

--
-- بنية الجدول `car`
--

CREATE TABLE `car` (
  `car_id` int(10) UNSIGNED NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `color` varchar(50) NOT NULL,
  `steats_number` int(11) NOT NULL,
  `car_image` varchar(255) NOT NULL,
  `renting_price` float NOT NULL,
  `is_air_conditioned` tinyint(1) NOT NULL,
  `door_num` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `car`
--

INSERT INTO `car` (`car_id`, `car_name`, `color`, `steats_number`, `car_image`, `renting_price`, `is_air_conditioned`, `door_num`, `status`) VALUES
(1, 'Nissan Qashqai\r\n\r\n', 'Dark Metal Gray', 2, 'https://imgcdn.oto.com.sg/large/gallery/color/10/76/nissan-qashqai-color-743309.jpg', 1800, 1, 4, 'Manual'),
(2, 'Nissan Sentra 2017\r\n\r\n', 'White', 2, 'https://renty.ae/cdn-cgi/image/format=auto,fit=contain,width=408,height=258/https://renty.ae/uploads/car/photo/m/white_nissan-sentra_2019_2486_main_75992a96ecd5d65bcdc442065f5f7223.jpg', 2000, 1, 4, 'Manual'),
(3, 'Skoda Kushaq\r\n\r\n', 'Orange', 2, 'https://teqip.in/wp-content/uploads/2022/11/Skoda-Kushaq.jpg', 1700, 1, 4, 'Manual'),
(4, 'Renault Kiger', 'red', 2, 'https://imgd-ct.aeplcdn.com/664x415/n/cw/ec/115135/kiger-exterior-right-front-three-quarter-4.jpeg?v=637885758908623718&isig=0&q=75', 1500, 1, 4, 'Manual'),
(5, 'Merceds_Benz AMG', 'Yellow', 2, 'https://www.pngplay.com/wp-content/uploads/13/Mercedes-AMG-A-45-2019-PNG-Background.png', 4500, 1, 4, 'Manual'),
(6, 'Mahindra Bolero\r\n\r\n', 'White', 2, 'https://imgd-ct.aeplcdn.com/664x415/n/cw/ec/131179/bolero-exterior-right-front-three-quarter.jpeg?isig=0&q=75', 3000, 1, 4, 'Manual'),
(7, 'Nissan Magnite\r\n\r\n', 'blue', 2, 'https://imgd.aeplcdn.com/1056x594/n/cw/ec/45795/magnite-exterior-right-front-three-quarter-5.jpeg?isig=0&q=75&wm=1', 1750, 1, 4, 'Manual'),
(8, 'Tata Altroz', 'red', 2, 'https://imgd.aeplcdn.com/664x374/n/cw/ec/32597/altroz-exterior-right-front-three-quarter-79.jpeg?isig=0&q=75', 1200, 1, 4, 'Manual'),
(9, 'Kia 2021', 'Black', 2, 'https://4.bp.blogspot.com/-Wk3Hs11m674/WOD8ty8t-II/AAAAAAAAC5Y/lfyMp7wvJs04VzhuI16MRcQ_J4EX5Tk8ACLcB/s1600/kia-niro-%2B%25287%2529.jpg', 3500, 1, 4, 'Manual'),
(10, 'Suzukiswift 2022\r\n\r\n', 'Orange', 2, 'https://ellithy.com/wp-content/uploads/2021/08/proudct.jpg', 2300, 1, 4, 'Manual'),
(11, 'Hendy Ford Chichester\r\n\r\n', 'Green', 2, 'https://imgd.aeplcdn.com/0x0/n/jiurisa_1467687.jpg', 1850, 1, 4, 'Manual'),
(12, 'Skoda Fabia\r\n\r\n', 'Blue', 2, 'https://skodavisualizer.blob.core.windows.net/skoda3d/scala.jpg', 1550, 1, 4, 'Manual');

-- --------------------------------------------------------

--
-- بنية الجدول `feedback`
--

CREATE TABLE `feedback` (
  `FD_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `feedback`
--

INSERT INTO `feedback` (`FD_id`, `user_id`, `email`, `message`) VALUES
(1, 7, 'mahmedmahmoud99@gmail.com', 'the car is very good'),
(3, 18, 'yamen77@gmail.com', 'nice car'),
(4, 6, 'zienahmed77@gmail.com', 'the car is very good'),
(5, 7, 'mahmedmahmoud99@gmail.com', 'nice car'),
(6, 8, 'nourhan11@gmail.com', 'nice car'),
(7, 9, 'monaakram56@gmail.com', 'The service provided by the site is excellent'),
(8, 10, 'naden2365@gmail.com', 'nice car'),
(9, 11, 'reemmostaf125@gmail.com', 'The service provided by the site is excellent'),
(13, 15, 'khalad66@gmail.com', 'The service provided by the site is excellent'),
(14, 13, 'ahmedhady41@gmail.com', 'the car is very good'),
(16, 31, 'rewan4563@gmail.com', 'the car is very good'),
(17, 32, 'mohamed4123@gmail.com', 'the car is very good'),
(18, 34, 'hassan4521@gmail.com', 'the car is very good');

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `password`, `is_admin`) VALUES
(1, 'Nada', 'El-Habrouk', 'nadasaad5000@gmail.com', '120000', 1),
(2, 'Rokaia', 'Shreet', 'rokaiamohamed55@gmail.com', '123000', 1),
(3, 'Abdallh', 'Mostafa', 'abdallhmostafa54@gmail.com', '10230', 1),
(4, 'Mostafa', 'Ibrahim', 'mostafaibrahim78@gmail.com', '125463', 1),
(5, 'Ahmed', 'Kalash', 'ahmedkalash54@gmail.com', '741235', 1),
(6, 'Zien', 'Ahmed', 'zienahmed77@gmail.com', '12000', 0),
(7, 'Mohamed', 'Mahmoud', 'mahmedmahmoud99@gmail.com', '500500', 0),
(8, 'Nourhan', 'Khalad', 'nourhan11@gmail.com', '987456', 0),
(9, 'Mona', 'Akram', 'monaakram56@gmail.com', '151612', 0),
(10, 'Naden', 'Nour', 'naden2365@gmail.com', '1234567895', 0),
(11, 'Reem', 'Mostafa', 'reemmostaf125@gmail.com', '45682', 0),
(12, 'Makram', 'Mahmoud', 'makram012@gmail.com', '35700', 0),
(13, 'Ahmed', 'Hady', 'ahmedhady41@gmail.com', '1200', 0),
(14, 'Slem', 'Ahmed', 'slem88@gmail.com', '56987', 0),
(15, 'Khalad', 'Mahmed', 'khalad66@gmail.com', '123654789', 0),
(16, 'Saad', 'Fathi', 'saad48@gmail.com', '505050', 0),
(17, 'Nada', 'Sobhy', 'nadasobhy@gmail.com', '753951', 0),
(18, 'Yamen', 'Mohamed', 'yamen77@gmail.com', '12300', 0),
(19, 'Asmaa', 'Gamal', 'asmaagamal97@gmail.com', '78951', 0),
(20, 'Sara', 'Mahmoud', 'sara88@gmail.com', '753951', 0),
(21, 'Rofayda', 'Mahmed', 'rofayda890@gmail.com', '123456', 0),
(22, 'Aliaa', 'Mohamed', 'aliaa96@gmail.com', '414141', 0),
(23, 'Ahmed', 'Saad', 'ahmedsaad500@gmail.com', '741852', 0),
(24, 'Rana', 'Akram', 'rana@gmail.com', '369258', 0),
(25, 'Amira', 'Tarek', 'amira77@gmail.com', '852258', 0),
(28, 'khalad', 'salm', 'khalad88@gmail.com', '1452', 0),
(29, 'hassan', 'salm', 'hassan845@gmail.com', '7896', 0),
(30, 'nada', 'saad', 'nada77@gmail.com', '123654', 0),
(31, 'rewan', 'Mahmoud', 'rewan4563@gmail.com', '123456', 0),
(32, 'Mohamed', 'ahmed', 'mohamed4123@gmail.com', '159753', 0),
(34, 'Hassan', 'ahmed', 'hassan4521@gmail.com', '12300', 0),
(36, 'Mohamed', 'ahmed', 'mohamed7990@gmail.com', '1230', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FD_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FD_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
