<?php
class Mouse extends Omnivore {
    protected $size = 5;
    protected $subtype = 'mouse';

    function __construct()
    {
        $this->foods['plants'] = array('wheat', 'oat');
    }
}