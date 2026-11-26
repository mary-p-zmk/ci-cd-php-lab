<?php

declare(strict_types=1);

/**
 * Завдання 3.2 №3.
 * Сортування цілочисельного масиву за спаданням.
 */
function sortArrayDescending(array $numbers): array
{
    rsort($numbers, SORT_NUMERIC);

    return $numbers;
}

/**
 * Завдання 3.3 №3.
 * Повернення останніх трьох слів рядка.
 */
function getLastThreeWords(string $text): string
{
    $words = preg_split('/\s+/u', trim($text));

    if ($words === false || $text === '') {
        return '';
    }

    return implode(' ', array_slice($words, -3));
}

/**
 * Завдання 3.4 №2.
 * Перевірка, чи розташовані латинські літери
 * в рядку за зростанням.
 */
function areLatinLettersAscending(string $text): bool
{
    preg_match_all('/[a-z]/i', $text, $matches);

    $letters = $matches[0];

    for ($i = 1; $i < count($letters); $i++) {
        if (strcasecmp($letters[$i - 1], $letters[$i]) > 0) {
            return false;
        }
    }

    return true;
}
