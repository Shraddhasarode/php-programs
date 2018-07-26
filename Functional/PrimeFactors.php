<?php
include('Utility.php');
echo " Enter the number to find prime factors";
$number=Utility::inputNumber();
Utility::primeFactors($number);
?>