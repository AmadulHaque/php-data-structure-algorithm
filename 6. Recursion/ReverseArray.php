<?php 

class ReverseArray {
    public $array = [1, 2, 3, 4];

    public function reverseArr($i, $j) 
    {
        if ($i > $j) {
            return;
        }

        // Swap the elements
        $temp = $this->array[$i];
        $this->array[$i] = $this->array[$j];
        $this->array[$j] = $temp;
        
        // Recursive call
        $this->reverseArr($i + 1, $j - 1);
    }

    public function getArray() {
        return $this->array;
    }
}

$obj = new ReverseArray();
$obj->reverseArr(0, count($obj->array) - 1);
print_r($obj->getArray());

?>
