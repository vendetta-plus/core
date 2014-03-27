<?php

namespace VdtPlus\Troop;

class CiaAgent extends AbstractTroop {
    protected $weapons = 7000;
    protected $ammunition = 10000;
    protected $dollar = 2500;
    protected $duration = 17000;
    protected $points = 87;
    protected $attack = 100;
    protected $defense = 90;
    protected $capacity = 3000;
    protected $speed = 3400;
    protected $speedBonus = "encargos";
    protected $salary = 30;
    protected $requirements = array ("Guerrilla" => 3, "Encargos" => 3);
    protected $attackBonus = array (
      0 => 'armas',
      1 => 'tiro',
      2 => 'guerrilla',
    );
        protected $defenseBonus = array (
      0 => 'proteccion',
      1 => 'guerrilla',
    );
    protected $modifiers = array('tactico' => 1.5, 'francotirador' => 1.3);
}