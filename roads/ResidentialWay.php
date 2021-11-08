<?php
require_once 'HighWay.php';
require_once '/../Vehicle.php';

final class ResidentialWay extends HighWay {

    public function addVehicle(Vehicle $vehicle) {
        if ($vehicle instanceof Vehicle) {
            $this->currentVehicles[] = $vehicle;
            echo "This vehicle is OK!";
        }
        else {
            echo "This vehicule is not allowed!";
        }
    }
}