<?php
function prodct($arr){
    $result = 0;
    for ($i = 0; $i < count($arr); $i++){
        if($i == 0){
            $result += $arr[$i];
        }else{
            $result *= $arr[$i];
        }
    }
    return $result;
}

function product($arr){
    $result = $arr[0];
    for ($i = 1; $i < count($arr); $i++){
        $result *= $arr[$i];
    }
    return $result;
}
echo product(array(1,3,5,7,9));
?>