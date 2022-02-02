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
            
            <form action="Tarea_Ejecutar02.php" method="post">

                <div class="subtitle">
                    <label>Ingrese el nombre de la cancion:</label>
                    <input class="input is-danger" type="text" name="nombreCancion">
                </div>

                <div class="subtitle">
                    <label>Ingrese el artista</label>
                    <input class="input is-danger" type="text" name="nombreArtista">
                </div>

                <div>
                    <button class="button is-link is-medium is-rounded" type="submit" 
                    name="Enviar" style="float: right;">Enviar</button>
                </div>
            </form>

        </div>

        <div class="column"></div>

    </section>
</body>
</html>