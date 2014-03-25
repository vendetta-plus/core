<?php

namespace VdtPlus\Room;

class SpringGun extends AbstractRoom {
    protected $weapons = 1000;
    protected $ammunition = 2000;
    protected $dollar = 200;
    protected $duration = 4500;
    protected $production = 0;
    protected $points = 57;
    protected $requirements = array("BossOffice" => 5);
}