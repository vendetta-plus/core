<?php

namespace VdtPlus\Troop;

class OccupationTroop extends AbstractTroop {
    protected $weapons = 20000;
    protected $ammunition = 10000;
    protected $dollar = 20000;
    protected $duration = 344000;
    protected $points = 251;
    protected $attack = 1;
    protected $defense = 10;
    protected $capacity = 3000;
    protected $speed = 2000;
    protected $speedBonus = "encargos";
    protected $salary = 300;
    protected $requirements = array ("Rutas" => 5);
    protected $attackBonus = array (
    );
        protected $defenseBonus = array (
    );
}