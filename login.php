<!doctype html>
<html lang="es">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="public\css\style_login.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						
						<div class="login-wrap p-4 p-md-5">
                                
							<form action="#" class="signin-form">
                                <input type="hidden" id="rol_id" name="rol_id" value="1">

                                <header class="sign-title" id="lbltitulo">Acceso Usuario</header>

                                <!-- TODO: validar segun valor al iniciar session -->
                                <?php
                                if (isset($_GET["m"])){
                                    switch($_GET["m"]){
                                        case "1";
                                            ?>
                                                <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                    <i class="font-icon font-icon-warning"></i>
                                                    El Usuario y/o Contraseña son incorrectos.
                                                </div>
                                            <?php
                                        break;

                                        case "2";
                                            ?>
                                                <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                    <i class="font-icon font-icon-warning"></i>
                                                    Los campos estan vacios.
                                                </div>
                                            <?php
                                        break;
                                    }
                                }
                            ?>




                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" required>
                                    <label class="form-control-placeholder" for="username" id="usu_correo" name="usu_correo">Correo</label>
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" class="form-control" required>
                                    <label class="form-control-placeholder" for="password" id="usu_pass" name="usu_pass">Contraseña</label>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                    
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Recuerdame
                                        <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#" id="btnsoporte">Aceso admin</a>
                                    </div>
                                </div>
		                    </form>
		                    <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p>
		                </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

    <script src="public/js/lib/jquery/jquery.min.js"></script>
  <script src="public\js\popper.js"></script>
  <script src="public/js/bootstrap.min.js"></script>
  <script src="public/js/main.js"></script>
 
<script src="public/js/lib/tether/tether.min.js"></script>

<script src="public/js/plugins.js"></script>
<script type="text/javascript" src="../../public/js/lib/match-height/jquery.matchHeight.min.js"></script>
<script>
    $(function() {
        $('.page-center').matchHeight({
            target: $('html')
        });

        $(window).resize(function(){
            setTimeout(function(){
                $('.page-center').matchHeight({ remove: true });
                $('.page-center').matchHeight({
                    target: $('html')
                });
            },100);
        });
    });
</script>
<script src="../../public/js/app.js"></script>

<script type="text/javascript" src="datos.js"></script>

	</body>
</html>
