<?php

$server = $_SERVER;
if ($server['REQUEST_METHOD'] === 'GET') {
  $get = $_GET;
  echo $get['page'] . ': ' . $get['value'];
}

if ($server['REQUEST_METHOD'] === 'POST') {
  $post = $_POST;
  echo $post['text'];
}
 ?>
