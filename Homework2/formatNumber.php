<?php
function formatNumber ($f)
{
    switch ($f) {
        case 0:
            return;
            break;
        case $f<0:
            return ' - ' . (abs ($f));
            break;
        case $f>0:
            return ' + ' . (abs ($f));
            break;
    }
}