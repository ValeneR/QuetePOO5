<?php
require_once 'HighWay.php'; 
require_once 'Car.php';

final class MotorWay extends HighWay {

    public function addVehicle(Vehicle $vehicle) {
        if ($vehicle instanceof Car) {
            $this->currentVehicle[] = $vehicle;
            echo "This vehicule is not allowed!";
        }
        else {
            echo "This vehicle is OK!";
        }
    }
}