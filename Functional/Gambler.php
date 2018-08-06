<?php
include('Utility.php');
echo "Enter the number of stake \n ";
$stake=Utility::inputNumber();
echo "Enter the number of goal\n ";
$goal=Utility::inputNumber();
echo "Enter the number of times\n ";
$number=Utility::inputNumber();
Utility::Gambler($stake,$goal,$number);
?>