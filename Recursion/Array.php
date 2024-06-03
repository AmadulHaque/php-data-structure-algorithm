<?php 

class Recursion {
    public function iterate($array , $i = 0) 
    {
        if ($i == count($array)) {
            return;
        }
        
        echo $array[$i] . '  ';

        $this->iterate($array, $i + 1);
    }

}


$obj = new Recursion();
$result  = $obj->Iterate([1,2,3,4,5,6,7,8,9,11]);
print_r($result);
