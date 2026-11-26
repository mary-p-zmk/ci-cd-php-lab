<?php

declare(strict_types=1);

/**
 * Розрахунок вартості абонемента на кілька місяців.
 */
function calculateMembershipCost(float $price, int $months): float
{
    if ($price < 0 || $months <= 0) {
        throw new InvalidArgumentException(
            'Некоректна вартість або кількість місяців.'
        );
    }

    return $price * $months;
}

/**
 * Розрахунок вартості абонемента з урахуванням знижки.
 */
function applyDiscount(float $price, float $discount): float
{
    if ($discount < 0 || $discount > 100) {
        throw new Exception(
            'Розмір знижки повинен бути від 0 до 100%.'
        );
    }

    return $price * (1 - $discount / 100);
}
