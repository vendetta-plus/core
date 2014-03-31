<?php

namespace VdtPlus\Room;

class Factory {

    public static function create($roomName) {

        $className = "\\VdtPlus\\Room\\".ucwords($roomName);

        if (!class_exists($className)) {
            throw new \InvalidArgumentException("Room '$roomName' doesn't exists.");
        }

        return new $className;

    }

    public static function createCollection($rooms) {
        $collection = array();
        foreach($rooms as $name => $level) {
            $collection[$name] = self::create($name)->setLevel($level);
        }
        return $collection;
    }

}