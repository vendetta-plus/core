<?php

namespace VdtPlus\Troop;

class Safeguard extends AbstractTroop {
    protected $weapons = 2000;
    protected $ammunition = 3000;
    protected $dollar = 100;
    protected $duration = 2500;
    protected $points = 21;
    protected $attack = 40;
    protected $defense = 50;
    protected $requirements = array ("Seguridad" => 2);
    protected $attackBonus = array ("Seguridad", "Combate", "Armas");
    protected $defenseBonus = array ("Seguridad", "Combate", "Armas");
    protected $modifiers = array('maton' => 1.8);
}