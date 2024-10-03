<?php

class CycleSort {
    
    public function sort($array) 
    {
        $n = count($array); 
        $i = 0;
        
        while($i < $n) {
            $val = $array[$i];
            $correctIndex = $val - 1;

            // Only swap if the element is not in the correct position
            if ($array[$correctIndex] != $val) {
                // Swap the current element with the element at its correct position
                $temp = $array[$i];
                $array[$i] = $array[$correctIndex];
                $array[$correctIndex] = $temp;
            } else {
                // Move to the next index when the current element is in its correct position
                $i++;
            }
        }

        return $array;
    }

}

$obj = new CycleSort();
$result  = $obj->sort([7, 10, 2, 11, 5, 6, 1, 8, 9, 3, 4]);
print_r($result);

