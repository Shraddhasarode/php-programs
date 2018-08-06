<?php
include('Utility.php');
  echo" Enter the number of nodes :-";
  $nodes=Utility::inputstring();
  echo"enter the nodes ";
  $arrayelement=array();
     for($i=0;$i<$nodes;$i++)
     {
       array_push($arrayelement,Utility::inputstring());

     }

     
  print_r($arrayelement);
  Utility::BinarySearch($arrayelement);




?>