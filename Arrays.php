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



    //EJERCICIO 7 ------------------------------------------------------------------------------------------------



    //EJERCICIO 8 ------------------------------------------------------------------------------------------------
    ?>
</body>
</html>