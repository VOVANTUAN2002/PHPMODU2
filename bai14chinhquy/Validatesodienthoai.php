<?php
$subject = "(84)-(0978489648)";
$subject = "(a8)-(22222222)";
function pregMatch($subject)
{
    $pattern = "/ ^([0-9]{2}\)\-\([0]{1}[0-9]{9}\) /";
    if (preg_match($pattern, $subject)) {
        echo "$subject . Số điện thoại hợp lệ . <br /> ";
    } else {
        echo "$subject . Số điện thoại không hợp lệ . <br /> ";
    }
}
pregMatch($subject);