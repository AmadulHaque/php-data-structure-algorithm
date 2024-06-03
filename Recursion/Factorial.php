<?php 

class Factorial {
    public function factorial($n) 
    {
        if ($n == 0 or $n == 1) {
            return 1;
        }

        return $n * $this->factorial($n - 1);
    }

}


$obj = new Factorial();
$result  = $obj->factorial(-0);
print_r($result);
