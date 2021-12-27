<?php
class DivideByZeroException extends Exception
{
    public function __toString(): string
    {
        return " Can't divide by zero ";
    }
}
$result = divide(100, 5);
echo $result;
$result = divide(100, 1);
echo $result;