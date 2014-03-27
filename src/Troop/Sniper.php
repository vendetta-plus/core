<?php

namespace VdtPlus\Troop;

class Sniper extends AbstractTroop {
    protected $weapons = 4000;
    protected $ammunition = 500;
    protected $dollar = 2000;
    protected $duration = 25000;
    protected $points = 28;
    protected $attack = 200;
    protected $defense = 10;
    protected $capacity = 1000;
    protected $speed = 6000;
    protected $speedBonus = "encargos";
    protected $salary = 20;
    protected $requirements = array ("Psicologico" => 5, "Guerrilla" => 5);
    protected $attackBonus = array (
      0 => 'seguridad',
      1 => 'tiro',
      2 => 'guerrilla',
      3 => 'psicologico',
    );
        protected $defenseBonus = array (
      0 => 'tiro',
      1 => 'guerrilla',
      2 => 'psicologico',
    );
    protected $modifiers = array('guardia' => 2);
}