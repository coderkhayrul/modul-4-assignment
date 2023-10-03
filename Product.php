<?php

/*
 * Author: Khayrul Islam Shanto
 * Email: coderkhayrul@gmail.com
 * Website: khayrulshanto.com
 * Date: 03/10/2023
 * Description: This class is used to create a product object
 * */

class Product
{
    // Properties
    private int $id;
    private string $name;
    private  float $price;

    // Constructor
    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Get Product Price
    public function getFormattedPrice()
    {
        return '$' . number_format($this->price, 2);
    }

    // Show Product Details
    public function showDetails()
    {
        echo "Product Details:" . PHP_EOL; // PHP_EOL is used to break line
        echo "-Product ID: $this->id" . PHP_EOL;
        echo "-Product Name: $this->name" . PHP_EOL;
        echo "-Product Price: " . $this->getFormattedPrice() . PHP_EOL;
    }
}

// Create New Product || Object of Product Class
$product = new Product(1, 'T-shirt', 19.99);

// Show Product Details
$product->showDetails();
