<?php

class Utility
{
    public static function inputstring()
    {
        fscanf(STDIN,"%s\n",$string);
        return $string;
    }

    public static function isMatching($experssion)
    {

        echo"\n ";
        echo strlen($experssion);
        

    }
    // Program of Binary Search
    public static function BinarySearch($arrayelement)
    {
        //echo "\n  ".count($arrayelement);
        for($i=0;$i<count($arrayelement);$i++)
        {  
            //echo "\n  ".count($arrayelement);
             $a= self::fact((2)*($arrayelement[$i]));
		     $b =self::fact(($arrayelement[$i]+1));
		     $c=self::fact($arrayelement[$i]);
             $count=0;
             $count=$a/($b*$c);
             echo "\n" .$count;

        }
        
    }
       private static function fact($i)
    {    
       // echo " inside fact";
        $fact=1;
        while($i>=1)
        {
            $fact=$fact*$i;
            $i--;
        }
        return $fact;

    }
    //  Program of Calender Program
    public static function Calender($month,$year)
    {
        $months=array("","Janaury","February","March","April","May","June","July","August",
                         "September","October","November","December");
         $days=array(0,31,28,31,30,31,30,31,31,30,31,30,31);
	
         if ($month == 2 && self::isLeapYear($year)) 
         {
         $days[$month] = 29;
         }
         echo " ".$months[month]." ".$year;
         echo "S M Tu W Th F S ";
         
        // $d=$day($months,1,$year);

         for($i=0;$i<$d;$i++)
             echo" ";
         for($i=1;$i<=$days[$month];$i++)
          echo " &nbsp &nbsp".$i ;
         if ((($i + $d) % 7 == 0) || ($i == $days[$month]))
         {
             echo "\n ";

         }       
    }
    public static function isLeapYear($year)
    {
        $leap=false;
	if($year%4 ==0)
		{ 
			if($year%100==0)
			{
				if($year%400==0)
					$leap=true;
				else 
					$leap=false;
				
			}
			else $leap=true;
			
		}else $leap=false;
			
		if($leap)
			echo"Is a leap year";
		else
		    echo "Is not a leap year";
		return $leap;

    }

}



?>