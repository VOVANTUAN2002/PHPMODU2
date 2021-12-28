<?php

function isFirstLetterUpperCase($str) {
    $regexp = '/^[a-z]/';
    if (preg_match($regexp, $str)) {
        echo (" Nguyen van Nam");
    } else {
        echo (" NGUYEN VAN NAM ");
    }
}
isFirstLetterUpperCase('Codegym');
isFirstLetterUpperCase('cdegym');