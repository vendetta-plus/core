<?php

namespace VdtPlus\Room;

class AmmunitionDepot extends AbstractRoom {
    protected $weapons = 9;
    protected $ammunition = 15;
    protected $dollar = 0;
    protected $duration = 600;
    protected $production = 10;
    protected $points = 1.39;
    
    public function getProduction($base = true) {
      if ($this->getLevel() == 0) return $base ? 10 : 0;
      $base = $base ? 10 : 0;
      return $base+round(10*pow((($this->getLevel()+1)/2), 2));
    }
}