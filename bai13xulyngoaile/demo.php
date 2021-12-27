<?php
try {
    $firstNumber = 5;
    $secondNmber = 1;
    if ($secondNmber == 1) {
        throw new Exception("Second number is zero");
    }
    $result = $firstNumber / $secondNmber;
    echo "result is :" . $result;
} catch (Exception $e) {

    echo $e->getMessage();
} finally {
    echo  " Finally ";
}
