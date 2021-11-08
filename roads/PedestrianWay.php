<?php
require_once 'HighWay.php';
require_once '/../Bicycle.php';

final class PedestrianWay extends HighWay {

    public function addVehicle(Vehicle $vehicle) {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $this->curentVehicles[] = $vehicle;
        }
        else {
            echo "This vehicle is OK!";
        }
    }
}
