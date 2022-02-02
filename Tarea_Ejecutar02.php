<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea02</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>
    <section class="hero is-danger">
        <div class="hero-body">
            <p class="title">
                    Creacion de documentos
            </p>
        </div>

    </section>
    
    
    <section class="section is-medium columns">

        <div class="column"></div>
        <div>
        <?php
        $nombreCancion = $_POST['nombreCancion'];
        $nombreArtista = $_POST['nombreArtista'];

        $Escritura = fopen("Canciones.txt", "a+");
        fwrite($Escritura,"<br><br>Caracteristicas de la cancion:<br>Nombre: ");
        fwrite($Escritura, $nombreCancion);
        fwrite($Escritura, "<br>Artista: ");
        fwrite($Escritura, $nombreArtista);
        fclose($Escritura);

        $Lectura = fopen("Canciones.txt", "r");

        while (!feof($Lectura)){
            $impresion= fgets($Lectura);
            echo nl2br($impresion);
        }
        fclose($Lectura);

        ?>
        </div>
    </div>

    <div class="column"></div>

</section>
</body>
</html>