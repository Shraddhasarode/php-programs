<?php
include('LinkedList.php');
include('Utility.php');

$path="/var/www/html/DataStructur/Unorderd.txt";
$handle = fopen($path, "r");
$list=new LinkedList();
    while (($line = fgets($handle)) !== false) 
    {
        
        $word_arr = explode(" ", $line); //" " seperator 
        foreach($word_arr as $word)
        {
           // echo $word."\n"; 
        $list->insertdata($word);
         }
    }
       $list->show();
      echo" Enter the element to search ";
      $element=Utility::inputstring();
      
     $result = $list->search($element);

     if($result==true)
     {
         $list->removenode($element);
         $current = file_get_contents($path);
        //  $variable="shraddha";
        //  file_put_contents($path,$variable );
        //  $handle = fopen($path, "wr");
        //   $data= 'user id new data';
        //  fwrite($handle,$data);

         $list->insertdata($word);

         $list->show();
     }
     else
     {
         echo "else";
        //  $handle = fopen($path, "wr");
        //   $data= 'user id new data';
        //  fwrite($handle,$data);

        $list->insertdata($element);


         $list->show();
     }
     //echo "list print ";
     

    //  $handle = fopen($path, "a+") ;
    //  foreach(($list->$this->head) as $txt)
    //  {
    //      echo" $txt";
    //       //fwrite($handle, "\n". $txt);
    //  }
   //  $txt = "user id date";
     //fwrite($myfile, "\n". $txt);
 
    fclose($handle);



?>