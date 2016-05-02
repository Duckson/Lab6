<?php
Class Test {

}

$classes = get_declared_classes();
$is_ok = false;
$i = 0;

foreach ($classes as $class) {
    if(!$is_ok) {
        if ($class != 'Test')
            unset($classes[$i]);
        else $is_ok = true;
    }
    $i++;

}

var_dump($classes);