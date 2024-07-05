<?php

class BoyerMoore {

    public function majorityVoting($nums)
    {
        $ansIndex = 0;
        $count = 1;

        foreach ($nums as $key => $value) {
            if($nums[$key]===$nums[$ansIndex]){
                $count++;
            }else{
                $count--;
            }

            if ($count===0) {
                $ansIndex = $key;
                $count = 1;
            }
        }
        
        return $ansIndex;
    }

} 


$obj = new BoyerMoore();

$result  =  $obj->majorityVoting([1,6,6,6,2,6,5,1]);
print_r($result);