use yii\db\Migration;

CREATE DATABASE IF NOT EXIST newton;
USE newton;

--create the 'users' table--
CREATE TABLE IF NOT EXIST users(
  id INT AUTO_INCRIMENT PRIMARY KEY,
  username VARCHAR(255) NOT NULL UNIQUE,
  password_harsh VARCHAR(32) NOT NULL,
  auth_key VARCHAR(32) NOT NULL,
  role ENUM('Admin', 'Bidder') NOT NULL
);

--create the 'PRODUCT REQUESTS' table--
CREATE TABLE IF NOT EXISTS product_requests (
  id INT AUTO_INCRIMENT PRIMARY KEY,
  admin_id INT NOT NULL,
  product_tpe VARCHAR(255) NOT NULL,
  location VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  closing_time TIMESTAMP NOT NULL,
  status ENUM('open', 'closed') DEFAULT 'open',
  FOREIGN KEY (admin_id) REFERENCES users(id) ON DELETE CASCADE
);

--create the 'BIDS' table--
CREATE TABLE IF NOT EXISTS bids(
  bidder_id INT NOT NULL,
  product_request_id INT NOT NULL,
  amount DECIMAL(10,2) NOT NULL,
  created at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (bidder_id) REFERENCES users(id) ON DELETE CASCADE,
  FOREIGN KEY (product_request_id) REFERENCES product_request(id) ON DELETE CASCADE

);
