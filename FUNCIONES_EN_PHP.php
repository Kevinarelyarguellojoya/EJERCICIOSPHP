<?php

function saludarNombre(){
    echo "Hola Kevin";
}

function saludar(){
    echo "Hola ...";
}

function despedir($nombre, $apellido){
    echo "Adios " . $nombre. " ". $apellido;
}


saludar();
saludarNombre();
echo "<br>";
despedir("Kevin", "Arguello");



?>