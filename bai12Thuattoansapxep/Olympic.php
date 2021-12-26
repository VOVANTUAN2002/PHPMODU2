<?php
class Country  {
    public $name ;
    public $totalGoldMedals = 0 ;

    public function __construct($name,$totalGoldMedals)
    {
        $this->name = $name;
        $this->totalGoldMedals = $totalGoldMedals;
    }
}
$total = new Country('vietnam',2);
$total = new Country('vietnam1',2);
$total = new Country(1,2);
$total = new Country(1,2);
$total = new Country(1,2);
$total = new Country(1,2);
$total = new Country(1,2);  