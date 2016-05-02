<?php
class Animal {
    protected $size;
    protected $type;
    protected $subtype;
    protected $fullness = 0;
    protected $foods;

    protected function getInfo(){
        $result = [
            'size' => $this->size,
            'type' => $this->type,
            'subtype' => $this->subtype,
            'fullness' => $this->fullness,
            'foods' => $this->foods
        ];

        return $result;
    }
}
