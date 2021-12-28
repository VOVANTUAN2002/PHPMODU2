<?php

// $name = " mai chiem an tuan";

// //dung explode
// $arr = explode('  .  ' , $name);
// $partern = '/\s/';

// //dung preg_split

// $arr1 = preg_split($partern , $name);

// echo '<pre>';
// print_r($arr);
// print_r($arr1);


// //dung preg_replace de xoa toan bo email trong chuoi thanh khoang trang
// $string = "xin chao test1@gmail.com va test2@gmail.com";
// $partern = "/[a-z0-9]{1,}\@[a-z]{1,}\.[a-z]{1,}/";
// $string = preg_replace($partern , " " , $string);

// print $string;

#Quiz
// $string = "1,2,3,4,5,6";
// $arrayStrings = preg_split('/,/', $string);
// $sum = 0;
// foreach ($arrayStrings as $value) {
//     $number = (int)($value);
//     if ($number % 2 == 0) {
//        $sum += $number;
//     }
// }
// echo "$sum";

// $string = " CodeGym_Viet_Nam ";
// $trim_string = trim($string, " ");
// $index = stripos($trim_string, "_");
// $sub_string = substr($trim_string, 0, $index);
// echo "$sub_string";

$subject = "CodeGym@gmail.com";
$pattern = '/^\w+@\w+(\.\w+){1,3}$/';
if (preg_match($pattern, $subject, $matches)) {
    echo 'Khớp';
} else {
    echo 'Không khớp';
}