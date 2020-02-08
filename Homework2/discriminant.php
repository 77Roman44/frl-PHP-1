<?php
function discriminant($a, $b, $c)
{
    return $b**2-4*$a*$c;
}

assert(4== discriminant(1, 4, 3));
assert(0== discriminant(1, 2, 1));