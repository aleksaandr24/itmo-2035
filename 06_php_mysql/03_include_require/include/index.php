<?php

include 'variable.php';
include 'increment.php';
include 'increment.php';
include 'increment.php';

// Значение $a будет 3, include 'increment.php' выполнилась трижды
if ($a == 3) {
    echo "a == $a";
}

?>