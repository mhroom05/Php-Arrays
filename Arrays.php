<!DOCTYPE html>
<html>
<body>
    <?php
    //EJERCICIO 1 ------------------------------------------------------------------------------------------------
    // Crea un array asociativo con los siguientes datos y claves.
    $array = [
        "Nombre" => "Sara",
        "Apellido" => "Martinez",
        "Edad" => 23,
        "Ciudad" => "Barcelona"];
    // Muestra los valores del array anterior utilizando foreach.
    echo "<h1> Ejercicio 1 </h1>";
    $dato = 0;
    foreach ($array as $y) {
        $dato++;
        echo "Dato $dato"."º: $y <br>"; }
    //EJERCICIO 2 ------------------------------------------------------------------------------------------------
    // Muestra los valores del array del ejercicio 1 mostrando la clave y el valor u􀆟lizando foreach.
    echo "<h1> Ejercicio 2 </h1>";
    foreach ($array as $x => $y) {
        echo "$x: $y <br>"; }
    //EJERCICIO 3 ------------------------------------------------------------------------------------------------
    // Modifica la edad del primer array a 24. Vuelve a mostrar toda su información.
    $array["Edad"] = 24;
    echo "<h1> Ejercicio 3 </h1>";
    foreach ($array as $x => $y) {
        echo "$x: $y <br>"; }
    //EJERCICIO 4 ------------------------------------------------------------------------------------------------
    // Borra la ciudad del array y vuelve a mostrar toda su información usando la función var_dump.
    unset($array["Ciudad"]);
    echo "<h1> Ejercicio 4 </h1>";
    var_dump($array);
    //EJERCICIO 5 ------------------------------------------------------------------------------------------------
    // Crear un nuevo array con un valor separado por coma a partir de la cadena de texto $letters = “a,b,c,d,e,f”. 
    // Usando la función explode. Muestra su información en orden descendente.
    $letters = "a,b,c,d,e,f";
    $arrayL = explode(",", $letters);
    rsort($arrayL);
    echo "<h1> Ejercicio 5 </h1>";
    $dato = 7;
    foreach ($arrayL as $x) {
        $dato--;
        echo "letter $dato"."º: $x <br>"; }
    //EJERCICIO 6 ------------------------------------------------------------------------------------------------
    // Un profesor quiere registrar las notas de su clase en un array asocia􀆟vo. Las notas son las siguientes:
    // Miguel: 5, Luís: 7, Marta: 10, Isabel: 8, Aitor: 4, Pepe: 1
    // Guarda los datos en un array asocia􀆟vo en el orden previo y muéstralos ordenados de mayor a menor.
    $notas = [
    "Miguel" => 5,
    "Luís" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1
    ];
    // Ordenamos por nota de mayor a menor manteniendo la asociación nombre-nota
    arsort($notas);
    echo "<h1> Ejercicio 6 </h1>";
    foreach ($notas as $nombre => $nota) {
        echo "$nombre: $nota <br>";
    }
    //EJERCICIO 7 ------------------------------------------------------------------------------------------------
    // Calcula la media de las notas y muéstrala con solo 2 decimales.
    // Además, muestra los nombres de los alumnos cuya nota esté por encima de la media.
    // Calculamos la media
    $suma = array_sum($notas);
    $total = count($notas);
    $media = $suma / $total;
    echo "<h1> Ejercicio 7 </h1>";
    echo "Media de la clase: " . number_format($media, 2) . "<br><br>";
    echo "Alumnos por encima de la media:<br>";
    foreach ($notas as $nombre => $nota) {
        if ($nota > $media) {
            echo "$nombre ($nota)<br>";
        }
    }
    //EJERCICIO 8 ------------------------------------------------------------------------------------------------
    // Busca en el array la nota más alta (mediante código). 
    // Muestra la nota y el nombre del mejor alumno.
    $mejorNota = -1;
    $mejorAlumno = "";
    foreach ($notas as $nombre => $nota) {
        if ($nota > $mejorNota) {
            $mejorNota = $nota;
            $mejorAlumno = $nombre;
        }
    }
    echo "<h1> Ejercicio 8 </h1>";
    echo "Mejor alumno: $mejorAlumno <br>";
    echo "Nota más alta: $mejorNota";
    //EJERCICIO 9: COMIC SHOP ------------------------------------------------------------------------------------
    // Array inicial de cómics
    $comics = [
        [
            "titulo" => "One Piece",
            "precio" => 8.50,
            "stock" => 20,
            "idioma" => "japonés"
        ],
        [
            "titulo" => "Batman",
            "precio" => 12.00,
            "stock" => 10,
            "idioma" => "inglés"
        ],
        [
            "titulo" => "Dragon Ball",
            "precio" => 9.00,
            "stock" => 15,
            "idioma" => "japonés"
        ],
        [
            "titulo" => "Spiderman",
            "precio" => 11.00,
            "stock" => 8,
            "idioma" => "español"
        ]
    ];
    // 1) FUNCIÓN mostrarValorAlmacen()
    // Calcula el valor total del almacén multiplicando precio por stock
    function mostrarValorAlmacen($comics) {
        $total = 0;

        foreach ($comics as $comic) {
            $total += $comic["precio"] * $comic["stock"];
        }

        return $total;
    }
    // 2) FUNCIÓN aplicarDescuentoManga()
    // Aplica un 30% de descuento a los cómics cuyo idioma sea "japonés"
    function aplicarDescuentoManga(&$comics) {
        foreach ($comics as &$comic) {
            if ($comic["idioma"] == "japonés") {
                $comic["precio"] = $comic["precio"] * 0.7; // 30% de descuento
            }
        }
    }
    // -------------------- PRUEBA DE FUNCIONAMIENTO --------------------
    echo "<h1> Ejercicio 9 - Comic Shop </h1>";
    // Valor antes del descuento
    echo "<h3>Valor del almacén antes del descuento:</h3>";
    echo mostrarValorAlmacen($comics) . " €<br>";
    // Aplicamos el descuento manga
    aplicarDescuentoManga($comics);
    // Valor después del descuento
    echo "<h3>Valor del almacén después del descuento manga:</h3>";
    echo mostrarValorAlmacen($comics) . " €<br><br>";
    // Mostramos todos los cómics tras el descuento
    echo "<h3>Listado de cómics tras el descuento:</h3>";
    foreach ($comics as $comic) {
        echo $comic["titulo"] . " - " . $comic["precio"] . "€ - " . $comic["stock"] . " uds - " . $comic["idioma"] . "<br>";
    }
    ?>
</body>
</html>