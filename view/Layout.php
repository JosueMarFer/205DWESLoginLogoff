<?php
//@author Josue Martinez Fernandez
//@version 1.0
//ultima actualizacion 12/01/2023
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./webroot/css/style.css">
        <title>205LoginLogoff</title>
    </head>
    <body>
        <header>
            <h1>&lt;/DWES&gt;</h1>
            <h2>LoginLogoff <?php echo $_SESSION['paginaEnCurso']?></h2>
        </header>
        <main>
            <section>              
                <?php require_once $aVistas[$_SESSION['paginaEnCurso']] ?>
            </section>
        </main>
        <footer>
            <div class="footerIcons">
                <a href="../doc/curriculum.pdf" target="_blank"><img src="./webroot/images/curriculum.png"
                                                                     alt="Imagen curriculum"></a>
                <a href="https://github.com/JosueMarFer/205DWESLoginLogoff" target="_blank"><img
                        src="./webroot/images/github.png" alt="Imagen github"></a>
            </div>
            <div class="home">
                <a href="../../index.html"><img src="./webroot/images/home.png" alt="Imagen home"></a>
                <p>Josué martínez Fernández</p>
            </div>
        </footer>
    </body>
</html>