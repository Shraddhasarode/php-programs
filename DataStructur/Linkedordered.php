<?php
include('LinkedList.php');
include('Utility.php');
 
 $path="/var/www/html/DataStructur/Unorderd.txt";
 //echo"fugtyg";
 $handle = fopen($path, "r");
    $list=new LinkedList();

while (($line = fgets($handle)) !== false) 
{
    echo"\n in while";
    
    $word_arr = explode(", ", $line); //" " seperator 
     $string=array($word_arr);
    foreach($word_arr as $word)
    {  //s$word=array();



        sort($string);

        $list->insertdata($word);
    // sort($word);
    // print_r($word);
    
     }
//      $list->show();
//      echo "sorted order of elements are";
//     //  $word=array();
//     //  $arraysize=count($word)-1;
//     //  for($i=0;$i<$arraysize;$i++)
//     //  {   echo"hello";
//     //      array_push($word);
//     //  }
//     //  sort($word);
//     //  print_r($word);
    // $h = fopen("/var/www/html/DataStructur/Ordered.txt", "r");

    // if($h) {
    //     while (($data = fgetcsv($h, 1000, " ")) !== FALSE)
    //      {
    //         foreach($data as $num)
    //             $numbers[] = $num;
    //     }
    //    // fclose($h);
    //    print_r($numbers);

     }

    // print_r($numbers);

    fclose($handle);
?>