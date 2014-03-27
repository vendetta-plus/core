<?php

namespace VdtPlus\Troop;

class Bouncer extends AbstractTroop {
    protected $weapons = 500;
    protected $ammunition = 800;
    protected $dollar = 0;
    protected $duration = 1600;
    protected $points = 6;
    protected $attack = 8;
    protected $defense = 6;
    protected $capacity = 400;
    protected $speed = 2000;
    protected $speedBonus = "rutas";
    protected $salary = 1;
    protected $requirements = array ("Extorsion" => 2);
    protected $attackBonus = array (
      0 => 'extorsion',
    );
        protected $defenseBonus = array (
      0 => 'extorsion',
      1 => 'seguridad',
    );
    protected $modifiers = array('acuchillador' => 1.5, 'guardia' => 1.8, 'fbi' => 0.5);
}