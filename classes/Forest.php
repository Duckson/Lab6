<?php

class Forest
{
    protected $plants;
    protected $animals;

    function __construct()
    {
        $this->populate();
    }

    protected function populate(){
        
    }


    /*protected function populate()
    {
        $classes = get_declared_classes();
        $is_ok = false;

        foreach ($classes as $class) {
            if (!$is_ok)
                if ($class == 'Forest') {
                    $is_ok = true;
                } else {
                    if ($class != "Forest" && $class != "Plant" && $class != "Grass" && $class != "Tree" &&
                        $class != "Omnivore" && $class != "Herbivore" && $class != "Carnivore" && $class != "Animal") {
                        $rand = random_int(1, 5);
                        for ($i = 0; $i < $rand; $i++) {
                            $result[get_parent_class(get_parent_class($class))][get_parent_class($class)][] = new $class;
                        }
                        
                    }
                }
        }

    }*/
    
}