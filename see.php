<?php

$server = $_SERVER;

if ($server['REQUEST_METHOD'] === 'POST'){

$files = $_FILES;

$file_name = $files['picture']['name'];

$ext = pathinfo($file_name, PATHINFO_EXTENSION);

$file_name = md5($file_name . microtime());

$file_name .= ".$ext";
$file_type = $files['picture']['type'];

$tmp_name = $files['picture']['tmp_name'];

$newfile = 'arrfile.txt';

if (move_uploaded_file($tmp_name, "images/$file_name")) {

    echo 'Файл успешно загружен';
} else {
  echo 'Файл загрузить не удалось';
}

if(file_put_contents($newfile, $file_name.PHP_EOL, FILE_APPEND | LOCK_EX)!==false){
  echo 'Данные записаны';
}
}
$arr = file($newfile, FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
?>


<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include_once 'menu.php' ?>
    <section>
      <?php foreach ($arr as $ar):?>
      <div>
        <p><?php echo $ar ?></p>
        <img src="images/<?php echo $ar ?>">

      </div>
    <?php endforeach; ?>
      </section>

  </body>
</html>
