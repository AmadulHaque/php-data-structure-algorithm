<?php

class MergeSort {

    // Function to sort an array using merge sort
    public function sort(array $arr): array {
        // If the array has 1 or fewer elements, it's already sorted
        if (count($arr) <= 1) {
            return $arr;
        }

        // Split the array into two halves
        $middle = intdiv(count($arr), 2);
        $left = array_slice($arr, 0, $middle);
        $right = array_slice($arr, $middle);

        // Recursively sort both halves
        $left = $this->sort($left);
        $right = $this->sort($right);

        // Merge the sorted halves
        return $this->merge($left, $right);
    }

    // Function to merge two sorted arrays
    private function merge(array $left, array $right): array {
        $result = [];

        // Compare the elements of both arrays and merge them in sorted order
        while (count($left) > 0 && count($right) > 0) {
            if ($left[0] <= $right[0]) {
                $result[] = array_shift($left);
            } else {
                $result[] = array_shift($right);
            }
        }

        // If there are any remaining elements in either array, add them to the result
        return array_merge($result, $left, $right);
    }

}

// Example usage
$mergeSort = new MergeSort();
$arr = [34, 7, 23, 32, 5, 62];
$sortedArr = $mergeSort->sort($arr);

print_r($sortedArr);
