<?php
//Написать функцию, которая принимает информацию о корзине (прайс, количество, скидка), которая возвращает информацию вида:
//с в корзине x товаров на общую сумму y, Ваша скидка составляет z%
$number = 30;
$sum = 350;
$disc = '59%';
$format = 'You have %d products in your basket, costing %u dollars. Your discount is %s.';
echo sprintf($format, $number, $sum, $disc);
