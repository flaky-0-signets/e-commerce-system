<!-- Product.php -->

<?php

class Product {
    private $productId;
    private $name;
    private $price;

    public function __construct($productId, $name, $price) {
        $this->productId = $productId;
        $this->name = $name;
        $this->price = $price;
    }

    public function displayInfo() {
        echo "Product ID: $this->productId\n";
        echo "Name: $this->name\n";
        echo "Price: $this->price\n";
    }
}
