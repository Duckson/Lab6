<?php

includeAll('/');
var_dump(get_declared_classes());

function includeAll($dir)
{
    $root = $_SERVER["DOCUMENT_ROOT"] . "/Lab6/classes" . $dir;
    $result = expand($root, $dir);

    foreach ($result['sub_dirs'] as $dir) {
        $sub_result = expand($root, $dir);
        foreach ($sub_result['sub_dirs'] as $sub_dir) {
            expand($sub_result['root'], $sub_dir);
        }
    }
}

function expand($root, $dir)
{
    $root = $root . "/" . $dir;
    $dir_arr = array_diff(scandir($root), array('..', '.', '.git', '.gitattributes', '.gitignore'));
    $sub_dirs = getSubDirs($dir_arr, $root);
    $result = ['root' => $root, 'sub_dirs' => $sub_dirs];
    return $result;
}

function getSubDirs($dir_arr, $root)
{
    foreach ($dir_arr as $file) {
        if (!(substr($file, -strlen(".php")) == ".php")) {
            $sub_dirs[] = $file;
        } else include($root . "/" . $file);
    }
    return $sub_dirs;
}
