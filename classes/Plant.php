<?php
class Plant {
    protected $size;
    protected $type;
    protected $subtype;
    
    protected function getInfo(){
        $result = [
            'size' => $this->size,
            'type' => $this->type,
            'subtype' => $this->subtype
        ];
        
        return $result;
    }
}