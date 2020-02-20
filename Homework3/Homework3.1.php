

<html>
    <head>
        <title>PHP-1</title>
    </head>
    <body>
    <h1>PHP</h1>
    <h2>урок 3<br/> Калькулятор</h2>

    <form method="GET">
        Число 1: <input type="number" name="number1">
        Число 2: <input type="number" name="number2">
        <hr>
        Операция: <input type="action" name="action">
        <hr>
        <button type="submit">=</button>
    </form>
    <?php
    switch ($_GET['action']) {
        case '/':
            if ($_GET['number2']==0) {
                echo 'число 2 при делении не должно равняться 0';
                return;
            }
            $a = $_GET['number1'] / $_GET['number2'];
            break;
        case '*':
            $a = $_GET['number1'] * $_GET['number2'];
            break;
        case '-':
            $a = $_GET['number1'] - $_GET['number2'];
            break;
        case '+':
            $a = $_GET['number1'] + $_GET['number2'];
            break;
        default:
            echo 'невыполнимая операция';
            return;
            break;
    }
    echo "<br/>Результат:".$_GET['number1'].$_GET['action'].$_GET['number2'].'='.$a;

?>
    </body>
</html>


