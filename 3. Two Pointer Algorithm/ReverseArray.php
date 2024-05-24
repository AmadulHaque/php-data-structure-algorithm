<?php

class ReverseArray {
   
    function reverse(Array $arr) 
    { 
        $i = 0; $j = count($arr) - 1;
        $temp = "";
        while($i <= $j){
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
            $i++;
            $j--;

        }
        return $arr;
    } 
}


$obj = new ReverseArray();
$result = $obj->reverse([1,2,3,4,5,6,7,8]);
print_r($result);