<?php

namespace VdtPlus\Model;

interface BuildingInterface {

    public function getRooms($buildingId);

    public function getBuildings($playerId);

}