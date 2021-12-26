<?php

// $list   =  [1, 9, 4.5, 6.6, 5.7, -4.5] ;
// //$list =   [-4.5, 1, 4.5, 5.7, 6.6, 9] = kết quả
// function selectionSort($list) {
//     for ($i = 1; $i < count($list); $i++) {
//         $min            = $i;
//         for ($j = $i + 1; $j < count($list); $j++) {
//             if($list[$j] < $list[$min]){
//             $min        = $j;
//         }
//         if ($min       != $i) {
//             $t          =$list[$min];
//             $list[$min] = $t;
//         }
//     }
//     return $list;
// }
    
//     foreach ($list as $key => $value)
//         echo $value . " " ;
// }
// echo "<pre>";
// print_r(selectionSort($list));
// die();

$list = [1, 9, 4.5 , 6.6, 5.7, -4.5];
//$list = [-4.5, 1, 4.5, 5.7, 6.6, 9] = kết quả
function selectionSort($list) {
    for ($i = 0; $i < count($list); $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($list); $j++) {
            if ($list[$j] < $list[$min]) {
                $min = $j;
            }
        }
        $list = swap($list, $i, $min);  
    }
    return $list;
}
function swap($data1, $left, $right)
{
    $right_old = $data1[$right];
    $data1[$right] = $data1[$left];
    $data1[$left] = $right_old;
    return $data1;
}


echo implode(' ',selectionSort($list));