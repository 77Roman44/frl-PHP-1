
<?php
include __DIR__. '/name_gender.php';
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
        $имя= 'Илья';
        echo $имя;
        ?>
    <hr>
        <?php
        echo gender ($имя);
        ?>

    </body>
</html>