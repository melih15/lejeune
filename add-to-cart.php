<?php

session_start();

if(empty($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

array_push($_SESSION['cart'], $_GET['id']);

?>

<p>
    Product was succesfully added to you cart.
    <a href="php/winkelwagen.php">View shopping cart</a>
</p>