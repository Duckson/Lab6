<?php
class Goat extends Herbivore {
    protected $size = 25;
    protected $subtype = 'goat';

    function __construct()
    {
        $this->foods['plants'] = 'wheat';
    }
}