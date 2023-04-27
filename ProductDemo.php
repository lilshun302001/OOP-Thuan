<?php

namespace demo;

require_once "Product.php";

use entyti\Product;


class ProductDemo
{
    public function createProductTest()
    {
       
        $product = new Product(1, 'Áo thun', 2);
        return $product;
    }

    public function printProduct(Product $product)
    {
        echo "ID: " . $product->get_id() . "<br>";
        echo "Name: " . $product->get_name() . "<br>";
        echo "categoryProduct: " . $product->get_categoryID() . "<br>";
    }
}