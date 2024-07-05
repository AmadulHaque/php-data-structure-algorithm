<?php 

class BubbleSort {


    public function sort($array,$type='asc') 
    {
    
        if ($type=='asc') {
            $n= count($array);
            for ($j=0; $j < $n; $j++) { 

                for ($i=0; $i < $n - $j - 1; $i++) { 

                    if ($array[$i] > $array[$i+1]) {
                        $temp = $array[$i];
                        $array[$i] = $array[$i+1];
                        $array[$i+1] = $temp;
                    }
                }
            }
        }else{
            $n= count($array);
            for ($j=0; $j < $n; $j++) { 
    
                for ($i=0; $i < $n - $j - 1; $i++) { 
    
                    if ($array[$i] < $array[$i+1]) {
                        $temp = $array[$i];
                        $array[$i] = $array[$i+1];
                        $array[$i+1] = $temp;
                    }
                }
            }
        }


     return $array;
    }

}


$obj = new BubbleSort();
$result  = $obj->sort([7,10,2,11,5,6,1,8,9,3,4],'asc');
print_r($result);
