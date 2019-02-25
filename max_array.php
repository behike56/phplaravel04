<?php
//課題4

 function max_array($arr){
 $max_number = $arr[0];
 
 foreach($arr as $a){
   
   if($max_number <= $a){
     $max_number = $a;
     
   }
 }

 return $max_number;
 }

$array = [5,77,22,14,37,128,4,357];
echo max_array($array);

?>