<?php

namespace VdtPlus;

use VdtPlus\Model\BuildingInterface;
use VdtPlus\Model\RoomsQueueInterface;
use VdtPlus\Room\Factory as RoomFactory;

class Building {

    protected $buildingId;
    protected $buildingModel;
    protected $roomsQueueModel;
    protected $roomUnderConstruction;

    public function __construct($buildingId, BuildingInterface $buildingModel, RoomsQueueInterface $roomsQueueModel) {
        $this->buildingId = $buildingId;
        $this->buildingModel = $buildingModel;
        $this->roomsQueueModel = $roomsQueueModel;
    }

    public function getRooms() {
        return $this->buildingModel->getRooms($this->buildingId);
    }

    public function getRoomUnderConstruction() {

        if ($this->roomUnderConstruction !== null) {
            return $this->roomUnderConstruction;
        }

        $data = $this->roomsQueueModel->getCurrentConstruction($this->buildingId);

        if (!empty($data)) {
            return $this->roomUnderConstruction = RoomFactory::create($data["room_name"]);
        }

        return $this->roomUnderConstruction = false;
    }

    public function isUnderConstruction() {
        return $this->getRoomUnderConstruction() != null;
    }

}