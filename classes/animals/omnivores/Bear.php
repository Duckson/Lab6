<?php
class Bear extends Omnivore {
    protected $size = 45;
    protected $subtype = 'bear';

    function __construct()
    {
        $this->foods['plants'] = array('barley', 'oat');
    }
}