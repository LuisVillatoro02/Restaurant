<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante El Chapin</title>
    <link href="style.css" rel="stylesheet" type="text/css" />

</head>

    <body background="image/fondo.jpg">

    <header style="text-align: left;">
        <img src="image/logo.png" alt="Logo de Restaurante El Chapin">
    </header>
        <div class="container" style="text-align: left;">
            <nav>
                <a href="#" onclick="showLoader('staff')">
                    Colaboradores
                </a>
                <a href="#" onclick="showLoader('admin')">
                    Administrador
                </a>
            </nav>
        </div>

        <!-- Barra de carga -->
        <div class="loader" id="loader"></div>

        <footer>
            <div class="footer">
                <p>Derechos de autor © 2023 Restaurante El Chapin</p>
            </div>
        </footer>

        <script>
            // Función para mostrar la barra de carga durante 2 segundos y luego redirigir a la página deseada
            function showLoader(destination) {
                document.getElementById('loader').style.display = 'block';
                setTimeout(function () {
                    window.location.href = destination;
                }, 500); // Redirige después de 2 segundos (2000 milisegundos)
            }
        </script>
    </body>
</html>
