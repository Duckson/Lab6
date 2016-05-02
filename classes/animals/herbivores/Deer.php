<?php
class Deer extends Herbivore {
    protected $size = 33;
    protected $subtype = 'deer';

    function __construct()
    {
        $this->foods['plants'] = array('wheat', 'oat');
    }
}