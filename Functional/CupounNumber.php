<?php
include('Utility.php');
echo "Enter the Coupun number you want  generate";
$number=Utility::inputNumber();
$totalNumber=Utility::findCoupon($number);
?>