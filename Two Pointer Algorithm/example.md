Two Pointer Algorithm

The two-pointer technique is a common algorithmic approach used for solving problems involving arrays or lists. It typically involves using two indices (pointers) that traverse the array from different ends or start from the same end but move at different speeds. This technique can be categorized into three main types:

    Front & Back Pointer
    Fast & Slow Pointer
    Two Pointers in Two Different Arrays

1. Front & Back Pointer

The front & back pointer approach involves two pointers that start from opposite ends of the array and move towards each other. This technique is useful for problems where you need to compare or sum elements from both ends.
Example: Finding Pairs with a Target Sum

php

<?php
function findPairsWithSum($arr, $target) {
    $pairs = [];
    $left = 0;
    $right = count($arr) - 1;

    while ($left < $right) {
        $sum = $arr[$left] + $arr[$right];
        if ($sum == $target) {
            $pairs[] = [$arr[$left], $arr[$right]];
            $left++;
            $right--;
        } elseif ($sum < $target) {
            $left++;
        } else {
            $right--;
        }
    }
    return $pairs;
}

// Example usage
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$target = 10;
$pairs = findPairsWithSum($arr, $target);
print_r($pairs);
?>

2. Fast & Slow Pointer

The fast & slow pointer technique involves two pointers that move at different speeds, typically used to detect cycles in linked lists or find the middle of a list.
Example: Detecting a Cycle in a Linked List

php

<?php
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

function hasCycle($head) {
    $slow = $head;
    $fast = $head;

    while ($fast !== null && $fast->next !== null) {
        $slow = $slow->next;
        $fast = $fast->next->next;
        if ($slow === $fast) {
            return true;
        }
    }
    return false;
}

// Example usage
$head = new ListNode(3);
$head->next = new ListNode(2);
$head->next->next = new ListNode(0);
$head->next->next->next = new ListNode(-4);
$head->next->next->next->next = $head->next; // Creating a cycle

echo hasCycle($head) ? "Cycle detected" : "No cycle detected";
?>

3. Two Pointers in Two Different Arrays

This approach involves using two pointers to traverse two different arrays simultaneously. It is commonly used in merge operations or finding common elements.
Example: Merging Two Sorted Arrays

<?php
    function mergeSortedArrays($arr1, $arr2) {
        $merged = [];
        $i = 0;
        $j = 0;

        while ($i < count($arr1) && $j < count($arr2)) {
            if ($arr1[$i] < $arr2[$j]) {
                $merged[] = $arr1[$i];
                $i++;
            } else {
                $merged[] = $arr2[$j];
                $j++;
            }
        }

        // Append remaining elements
        while ($i < count($arr1)) {
            $merged[] = $arr1[$i];
            $i++;
        }
        while ($j < count($arr2)) {
            $merged[] = $arr2[$j];
            $j++;
        }

        return $merged;
    }

    // Example usage
    $arr1 = [1, 3, 5, 7];
    $arr2 = [2, 4, 6, 8];
    $merged = mergeSortedArrays($arr1, $arr2);
    print_r($merged);
?>
