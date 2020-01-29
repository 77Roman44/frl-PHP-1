<?php


function discriminant($a, $b, $c) {
    return sqrt( $b**2-4*$a*$c);
}
function root1 ($a, $b, $c) {
    return (-$b+discriminant($a, $b, $c))/2*$a;
}
function root2 ($a, $b, $c) {
    return (-$b-discriminant($a, $b, $c))/2*$a;
}
assert(2== discriminant(1, 4, 3));
assert(0== discriminant(1, 2, 1));
