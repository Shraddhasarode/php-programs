<?php
include('Utility.php');

echo "enter the prime number range";
$range=Utility::inputNumber();

for($i=2;$i<=$range;$i++)
{   

   $result = Utility::PrimeRange($i);
   if($result == true)
   {
        echo $i."\n";

   }
   else{
           echo "\n ";
   }
} 

?>