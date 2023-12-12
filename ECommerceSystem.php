<!-- ECommerceSystem.php -->

<?php

require_once 'User.php';
require_once 'Product.php';
require_once 'Order.php';

// Create users
$user1 = new User(1, 'Alice', 'alice@example.com');
$user2 = new User(2, 'Bob', 'bob@example.com');

// Create products
$product1 = new Product(101, 'Laptop', 999.99);
$product2 = new Product(102, 'Smartphone', 499.99);

// Create orders
$order1 = new Order(1001, $user1);
$order1->addProduct($product1);
$order1->addProduct($product2);

$order2 = new Order(1002, $user2);
$order2->addProduct($product2);

// Display information
echo "Order Information:\n";
$order1->displayInfo();
echo "\n";
$order2->displayInfo();
