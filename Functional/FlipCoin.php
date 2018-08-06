<?php
    include ('Utility.php');
    echo "Enter how many times you want to flip  a coin ";
    try{
      $count=Utility::inputNumber();
      echo "$count";
      Utility::CoinFlip($count);
    }catch(Exception $e)
    {
      echo "Enter the integer value only ";
    }
     
 
?>