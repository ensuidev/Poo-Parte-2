<?php

include_once('Persona.php');

$persona = new Persona("Fernando", "Gaitan", 27);
echo $persona -> saludar();
unset($persona);