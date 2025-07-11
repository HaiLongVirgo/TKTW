
-- Tạo database và sử dụng
CREATE DATABASE IF NOT EXISTS shop_fpt;
USE shop_fpt;


-- ================================
-- PHẦN 1: QUẢN LÝ SẢN PHẨM / USER / COMMENT
-- ================================

-- Bảng Category
CREATE TABLE Category (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

-- Bảng Product
CREATE TABLE Product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    image VARCHAR(255),
    price DECIMAL(10,2),
    idcategory INT,
    description TEXT,
    hot BOOLEAN DEFAULT FALSE,
    view INT DEFAULT 0,
    discount INT DEFAULT 0,
    FOREIGN KEY (idcategory) REFERENCES Category(id)
);

-- Bảng User
CREATE TABLE User (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    image VARCHAR(255),
    email VARCHAR(100) UNIQUE,
    active BOOLEAN DEFAULT TRUE,
    role VARCHAR(20),
    password VARCHAR(255) NOT NULL
);

-- Bảng Comment
CREATE TABLE Comment (
    id INT AUTO_INCREMENT PRIMARY KEY,
    content TEXT NOT NULL,
    idproduct INT,
    iduser INT,
    date DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (idproduct) REFERENCES Product(id),
    FOREIGN KEY (iduser) REFERENCES User(id)
);

-- ================================
-- PHẦN 2: CHỨC NĂNG ĐẶT HÀNG
-- ================================

-- Bảng News
CREATE TABLE News (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    content TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Bảng Orders
CREATE TABLE Orders (
    id_order INT AUTO_INCREMENT PRIMARY KEY,
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    shipping VARCHAR(255),
    subtotal DECIMAL(10,2),
    total DECIMAL(10,2),
    id_user INT,
    address VARCHAR(255),
    FOREIGN KEY (id_user) REFERENCES User(id)
);

-- Bảng Order Detail
CREATE TABLE Order_Detail (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_order INT,
    quantity INT,
    price DECIMAL(10,2),
    id_product INT,
    FOREIGN KEY (id_order) REFERENCES Orders(id_order),
    FOREIGN KEY (id_product) REFERENCES Product(id)
);
