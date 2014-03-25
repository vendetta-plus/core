<?php

namespace VdtPlus\Room;

class WeaponStorage extends AbstractRoom {
    protected $weapons = 100;
    protected $ammunition = 500;
    protected $dollar = 0;
    protected $duration = 9000;
    protected $production = 0;
    protected $points = 12;
    protected $requirements = array("WeaponsArmoury" => 5);
    
    public function getStorageCapacity() {
        return 10000+150000*$this->getLevel();
    }
    
    public function getSafelyStoredCapacity() {
        return $this->getStorageCapacity() / 10;
    }
    
}