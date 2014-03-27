<?php

namespace VdtPlus\Troop;

class Gunman extends AbstractTroop {
    protected $weapons = 2000;
    protected $ammunition = 3000;
    protected $dollar = 0;
    protected $duration = 1200;
    protected $points = 21;
    protected $attack = 30;
    protected $defense = 10;
    protected $capacity = 500;
    protected $speed = 2400;
    protected $speedBonus = "rutas";
    protected $salary = 2;
    protected $requirements = array ("Tiro" => 2);
    protected $attackBonus = array (
      0 => 'tiro',
    );
        protected $defenseBonus = array (
      0 => 'seguridad',
      1 => 'proteccion',
    );
    protected $modifiers = array('portero' => 1.5, 'transportista' => 1.2, 'porteador' => 0.8);
}