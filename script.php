<?php

    $ti = $_POST["ti"];
    $tf = $_POST["tf"];
    $temperatura = $_POST["temperatura"];

    if($ti == "C" and $tf == "K"){
        echo "C to K</br>";
        echo "Resultado: ";
        echo $temperatura + 273.15;
    }else{
        if($ti == "K" and $tf == "C"){
            echo "K to C</br>";
            echo "Resultado: ";
            echo $temperatura - 273.15;
        }
    }
?>