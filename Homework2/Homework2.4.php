
<?php
include __DIR__ . '/Namegender.php';
?>

<html>
    <head>
        <title>PHP-1</title>
    </head>
    <body>
    <h1> PHP </h1>
    <h2>урок 2</h2>
        <p>Определение пола по имени</p>
    <hr>
        <?php
        $name= 'Ирина';
        echo $name;
        ?>
    <hr>
        <?php
        echo gender($name);
        ?>

    </body>
</html>