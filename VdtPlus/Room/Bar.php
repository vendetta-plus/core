<?php

namespace VdtPlus\Room;

class Bar extends AbstractRoom {
    protected $weapons = 10;
    protected $ammunition = 50;
    protected $dollar = 0;
    protected $duration = 1500;
    protected $production = 2;
    protected $points = 2.1;
    protected $requirements = array("Brewery" => 1);
    
    public function getProduction() {
        if ($this->getLevel() == 0) return 0;
        return round(2*pow((($this->getLevel()+1)/2), 2));
    }
    
    public function getAlcoholConsumption() {
        if ($this->getLevel() == 0) return 0;
        return ($this->getProduction()*7)+3;
    }
    
    public function getProductionByConsumption($alcohol) {
      if ($alcohol == 0) return 0;
      return ($alcohol-3)/7;
    }
}