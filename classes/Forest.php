<?php

class Forest
{
    protected $plants;
    protected $animals;
    
    public function getInfo(){
        $result = [
            'plants' => $this->plants,
            'animals' => $this->animals
        ];

        return $result;
    }

    public function addAnimal($animal, $name){
        $this->animals[$name][] = $animal;
    }

    public function addPlant($plant, $name){
        $this->plants[$name][] = $plant;
    }
    
    public function feed($animal){
        //foreach ($this->animals[$animal])
    }
}