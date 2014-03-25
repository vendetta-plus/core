<?php

namespace VdtPlus\Room;

class AlcoholStorage extends AbstractRoom {
    protected $weapons = 200;
    protected $ammunition = 200;
    protected $dollar = 0;
    protected $duration = 8000;
    protected $production = 0;
    protected $points = 7;
    protected $requirements = array("Brewery" => 5);
    
    public function getStorageCapacity() {
        return 10000+150000*$this->getLevel();
    }
    
    public function getSafelyStoredCapacity() {
        return $this->getStorageCapacity() / 10;
    }
    
}