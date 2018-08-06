<?php
include('Utility.php');
echo" Enter the month \n ";
$month=Utility::inputstring();
if($month<1||$month>12)
{
   echo"\n enter the range between 1 to 12 ";
}
echo"\n Enter the year ";
$year=Utility::inputstring();
Utility::Calender($month,$year);
?>