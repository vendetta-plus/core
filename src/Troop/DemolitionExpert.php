<?php

namespace VdtPlus\Troop;

class DemolitionExpert extends AbstractTroop {
    protected $weapons = 40000;
    protected $ammunition = 6000;
    protected $dollar = 20000;
    protected $duration = 60000;
    protected $points = 281;
    protected $attack = 2000;
    protected $defense = 200;
    protected $capacity = 2500;
    protected $speed = 3500;
    protected $speedBonus = "encargos";
    protected $salary = 60;
    protected $requirements = array ("Explosivos" => 6, "Quimico" => 8);
    protected $attackBonus = array ("Explosivos", "Psicologico", "Quimico");
    protected $defenseBonus = array ("Explosivos", "Psicologico", "Quimico");
    protected $modifiers = array('pistolero' => 1.5, 'policia' => 1.8);
}