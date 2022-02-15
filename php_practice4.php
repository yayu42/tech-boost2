<?php
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}

echo max_array(array(2,5,9,7,3,1,8,6,4));

?>