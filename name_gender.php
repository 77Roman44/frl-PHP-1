<?php
function gender ($имя)
{
    $length = mb_strlen($имя);
    $last = mb_substr($имя, $length - 1, 1);

    $_last = mb_substr($имя, $length - 2, 2);

    switch ($length) {
        case $_last == 'ья':
        case $_last == 'та':
            echo 'пол необходимо уточнить';
            break;
        case $last == 'а':
        case $last == 'я':
            echo 'женский пол';
            break;
        default:
            echo 'мужской пол';
            break;
    }
}

    assert ( 'мужской пол'== gender ('Виктор'));
    assert ( 'женский пол'=== gender ('Наталия'));