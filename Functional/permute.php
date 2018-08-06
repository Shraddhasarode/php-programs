<?php
include('Utility.php');
echo "Enter theb input string";
$str =Utility::inputString();
$length=strlen($str);
Utility::swap($str,0,$length-1);


?>