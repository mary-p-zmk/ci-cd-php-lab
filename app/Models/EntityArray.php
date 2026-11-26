<?php

// Індексований масив напрямів діяльності фітнес-центру
$fitnessActivities = [
    'Персональні тренування',
    'Групові заняття',
    'Йога',
    'Плавання',
    'Силові тренування',
];

// Сортування масиву за алфавітом
sort($fitnessActivities);

// Асоціативний масив, що описує сутність Membership
$membership = [
    'id' => 1,
    'name' => 'Стандартний абонемент',
    'price' => 1200.00,
    'durationDays' => 30,
    'description' => 'Доступ до тренажерної зали',
];

// Виведення індексованого масиву
echo '<h2>Напрями діяльності фітнес-центру</h2>';
echo '<ul>';

foreach ($fitnessActivities as $activity) {
    echo '<li>'.htmlspecialchars($activity).'</li>';
}

echo '</ul>';

// Виведення асоціативного масиву
echo '<h2>Інформація про абонемент</h2>';
echo '<ul>';

foreach ($membership as $key => $value) {
    echo '<li><strong>'.htmlspecialchars((string) $key).':</strong> '
        .htmlspecialchars((string) $value).'</li>';
}

echo '</ul>';
