<?php

namespace VdtPlus\Room;

class Security extends AbstractRoom {
    protected $weapons = 900;
    protected $ammunition = 1600;
    protected $dollar = 100;
    protected $duration = 6000;
    protected $production = 0;
    protected $points = 45;
    protected $requirements = array("BootCamp" => 2);
}