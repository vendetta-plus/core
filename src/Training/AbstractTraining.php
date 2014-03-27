<?php

namespace VdtPlus\Training;

abstract class AbstractTraining {

    protected $requirements;
    protected $weapons;
    protected $ammunition;
    protected $dollar;
    protected $duration;
    protected $points;
    protected $level;

    public function getRequirements() {
        return $this->requirements;
    }

    public function setLevel($nivel) {
        $this->level = $nivel;
        return $this;
    }
    
    public function getLevel() {
        return $this->level;
    }
    
    public function getTiempoMejora($nivelEscuela, $nivel = null) {
        if ($nivel == null) $nivel = $this->getLevel()+1;
        $segundos = ceil(round(pow($nivel, 2)*$this->duration/$nivelEscuela));
        return $segundos;
    }

    public function getCost($type) {
        return $this->$type * ($this->getLevel()+1) * ($this->getLevel()+1);
    }

    public function getPoints() {
        return $this->points;
    }    
}