<?php

// Вывести в html информацию о товарах из массива $goods.
 // Информацию о характеристиках товара (description) выводить в таблице.

 $goods = [
     [
         'id' => 1,
         'title' => 'Flute',
         'price' => 20000,
         'img' => 'flute.jpg',
         'description' => [
             'color' => 'white',
             'material' => 'bamboo'
         ]
     ],
     [
         'id' => 2,
         'title' => 'Гитара',
         'price' => 18000,
         'img' => 'guitar.jpg',
         'description' => [
             'color' => 'brown',
             'material' => 'linden'
         ]
     ],
     [
         'id' => 3,
         'title' => 'Барабан',
         'price' => 68000,
         'img' => 'drum.jpg',
         'description' => [
             'color' => 'brown',
             'material' => 'steel'
         ]
     ],
 ];
?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Goods</title>
  </head>
  <body>
    <!-- <section -->
    <!-- article -->
      <!-- h3 наименование -->
      <!-- p цена-->
      <!-- img -->
      <!-- table -->
       <!-- tr --><!--th-->
        <!-- tr -->
    <!-- article -->
    <!-- /section> -->


    <section>
      <?php foreach ($goods as $good): ?>
        <article>
          <h3>Наименование: <?php echo $good['title'] ?></h3>
          <!-- <p>Цена: <?php echo $good['price']?></p> -->
          <img src="./items/<?php echo $good['img'] ?>" height="150" width="300">
          <a href="homework_1.php?id=<?php echo $good['id'] ?>">Подробнее</a>
          <!-- <table border >
            <tr>
              <th>Цвет</th><th>Материал</th>
            </tr><?php foreach ($good['description'] as $descrip): ?>
              <td><?php echo $descrip ?></td>
            <?php endforeach; ?>
          </table> -->

        </article>

      <?php endforeach; ?>
    </section>
  </body>
</html>



<!-- Отсортировать массив по price. Используйте функцию для работы с массивами
 (вручную сортировать не нужно). -->
<?php

 $items = [
     [
         'title' => 'Телефон',
         'price' => 100000,
         'count' => 4
     ],
     [
         'title' => 'Часы',
         'price' => 500000,
         'count' => 2
     ],
     [
         'title' => 'Кольцо',
         'price' => 80000,
         'count' => 10
     ],
     [
         'title' => 'Браслет',
         'price' => 120000,
         'count' => 7
     ],
     [
         'title' => 'Галстук',
         'price' => 8000,
         'count' => 50
     ],
 ];

function price_sort($x, $y) {
  if ($x ['price'] > $y ['price']) {
    return true;
  } else if ($x['price'] < $y['price']) {
    return false;
  } else {
    return 0;
  }
}

usort ($items, 'price_sort');

var_dump($items);
?>

<!-- Дано:
$x - количество километров, которое спортсмен пробежал в первый день
$y - количество километров (не может быть меньше $x)

В первый день спортсмен пробежал $x километров, а затем он каждый день
увеличивал пробег на 10% от предыдущего значения. Определить номер дня,
на который пробег спортсмена составит не менее $y километров. -->
<?php
$x = 4;
$y = 8;
$t = $x/10;

for ($i = 1; ; $i++) {
  if ($x >= $y) {
    break;
  }else{
    $x = $x+$t;
  }
}
var_dump($i);

?>
