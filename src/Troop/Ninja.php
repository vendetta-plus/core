<?php

namespace VdtPlus\Troop;

class Ninja extends AbstractTroop {
    protected $weapons = 2000;
    protected $ammunition = 1000;
    protected $dollar = 30000;
    protected $duration = 40000;
    protected $points = 236;
    protected $attack = 400;
    protected $defense = 600;
    protected $capacity = 5000;
    protected $speed = 8000;
    protected $speedBonus = "encargos";
    protected $salary = 50;
    protected $requirements = array ("Guerrilla" => 8);
    protected $attackBonus = array (
      0 => 'combate',
      1 => 'armas',
      2 => 'guerrilla',
      3 => 'psicologico',
    );
        protected $defenseBonus = array (
      0 => 'combate',
      1 => 'armas',
      2 => 'guerrilla',
      3 => 'psicologico',
    );
    protected $modifiers = array('transportista' => 1.8, 'portero' => 1.5);
}