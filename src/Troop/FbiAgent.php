<?php

namespace VdtPlus\Troop;

class FbiAgent extends AbstractTroop {
    protected $weapons = 4000;
    protected $ammunition = 6000;
    protected $dollar = 1000;
    protected $duration = 15500;
    protected $points = 48;
    protected $attack = 60;
    protected $defense = 50;
    protected $capacity = 2000;
    protected $speed = 3000;
    protected $speedBonus = "encargos";
    protected $salary = 20;
    protected $requirements = array ("Tiro" => 2);
    protected $attackBonus = array (
      0 => 'proteccion',
      1 => 'tiro',
    );
        protected $defenseBonus = array (
      0 => 'proteccion',
      1 => 'tiro',
    );
    protected $modifiers = array('asesino' => 1.8, 'cia' => 0.6);
}