<?php
include('Utility.php');
echo "Enter the value of Temperatue";
$t=Utility::inputNumber();
echo "Enter the value of Wind spead";
$v=Utility::inputNumber();
$w=Utility::Windchill($t,$v);

?>