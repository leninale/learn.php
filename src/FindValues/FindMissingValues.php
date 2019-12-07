<?php

namespace App\FindValues;

class FindMissingValues
{
    function searchLostElems(array $array): array
    {
        $returnArray = null; //Для теста
        for ($i = min($array); $i < max($array); $i++) {
            if (!in_array($i, $array)) {
                $returnArray[] = $i;
            }
        }
        return $returnArray;
    }
}

/*$findMissingValues = new FindMissingValues();
$array1 = [-2,-1,3,4,5]; // [0,1,2]
$array2 = [0,2,-1,3]; // [1]
$array3 = [1,2,3]; // []
print_r($findMissingValues ->searchLostElems($array1));
print_r($findMissingValues ->searchLostElems($array2));
print_r($findMissingValues ->searchLostElems($array3));*/
