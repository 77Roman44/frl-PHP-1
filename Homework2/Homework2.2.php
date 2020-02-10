
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
        $a=-2; $b=2; $c=-10;
        ?>

    <hr>
    <b> <?php echo $a; ?> * x<sup>2</sup>
        <?php

        if ($b>0) {
            echo '+' . $b . '*x';
        } elseif ($b<0) {
            echo $b . '*x';
        } else {
        }

        if ($c>0) {
            echo '+' . $c;
        } elseif ($c<0) {
            echo $c;
        } else {
        }
        ?> = 0
    </b>
    <hr>
    <b>
        <?php
        if ($a==0 || ($b==0 && $c==0)) {
            echo ('неправильно заданы данные');
        }

        $d=sqrt(discriminant($a, $b, $c));

        if ($d==0) {
           $x=-$b/(2*$a);
           exit ('x1 = x2 = ' . $x);
        } elseif ($d>=0) {

        } else {
            echo ('Дискиминант < 0. Уравнение не имеет решений');
        }
        $x1=(-$b+$d)/(2*$a);
        $x2=(-$b-$d)/(2*$a);
        echo 'x1 = ' . $x1 . '<br>' . 'x2 = ' . $x2;
        ?>
    </b>
    </body>
</html>