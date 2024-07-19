<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola mundo</h1>
    <?php
        //comentarios en linea
        /** comentarios en bloque */
        #comentarios de linea

    $a=3;
    $b=5;
    $c=$a+$b;
    echo "El resultado de la sumna es : " . $c;
    $nombre="JUANA";
    $nombre.= "DIAZ";
    echo "<br>". $nombre;
    echo "<br>". gettype($a);
    echo "<br>". gettype($nombre);
    echo is_integer($nombre);
    const IVA= 21;//ES UNA VARIABLE TIPO CONSTANTE
    echo "<br>El IVA ES " .IVA. "%";
    echo "<br>".M_PI;
    echo "<br>" . __LINE__;
    /*
        * Variables generadas dinamicamente
    */

    $m_en="Hello";
    $m_es="Hola";
    $m_it="Ciao";
    //variable para definir el idioma se va a usar en este caso
    $idioma="it";
    //variable con el nombre generado dinamicamente
    $bienvenida="m_". $idioma;
    //lo que mostrará  de la variable
    echo "<br>";
    echo "¡". $$bienvenida .  "!";

    /**********************/
    #Caso practico nº1
    $radio= 3;
    const pi = M_PI;

    $longitud= 2*M_PI*$radio;
    $superficie= M_PI*($radio**2);
    $volumen= (4/3)*M_PI*($radio**3);
    echo "<h1>La longitud del circulo es $longitud</h1>";
    echo "<br>";
    echo "<h2>La superficie del circulo es $superficie</h2>";
    echo "<br>";
    echo "<h3>El volumen del circulo es $volumen</h3>";



    ?>
</body>
</html>
