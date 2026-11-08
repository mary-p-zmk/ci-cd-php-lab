<?php

namespace App\Services;

class Calculator
{
    public function add(int $x, int $y): int
    {
        return $x + $y;
    }

    public function subtract(int $x, int $y): int
    {
        return $x - $y;
    }
}
