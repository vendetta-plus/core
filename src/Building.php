<?php

namespace VdtPlus;

use VdtPlus\Model\BuildingInterface;

class Building {

    protected $buildingId;
    protected $buildingModel;

    public function __construct($buildingId, BuildingInterface $buildingModel) {
        $this->buildingId = $buildingId;
        $this->buildingModel = $buildingModel;
    }

    public function getRooms() {
        return $this->buildingModel->getRooms($this->buildingId);
    }

}