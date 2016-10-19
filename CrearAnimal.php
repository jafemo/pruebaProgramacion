<?php

include 'Animal.php';

////////// CREAMOS Y PONEMOS TODAS LAS CARACTERISTICAS PARA EL PRIMER ANIMAL/////////
$animal1 = new animal();
$animal1 -> setAnimal("Cienpies");
$nombreAnimal = $animal1->getAnimal();
$animal1 ->setPatas(100);
$patasAnimal = $animal1->getPatas();
echo $nombreAnimal . "<br>" . $patasAnimal ;


////////// PONEMOS DOS BR PARA QUE QUEDE MÁS ASEADOL/////////
echo "<br> <br>";


////////// CREAMOS Y PONEMOS TODAS LAS CARACTERISTICAS PARA EL SEGUNDO ANIMAL/////////
$animal2 = new animal();
$animal2 -> setAnimal("Araña");
$nombreAnimal = $animal2->getAnimal();
$animal2 ->setPatas(8);
$patasAnimal = $animal2->getPatas();
echo $nombreAnimal . "<br>" . $patasAnimal ;






?>
