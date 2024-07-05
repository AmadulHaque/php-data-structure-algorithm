<?php 

class Palindrome {

    public $array = [10,20,30,30,20,10];

    public function isPalindrome($i, $j) 
    {
        if ($this->array[$i] != $this->array[$j]) {
            return false;
        }

        if ($i > $j) {
            return true;
        }

        return $this->isPalindrome($i + 1, $j - 1);
    }


}

$obj = new Palindrome();
$result = $obj->isPalindrome(0, count($obj->array) - 1);
print_r($result);

?>
