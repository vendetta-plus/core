<?php

namespace VdtPlus\Troop;

class Policeman extends AbstractTroop {
    protected $weapons = 5000;
    protected $ammunition = 7500;
    protected $dollar = 500;
    protected $duration = 6000;
    protected $points = 54;
    protected $attack = 60;
    protected $defense = 80;
    protected $requirements = array ("Combate" => 4, "Tiro" => 4);
    protected $attackBonus = array("Seguridad", "Proteccion", "Combate", "Tiro");
    protected $defenseBonus = array("Seguridad", "Proteccion", "Tiro");
    protected $modifiers = array('tactico' => 0.6, 'cia' => 1.9, 'fbi' => 2);
}