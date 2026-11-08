<?php

namespace App\Services;

class Calculator
{
    public function add($x, $y)
    {
        return $x+$y; // formatting violation
    }

    public function subtract($x, $y)
    {
        return $x - $y;
    }
}