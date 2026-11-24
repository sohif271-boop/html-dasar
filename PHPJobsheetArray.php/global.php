<?php
$x = 10;
$y = 10;

function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;
?>