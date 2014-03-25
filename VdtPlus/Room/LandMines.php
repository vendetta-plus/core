<?php

namespace VdtPlus\Room;

class LandMines extends AbstractRoom {
    protected $weapons = 2000;
    protected $ammunition = 2000;
    protected $dollar = 150;
    protected $duration = 3000;
    protected $production = 0;
    protected $points = 65.5;
    protected $requirements = array("BossOffice" => 5);
}