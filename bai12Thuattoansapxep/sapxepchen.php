<?php
$list   = [5, -4, 3, 7, 2, 1, 11, 8, 9, 22];
//$list = [9,  8, 7, 5, 3, 2, 2, 1, 0,-4] = kết quả
function insertionSort($list) {
    for ($i = 1 ; $i < count($list); $i++){
            $j = $i - 1;
            $t = $list[$i];
            while ($t < $list[$j] && $j >= 0) {  
                $list[$j + 1] = $list[$j];
                $j--;
            }
            $list[$j + 1] = $t;
        }
        foreach ($list as $key => $value){
            echo $value . " ";
        }
    }
    insertionSort($list);

// echo "<pre>";
// print_r(insertionSort($list));
// die();
