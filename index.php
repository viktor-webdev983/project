<?php
//require_once 'Date.php';
//require_once 'Interval.php';
require_once 'Tag.php';

/*$date = new Date('2025-04-08');

echo $date->getDay();
echo $date->getMonth('en');
echo $date->getYear();

echo $date->getWeekDay();     // '3' (среда по умолчанию на английском)
echo $date->getWeekDay('ru'); // 'среда'
echo $date->getWeekDay('en'); // 'Wednesday'

echo (new Date('2025-12-31'))->addYear(1); // '2026-12-31'
echo (new Date('2025-12-31'))->addDay(1);  // '2026-01-01'

echo (new Date('2025-12-31'))->subDay(3)->addYear(1); // '2026-12-28'*/



$tag = new Tag('div');
echo $tag->setAttr('id', 'mu_id')->setAttr('class', 'mu_class')->open() . 'text' . $tag->close();

$tag->removeAttr('id');
$tag->setAttrs(['id' => 'test', 'class' => 'eee']);

echo $tag->open() . 'test2' . $tag->close();
?>