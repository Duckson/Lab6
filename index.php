<?php
$objects = [];
includeAll('/');
$objects['Forest'] = new Forest;
foreach ($objects as $object) {
    if (!is_object($object)) {
        $info = $object[0]->getInfo();
        foreach ($object as $thing) {
            if ($info['super_type'] == 'animal') {
                $objects['Forest']->addAnimal($thing, $object['name']);
            } else
                $objects['Forest']->addPlant($thing, $object['name']);
        }
    }
}
var_dump($objects['Forest']->animals);


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
        } else {
            include($root . "/" . $file);
            $class = str_replace(".php", '', $file);
            $temp = new ReflectionClass($class);
            if (!($class == "Forest"))
                if (!$temp->isAbstract()) {
                    $rand = rand(1, 5);
                    for ($i = 0; $i < $rand; $i++) {
                        $GLOBALS['objects'][$class][$i] = new $class;
                        $GLOBALS['objects'][$class]['name'] = $class;
                    }
                }
        }
    }
    return $sub_dirs;
}
