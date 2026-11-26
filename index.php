<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/app/Models/EntityArray.php';
require_once __DIR__.'/app/Services/EntityService.php';
require_once __DIR__.'/app/Services/DataProcessor.php';

use Faker\Factory;

// Створення генератора Faker
$faker = Factory::create();

// Генерація 10 випадкових цін абонементів
$membershipPrices = [];

for ($i = 0; $i < 10; $i++) {
    $membershipPrices[] = $faker->numberBetween(300, 5000);
}

// Критерій відбору
$minPrice = 1500;

// Фільтрація за допомогою анонімної функції
$filteredPrices = array_filter(
    $membershipPrices,
    function ($price) use ($minPrice) {
        return $price >= $minPrice;
    }
);

// Розрахунок вартості абонемента на 3 місяці
$totalCost = calculateMembershipCost(1200, 3);

// Перевірка застосування знижки
$discountedPrice = applyDiscount(1200, 10);

try {
    // Навмисно некоректне значення знижки
    $result = applyDiscount(1200, 150);

    echo "Вартість зі знижкою: $result грн";
} catch (Exception $e) {
    echo '<p>Помилка: '.htmlspecialchars($e->getMessage()).'</p>';
} finally {
    echo '<p>Перевірку знижки завершено.</p>';
}

// Таблиця 3.2, завдання 3
$numbers = [15, 4, 28, 9, 12];
$sortedNumbers = sortArrayDescending($numbers);

// Таблиця 3.3, завдання 3
$sentence = 'Фітнес центр пропонує різноманітні тренування';
$lastWords = getLastThreeWords($sentence);

// Таблиця 3.4, завдання 2
$latinText = 'AbcDef';
$ascending = areLatinLettersAscending($latinText);

?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Система управління фітнес-центром</title>
</head>
<body>

    <h1>Система управління фітнес-центром</h1>

    <h2>1. Генерація даних за допомогою Faker</h2>

    <p>Згенеровані ціни абонементів:</p>
    <p><?= implode(', ', $membershipPrices) ?> грн</p>

    <p>Ціни від <?= $minPrice ?> грн:</p>
    <p><?= implode(', ', $filteredPrices) ?> грн</p>

    <h2>2. Розрахунок вартості абонемента</h2>

    <p>Вартість абонемента за 3 місяці: 
        <?= $totalCost ?> грн
    </p>

    <p>Вартість зі знижкою 10%:
        <?= $discountedPrice ?> грн
    </p>

    <h2>3. Завдання варіанта 19</h2>

    <h3>Таблиця 3.2 — сортування масиву за спаданням</h3>

    <p>Початковий масив:
        <?= implode(', ', $numbers) ?>
    </p>

    <p>Відсортований масив:
        <?= implode(', ', $sortedNumbers) ?>
    </p>

    <h3>Таблиця 3.3 — останні три слова рядка</h3>

    <p>Початковий рядок:
        <?= htmlspecialchars($sentence) ?>
    </p>

    <p>Результат:
        <?= htmlspecialchars($lastWords) ?>
    </p>

    <h3>Таблиця 3.4 — перевірка порядку латинських літер</h3>

    <p>Початковий рядок:
        <?= htmlspecialchars($latinText) ?>
    </p>

    <p>Результат:
        <?= $ascending ? 'Літери розташовані за зростанням.' : 'Літери не розташовані за зростанням.' ?>
    </p>

</body>
</html>
