<?php

// script para crear una conexion con la BD

    // parametros requeridos para la conexion con la BD

    // parametros BD local
    /*DEFINE("USER", "root"); // se crea la constante user con valor "root"
    DEFINE("PW", "");
    DEFINE("HOST", "localhost");
    DEFINE("BD", "Empresa");*/

    // parametros BD local
    DEFINE("USER", "if0_38542104"); // se crea la constante user con valor "if0_38542104"
    DEFINE("PW", "ez2imlgfGg");
    DEFINE("HOST", "sql306.infinityfree.com");
    DEFINE("BD", "if0_38542104_zapateria");

    // Parametros BD remota (infinityfree)

    // Conexion con la BD
    $conexion=mysqli_connect(HOST, USER, PW, BD);

    // Establecer conjunto de caracteres para el hosting
    mysqli_set_charset($conexion, "utf8mb4");

    // Verificar la conexion con la BD
    if(!$conexion)
    {
        die("La conexion con la BD falló: " + mysqli_error($conexion));
        exit();
    }
    else
    {
        die("Conexion a la BD exitosa!");
    }

?> 