<?php

namespace VdtPlus\Room;

class Smuggle extends AbstractRoom {
    protected $weapons = 2000;
    protected $ammunition = 5000;
    protected $dollar = 500;
    protected $duration = 4000;
    protected $production = 21;
    protected $points = 136;
    protected $requirements = array("BossOffice" => 5, "Brewery" => 8);
    
    public function getProduction() {
        if ($this->getLevel() == 0) return 0;
        return round(21*pow((($this->getLevel()+1)/2), 2));
    }

    public function getAlcoholConsumption() {
        if ($this->getLevel() == 0) return 0;
        return ($this->getProduction()*4)+1;
    }
    
    public function getProductionByConsumption($alcohol) {
      if ($alcohol == 0) return 0;
      return ($alcohol-1)/4;
    }    

}       