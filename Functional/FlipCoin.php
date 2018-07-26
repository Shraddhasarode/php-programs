<?php
    include ('Utility.php');
    echo "Enter how many times you want to flip  a coin ";
    $count=Utility::inputNumber();  
    Utility::CoinFlip($count);
?>