<?php

namespace VdtPlus\Troop;

class Rowdy extends AbstractTroop {
    protected $weapons = 200;
    protected $ammunition = 1000;
    protected $dollar = 0;
    protected $duration = 1400;
    protected $points = 6;
    protected $attack = 5;
    protected $defense = 5;
    protected $capacity = 200;
    protected $speed = 1600;
    protected $speedBonus = "rutas";
    protected $salary = 1;
    protected $requirements = array (
    );
        protected $attackBonus = array (
    );
        protected $defenseBonus = array (
    );
    protected $modifiers = array('ilegal' => 1.3, 'demoliciones' => 2);
}