
<?php
include __DIR__ . '/discriminant.php';
include __DIR__ . '/formatNumber.php';
?>

<html>
    <head>
        <title>PHP-1</title>
    </head>
    <body>
    <h1> PHP </h1>
    <h2>урок 2</h2>
        <?php
        $a=0; $b=10; $c=-9;
        ?>

    <hr>
    <b> <?php echo $a; ?> * x<sup>2</sup>
        <?php
        $g=formatNumber ($b);
        switch ($g) {
            case '':
                echo '';
                break;
            default:
                echo $g . ' * x ';
                break;
        }
        $r=formatNumber ($c);
        echo $r;
        ?> = 0
    </b>
    <hr>
    <b>
        <?php
        if ($b==0 && $c==0) {
            echo 'Проверьте данные.' . '<br>';
        } elseif ($a==0) {
            echo 'Неверно введено значение "a"';
            return;
        }
        $d=sqrt(discriminant($a, $b, $c));

        switch ($d) {
            case 0:
                $x=-$b/(2*$a);
                echo 'Дискиминант = 0' . '<br>' . 'Уравнение имеет один корень: x = ' . $x;
                break;
                case $d>0:
                    $x1=(-$b+$d)/(2*$a);
                    $x2=(-$b-$d)/(2*$a);
                    echo 'x1 = ' . $x1 . '<br>' . 'x2 = ' . $x2;
                    break;
            default:
                echo ('Дискиминант < 0' . '<br>' . 'Уравнение не имеет решений');
                break;
        }
        ?>
    </b>
    </body>
</html>