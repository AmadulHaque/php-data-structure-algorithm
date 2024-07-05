<?php 

class Sum {
    public function recursionSum($array,$i) 
    {
        if ($i == count($array)) {
            return 0;
        }

        return $array[$i] + $this->recursionSum($array, $i + 1);
    }

}


$obj = new Sum();
$result  = $obj->recursionSum([1,2,3,4],0);
print_r($result);
