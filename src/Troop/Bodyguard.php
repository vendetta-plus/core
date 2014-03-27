<?php

namespace VdtPlus\Troop;

class Bodyguard extends AbstractTroop {
    protected $weapons = 3000;
    protected $ammunition = 1000;
    protected $dollar = 4000;
    protected $duration = 15600;
    protected $points = 43;
    protected $attack = 100;
    protected $defense = 250;
    protected $requirements = array ("Proteccion" => 6, "Combate" => 5);
    protected $attackBonus = array ("Seguridad", "Proteccion", "Combate", "Tiro", "Guerrilla");
    protected $defenseBonus = array ("Seguridad", "Proteccion", "Guerrilla");
    protected $modifiers = array('asesino' => 1.5, 'ninja' => 1.8, 'porteador' => 0.5);
}