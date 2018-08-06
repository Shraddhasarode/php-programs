<?php
include('Utility.php');
include('Stack.php');
echo"Enter the string  ";
$experssion=Utility::inputstring();
//$result=Utility::isMatching($experssion);
$st=new Stack(50);

$array=str_split($experssion);

$length=count($array);
for($i=0;$i<$length;$i++)
{
    //$ch=$experssion.charAt($i);
    
    $ch=$array[$i];
    
    if($ch=='('||$ch=='{'||$ch=='['){
        $st->push($ch);
       
    }
       
    else if(($ch==')'||$ch=='}'||$ch==']')&& (!$st->isEmpty()))
    {
        if (($st->peek() == '(' && $ch == ')')
                   || ( $st->peek() == '{' && $ch == '}')
                   || ( $st.peek() == '[' && $ch == ']'))
           {
               $st->pop();
            
           } else
            {
               echo "Not Balanced";
             }
       } else
        {
           if (($ch == ']' || $ch == '}' || $ch == ')')) 
           {
               echo "Not Balanced";
           }
       }
   }
   if ($st->isEmpty())
       echo "Balanced Parenthisis";
   else
       echo "Not Balanced";





?>