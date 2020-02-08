<?php
function gender($name)
{
    $length = mb_strlen($name);
        switch ($length) {
            case mb_substr($name, $length - 2, 2) == 'ья':
            case mb_substr($name, $length - 2, 2) == 'та':
                return 'пол необходимо уточнить';
                break;
            case mb_substr($name, $length - 1, 1) == 'а':
            case mb_substr($name, $length - 1, 1) == 'я':
                return 'женский пол';
                break;
            default:
                return 'мужской пол';
                break;
        }
}

    assert ( 'мужской пол'== gender('Виктор'));
    assert ( 'женский пол'=== gender('Наталия'));