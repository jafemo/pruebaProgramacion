<?php
////////// INICIAMOS LA CLASE CON SUS ATRIBUTOS/////////
class Animal {
  private $animal = "perro";
  private $patas = 4;

////////// GET Y SET PARA LOS ANIMALES/////////
    public function getAnimal(){
        return $this->animal;
    }
    public function setAnimal($animal){
        $this->animal = $animal;
        return $this->animal;
    }

////////// GET Y SET PARA LAS PATAS/////////
    public function getPatas(){
        return $this->patas;
    }
    public function setPatas($patas){
        $this->patas = $patas;
        return $this->patas;
    }

}

?>
