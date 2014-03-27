<?php

namespace VdtPlus\Troop;

class Scout extends AbstractTroop {
    protected $weapons = 2500;
    protected $ammunition = 5000;
    protected $dollar = 500;
    protected $duration = 0;
    protected $points = 13;
    protected $attack = 30;
    protected $defense = 10;
    protected $capacity = 1;
    protected $speed = 500000000000;
    protected $speedBonus = "encargos";
    protected $salary = 0;
    protected $requirements = array ("Encargos" => 4, "Espionaje" => 4, "Tiro" => 4);
    protected $attackBonus = array (
      0 => 'espionaje',
      1 => 'tiro',
      2 => 'explosivos',
    );
    protected $defenseBonus = array (
      0 => 'psicologico',
    );
    /*protected $modifiers = array('tactico' => 1.4, 'demoliciones' => 1.2, 'maton' => 0.5);*/
}