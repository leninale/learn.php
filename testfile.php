<?php
function SearchLostElem($array)
{
    $count = 0;
    $returnarray = array($array[0]);
    foreach ($array as $value) {
        $count++;
    }
    $i = 1;
    $boolean = TRUE;
    while ($boolean == TRUE) {
        if ($returnarray[$i - 1] == $array[$count - 1]) {
            $boolean = false;
            continue;
        }
        $returnarray[$i] = $returnarray[$i - 1] + 1;
        $i++;
    }
    foreach ($returnarray as $value) {
        $boolean = TRUE;
        foreach ($array as $valueold) {
            if ($value == $valueold) {
                $boolean = false;
            }
        }
        if ($boolean == TRUE) {
            echo($value);
            echo(" ");
        }
    }
}
$func= 'SearchLostElem';
$func(array(-2,-1,3,4,5));
?>