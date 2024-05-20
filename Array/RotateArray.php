<?php
class Solution {

    function rotate($nums, $k) {
        $total_count = count($nums); 
        if($k <= 0  ){
            return;
        }
        while($k >  $total_count){
            $k = $k -  $total_count;
        }
        $newArray = [];
        $key =  $total_count - $k;
       

        // step 1
        $j = 0;
        for($i = $key;  $i <  $total_count; $i++){
            $newArray[$j] = $nums[$i];
            $j++;
        }

        // step 2
        for($i = 0; $i <  $key; $i++){
            $newArray[$j] = $nums[$i];
            $j++;
        }

        for($i = 0; $i < $total_count; $i++) {
            $nums[$i] = $newArray[$i]; 
            print_r($newArray[$i]);
        } 

    }
}

$solution = new Solution();

$result = $solution->rotate([1,2,3,4,5,6,7,8],3);

print_r($result);