<?php
//課題３

function arr_sum($arr){
  $b = 1;
  
  foreach($arr as $ar){
     $sums =  $ar;
    $b = $b * $sums;
    
  }
      
  return $b;
}

$array = [1, 3, 5 ,7, 9];
echo arr_sum($array);

?>