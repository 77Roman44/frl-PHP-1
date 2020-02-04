<?php
function sex ($имя)  {

    $length = mb_strlen($имя );
    $last = mb_substr($имя , $length - 1, 1 );

    $_last = mb_substr($имя , $length - 2 , 2 );
          if ($_last=='ья'){
       return 'пол необходимо уточнить';
          }
    elseif ($_last=='та'){
        return 'пол необходимо уточнить';}
    elseif ($last=='а'){
        return 'женский пол';
    }

    elseif ($last=='я') return 'женский пол';
    else {
       return 'мужской пол';}}

assert ( 'мужской пол'== sex ('Виктор'));
assert ( 'женский пол'== sex ('Наталия'));