<?php 

class SelectionSort {

    public function sort($array) 
    {
        $n = count($array);
        for ($i = 0; $i < $n - 1; $i++) {
            // Assume the max is the first element
            $maxIndex = $i;
            // Iterate through the unsorted elements
            for ($j = $i + 1; $j < $n; $j++) {
                // If we find a larger element, update maxIndex
                if ($array[$j] > $array[$maxIndex]) {
                    $maxIndex = $j;
                }
            }
            // Swap the found max element with the first element
            $temp = $array[$maxIndex];
            $array[$maxIndex] = $array[$i];
            $array[$i] = $temp;
        }

        return $array;
    }

}

$obj = new SelectionSort();
$result = $obj->sort([5, 3, 8, 4, 2, 9, 1]);
print_r($result);
