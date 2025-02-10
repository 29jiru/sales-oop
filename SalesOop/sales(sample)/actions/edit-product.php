<?php

include "../classes/Product.php";

$product = new Product;

$product->update($_POST);

?>