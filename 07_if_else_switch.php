<?php

// if, if else, switch


// if ($num == 1) {
//     echo "one" . "<br>";
// } else if ($num == 2) {
//     echo "two" . "<br>";
// } else {
//     echo "error" . "<br>";
// }

$num = 'm';

switch ($num) {
    case 'm':
        echo "this is monday" . "<br>";
        break;
    case 't':
        echo "this is tuesday" . "<br>";
        break;
    case 'w':
        echo "this is wednesday" . "<br>";
        break;
    default:
        echo "error" . "<br>";
        break;
}

echo "end";