<?php


$server = "localhost";
$username = "root";
$password = "Fvasvil123";
$database = "practica4";

$conn = new mysqli($server, $username, $password, $database);

$espacio = "<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mensaje = trim($_POST['Palabra']);

    $sql = "INSERT INTO message (Mensaje) VALUES ('$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo "palabra agregada correctamente: " . $mensaje . $espacio;
    } else {
        echo "Error";
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea #4</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js.js"></script>
</head>
<body>
    <div class="BG">
    <div class="Titulo">
    <h1 >Tarea #4 | Sebastian Vasquez</h1>
    <h2>𝒟𝒾𝒸𝒸𝒾𝑜𝓃𝒶𝓇𝒾𝑜 𝒹𝑒 𝒾𝓃𝑔𝓁𝑒𝓈  </h2>
    </div>
    </div>
    <section>

    <div class="contenedor">
        <div class="izquierda">
            <br><br>
            <div class="Violeta">
         <h2>Palabras a traducir</h2>
        <form>
            <input class="form" type="text" id="Palabra" name="Palabra" placeholder="Palabra a buscar">
            <br><br>
            <button class="btn" type="button" id="PalabraTraducir2"> Buscar</button>
        </form>
        </div>
        </div>
        <div class="derecha">
            <br><br>
            <div class="tr">
            <h2>Palabra Traducida:</h2>
            <section>
                <div id="contenido"></div>
             </section>
        </div>
        </div>
      </div>


</body>
</html>