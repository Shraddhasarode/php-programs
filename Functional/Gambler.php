<?php
include('Utility.php');
echo "Enter the number of stake";
$stake=Utility::inputNumber();
echo "Enter the number of goal";
$goal=Utility::inputNumber();
echo "Enter the number of times";
$number=Utility::inputNumber();
Utility::Gambler($stake,$goal,$number);

?>