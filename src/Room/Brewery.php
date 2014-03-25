<?php

namespace VdtPlus\Room;

class Brewery extends AbstractRoom {
    protected $weapons = 20;
    protected $ammunition = 20;
    protected $dollar = 0;
    protected $duration = 1000;
    protected $production = 50;
    protected $points = 1.6;
    
    public function getProduction($base = true) {
      if ($this->getLevel() == 0) return $base ? 10 : 0;
      $base = $base ? 10 : 0;
      return $base+round(50*pow((($this->getLevel()+1)/2), 2));
    }
}