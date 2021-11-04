-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 03:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arys_fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(10) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `category_name`, `category_slug`) VALUES
(12, 'Baju', 'baju'),
(13, 'Celana ', 'celana-'),
(14, 'Dompet ', 'dompet-'),
(15, 'Aksesoris', 'aksesoris'),
(16, 'Sepatu', 'sepatu'),
(17, 'Jaket Pria', 'jaket-pria'),
(18, 'Kaos Kaki Pria', 'kaos-kaki-pria'),
(19, 'Tas Pria', 'tas-pria'),
(20, 'sandal pria', 'sandal-pria');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(10) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_slug` varchar(255) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_discount` int(10) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_subcategory` varchar(255) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `product_name`, `product_slug`, `product_price`, `product_discount`, `product_category`, `product_subcategory`, `product_quantity`, `product_image`) VALUES
(2, 'Kemeja Retro Casual Pria', 'kemeja-retro-casual-pria', 175000, 46, 'Baju', 'Baju Kemeja Lengan Pendek', 2, 'kemeja retro casual pria.jpg'),
(3, 'Dompet Panjang Pria Bahan Kulit', 'dompet-panjang-pria-bahan-kulit', 545000, 73, 'Kategori', 'Dompet Panjang Pria', 2, 'Dompet panjang pria.jpeg'),
(4, 'Dompet Model Lipat ', 'dompet-model-lipat-', 75500, 35, 'Kategori', 'Dompet Pendek Pria', 2, 'Dompet Model Lipat Bahan.jpg'),
(5, 'Dompet Pria Bahan Kanvas', 'dompet-pria-bahan-kanvas', 100000, 88, 'Kategori', 'Dompet Pendek Pria', 2, 'dompet pria bahan kanvas.jpg'),
(6, 'T-Shirt Picture Black', 't-shirt-picture-black', 186000, 65, 'Baju', 'Kaos lengan pendek', 2, 'tshift kaos.jpg'),
(7, 'kaos katun pria', 'kaos-katun-pria', 120000, 42, 'Baju', 'Kaos lengan pendek', 2, 'kaos katun.jpg'),
(8, 'singlet pria polos', 'singlet-pria-polos', 18500, 30, 'Baju', 'singlet polos pria', 2, 'singlet polos.jpg'),
(9, 'baju kemeja panjang elegan', 'baju-kemeja-panjang-elegan', 189000, 41, 'Baju', 'baju kemeja panjang', 2, 'kemeja lengan panjang polos.jpg'),
(10, 'kaos casual pria lengan pendek', 'kaos-casual-pria-lengan-pendek', 26000, 15, 'Baju', 'Kaos lengan pendek', 2, 'kaos casual pria.jpg'),
(11, 'sepatu sneakers pria', 'sepatu-sneakers-pria', 299000, 76, 'Sepatu', 'sepatu casual', 2, 'sepatu sneakers pria.webp'),
(12, 'baju kemeja lengan panjang motif', 'baju-kemeja-lengan-panjang-motif', 84000, 41, 'Kategori', 'baju kemeja panjang', 2, 'kameja lengan panjang.webp'),
(13, 'Tas Ransel Pria Modern', 'tas-ransel-pria-modern', 66000, 32, 'Tas Pria', 'Tas Ransel', 2, 'tas ransel pria.webp'),
(14, 'Tas Ransel Polos', 'tas-ransel-polos', 279000, 37, 'Tas Pria', 'Tas Ransel', 2, 'tas ransel 2.jpg'),
(15, 'Tas Ransell Casual', 'tas-ransell-casual', 199000, 70, 'Tas Pria', 'Tas Ransel', 2, 'tas ransel.jpg'),
(16, 'sling bag', 'sling-bag', 150000, 35, 'Tas Pria', 'Sling Bag Pria', 2, 'sling bag tas.jpg'),
(17, 'Nike Sandal Jepit ', 'nike-sandal-jepit-', 399900, 65, 'sandal pria', 'sandal jepit', 2, 'sandal jepit pria.jpg'),
(18, 'Celana Joger Pria Abu-Abu', 'celana-joger-pria-abu-abu', 45000, 14, 'Celana', 'celana panjang', 2, 'Celana joker.webp'),
(19, 'Celana Pendek Pinggang Karet', 'celana-pendek-pinggang-karet', 209900, 15, 'Celana', 'celana pendek', 2, 'celana pendek.jpg'),
(20, 'kaos polos elegan', 'kaos-polos-elegan', 87000, 22, 'Baju', 'Baju Kaos Polos', 2, 'kaos polos.jpg'),
(21, 'Sandal Pria Kulit', 'sandal-pria-kulit', 100000, 55, 'sandal pria', 'sandal jepit', 2, 'sandal jepit kulit pria.jpg'),
(22, 'slipper strap pria', 'slipper-strap-pria', 178000, 52, 'sandal pria', 'sandal jepit', 2, 'slipper strap.jpg'),
(23, 'Sepatu Safety Pria', 'sepatu-safety-pria', 220000, 25, 'Sepatu', 'sepatu casual', 2, 'sepatu safety.jpg'),
(24, 'Sepatu Kets Pria', 'sepatu-kets-pria', 342000, 32, 'Sepatu', 'sepatu casual', 2, 'sepaatu kets pria.jpg'),
(25, 'Tas Slempang Pria', 'tas-slempang-pria', 35500, 61, 'Tas Pria', 'Tas Samping', 2, 'tas selempang pria.png'),
(26, 'celana cargo pendek', 'celana-cargo-pendek', 53999, 13, 'Celana ', 'Celana Pendek Pria', 2, 'celana cargo pendek.jpg'),
(27, 'Jaket Jeans Pria', 'jaket-jeans-pria', 155000, 39, 'Jaket Pria', 'Jaket Jeans', 2, 'jaket jeans pria.jpg'),
(28, 'celana pendek pria surfing', 'celana-pendek-pria-surfing', 55000, 22, 'Celana ', 'celana pendek', 2, 'celana pendek rpia surfing.jpg'),
(29, 'kaos polos cotton ', 'kaos-polos-cotton-', 23000, 13, 'Baju', 'Baju Kaos Lengan Pendek', 2, 'kaos cooton polos.jpg'),
(30, 'Celana pendek chino', 'celana-pendek-chino', 300000, 67, 'Celana', 'Celana Pendek Pria', 2, 'celana pendek chino.jpg'),
(31, 'Dompet Lipat kulit', 'dompet-lipat-kulit', 154200, 63, 'Dompet ', 'Dompet Pendek Pria', 2, 'dompet lipat kulit kain.jpg'),
(32, 'Jaket Afraid Black', 'jaket-afraid-black', 479000, 61, 'Jaket Pria', 'Jaket Jeans', 2, 'jaket afraid.jpg'),
(33, 'Kemeja Pendek Slim Fit Dark Grey', 'kemeja-pendek-slim-fit-dark-grey', 199900, 56, 'Baju', 'Baju Kemeja Lengan Pendek', 2, 'kemeja dark grey slim lengan pendek.jpg'),
(34, 'Sweater Hoodie Gradasi', 'sweater-hoodie-gradasi', 232475, 33, 'Jaket Pria', 'Jaket Hoodie', 2, 'hoodie gradasi.jpg'),
(35, 'Sepatu Sneakers Grey', 'sepatu-sneakers-grey', 253000, 41, 'Sepatu', 'sepatu casual', 2, 'Sepatu sneker gray.jpg'),
(36, 'Sandal Jepit Fighting ', 'sandal-jepit-fighting-', 72900, 20, 'sandal pria', 'sandal jepit', 2, 'sandal jepit fighting.jpg'),
(37, 'Tas Consina Punggung Trekkers', 'tas-consina-punggung-trekkers', 495000, 15, 'Tas Pria', 'Tas Ransel', 2, 'consina tas punggung.jpg'),
(38, 'Starcroos Kaos pria', 'starcroos-kaos-pria', 155000, 31, 'Baju', 'Kaos lengan pendek', 2, 'startcroos kaos pria.jpg'),
(39, 'Sepatu Casual & Sport', 'sepatu-casual-sport', 199800, 49, 'Sepatu', 'sepatu casual', 2, 'sepatu casual dan sport.jpg'),
(40, 'Kemeja Casual Retro', 'kemeja-casual-retro', 175999, 46, 'Baju', 'Baju Kemeja Lengan Pendek', 2, 'kemeja casual.jpg'),
(41, 'Kaos Screamous Black', 'kaos-screamous-black', 185000, 65, 'Baju', 'Kaos lengan pendek', 2, 'kaos screamous.jpg'),
(42, 'Waist Bag', 'waist-bag', 66000, 74, 'Tas Pria', 'Tas Samping', 2, 'waisrbag.jpg'),
(43, 'Kaos Distro Elegan', 'kaos-distro-elegan', 44000, 9, 'Baju', 'Kaos lengan pendek', 2, 'kaos distro pria.jpg'),
(44, 'Sweater Rajut', 'sweater-rajut', 85000, 36, 'Jaket Pria', 'Sweater Polos', 2, 'Sweater rajut.jpg'),
(45, 'Celana chino Panjang erigo', 'celana-chino-panjang-erigo', 350000, 64, 'Celana ', 'celana panjang', 2, 'celana chino.jpg'),
(46, 'Sepatu Pantofel Pria', 'sepatu-pantofel-pria', 85000, 39, 'Sepatu', 'Sepatu Pantopel', 2, 'Sepatu Pantofel Pria.webp'),
(47, 'Tas Samping 5 in 1', 'tas-samping-5-in-1', 170000, 76, 'Tas Pria', 'Tas Samping', 2, 'Tas samping Pria 5 in 1.webp'),
(48, 'Kemeja Panjang Soket', 'kemeja-panjang-soket', 157600, 50, 'Baju', 'Baju Kemeja Lengan Panjang', 2, 'kemeja lengan panjang soket.jpg'),
(49, 'Sepatu Pria Running', 'sepatu-pria-running', 35000, 11, 'Sepatu', 'Sepatu Casual', 2, 'Sepatu Pria Running.jpg'),
(50, 'Waist Bag Pria', 'waist-bag-pria', 20000, 18, 'Tas Pria', 'Tas Samping', 2, 'Waitbag.jpg'),
(51, 'Sepatu Boots Pria', 'sepatu-boots-pria', 360000, 54, 'Sepatu', 'Sepatu Pantopel', 2, 'Sepatu boof.webp'),
(52, 'Sepatu Running pria', 'sepatu-running-pria', 35000, 11, 'Sepatu', 'sepatu casual', 2, 'Sepatu Lari 1.webp'),
(53, 'Jaket windbreaker ', 'jaket-windbreaker-', 300000, 50, 'Jaket Pria', 'Jaket Parasut ', 2, 'Jaket windbreaker.webp'),
(54, 'Kemeja Semi Jeans Lengan Pendek', 'kemeja-semi-jeans-lengan-pendek', 90000, 50, 'Baju', 'Baju Kemeja Lengan Pendek', 2, 'Kemeja semi jeans.webp'),
(55, 'Batik Lengan Panjang ', 'batik-lengan-panjang-', 100000, 45, 'Baju', 'Baju Kemeja Lengan Panjang', 2, 'batik panjang.jpg'),
(56, 'Dompet Kartu Atm', 'dompet-kartu-atm', 39000, 10, 'Dompet ', 'Dompet Pendek Pria', 2, 'Dompet kartu atm.jpg'),
(57, 'Baju Kemeja Pendek Fit', 'baju-kemeja-pendek-fit', 150000, 47, 'Baju', 'Baju Kemeja Lengan Pendek', 2, 'Baju Kemeja fit.jpg'),
(58, 'Sepatu Boots Semi Kulit', 'sepatu-boots-semi-kulit', 245000, 33, 'Sepatu', 'Sepatu Pantopel', 2, 'Sepatu boots semi kulit.jpg'),
(59, 'Jaket Bomber Taslan', 'jaket-bomber-taslan', 120000, 13, 'Jaket Pria', 'Jaket Parasut ', 2, 'Jaket Bomber.jpg'),
(60, 'Jeans Tango Pria', 'jeans-tango-pria', 599000, 72, 'Celana ', 'celana panjang', 2, 'Jenis tanggo pria.webp'),
(61, 'Jaket Coach Spooky Black', 'jaket-coach-spooky-black', 395000, 40, 'Jaket Pria', 'Coach  Spokey', 2, 'Coach Jaket.jpg'),
(62, 'Sepatu Olahraga ', 'sepatu-olahraga-', 250000, 35, 'Sepatu', 'Sepatu Olahraga/Running', 2, 'Sepatu Olahraga.jpg'),
(63, 'Celana Pendek Jumbo', 'celana-pendek-jumbo', 75000, 39, 'Celana ', 'Celana Pendek Pria', 2, 'Celana Pendek Jumbo.jpg'),
(64, 'Sepatu Slip On Pria', 'sepatu-slip-on-pria', 120000, 34, 'Sepatu', 'sepatu casual', 2, 'Sepatu Slip on pria.jpg'),
(65, 'Kaos Couple ', 'kaos-couple-', 25000, 15, 'Baju', 'Kaos lengan pendek', 2, 'Kaos Couple.webp'),
(66, 'Kaos Pressure pria', 'kaos-pressure-pria', 26500, 20, 'Baju', 'Kaos lengan pendek', 2, 'Kaos pressure.jpg'),
(67, 'Kemeja Heuvei Casual', 'kemeja-heuvei-casual', 195000, 66, 'Baju', 'Baju Kemeja Lengan Pendek', 2, 'kemeja casual huavei.webp'),
(68, 'Crewneck Black Polos', 'crewneck-black-polos', 90000, 8, 'Jaket Pria', 'Jaket Hoodie', 2, 'Crewneck Black Polos.jpg'),
(69, 'Hoodie Polos', 'hoodie-polos', 199000, 47, 'Jaket Pria', 'Jaket Hoodie', 2, 'Hoodie Polos.jpg'),
(70, 'Kaos Pria ', 'kaos-pria-', 43000, 15, 'Baju', 'Kaos lengan pendek', 2, 'kaos pria.webp'),
(71, 'Sepatu Sneakers Running ', 'sepatu-sneakers-running-', 195000, 54, 'Sepatu', 'Sepatu Olahraga/Running', 2, 'Sepatu Running.jpg'),
(72, 'Crew Neck Manfromous', 'crew-neck-manfromous', 185000, 60, 'Jaket Pria', 'Jaket Hoodie', 2, 'Crew Neck Manfromus.jpg'),
(73, 'Kaos Savior Black', 'kaos-savior-black', 160000, 61, 'Baju', 'Kaos lengan pendek', 2, 'Kaos Savior Black.jpg'),
(74, 'Jaket Parasut', 'jaket-parasut', 449000, 62, 'Jaket Pria', 'Jaket Parasut ', 2, 'Jaket Parasut.webp'),
(75, 'Sweater Rajut Turtle ', 'sweater-rajut-turtle-', 38999, 11, 'Jaket Pria', 'Jaket Parasut ', 2, 'Sweater Rajut Turtle.jpg'),
(76, 'T-Shirt Sablon Lengan pendek', 't-shirt-sablon-lengan-pendek', 79900, 38, 'Baju', 'Kaos lengan pendek', 2, 'Kaos sablon.jpg'),
(77, 'Celana Chino Pendek', 'celana-chino-pendek', 35000, 14, 'Celana ', 'celana pendek', 2, 'celana pendek chino.jpg'),
(78, 'Sandal Jepit Panama', 'sandal-jepit-panama', 130000, 31, 'sandal pria', 'sandal jepit', 2, 'Sandal jepit panama.png'),
(79, 'Dompet Pria Kanvas + Box', 'dompet-pria-kanvas-box', 100000, 88, 'Dompet ', 'Dompet Pendek Pria', 2, 'Dompet Pria Kanvas + Box.jpg'),
(80, 'Celana Pendek Surfing', 'celana-pendek-surfing', 55900, 59, 'Celana ', 'celana pendek', 2, 'Celana Pendek Surfing.jpg'),
(81, 'Kaos Oblog Distro Samurai', 'kaos-oblog-distro-samurai', 28000, 15, 'Baju', 'Kaos lengan pendek', 2, 'Kaos Oblog Distro Samurai.jpg'),
(82, 'Dompet Kulit', 'dompet-kulit', 69900, 14, 'Dompet ', 'Dompet Pendek Pria', 2, 'Dompet Kulit.jpg'),
(83, 'Sweater-Hoodie Thanksinsomnia', 'sweater-hoodie-thanksinsomnia', 60000, 26, 'Jaket Pria', 'Jaket Hoodie', 2, 'Sweater-Hoodie Thanksinsomnia.jpg'),
(84, 'Celana Panjang Jeans ', 'celana-panjang-jeans-', 150000, 30, 'Celana ', 'celana panjang', 2, 'Celana Panjang Jeans.jpg'),
(85, 'M footwear Sepatu Sneaker Pria', 'm-footwear-sepatu-sneaker-pria', 199000, 57, 'Sepatu', 'Sepatu Casual', 2, 'M footwear Sepatu Sneaker.webp'),
(86, 'Kaos Stripe Distro', 'kaos-stripe-distro', 125000, 62, 'Baju', 'Kaos lengan pendek', 2, 'Kaos Stripe.jpg'),
(87, 'Jaket Harrington Taslan Brown', 'jaket-harrington-taslan-brown', 356000, 75, 'Jaket Pria', 'Jaket Parasut ', 2, 'Jaket Harrington Taslan.jpg'),
(88, 'Kemeja Batik Lengan Pendek', 'kemeja-batik-lengan-pendek', 499000, 74, 'Baju', 'Baju Kemeja Lengan Pendek', 2, 'Kemeja Batik Lengan Pendek.jpg'),
(89, 'Tas Laptop Ultronic - Black', 'tas-laptop-ultronic---black', 449200, 40, 'Tas Pria', 'Tas Ransel', 2, 'Tas Laptop Ultronic.jpg'),
(90, 'Tas Pinggang', 'tas-pinggang', 249000, 70, 'Tas Pria', 'Tas Samping', 2, 'Tas pinggang.jpg'),
(91, 'Salvo Sepatu Casual', 'salvo-sepatu-casual', 129600, 32, 'Sepatu', 'sepatu casual', 2, 'Salvo Sepatu Casual.jpg'),
(92, 'Kaos Polos Green', 'kaos-polos-green', 24000, 13, 'Baju', 'Kaos lengan pendek', 2, 'Kaos polos Gren.jpg'),
(93, 'Sandal Gunung Sport', 'sandal-gunung-sport', 24900, 8, 'sandal pria', 'sandal jepit', 2, 'Sandal Gunung Spot.webp'),
(94, 'Sandal Casual Kulit', 'sandal-casual-kulit', 98000, 62000, 'sandal pria', 'Sandal Gunung / Casual', 2, 'Sandal Casual Kulit.jpg'),
(95, 'Sandal Pria Slop Maxslide', 'sandal-pria-slop-maxslide', 80000, 37, 'sandal pria', 'Sandal Gunung / Casual', 2, 'Sandal pria Slop Maxslide.jpg'),
(96, 'Kaos Kemeja Kerah Polos', 'kaos-kemeja-kerah-polos', 62000, 57, 'Baju', 'Kaos lengan pendek', 2, 'Kaos Pria Kerah Polos Merah.jpg'),
(97, 'Sandal Rematik Pria', 'sandal-rematik-pria', 80000, 84, 'sandal pria', 'Sandal Gunung / Casual', 2, 'Sandal Rematik pria.webp'),
(98, 'Waistbag Pushop Mini', 'waistbag-pushop-mini', 50000, 67, 'Tas Pria', 'Tas Samping', 2, 'Waistbag Pushop.jpg'),
(99, 'Dompet Pria Bahan Kulit PU', 'dompet-pria-bahan-kulit-pu', 70000, 45, 'Dompet ', 'Dompet Pendek Pria', 2, 'Dompet Pria Kulit.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id_subcategory` int(10) NOT NULL,
  `id_category` int(10) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `subcategory_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id_subcategory`, `id_category`, `subcategory_name`, `subcategory_slug`) VALUES
