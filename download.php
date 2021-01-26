<?php
require_once 'menu.php';

 ?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>загрузка файлов</title>
  </head>
  <body>
    <form action="see.php" method="post" enctype="multipart/form-data">

      <div>
        <input name="picture" accept="image/*" type="file" >
      </div>
      <div>
        <input type="submit" value="Отправить">
      </div>


    </form>
  </body>
</html>
