-- Step 1: Create the database
CREATE DATABASE inventory_db;

-- Step 2: Use the database
USE inventory_db;

-- Step 3: Create the products table
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    quantity INT NOT NULL,
    price DECIMAL(10,2) NOT NULL
);

-- Step 4: Insert sample products
INSERT INTO products (name, quantity, price) VALUES
('Laptop', 10, 45000.00),
('Smartphone', 25, 15000.00),
('Headphones', 50, 1200.00),
('Keyboard', 30, 800.00),
('Monitor', 15, 7000.00);
