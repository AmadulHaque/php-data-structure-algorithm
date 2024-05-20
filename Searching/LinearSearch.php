<?php

class LinearSearch {
   
    function search($arr, $value) { 

        for($i = 0; $i <= count($arr) - 1; $i++) {
            if($value === $arr[$i]) {
                return $i; 
            }
        }
        return -1; 
    } 

}


$obj = new LinearSearch();
$result = $obj->search([1,2,3,4,5,6,7,8],3);
print_r($result);