<?php
// Написать функцию (функции) по созданию нового массива на основе
// существующего: категории товаров. Массивы, описывающие дочерние
// категории должны стать вложенными массивами в родительский
// массив-категорию по ключу children_elems.

$categories = [
    [
        'id' => '1',
        'parent_category' => null,   //1 - 4 (7, 8), 5 (9, 10, 11), 6 (12, 13, 14)
        'title' => 'Смартфоны и гаджеты'
    ],
    [
        'id' => '2',
        'parent_category' => null, // 2 - 15 (18, 19, 20), 16, 17 (21, 22)
        'title' => 'Компьютеры'
    ],
    [
        'id' => '3',
        'parent_category' => null, // 3 - 23 (27, 28, 29), 24 (30, 31), 25 (32, 33, 34), 26 (35, 36)
        'title' => 'Бытовая техника'
    ],
    [
        'id' => '4',
        'parent_category' => '1', //
        'title' => 'Смартфоны'
    ],
    [
        'id' => '5',
        'parent_category' => '1',
        'title' => 'Смарт-часы и браслеты'
    ],
    [
        'id' => '6',
        'parent_category' => '1',
        'title' => 'Сотовые телефоны'
    ],
    [
        'id' => '7',
        'parent_category' => '4',
        'title' => 'Влагозащищенные'
    ],
    [
        'id' => '8',
        'parent_category' => '4',
        'title' => 'С функцией бесконтактной оплаты'
    ],
    [
        'id' => '9',
        'parent_category' => '5',
        'title' => 'Спортивные'
    ],
    [
        'id' => '10',
        'parent_category' => '5',
        'title' => 'Детские'
    ],
    [
        'id' => '11',
        'parent_category' => '5',
        'title' => 'С сенсорным дисплеем'
    ],
    [
        'id' => '12',
        'parent_category' => '6',
        'title' => 'Раскладушки'
    ],
    [
        'id' => '13',
        'parent_category' => '6',
        'title' => 'Слайдеры'
    ],
    [
        'id' => '14',
        'parent_category' => '6',
        'title' => 'Моноблоки'
    ],
    [
        'id' => '15',
        'parent_category' => '2',
        'title' => 'Ноутбуки'
    ],
    [
        'id' => '16',
        'parent_category' => '2',
        'title' => 'Моноблоки'
    ],
    [
        'id' => '17',
        'parent_category' => '2',
        'title' => 'Системные блоки'
    ],
    [
        'id' => '18',
        'parent_category' => '15',
        'title' => 'Ультрабуки'
    ],
    [
        'id' => '19',
        'parent_category' => '15',
        'title' => 'Нетбуки'
    ],
    [
        'id' => '20',
        'parent_category' => '15',
        'title' => 'Трансформеры'
    ],
    [
        'id' => '21',
        'parent_category' => '17',
        'title' => 'Игровые'
    ],
    [
        'id' => '22',
        'parent_category' => '17',
        'title' => 'Для учебы'
    ],
    [
        'id' => '23',
        'parent_category' => '3',
        'title' => 'Приготовление пищи'
    ],
    [
        'id' => '24',
        'parent_category' => '3',
        'title' => 'Приготовление напитков'
    ],
    [
        'id' => '25',
        'parent_category' => '3',
        'title' => 'Холодильное оборудование'
    ],
    [
        'id' => '26',
        'parent_category' => '3',
        'title' => 'Уборка'
    ],
    [
        'id' => '27',
        'parent_category' => '23',
        'title' => 'Плиты'
    ],
    [
        'id' => '28',
        'parent_category' => '23',
        'title' => 'Пароварки'
    ],
    [
        'id' => '29',
        'parent_category' => '23',
        'title' => 'Мультиварки'
    ],
    [
        'id' => '30',
        'parent_category' => '24',
        'title' => 'Электрочайники'
    ],
    [
        'id' => '31',
        'parent_category' => '24',
        'title' => 'Кофемашины'
    ],
    [
        'id' => '32',
        'parent_category' => '25',
        'title' => 'Холодильники'
    ],
    [
        'id' => '33',
        'parent_category' => '25',
        'title' => 'Морозильные шкафы'
    ],
    [
        'id' => '34',
        'parent_category' => '25',
        'title' => 'Винные шкафы'
    ],
    [
        'id' => '35',
        'parent_category' => '26',
        'title' => 'Пылесосы'
    ],
    [
        'id' => '36',
        'parent_category' => '26',
        'title' => 'Роботы-пылесосы'
    ]

];

function find_by_param(array $arr, callable $func){
  $new_arr = [];
  foreach ($arr as $value) {
    if ($func($value)) {
      $new_arr[] = $value;
    }
  }
  return $new_arr;
}

// foreach ($categories as $category => $value) {

// if (category['parent_category'] === null) {
//
//}
// if (category['parent_category'] === task['id'] ) {
//
// }
// }


 ?>
