<?php

namespace VdtPlus\Troop;

class Hitman extends AbstractTroop {
    protected $weapons = 10000;
    protected $ammunition = 15000;
    protected $dollar = 10000;
    protected $duration = 6000;
    protected $points = 176;
    protected $attack = 300;
    protected $defense = 200;
    protected $capacity = 2000;
    protected $speed = 6500;
    protected $speedBonus = "encargos";
    protected $salary = 45;
    protected $requirements = array ("Psicologico" => 7, "Proteccion" => 7);
    protected $attackBonus = array (
      0 => 'seguridad',
      1 => 'proteccion',
      2 => 'tiro',
      3 => 'guerrilla',
      4 => 'psicologico',
    );
        protected $defenseBonus = array (
      0 => 'seguridad',
      1 => 'proteccion',
      2 => 'tiro',
      3 => 'guerrilla',
      4 => 'psicologico',
    );
    protected $modifiers = array('centinela' => 1.4, 'mercenario' => 2);
}