<?php
function formatNumber ($f)
{
    switch ($f) {
        case $f>0:
            echo '+' . $f;
            break;
        case $f<0:
            echo '-' . $f;
            break;
        case $f==0:
            echo '';
            break;
    }
}