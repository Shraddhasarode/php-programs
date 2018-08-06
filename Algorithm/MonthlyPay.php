<?php
include('Utility.php');
echo" Enter the value of P ";
$P=Utility::inputNumber();
echo " Enter the value of Y ";
$Y=Utility::inputNumber();
echo" Enter the value of R ";
$R=Utility::inputNumber();
$n=12*$Y;
$r=$R/(12*100);
Utility::Payment($P,$n,$r);

?>