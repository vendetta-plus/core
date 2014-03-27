<?php

namespace VdtPlus\Troop;

class ClandestineWorker extends AbstractTroop {
    protected $weapons = 500;
    protected $ammunition = 500;
    protected $dollar = 0;
    protected $duration = 1000;
    protected $points = 4;
    protected $attack = 15;
    protected $defense = 15;
    protected $requirements = array ();
    protected $attackBonus = array('Combate');
    protected $defenseBonus = array('Combate');
    protected $modifiers = array('porteador' => 2);
}