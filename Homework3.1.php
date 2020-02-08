

<html>
<head>
    <title>PHP-1</title>
</head>
<body>
<h1>PHP</h1>
<p>урок 3</p>
<p>Домашнее задание. упражнение 1 - Калькулятор</p>
<form method="GET">
    Число 1: <input type="number" name="number1">
    Число 2: <input type="number" name="number2">
    <hr>
  Операция: <input type="action" name="action">

    <hr>
    <button type="submit">=</button>
</form>
    <?php
       if($_GET['action']== '/') {
        $a = $_GET['number1'] / $_GET['number2'];
    }
    elseif ($_GET['action']== '*') {
        $a = $_GET['number1'] * $_GET['number2'];
    } elseif ($_GET['action']== '-') {
        $a = $_GET['number1'] - $_GET['number2'];
    } else ($_GET['action']== '+') {
    $a = $_GET['number1'] + $_GET['number2']
    };
    echo "<br/>Результат:".$_GET['number1'].$_GET['action'].$_GET['number2'].'='.$a;

?>
</body>
</html>


