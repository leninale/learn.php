<?php
function SearchLostElems($array){
    $returnArray = [];
    for($i = min($array);$i < max($array);$i++){
        if(in_array($i, $array) == FALSE){
            $returnArray[]=$i;
        }
    }
    foreach ($returnArray as $value) echo "$value \n";
    echo "______________________________________________________________\n";

}

$array1 = array(-2,-1,3,4,5);
$array2 = array(0,2,-1,3);
$array3 = array(1,2,3);
SearchLostElems($array1);
SearchLostElems($array2);
SearchLostElems($array3);
?>