<?php
/****** Провеярем пришло ли к нам что-то из поля simple_pay *******/
$hasSimplePay = array_key_exists('simple_pay', $_POST); // проверка
$simplePay = $hasSimplePay
    ? trim((string) $_POST['simple_pay'])
    : null;

if ($hasSimplePay && ($simplePay === '' || !is_numeric($simplePay))) {
    sendJson([
        'success' => false,
        'message' => 'Укажите корректное значение simple_pay.',
    ]);
}