(2, 0, 'jam', 'jam'),
(3, 4, 'jam', 'jam'),
(5, 6, 'Dompet Panjang Pria', 'dompet-panjang-pria'),
(6, 1, 'Kaos lengan pendek', 'kaos-lengan-pendek'),
(7, 7, 'singlet polos pria', 'singlet-polos-pria'),
(9, 3, 'sepatu casual', 'sepatu-casual'),
(10, 5, 'baju kemeja panjang', 'baju-kemeja-panjang'),
(11, 9, 'baju kemeja pendek', 'baju-kemeja-pendek'),
(12, 10, 'Tas Ransel', 'tas-ransel'),
(13, 11, 'Tas Samping', 'tas-samping'),
(14, 8, 'sandal jepit', 'sandal-jepit'),
(15, 2, 'celana panjang', 'celana-panjang'),
(16, 2, 'celana pendek', 'celana-pendek'),
(19, 12, 'Baju Kemeja Lengan Panjang', 'baju-kemeja-lengan-panjang'),
(20, 12, 'Baju Kemeja Lengan Pendek', 'baju-kemeja-lengan-pendek'),
(22, 12, 'Singlet Pria', 'singlet-pria'),
(23, 13, 'Celana Panjang Pria', 'celana-panjang-pria'),
(24, 13, 'Celana Pendek Pria', 'celana-pendek-pria'),
(25, 13, 'Celana Training Pria', 'celana-training-pria'),
(26, 13, 'Celana Jeans Pria', 'celana-jeans-pria'),
(27, 14, 'Dompet Panjang Pria', 'dompet-panjang-pria'),
(29, 15, 'Jam Tangan', 'jam-tangan'),
(30, 16, 'Sepatu Casual', 'sepatu-casual'),
(33, 16, 'Sepatu Pantopel', 'sepatu-pantopel'),
(34, 17, 'Jaket Hoodie', 'jaket-hoodie'),
(35, 0, 'Jaket Parasut ', 'jaket-parasut-'),
(36, 17, 'Jaket Parasut ', 'jaket-parasut-'),
(37, 17, 'Sweater Polos', 'sweater-polos'),
(38, 18, 'Kaos Kaki Panjang', 'kaos-kaki-panjang'),
(39, 18, 'Kaos Kaki Pendek', 'kaos-kaki-pendek'),
(40, 15, 'Topi Pria', 'topi-pria'),
(41, 15, 'Kacamata ', 'kacamata-'),
(42, 19, 'Tas Pinggang Pria', 'tas-pinggang-pria'),
(43, 19, 'Tas Ransel Pria', 'tas-ransel-pria'),
(44, 19, 'Sling Bag Pria', 'sling-bag-pria'),
(47, 17, 'Jaket Jeans', 'jaket-jeans'),
(49, 20, 'sandal jepit', 'sandal-jepit'),
(50, 14, 'Dompet Pendek Pria', 'dompet-pendek-pria'),
(51, 12, 'Baju Kaos Lengan Panjang', 'baju-kaos-lengan-panjang'),
(52, 17, 'Jaket Bomber', 'jaket-bomber'),
(53, 17, 'Coach  Spokey', 'coach-spokey'),
(54, 16, 'Sepatu Olahraga/Running', 'sepatu-olahraga-running'),
(55, 20, 'Sandal Gunung / Casual', 'sandal-gunung-casual');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'rifkima294', '3fc0a7acf087f549ac2b266baf94b8b1', 'user'),
(2, 'andresiregaar_', 'fcea920f7412b5da7be0cf42b8c93759', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id_subcategory`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id_subcategory` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
