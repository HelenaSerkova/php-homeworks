<?php
session_start();
$login = $_SESSION['login'];


 ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Страница</title>
  </head>
  <body>
    <nav>
      <?php if (isset($login)): ?>
        <a href="logout.php">Выйти</a>
      <?php else: ?>
        <a href="form.php">Войти</a>
      <?php endif; ?>
    </nav>
    <h2>Контент доступен всем пользователям</h2>

    <div id="text"></div>

    <!-- form: textarea input(submit) -->
    <?php if (isset($login)): ?>
      <form>
        <div>
          <textarea name="text"></textarea>
        </div>
        <input type="submit" value="Добавить">
      </form>
    <?php endif; ?>

    <script src="js/ajax.js"></script>
  </body>
</html>
