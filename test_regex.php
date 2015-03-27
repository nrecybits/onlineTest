<?php

//$test="#155#14";//1000#5
$test="NLD52180471";//1000

$str= preg_replace('/^([x|0|(nld)]){1,}|\s+/i','*',$test);
 echo "<br>Test : ".  $test ;        
 echo "<br>STRG : ".  $str ;
 
 echo "<br> test !!!!";
?>
