
<?php
include __DIR__. '/discriminant.php';
?>

<html>
    <head>
        <title>PHP-1</title>
    </head>
    <body>
    <h1> PHP </h1>
    <p>урок 2</p>
        <?php
        $a=1; $b=-6; $c=-36;
        ?>

    <hr>
    <h2> <?php echo $a ?> * x<sup>2</sup> + <?php echo $b ?> * x + <?php echo $c ?> = 0 </h2>
    <hr>
        <?php
        $d=sqrt(discriminant($a, $b, $c));
        if ($a==0) {
            exit('неправильно заданы данные');
        } elseif ($d>=0){
        } else {
            exit('нет решений');
        }
        $x1=(-$b+$d)/2*$a;
        $x2=(-$b-$d)/2*$a;
        ?>

    <p>х1=</p>
    <h4> <?php echo $x1 ?> </h4>
    <p>х2=</p>
    <h4> <?php echo $x2 ?> </h4>
    </body>
</html>