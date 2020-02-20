<?php
function formatNumber ($f)
{
    switch (true) {
        case (float) $f === (float) 0:
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