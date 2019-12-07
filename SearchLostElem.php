<?php
function SearchLostElems(array $array): array
{
    $returnArray = [];
    for($i = min($array);$i < max($array);$i++)
    {
        if(!in_array($i, $array))
        {
            $returnArray[]=$i;
        }
    }
   return $returnArray;
}

$array1 = [-2,-1,3,4,5];
$array2 = [0,2,-1,3];
$array3 = [1,2,3];
print_r(SearchLostElems($array1));
print_r(SearchLostElems($array2));
print_r(SearchLostElems($array3));
?>