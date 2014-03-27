<?php

namespace VdtPlus\Troop;

class Mover extends AbstractTroop {
    protected $weapons = 300;
    protected $ammunition = 100;
    protected $dollar = 1000;
    protected $duration = 3600;
    protected $points = 9;
    protected $attack = 4;
    protected $defense = 6;
    protected $capacity = 10000;
    protected $speed = 2400;
    protected $speedBonus = "encargos";
    protected $salary = 5;
    protected $requirements = array (
    );
        protected $attackBonus = array (
      0 => 'combate',
    );
        protected $defenseBonus = array (
      0 => 'combate',
    );
}