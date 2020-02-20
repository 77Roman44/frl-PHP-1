

<?php
$list=[
    42=> '/cat.jpg',
    43=>'/dog.jpg',
    44=>'/chicken.jpg',
    45=>'/fish.jpg'
];
/*альтернативное решение
$list=scandir(__DIR__ . '/images');
$list=array_diff ($list, ['.','..']);*/

?>

<img src="/Homework3/images/<?php echo $list[$_GET['id']]; ?>">