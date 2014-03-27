<?php

namespace VdtPlus\Troop;

class TacticalExpert extends AbstractTroop {
    protected $weapons = 5000;
    protected $ammunition = 10000;
    protected $dollar = 4000;
    protected $duration = 20000;
    protected $points = 93;
    protected $attack = 120;
    protected $defense = 150;
    protected $capacity = 4000;
    protected $speed = 4000;
    protected $speedBonus = "encargos";
    protected $salary = 40;
    protected $requirements = array ("Tiro" => 5, "Quimico" => 3);
    protected $attackBonus = array ("Combate", "Tiro", "Psicologico", "Tiro");
    protected $defenseBonus = array ("Combate", "Tiro", "Psicologico", "Tiro");
    protected $modifiers = array('guardaespaldas' => 1.8, 'ninja' => 0.8);
}