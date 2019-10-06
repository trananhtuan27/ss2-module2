<?php

function findMaxToArr($arr)
{
    $max = $arr[0][0];
    foreach ($arr as $value) {
        foreach ($value as $number) {
            if ($max < $number) {
                $max = $number;
            }
        }
    }
    return $max;
}

$arr = [[1, 2, 3, 4], [2, 3, 4, 5], [100]];
$result = findMaxToArr($arr);
echo $result;