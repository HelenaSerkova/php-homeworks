<?php
// подключить файлы Item и ItemStorage
// создать необходимые объекты, вызвать методы
require_once 'Item.php';
require_once 'ItemStorage.php';

$one = new Item(1, 'itemone');
$one->setPrice(67);
$one->setMaterial('wood');

$two = new Item(2, 'itemtwo');
$two->setPrice(56);
$two->setMaterial('wood');

$three = new Item(3, 'itemthree');
$three->setPrice(58);
$three->setMaterial('cotton');

$four = new Item(4, 'itemfour');
$four->setPrice(58);
$four->setMaterial('metal');

$five = new Item(5, 'itemfive');
$five->setPrice(47);
$five->setMaterial('glass');



$storage = new ItemStorage();

$storage->add_item($one);
$storage->add_item($two);
$storage->add_item($three);
$storage->add_item($four);
$storage->add_item($five);

var_dump($storage);


var_dump($storage->get_by_title('itemfour'));
var_dump($storage->get_by_price(46, 57));
var_dump($storage->get_by_material('wood', 'glass'));
var_dump($storage->get_by_price_and_material(50, 'glass'));
