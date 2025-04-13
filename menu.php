<?php

require_once 'Tag.php';
require_once('Link.php');


echo (new Link())->setText('index')->setAttr('href', '/1.php')->show();
echo (new Link())->setText('page')->setAttr('href', '/2.php')->show();
echo (new Link())->setText('blog')->setAttr('href', '/3.php')->show();
echo (new Link())->setText('contact')->setAttr('href', '/4.php')->show();
echo (new Link())->setText('forum')->setAttr('href', '/5.php')->show();