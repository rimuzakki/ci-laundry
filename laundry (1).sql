-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 07:00 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_cart`
--

CREATE TABLE `tb_cart` (
  `id` varchar(11) NOT NULL,
  `items` text NOT NULL,
  `paid` int(4) DEFAULT '0',
  `shipped` int(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_cart`
--

INSERT INTO `tb_cart` (`id`, `items`, `paid`, `shipped`) VALUES
('', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":\"2\",\"unique_key\":1529870701683}]', 0, 0),
('P0001', '[{\"product_image\":\"img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"1\",\"product_quantity\":1,\"unique_key\":1512890634694}]', 0, 0),
('P0002', '[{\"product_image\":\"img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"1\",\"product_quantity\":1,\"unique_key\":1512890666321}]', 0, 0),
('P0003', '[{\"product_image\":\"img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"1\",\"product_quantity\":1,\"unique_key\":1512890920126}]', 0, 0),
('P0004', '[{\"product_image\":\"img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"1\",\"product_quantity\":1,\"unique_key\":1512890977132}]', 0, 0),
('P0005', '[{\"product_image\":\"img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"1\",\"product_quantity\":1,\"unique_key\":1512891053733}]', 0, 0),
('P0006', '[{\"product_image\":\"img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"1\",\"product_quantity\":1,\"unique_key\":1512891145695},{\"product_image\":\"img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"2\",\"product_quantity\":1,\"unique_key\":1512891146189},{\"product_image\":\"img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"3\",\"product_quantity\":1,\"unique_key\":1512891146629}]', 0, 0),
('P0007', '[{\"product_image\":\"img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"1\",\"product_quantity\":1,\"unique_key\":1512891182219},{\"product_image\":\"img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"2\",\"product_quantity\":1,\"unique_key\":1512891182696},{\"product_image\":\"img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"3\",\"product_quantity\":1,\"unique_key\":1512891185633}]', 0, 0),
('P0008', '[{\"product_image\":\"img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"1\",\"product_quantity\":1,\"unique_key\":1512891256499},{\"product_image\":\"img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"2\",\"product_quantity\":1,\"unique_key\":1512891256929},{\"product_image\":\"img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"3\",\"product_quantity\":1,\"unique_key\":1512891257369}]', 0, 0),
('P0009', '[{\"product_image\":\"img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"3\",\"product_quantity\":1,\"unique_key\":1512902036802}]', 0, 0),
('P0010', '[{\"product_image\":\"img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"3\",\"product_quantity\":1,\"unique_key\":1512916660884},{\"product_image\":\"img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"2\",\"product_quantity\":1,\"unique_key\":1512916661241}]', 0, 0),
('P0011', '[{\"product_image\":\"img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"1\",\"product_quantity\":1,\"unique_key\":1512924507059}]', 0, 0),
('P0012', '[{\"product_image\":\"img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"3\",\"product_quantity\":1,\"unique_key\":1512924606774}]', 0, 0),
('P0013', '[{\"product_image\":\"img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"3\",\"product_quantity\":1,\"unique_key\":1512924849920}]', 0, 0),
('P0014', '[{\"product_image\":\"img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"2\",\"product_quantity\":1,\"unique_key\":1512925110557}]', 0, 0),
('P0015', '[{\"product_image\":\"img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"1\",\"product_quantity\":1,\"unique_key\":1512925585033}]', 0, 0),
('P0016', '[{\"product_image\":\"img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"1\",\"product_quantity\":1,\"unique_key\":1512928586554},{\"product_image\":\"img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"2\",\"product_quantity\":1,\"unique_key\":1512928586976},{\"product_image\":\"img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"3\",\"product_quantity\":1,\"unique_key\":1512928587424}]', 0, 0),
('P0017', '[{\"product_image\":\"img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"3\",\"product_quantity\":1,\"unique_key\":1512929696667},{\"product_image\":\"img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"2\",\"product_quantity\":1,\"unique_key\":1512929697073}]', 0, 0),
('P0018', '[{\"product_image\":\"img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"2\",\"product_quantity\":1,\"unique_key\":1512985715873},{\"product_image\":\"img/product/PoloShirt.jpg\",\"product_name\":\"Kaos Polo\",\"product_price\":\"50000\",\"product_id\":\"5\",\"product_quantity\":1,\"unique_key\":1512985717142},{\"product_image\":\"img/product/TShirt_Hanger.jpg\",\"product_name\":\"Kiloan\",\"product_price\":\"3500\",\"product_id\":\"4\",\"product_quantity\":1,\"unique_key\":1512985719327}]', 0, 0),
('P0019', '[{\"product_image\":\"img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"B0002\",\"product_quantity\":1,\"unique_key\":1515002724391},{\"product_image\":\"img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"B0003\",\"product_quantity\":1,\"unique_key\":1515002724797}]', 0, 0),
('P0020', '[{\"product_image\":\"img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"B0003\",\"product_quantity\":1,\"unique_key\":1515003235984}]', 0, 0),
('P0021', '[{\"product_image\":\"img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"B0003\",\"product_quantity\":1,\"unique_key\":1519578334308}]', 0, 0),
('P0022', '[{\"product_image\":\"img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"B0003\",\"product_quantity\":1,\"unique_key\":1523298198475},{\"product_image\":\"img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"B0002\",\"product_quantity\":1,\"unique_key\":1523298199130}]', 0, 0),
('P0023', '[{\"product_image\":\"img/product/Blazer2.jpg\",\"product_name\":\"Blazer\",\"product_price\":\"8000\",\"product_id\":\"B0006\",\"product_quantity\":1,\"unique_key\":1523298252571}]', 0, 0),
('P0024', '[{\"product_image\":\"img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"B0003\",\"product_quantity\":1,\"unique_key\":1523299419787}]', 0, 0),
('P0025', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"B0002\",\"product_quantity\":1,\"unique_key\":1529859795286},{\"product_image\":\"http://localhost/ci-laundry/img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"B0003\",\"product_quantity\":1,\"unique_key\":1529859795732}]', 0, 0),
('P0026', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"B0002\",\"product_quantity\":1,\"unique_key\":1529859908899},{\"product_image\":\"http://localhost/ci-laundry/img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"B0003\",\"product_quantity\":1,\"unique_key\":1529859909305}]', 0, 0),
('P0027', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"B0003\",\"product_quantity\":1,\"unique_key\":1529861661665},{\"product_image\":\"http://localhost/ci-laundry/img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"B0002\",\"product_quantity\":1,\"unique_key\":1529861662071}]', 0, 0),
('P0028', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529862298438}]', 0, 0),
('P0029', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529863141843}]', 0, 0),
('P0030', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529863243310}]', 0, 0),
('P0031', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529863315509}]', 0, 0),
('P0032', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529863354689}]', 0, 0),
('P0033', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529864437411}]', 0, 0),
('P0034', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529870072632},{\"product_image\":\"http://localhost/ci-laundry/img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"B0002\",\"product_quantity\":1,\"unique_key\":1529870073574}]', 0, 0),
('P0035', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529870095275},{\"product_image\":\"http://localhost/ci-laundry/img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"B0002\",\"product_quantity\":1,\"unique_key\":1529870095665},{\"product_image\":\"http://localhost/ci-laundry/img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"B0003\",\"product_quantity\":1,\"unique_key\":1529870096040}]', 0, 0),
('P0036', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529870195021},{\"product_image\":\"http://localhost/ci-laundry/img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"B0002\",\"product_quantity\":1,\"unique_key\":1529870195498},{\"product_image\":\"http://localhost/ci-laundry/img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"B0003\",\"product_quantity\":1,\"unique_key\":1529870196052}]', 0, 0),
('P0037', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529870230440},{\"product_image\":\"http://localhost/ci-laundry/img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"B0002\",\"product_quantity\":1,\"unique_key\":1529870230881}]', 0, 0),
('P0038', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529870288247}]', 0, 0),
('P0039', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529870325898}]', 0, 0),
('P0040', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529870454730}]', 0, 0),
('P0041', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529870536138}]', 0, 0),
('P0042', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"B0003\",\"product_quantity\":1,\"unique_key\":1529870652861}]', 0, 0),
('P0043', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529870673585},{\"product_image\":\"http://localhost/ci-laundry/img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"B0002\",\"product_quantity\":1,\"unique_key\":1529870674030},{\"product_image\":\"http://localhost/ci-laundry/img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"B0003\",\"product_quantity\":1,\"unique_key\":1529870674607}]', 0, 0),
('P0044', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":\"2\",\"unique_key\":1529870701683}]', 0, 0),
('P0045', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529872179685}]', 0, 0),
('P0046', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529872239492}]', 0, 0),
('P0047', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"B0003\",\"product_quantity\":1,\"unique_key\":1529919219990}]', 0, 0),
('P0048', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"B0003\",\"product_quantity\":1,\"unique_key\":1529919649358}]', 0, 0),
('P0049', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"B0003\",\"product_quantity\":1,\"unique_key\":1529919682288}]', 0, 0),
('P0050', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529919715204}]', 0, 0),
('P0051', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529919731773}]', 0, 0),
('P0052', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529945673109}]', 0, 0),
('P0053', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529945700008}]', 0, 0),
('P0054', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529946055695}]', 0, 0),
('P0055', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529946139360}]', 0, 0),
('P0056', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529946455963}]', 0, 0),
('P0057', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529946716007}]', 0, 0),
('P0058', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529946787919}]', 0, 0),
('P0059', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529946828234}]', 0, 0),
('P0060', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Shirt_Hanger.jpg\",\"product_name\":\"Kemeja\",\"product_price\":\"15000\",\"product_id\":\"B0003\",\"product_quantity\":1,\"unique_key\":1529947111026}]', 0, 0),
('P0061', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529947141557}]', 0, 0),
('P0062', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"B0002\",\"product_quantity\":1,\"unique_key\":1529947155351}]', 0, 0),
('P0063', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529947287957}]', 0, 0),
('P0064', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529947301847}]', 0, 0),
('P0065', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529947409794}]', 0, 0),
('P0066', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529947446255}]', 0, 0),
('P0067', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529947730124}]', 0, 0),
('P0068', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529947842521}]', 0, 0),
('P0069', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529947876644}]', 0, 0),
('P0070', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529947980257}]', 0, 0),
('P0071', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529948057721}]', 0, 0),
('P0072', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529948103767}]', 0, 0),
('P0073', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529948176925}]', 0, 0),
('P0074', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529948188840}]', 0, 0),
('P0075', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529948305220}]', 0, 0),
('P0076', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529948361700},{\"product_image\":\"http://localhost/ci-laundry/img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"B0002\",\"product_quantity\":1,\"unique_key\":1529948362168}]', 0, 0),
('P0077', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529949023979}]', 0, 0),
('P0078', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529949248203},{\"product_image\":\"http://localhost/ci-laundry/img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"B0002\",\"product_quantity\":1,\"unique_key\":1529949249624}]', 0, 0),
('P0079', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529949282343},{\"product_image\":\"http://localhost/ci-laundry/img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"B0002\",\"product_quantity\":1,\"unique_key\":1529949282708}]', 0, 0),
('P0080', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529949347590},{\"product_image\":\"http://localhost/ci-laundry/img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"B0002\",\"product_quantity\":1,\"unique_key\":1529949347979}]', 0, 0),
('P0081', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529949412793},{\"product_image\":\"http://localhost/ci-laundry/img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"B0002\",\"product_quantity\":1,\"unique_key\":1529949413194}]', 0, 0),
('P0082', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529949770003},{\"product_image\":\"http://localhost/ci-laundry/img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"B0002\",\"product_quantity\":1,\"unique_key\":1529949770465}]', 0, 0),
('P0083', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/Productbundle_BedsheetDuvet2Pillow.jpg\",\"product_name\":\"Paket Bed Cover\",\"product_price\":\"50000\",\"product_id\":\"B0001\",\"product_quantity\":1,\"unique_key\":1529949836699},{\"product_image\":\"http://localhost/ci-laundry/img/product/ProductBundle.jpg\",\"product_name\":\"Paket 2 Jas\",\"product_price\":\"60000\",\"product_id\":\"B0002\",\"product_quantity\":1,\"unique_key\":1529949837159}]', 0, 0),
('P0084', '[{\"product_image\":\"http://localhost/ci-laundry/img/product/TShirt_Hanger.jpg\",\"product_name\":\"Kiloan\",\"product_price\":\"3500\",\"product_id\":\"B0004\",\"product_quantity\":1,\"unique_key\":1529949870623},{\"product_image\":\"http://localhost/ci-laundry/img/product/PoloShirt.jpg\",\"product_name\":\"Kaos Polo\",\"product_price\":\"50000\",\"product_id\":\"B0005\",\"product_quantity\":1,\"unique_key\":1529949871156}]', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_products`
--

CREATE TABLE `tb_products` (
  `id` varchar(12) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `desc_produk` varchar(255) NOT NULL,
  `harga_produk` int(255) NOT NULL,
  `gambar_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_products`
--

INSERT INTO `tb_products` (`id`, `nama_produk`, `desc_produk`, `harga_produk`, `gambar_produk`) VALUES
('B0001', 'Paket Bed Cover Besar', 'Paket Laundry Bed Cover', 50000, 'Productbundle_BedsheetDuvet2Pillow.jpg'),
('B0002', 'Paket 2 Jas', 'Paket Laundry Jas', 60000, 'ProductBundle.jpg'),
('B0003', 'Kemeja', 'Laundry Kemeja Putih dengan penanganan khusu', 15000, 'Shirt_Hanger.jpg'),
('B0004', 'Kiloan', 'Laundry Kiloan dengan harga murah', 3500, 'TShirt_Hanger.jpg'),
('B0005', 'Kaos Polo', 'Laundry Kaos Polo', 50000, 'PoloShirt.jpg'),
('B0006', 'Blazer', 'Laundry Blazer', 8000, 'Blazer2.jpg'),
('B0007', 'Dress', 'Laundry Dress dengan kualitas tinggi', 50000, 'Dress.jpg'),
('B0008', 'Cardigan', 'Laundry Cardigan', 5000, 'Cardigan.jpg'),
('B0009', 'Gaun Pesta', 'Laundry Gaun Pesta', 10000, 'EveningDress.jpg'),
('B0010', 'Mantel', 'Laundry Mantel', 10000, 'Coat_NonLeather.jpg'),
('B0011', 'Mantel Kulit', 'Laundry Mantel Kulit', 15000, 'Burberry_Coat.jpg'),
('B0012', 'Baju Baru', 'Baju baru', 1000, 'qwe'),
('B0013', 'Baju Baru', 'Baju baru', 1000, '12508735_10153755953286815_2425349258654071544_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transactions`
--

CREATE TABLE `tb_transactions` (
  `id` varchar(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `sub_total` int(255) NOT NULL,
  `ongkir` int(255) NOT NULL,
  `grand_total` int(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pengambilan',
  `cart_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transactions`
--

INSERT INTO `tb_transactions` (`id`, `nama_lengkap`, `email`, `nohp`, `alamat`, `sub_total`, `ongkir`, `grand_total`, `status`, `cart_id`) VALUES
('T0009', 'Rifqon Muzakki', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 125000, 12500, 137500, 'selesai', 'P0016'),
('T0010', 'Rifqon Muzakki', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 113500, 11350, 124850, 'pencucian', 'P0018'),
('T0011', 'kontit', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 75000, 7500, 82500, 'pengeringan', 'P0022'),
('T0012', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengantaran', 'P0051'),
('T0013', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0052'),
('T0014', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0053'),
('T0015', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0054'),
('T0016', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0055'),
('T0017', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0056'),
('T0018', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0057'),
('T0019', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0058'),
('T0020', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0059'),
('T0021', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 15000, 1500, 16500, 'pengambilan', 'P0060'),
('T0022', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0061'),
('T0023', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 60000, 6000, 66000, 'pengambilan', 'P0062'),
('T0024', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0063'),
('T0025', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0064'),
('T0026', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0065'),
('T0027', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0066'),
('T0028', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0067'),
('T0029', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0068'),
('T0030', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0069'),
('T0031', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0070'),
('T0032', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0071'),
('T0033', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0072'),
('T0034', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0074'),
('T0035', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0075'),
('T0036', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 110000, 11000, 121000, 'pengambilan', 'P0076'),
('T0037', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 50000, 5000, 55000, 'pengambilan', 'P0077'),
('T0038', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 110000, 11000, 121000, 'pengambilan', 'P0078'),
('T0039', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 110000, 11000, 121000, 'pengambilan', 'P0079'),
('T0040', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 110000, 11000, 121000, 'pengambilan', 'P0080'),
('T0041', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 110000, 11000, 121000, 'pengambilan', 'P0081'),
('T0042', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 110000, 11000, 121000, 'pengambilan', 'P0082'),
('T0043', 'rimuzakki@gmail.com', 'rimuzakki@gmail.com', '08562711435', 'Jalan Taman Mugas 2 No.5 Semarang', 110000, 11000, 121000, 'pengambilan', 'P0083');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(3, 'admin', '5ca7cb995dd8101fae7c5f36b522e58e', 'admin@example.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_products`
--
ALTER TABLE `tb_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transactions`
--
ALTER TABLE `tb_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
