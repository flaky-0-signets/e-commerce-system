<!-- Order.php -->

<?php

class Order {
    private $orderId;
    private $user;
    private $products = [];

    public function __construct($orderId, $user) {
        $this->orderId = $orderId;
        $this->user = $user;
    }

    public function addProduct($product) {
        $this->products[] = $product;
    }

    public function displayInfo() {
        echo "Order ID: $this->orderId\n";
        $this->user->displayInfo();

        echo "Products in the order:\n";
        foreach ($this->products as $product) {
            $product->displayInfo();
        }
    }
}
