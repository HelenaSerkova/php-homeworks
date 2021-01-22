<?php
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

$get = $_GET;
$id = $get['id'];
$good = $goods[$id-1];
?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $good['title'] ?></title>

  </head>
  <body>
    <section>

      <h2><?php echo $good['title'] ?></h2>
      <table border >
       <tr>
         <th>Цвет</th><th>Материал</th>
       </tr><?php foreach ($good['description'] as $descrip): ?>
         <td><?php echo $descrip ?></td>
       <?php endforeach; ?>
      </table>
      <p>Стоимость:<?php echo $good['price'] ?> руб.</p>
      <div class="buy">
        <a href="#">Заказать</a>
      </div>
    </section>
  </body>
</html>
