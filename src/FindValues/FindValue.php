<?php
function findMissingValues(array $interval): array
{
    return count($interval) > 1 ? array_diff(range(min($interval), max($interval)), $interval) : [];
}
$array1 = [-2,-1,3,4,5];
$array2 = [0,2,-1,3];
$array3 = [1,2,3];
$array4 = [];
print_r(findMissingValues($array1));
print_r(findMissingValues($array2));
print_r(findMissingValues($array3));
