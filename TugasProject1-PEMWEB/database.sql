-- Create database
CREATE DATABASE IF NOT EXISTS projek_pemweb;

-- Use database
USE projek_pemweb;

--
-- Table structure for table `user`
--

CREATE TABLE users (
    user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(60) NOT NULL,
    hp VARCHAR(13) NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    role ENUM('buyer', 'seller') NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

--
-- Table structure for table `product`
--

CREATE TABLE products (
    product_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    stock INT UNSIGNED NOT NULL,
    file_path VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 
-- Relasi antar produk dan user
--

ALTER TABLE products
ADD COLUMN user_id INT(6) UNSIGNED,
ADD CONSTRAINT fk_user_id
FOREIGN KEY (user_id)
REFERENCES users(user_id);
