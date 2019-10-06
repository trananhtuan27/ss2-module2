<?php
function findMinToArr($arr)
{
    $index = 0;
    $min = arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
            $index = $i;
        }
    }
    return " gia tri nho nhat nam o vi tri thu " . $i;
}
$arrTest = [-1, 10, 331, -101, -1010,-1011];
$result = findMinToArr($arrTest);
echo $result;