<?php
$password = "C0318G";
$password = "P0323A";

$pattern = '/^^[ABC]\w+/';
if (preg_match($pattern , $password)){
    echo "mẩu hợp lệ " . "$password" . "<br>";
}else {
    echo "mẩu không hợp lệ " . "$password" . "<br>";
}