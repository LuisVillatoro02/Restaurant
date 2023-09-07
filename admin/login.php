<?php 
	include("../functions.php");

    if((isset($_SESSION['uid']) && isset($_SESSION['username']) && isset($_SESSION['user_level'])) )  {
        if($_SESSION['user_level'] == "admin") {
          header("Location: index.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Administrador</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  </head>
  <style>
            body {
                background-image: url("../image/fondoa.jpg"); /* Corrige la propiedad de background-image */
                background-repeat: no-repeat; /* Evita la repetición de la imagen de fondo */
                background-size: cover; /* Ajusta el tamaño de fondo para cubrir la pantalla */
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                align-items: flex-start; /* Cambiado a align-items para alinear a la izquierda */
                justify-content: space-between; /* Para ajustar el espacio entre el contenido y el footer */
                min-height: 100vh;
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
            .boton-frame{
            text-decoration: none;
            color: #ee7f2f; /* Cambié el color del texto de los botones */
            background-color: #f6da98; /* Cambié el color de fondo de los botones */
            padding: 13px 65px; /* Aumenté el espacio interno horizontal para que los botones sean más anchos */
            border-radius: 50px;
            transition: background-color 0.3s;
            display: flex;
            align-items: center;
            font-size: 25px;
            margin: 10px; /* Espacio entre botones */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Agregué sombra a los botones */
            cursor: pointer; /* Cambié el cursor al pasar sobre los botones */ 
            }

            .boton-frame:hover {
            background-color: #c84228; /* Cambié el color de fondo de los botones al hacer hover */
            color: #ee7f2f; /* Cambié el color del texto al hacer hover */
            }
            </style>
  <body class="bg-dark">
  <div class="container">
            <header>
                <img class="logo" src="../image/logo.png" alt="Logo">
            </header>

        <div class="card-header" >
          <form id="loginform">
                <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Usuario" required="required" autofocus="autofocus" ><br>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Contraseña" required="required" ><br>

           <center><input type="submit" class="btn boton-frame" form="loginform" name="btnlogin" value="Ingresar" /></center>
          </form>
		   <a href="../index.php" class="">Volver al Inicio</a>
        </div>
        </div>
        <footer>
            <div class="footer">
                <p>Derechos de autor © 2023 Restaurante El Chapin</p>
            </div>
        </footer>


    <!-- Barra de carga -->
    <div class="loader" id="loader"></div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript">
        $('#loginform').submit(function() {
            $.ajax({
                type: "POST",
                url: 'process.php',
                data: {
                    username: $("#inputUsername").val(),
                    password: $("#inputPassword").val()
                },
                success: function(data)
                {
                    if (data === 'correct') {
                        window.location.replace('index.php');
                    }
                    else {
                        $("#warningbox").html("<div class='alert alert-danger' role='alert'>"+data+"!</div>");
                    }
                }
            });
            return false;
        });
    </script>

  </body>

</html>
