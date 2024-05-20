<?php

class TwoSum {
   
    function sum($nums, $target)
    { 
        $i = 0; $j = count($nums) - 1;
        sort($nums);
        while($i <= $j){
            $sum = $nums[$i] + $nums[$j];

            if ($target === $sum) {
                return [$nums[$i] , $nums[$j]];
            }elseif($target < $sum){
                $j--;
            }else{
                $i++;
            }
        }

        return -1;
    } 
}


$obj = new TwoSum();
$result = $obj->sum([3,2,4],6);
print_r($result);