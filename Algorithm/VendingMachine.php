<?php
include("Utility.php");
$money;
$i=0;
  $a =array(1000,500,100,50,20,10,5,2,1);
echo " \n enter the amount ";
$money=Utility::inputNumber();
Utility::CalculateMoney($money,$a,$i);
?>