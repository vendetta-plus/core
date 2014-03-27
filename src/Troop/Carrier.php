<?php

namespace VdtPlus\Troop;

class Carrier extends AbstractTroop {
    protected $weapons = 1000;
    protected $ammunition = 2000;
    protected $dollar = 5000;
    protected $duration = 17200;
    protected $points = 51;
    protected $attack = 6;
    protected $defense = 8;
    protected $capacity = 40000;
    protected $speed = 5000;
    protected $speedBonus = "encargos";
    protected $salary = 10;
    protected $requirements = array ("Psicologico" => 4);
    protected $attackBonus = array (
      0 => 'psicologico',
    );
        protected $defenseBonus = array (
      0 => 'proteccion',
      1 => 'psicologico',
    );
}