<?php
$servername = "localhost";
$username = "root";
$password = "toast012";
$db = "rush00";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
} else {

$sql = "CREATE DATABASE IF NOT EXISTS rush00";
mysqli_query($conn, $sql);

$sql = "USE rush00";
mysqli_query($conn, $sql);

$sql = "CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `user` varchar(30) NOT NULL,
  `cart` varchar(255) NOT NULL,
  `submit_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
mysqli_query($conn, $sql);

$sql = "CREATE TABLE IF NOT EXISTS `products` (
  `id` int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `price` int(6) NOT NULL,
  `prod_name` varchar(30) NOT NULL,
  `prod_desc` varchar(150) NOT NULL,
  `categories` varchar(255) NOT NULL DEFAULT 'other',
  `img_url` text NOT NULL,
  `prod_ref` varchar(50) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `products` (`id`, `price`, `prod_name`, `prod_desc`, `categories`, `img_url`, `prod_ref`) VALUES
(1, 10, 'hat', 'it\'s for your head', 'hats', 'https://www.villagehatshop.com/photos/product/standard/4511390S61123/top-hats/mid-crown-wool-felt-top-hat.jpg', 'hat'),
(2, 25, 'pirate hat', 'Aghhrrrr', 'hats,accessories', 'https://ae01.alicdn.com/kf/HTB1VfUiSpXXXXX1XVXXq6xXFXXXw/2017-New-Halloween-Accessories-Skull-Hat-Caribbean-Pirate-Hat-Skull-Pirate-Hat-Piracy-Hat-Corsair-Cap.jpg_640x640.jpg', 'pirate_hat'),
(3, 1, 'dirty sock', 'we couldn\'t source a clean one', 'socks', 'https://hvactraining101.com/wp-content/uploads/2018/02/socks.jpg', 'dirty_sock'),
(5, 100, 'cat in a hat', 'Oh, wow ^^', 'cats,hats', 'data:image/jpeg;base64,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', 'cat_hat')";
mysqli_query($conn, $sql);

$sql = "CREATE TABLE IF NOT EXISTS `user` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL UNIQUE,
  `hash` varchar(64) NOT NULL,
  `cart` varchar(255) NOT NULL DEFAULT '\"\"',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(50) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `user` (
`id`, `firstname`, `lastname`, `email`, `hash`, `is_admin`, `reg_date`, `username`) VALUES
(1, 'Zackie', 'Batik', 'zbatik@student.wethinkcode.co.za', 'admin',  1, '2018-10-06 09:13:56', 'zbatik'),
(2, 'Rob', 'Harriot', 'boo@email.co.za', 'password', 0, '2018-10-06 09:13:56', 'robbie12'),
(3, 'Megs', 'Schempers', 'megan.schempers@gmail.com', 'toast012', 0, '2018-10-06 10:28:16', 'megs'),
(4, 'Harry', 'Potter', 'harry@hw.co.uk', 'wiz',  0, '2018-10-06 13:27:00', 'hp'),
(6, 'tested', 'test', 'test@test.com', 'test',  0, '2018-10-07 10:38:24', 'test')";
mysqli_query($conn, $sql);
}
?>