<?php
include ("functions.inc.php");
if(isset($_GET["productId"])){
    delete_product();
    header("location: ../php/producten.php?category=1");
}
else{
    echo "fill everything";
}