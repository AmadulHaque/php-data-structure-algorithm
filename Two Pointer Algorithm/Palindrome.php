<?php

class Palindrome {
   
    function isPalindrome($str) 
    { 
        $i = 0; $j = strlen($str) - 1;
        $temp = "";
        while($i <= $j){
            if ($str[$i] !== $str[$j]) {
                return 'false';
            }
            $i++;
            $j--;

        }
        return 'true';
    } 
}


$obj = new Palindrome();
$result = $obj->isPalindrome('dad');
print_r($result);