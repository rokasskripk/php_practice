<?php 
    class Car {
        public $bakas;
        public function degaluKiekis($litrai){
            $this -> bakas += $litrai;
            return $this;
        }
        public function atstumas($km){
            $litrai = $km * 0.068;
            $this -> bakas -= $litrai;
            return $this;
        }
    }

    $bmw = new Car();

    $likutis = $bmw -> degaluKiekis(10) -> atstumas(40) -> bakas;
    echo 'Bake bus like: ' .$likutis . ' L';

?>