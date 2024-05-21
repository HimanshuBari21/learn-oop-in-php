<?php

class Math
{
    public static $favTeacher = "Praveen";

    static function add(...$nums)
    {
        return array_sum($nums);
    }
}

$p4 = new Math();

$p4::$favTeacher = "Pro";

echo $p4::add(1, 2, 3, 4, 5, 6);


echo '<br />';

class Bank
{
    const TAX = 18;

    private $totalAmount;

    function __construct($totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }
}

$hdfc = new Bank(45555);

echo $hdfc::class;
echo $hdfc::TAX;
