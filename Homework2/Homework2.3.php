<?php
$answer1= include 'Homework2.3.1.php';
echo $answer1;

$answer2= include 'Homework2.3.2.php';
echo '<br>' . 'а если нет return и  файл был успешно подключен, то увидишь"' . $answer2 .
'",а иначе увидишь E_WARNING (это когда была ошибка подключения файла и include возвратит false)';