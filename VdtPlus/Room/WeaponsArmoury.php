<?php

namespace VdtPlus\Room;

class WeaponsArmoury extends AbstractRoom {
    protected $weapons = 12;
    protected $ammunition = 60;
    protected $dollar = 0;
    protected $duration = 500;
    protected $production = 10;
    protected $points = 2.32;
    
    public function getProduction($base = true) {
      if ($this->getLevel() == 0) return $base ? 10 : 0;
      $base = $base ? 10 : 0;
      return $base+round(10*pow((($this->getLevel()+1)/2), 2));
    }
}