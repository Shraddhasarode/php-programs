<?php
include('Utility.php');
echo "Enter number of Harmonic series";
$number=Utility::inputNumber();
Utility::HarmonicSeries($number);
?>