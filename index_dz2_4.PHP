
<?php
include __DIR__. '/name_sex.php';
?>

<html>
    <head>
        <title>PHP-1</title>
    </head>
    <body>
    <h1> PHP </h1>
    <p>урок 2</p>
        <p>Определение пола по имени</p>
    <hr>
        <?php
        $имя= 'Роман';
        echo $имя;
        ?>
    <hr>
        <?php
        echo sex ($имя);
        ?>

    </body>
</html>