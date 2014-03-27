<?php

namespace VdtPlus\Troop;

class Mercenary extends AbstractTroop {
    protected $weapons = 80000;
    protected $ammunition = 120000;
    protected $dollar = 50000;
    protected $duration = 144000;
    protected $points = 1176;
    protected $attack = 1000;
    protected $defense = 1200;
    protected $capacity = 12000;
    protected $speed = 4500;
    protected $speedBonus = "encargos";
    protected $salary = 70;
    protected $requirements = array ("Guerrilla" => 9, "Combate" => 9, "Proteccion" => 9);
    protected $attackBonus = array (
      0 => 'espionaje',
      1 => 'seguridad',
      2 => 'proteccion',
      3 => 'combate',
      4 => 'armas',
      5 => 'tiro',
      6 => 'guerrilla',
      7 => 'psicologico',
    );
        protected $defenseBonus = array (
      0 => 'espionaje',
      1 => 'seguridad',
      2 => 'proteccion',
      3 => 'combate',
      4 => 'armas',
      5 => 'tiro',
      6 => 'guerrilla',
      7 => 'psicologico',
    );
    protected $modifiers = array('tactico' => 1.4, 'demoliciones' => 1.2, 'maton' => 0.5);
}