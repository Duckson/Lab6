<?php
abstract class Animal {
    protected $size;
    protected $type;
    protected $subtype;
    protected $fullness = 0;
    protected $foods;
    protected $super_type = "animal";

    public function getInfo(){
        $result = [
            'size' => $this->size,
            'type' => $this->type,
            'subtype' => $this->subtype,
            'fullness' => $this->fullness,
            'foods' => $this->foods,
            'super_type' => $this->super_type
        ];

        return $result;
    }
    
    
}
