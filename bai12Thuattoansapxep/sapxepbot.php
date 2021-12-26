<?php
$list   = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
//$list = [-2, 1, 2, 2, 3, 3, 5, 6, 12, 14] = kết quả // xây dưng phương thức bubbleSort($list) 
function bubbleSort($list) { //so sánh hai phần tử kề nhau, nếu chúng chưa đứng đúng thứ tự thì đổi chỗ.
    for ($i = 0; $i < count($list) - 1 ; $i++) { 
            for ($j = count($list) - 1 ; $j > $i ; $j--){ 
                if ($list[$j] < $list[$j - 1]) 
                {
                    $t            = $list[$j - 1];
                    $list[$j - 1] = $list [$j];
                    $list[$j]     = $t;
                }
            }
        }
        return $list;
}
echo '<pre>';
print_r(bubbleSort($list));
die();


var_dump(bubbleSort($list));