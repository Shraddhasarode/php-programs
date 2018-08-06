<?php
include('Utility.php');
echo "Enter the value of x";
$x=Utility::inputNumber();
echo "Enter the value of y";
$y=Utility::inputNumber();
Utility::Distance($x,$y);
