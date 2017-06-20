<?php
    function randAlphaNum($length){ // Esto es una funcion para generar un token unico para que sea la primaria de cada tabla
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; // los posibles valores que va tener el token
        $charactersLength = strlen($characters); // obtiene la longitud de la cadena de texto
        $randomAlpha = ''; // se crear una cadena de texto vacía para despues almacenar un caracter en forma aleatoria
        for ($i = 0; $i < $length; $i++) {
            $randomAlpha .= $characters[rand(0, $charactersLength - 1)]; // Se coge una posicion de la cadena de texto y la guarda en la variable $randomAlpha
        }
        return $randomAlpha; // retorn el token unico
    }
?>
