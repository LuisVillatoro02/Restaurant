<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante El Chapin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #2e384d, #899eb3);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between; /* Para ajustar el espacio entre el contenido y el footer */
            min-height: 100vh; /* Cambiado a min-height para asegurarse de que el contenido se expanda correctamente */
        }

        .container {
            padding: 50px; /* Espacio interno */
            border-radius: 50px; /* Bordes redondeados */
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px; /* Espacio inferior entre el contenido y el footer */
        }

        header {
            text-align: center;
        }

        img {
            width: 500px; /* Ajusta el tamaño de la imagen según tus necesidades */
            animation: scaleUp 2s ease-in-out infinite alternate;
        }

        @keyframes scaleUp {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.1);
            }
        }

        nav {
            text-align: center;
            margin-top: 20px; /* Espacio superior entre el logo y los botones */
            display: flex;
            gap: 10px;
            flex-wrap: wrap; /* Para que los botones se envuelvan si no caben en la pantalla */
            justify-content: center; /* Centra horizontalmente los botones */
        }

        a {
            text-decoration: none;
            color: #ee7f2f; /* Cambié el color del texto de los botones */
            background-color: #f6da98; /* Cambié el color de fondo de los botones */
            padding: 15px 30px; /* Aumenté el espacio interno horizontal para que los botones sean más anchos */
            border-radius: 50px;
            transition: background-color 0.3s;
            display: flex;
            align-items: center;
            font-size: 25px;
            margin: 10px; /* Espacio entre botones */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Agregué sombra a los botones */
            cursor: pointer; /* Cambié el cursor al pasar sobre los botones */
        }

        a:hover {
            background-color: #c84228; /* Cambié el color de fondo de los botones al hacer hover */
            color: #ee7f2f; /* Cambié el color del texto al hacer hover */
        }

        .icon {
            margin-right: 10px;
        }

        .footer {
            background-color: #ee7f2f; /* Color de fondo del pie de página */
            padding: 20px; /* Espacio interno del pie de página */
            text-align: center;
            border-top-left-radius: 50px; /* Bordes redondeados superior izquierdo */
            border-top-right-radius: 50px; /* Bordes redondeados superior derecho */
            width: 100%; /* Ancho del footer para que abarque toda la pantalla */
        }

        .footer p {
            margin: 0;
            color: #fff; /* Color de texto del pie de página */
        }

        /* Estilo para la barra de carga */
        .loader {
            display: none;
            width: 100%;
            height: 4px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #c84228;
            z-index: 9999;
        }
    </style>
</head>
<body>
    <header>
        <img src="image/logo.png" alt="Logo de Restaurante El Chapin">
    </header>
    <div class="container">
        <nav>
            <a href="#" onclick="showLoader('staff')">
                Empleado
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
