<?php
include('Utility.php');
echo"Enter the temperature in clesius ";
$c=Utility::inputNumber();
Utility::CelsiusToFraherint($c);

echo" \n  Enter the tremperature in Frahenit ";
$f=Utility::inputNumber();
Utility::FrahrenitToCelsius($f);




?>