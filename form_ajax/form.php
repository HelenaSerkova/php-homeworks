<?php
session_start();
$server = $_SERVER;

if (isset($_SESSION['login'])) {
  header('Location: account.php');
}

if($server['REQUEST_METHOD'] === 'POST') {
  $post = $_POST; // login === qwerty | password === 123
  if (trim($post['login']) === 'qwerty' && trim($post['password']) === '123'){
    $_SESSION['login'] = $post['login'];
    header('Location: account.php'); // если успешно залогинился, то переход на страницу account.php
// отправка ответа с js
  } else {
    $error = 'Ошибка авторизации'; // отправка ответа в js
  }
}


 ?>

 <!DOCTYPE html>
 <html lang="ru" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Форма авторизации</title>
   </head>
   <body>
     <?php if(isset($error)): ?>
       <p><?php echo $error ?></p>
     <?php endif; ?>
     <form action ='form.php' method='post'>
       <div>
         <label>
           Введите логин <input type="text" name="login">
         </label>
       </div>

         <label>
           Введите пароль <input type="password" name="password">
         </label>
         <div class="">
           <input type="submit" name="" value="Войти">
         </div>

       </div>
     </form>

   </body>
 </html>
