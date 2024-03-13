<?php

    # conexion a la base de datos #
    function conexion(){
    $pdo = new PDO ('mysql:host=localhost;dbname=last inventory','root','');
    }

    #verificar datos#
    function verificar_datos($filtro,$cadena){
        if(preg_match("/^".$filtro."$/", $cadena)){
			return false;
        }else{
            return true;
        }
	}