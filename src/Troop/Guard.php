<?php

namespace VdtPlus\Troop;

class Guard extends AbstractTroop {
    protected $weapons = 15000;
    protected $ammunition = 40000;
    protected $dollar = 20000;
    protected $duration = 20000;
    protected $points = 388;
    protected $attack = 400;
    protected $defense = 500;
    protected $requirements = array ("Guerrilla" => 8, "Psicologico" => 6);
    protected $attackBonus = array ("Seguridad", "Combate", "Tiro", "Guerrilla", "Psicologico");
    protected $defenseBonus = array ("Seguridad", "Proteccion", "Tiro", "Guerrilla", "Psicologico");
    protected $modifiers = array('ninja' => 2.1);
}