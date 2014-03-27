<?php

namespace VdtPlus\Troop;

class Knifer extends AbstractTroop {
    protected $weapons = 1000;
    protected $ammunition = 200;
    protected $dollar = 0;
    protected $duration = 2000;
    protected $points = 4;
    protected $attack = 10;
    protected $defense = 4;
    protected $capacity = 300;
    protected $speed = 2500;
    protected $speedBonus = "rutas";
    protected $salary = 1;
    protected $requirements = array ("Extorsion" => 4);
    protected $attackBonus = array (
      0 => 'extorsion',
      1 => 'armas',
    );
        protected $defenseBonus = array (
      0 => 'extorsion',
      1 => 'combate',
    );
    protected $modifiers = array('maton' => 1.2, 'espia' => 0.5);
}