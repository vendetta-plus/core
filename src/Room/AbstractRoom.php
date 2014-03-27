<?php

namespace VdtPlus\Room;

abstract class AbstractRoom {

    protected $weapons = null;
    protected $ammunition = null;
    protected $dollar = null;
    protected $duration = null;
    protected $production = null;
    protected $points = null;
    protected $level;

    public function getLevel() {
        return $this->level;
    }

    public function setLevel($level) {
        $this->level = $level;
        return $this;
    }

    public function getConstructionTime($officeLevel, $level = null) {
        if ($level == null) $level = $this->getLevel()+1;
        $seconds = ceil((pow($level, 2)*$this->duration)/$officeLevel);

        return $seconds;
    }

    public function getCost($type) {
        return $this->$type * ($this->getLevel()+1) * ($this->getLevel()+1);
    }

    public function getPoints() {
        return $this->points;
    }

}