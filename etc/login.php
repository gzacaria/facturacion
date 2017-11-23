<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="utf-8">
        <title>.: Login de Acceso</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Ejemplo Login">


        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700'>
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../estilos_login.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="logo span4">
                        <h1><a href="">Manual del Sistema<span class="red">.</span></a></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="register-container container">
            <div class="row">
                <center>
                <div class="register" style="width: 570px;">
                    <form action="perfiles.php" method="post">
                        <h2><span class="red"><strong>Iniciar Sesi&oacute;n</strong></span></h2>
                        <label for="Mensaje" id="Mensaje"></label>
                        <label for="usuario_login" id="usuario_login">Usuario:</label>
                        <input type="text" id="usuario_login" name="US_NOMBRE" style="width: 95%;height: 30px;" placeholder="Teclea tu usuario...">
                        <label for="password_login">Password:</label>
                        <input type="password" id="password_login" name="US_PASSWORD" style="width: 95%;height: 30px;"  placeholder="Teclea tu password...">
                        <button type="submit">Login</button>
                    </form>
                </div>
                </center>
            </div>
        </div>

 

    </body>

</html>