<?php
//require_once 'Date.php';
//require_once 'Interval.php';
require_once 'Tag.php';
//require_once 'Image.php';
//require_once 'Link.php';
require_once 'ListItem.php';
require_once 'HtmlList.php';

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


//echo (new Image())->setAttrs(['width'=>'200','height'=>'300']);

//echo (new Link())->setText('index')->show();

$list = new HtmlList('ul');

echo $list
->addItem(new ListItem())->setText('item1')
->addItem(new ListItem())->setText('item2')
->addItem(new ListItem())->setText('item3')
->show();


?>