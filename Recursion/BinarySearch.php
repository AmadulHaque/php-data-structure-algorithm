<?php 

class BinarySearch {
    public $array;
    public $target;
    public $left;
    public $right;
  
    function __construct($array, $target) {
        $this->array = $array; 
        $this->target = $target; 
        $this->left = 0;
        $this->right = count($array) - 1; 
    }

    function search() {
        return $this->binarySearch($this->left, $this->right);
    }

    private function binarySearch($left, $right) {
        if ($left > $right) {
            return "not Found";
        }

        $mid = floor(($left + $right) / 2);

        if ($this->array[$mid] === $this->target) {
            return $mid;
        }

        if ($this->target < $this->array[$mid]) {
            return $this->binarySearch($left, $mid - 1);
        } else {
            return $this->binarySearch($mid + 1, $right);
        }
    }
}

$obj = new BinarySearch([1, 2, 3, 4], 3);
$result = $obj->search();
print_r($result);

?>
