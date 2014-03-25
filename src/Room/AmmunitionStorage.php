<?php

namespace VdtPlus\Room;

class AmmunitionStorage extends AbstractRoom {
    protected $weapons = 500;
    protected $ammunition = 600;
    protected $dollar = 0;
    protected $duration = 12000;
    protected $production = 0;
    protected $points = 18;
    protected $requirements = array("AmmunitionDepot" => 5);
    
    public function getStorageCapacity() {
        return 10000+150000*$this->getLevel();
    }
    
    public function getSafelyStoredCapacity() {
        return $this->getStorageCapacity() / 10;
    }
}