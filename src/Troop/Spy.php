<?php

namespace VdtPlus\Troop;

class Spy extends AbstractTroop {
    protected $weapons = 500;
    protected $ammunition = 200;
    protected $dollar = 0;
    protected $duration = 14000;
    protected $points = 3;
    protected $attack = 1;
    protected $defense = 1;
    protected $capacity = 50;
    protected $speed = 400000;
    protected $speedBonus = "encargos";
    protected $salary = 1;
    protected $requirements = array ("Espionaje" => 2);
    protected $attackBonus = array (
      0 => 'espionaje',
    );
        protected $defenseBonus = array (
      0 => 'espionaje',
    );
}