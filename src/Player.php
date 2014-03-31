<?php

namespace VdtPlus;

use VdtPlus\Model\BuildingInterface;

class Player {

    protected $playerId;
    protected $buildingModel;

    public function __construct($playerId, BuildingInterface $buildingModel) {
        $this->playerId = $playerId;
        $this->buildingModel = $buildingModel;
    }

    public function getBuildings() {
        return $this->buildingModel->getBuildings($this->playerId);
    }

    public function getBuilding($buildingId) {
        return $this->buildingModel->getBuilding($buildingId, $this->playerId);

    }

}