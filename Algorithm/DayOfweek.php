<?php
include('Utility.php');
echo "enter the month  ";
$m=Utility::inputNumber();
echo"enter the day  ";
$d=Utility::inputNumber();
echo"enter the year  ";
$y=Utility::inputNumber();
Utility::DayOfWeeks($m,$d,$y);


?>