<?php

namespace VdtPlus\Troop;

abstract class AbstractTroop {

    protected $requirements;
    //1 = tropa de ataque, 2 = tropa de defensa
    protected $type;
    protected $modifiers;

    public function getType() {
        return $this->type;
    }

    public function getAttackBonus() {
        return $this->attackBonus;
    }

    public function getDefenseBonus() {
        return $this->defenseBonus;
    }

    public function getBasicCargoCapacity() {
        return $this->capacity;
    }

    public function getCargoCapacity($cargoTrainingLevel) {
        return round($this->capacity * (1+sqrt($cargoTrainingLevel)/10));
    }

    public function getSpeed($speedTrainingLevel) {
        return round($this->speed * (1+sqrt($speedTrainingLevel)/10));
    }

    /*public function getAttack() {
        if (Mob_Server::esDeModificadores()) {
            $sumatoriaNiveles = 0;
            foreach ($this->attackBonus as $ent) {
                $sumatoriaNiveles += $this->_edificio->getEntrenamiento($ent)->getNivel();
            }

            return floor((1+sqrt($sumatoriaNiveles)/10) * $this->attack);
        }

        $ataque = 1;
        foreach ($this->attackBonus as $ent) {
            $ataque *= (1+sqrt($this->_edificio->getEntrenamiento($ent)->getNivel())/10);
        }

        return round($ataque * $this->attack);
    }

    public function getDefensa() {
        if (Mob_Server::esDeModificadores()) {
            $sumatoriaNiveles = 0;
            foreach ($this->defenseBonus as $ent) {
                $sumatoriaNiveles += $this->_edificio->getEntrenamiento($ent)->getNivel();
            }

            return floor((1+sqrt($sumatoriaNiveles)/10) * $this->defense);
        }

        $defensa = 1;
        foreach ($this->defenseBonus as $ent) {
            $defensa *= (1+sqrt($this->_edificio->getEntrenamiento($ent)->getNivel())/10);
        }

        return round($defensa * $this->defense);
    }
    */
    public function getRequirements($ent = null) {
        return $ent !== null ? $this->requirements[ucwords($ent)] : $this->requirements;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function getBasicSpeed() {
        return $this->speed;
    }

    public function getBasicAttack() {
        return $this->attack;
    }

    public function getBasicDefense() {
        return $this->defense;
    }

    public function getCost($type) {
        return $this->$type;
    }

    public function getTrainingTime($format = true, $trainingRoomLevel = null) {
        $segundos = ceil($this->duration / $trainingRoomLevel);
        return $segundos;
    }

    public function getPoints() {
        return $this->points;
    }

    public function getModifiers() {
        return $this->modifiers;
    }
}