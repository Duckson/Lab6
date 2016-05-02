<?php
abstract class Plant {
    protected $size;
    protected $type;
    protected $subtype;
    protected $super_type = "plant";
    
    public function getInfo(){
        $result = [
            'size' => $this->size,
            'type' => $this->type,
            'subtype' => $this->subtype,
            'super_type' => $this->super_type
        ];
        
        return $result;
    }

}