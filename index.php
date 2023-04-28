<?php
require_once"ProductDemo.php";
require_once"Database.php";
require_once"DatabaseDemo.php";

use dao\Database;
use demo\ProductDemo;
use demo\datbaseDemo;

$ProductDemo =  new ProductDemo();
$product = $ProductDemo->createProductTest();
$ProductDemo->printProduct($product);
echo"cham";

$doituong = new datbaseDemo();
$doituong->insertTableTest();

$doituong->selectTableTest($result);

$doituong = new Database();
echo $doituong->insertTable();


// echo "name:".$data.'</br>';
