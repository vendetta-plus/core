<?php

namespace VdtPlus\Room;

class SafeRoom extends AbstractRoom {
    protected $weapons = 2000;
    protected $ammunition = 2000;
    protected $dollar = 1000;
    protected $duration = 16000;
    protected $production = 0;
    protected $points = 91;
    protected $requirements = array("Bar" => 5);
    
    public function getStorageCapacity() {
        return 10000+150000*$this->getLevel();
    }
    
    public function getSafelyStoredCapacity() {
        return $this->getStorageCapacity() / 10;
    }
}