
<?php
include __DIR__. '/discriminant.php';
?>

<html>
<head>
    <title>PHP-1</title>
</head>
<body>
<h1>PHP</h1>
<p>урок 2</p>


<?php
$a=10; $b=-3; $c=-30;
?>

<hr />
<h2><?=$a ?> * x<sup>2</sup> + <?=$b ?> * x + <?=$c ?> = 0</h2>
<hr />
<?php
if ($a==0) {
    exit('неправильно заданы данные');
} elseif (discriminant($a, $b, $c)>=0){

} else {
    exit('нет решений');
}
$x1=root1($a, $b, $c);
$x2=root2($a, $b, $c);
?>
<p1> х1=</p1>
<h3><?=$x1 ?> </h3>
<p1> х2=</p1>
<h4><?=$x2 ?> </h4>


</body>
</html>