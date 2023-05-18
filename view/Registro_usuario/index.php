<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>login</title>

	<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">

    <link rel="stylesheet" href="../../public/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="../../public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="../../public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/main.css">

</head>
<body>

    <div>
    <?php
    require('..\..\view\Nav_Inicio\nav.php')
    ?> 
    </div>

    <div style="margin-bottom: 100px;"></div>

    <div class="page-center">
        
        <div class="page-center-in">
            
            <div class="container-fluid">

                <form class="sign-box" action="" method="get" id="login_form" style="margin-bottom: 190px;">

                    <div class="form-group">
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido" required/>
                    </div>
                    <div class="form-group">
                        <input type="email" id="usu_correo" name="usu_correo" class="form-control" placeholder="Correo electronico" required/>
                    </div>
                    <div class="form-group">
                        <input type="password" id="usu_pass" name="usu_pass" class="form-control " placeholder="Contraseña" required/>
                    </div>
                   
                    <div class="form-group">
                        <input type="tel" id="usu_correo" name="usu_correo" class="form-control" placeholder="Tel. Whatsapp"required pattern="[0-9]+" minlength="10" maxlength="10"/>
                    </div>

                    <button type="submit" class="btn btn-rounded button">Registrar</button>
                    <b style="font-size:13px">Ya tienes una cuenta? <a href="..\Login\index.php"style="font-size:13px">Iniciar Sesion</a></b>
                </form>
            </div>
        </div>
    </div>

</body>
</html>