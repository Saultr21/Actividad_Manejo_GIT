<?php
    $the_date = "2022-06-19"; // The date from the previous section
    $fecha= $_POST['Fecha'];
    $hora = $_REQUEST['hora'];
    $name_of_the_day = date('l', strtotime($fecha));
    echo $name_of_the_day;

    $clases = [
        "abrev" => ["DEW","DSW","DPL","EMR","DOR"],
        "nombre" => ["Desarrollo wen en entorno cliente", "Desarrollo wen en entorno servidor", "Despliegue de aplicaciones web", "Empresa e iniciativa emprendedora", "Diseño de interfaces web"],
        "profesor" =>["María del Carmen", "Sergio Ramos Suarez", "María Antonia Montesdeoca Viera", "María del Sol García Tarajano", "María de Lourdes Ventura Urbina"]
    ];

    $semana = array (
        array("DEW", "DEW", "DPL", "RCO", "DSW", "DOR", "DOR"),
        array("DEW", "DEW", "DOR", "RCO", "DOR", "DSW", "DSW"),
        array("DEW", "DEW", "DEW", "RCO", "DPL", "DSW", "DSW"),
        array("DOR", "DOR", "EMR", "RCO", "DSW", "DPL", "DPL"),
        array("EMR", "EMR", "DSW", "RCO", "DSW", "DPL", "DPL")
    );

    function get_asignatura(){
        global $hora;
        if ($hora == "primera"){
            return 0;
        }
        elseif ($hora == "segunda"){
            return 1;
        }
        elseif ($hora == "tercera"){
            return 2;
        }
        elseif ($hora == "cuarta"){
            return 4;
        }
        elseif ($hora == "quinta"){
            return 5;
        }
        elseif ($hora == "sexta"){
            return 6;
        }
    }

    if ($name_of_the_day == "Monday"){
        $hora_dia = get_asignatura();
        $asig = $semana[0][$hora_dia];
        $clase_datos = array_search($asig,$clases);
        echo $clase_datos;
        echo($asig);
    }
    elseif ($name_of_the_day == "Tuesday"){
        $hora_dia = get_asignatura();
        $asig = $semana[1][$hora_dia];
        $clase_datos = array_search($asig,$clases["abrev"]);
        echo $clase_datos;
        echo($asig);
    }
    elseif ($name_of_the_day == "Wednesday"){
        $hora_dia = get_asignatura();
        $asig = $semana[2][$hora_dia];
        $clase_datos = array_search($asig,$clases);
        echo $clase_datos;
        echo($asig);
    }
    elseif ($name_of_the_day == "Thursday"){
        $hora_dia = get_asignatura();
        $asig = $semana[3][$hora_dia];
        $clase_datos = array_search($asig,$clases["abrev"]);
        echo $clase_datos;
        echo($asig);
    }
    elseif ($name_of_the_day == "Friday"){
        $hora_dia = get_asignatura();
        $asig = $semana[4][$hora_dia];
        $clase_datos = array_search($asig,$clases["abrev"]);
        echo "A esta hora a día " . $fecha . " "
        echo $clase_datos . "ffwg";
        echo($asig);
    }
    else{
        echo $hora;
        echo "no hay clase";
    }
?>