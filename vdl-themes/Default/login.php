<!DOCTYPE HTML>
<html id="todo" xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Vidali</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    {{LROUTES}}
</head>
<body>

<div class="container">
	<header class="navbar navbar-inverse">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</a>
				<a class="brand" href="#"><img width="60" height="60"  src="/Vidali1/vdl-themes/Default/img/logo.png"></a>
				<div class="nav-collapse navbar-responsive-collapse collapse" style="height: 0px;">
					<nav class="nav pull-right">
						<li class="divider-vertical"></li>
						<li><a href="http://www.onvidali.com/blog">Blog</a></li>
						<li class="divider-vertical"></li>
						<li><a href="https://github.com/vidali/Vidali/wiki">Wiki</a></li>
						<li class="divider-vertical"></li>
						<li><a href="https://github.com/vidali/Vidali">Github</a></li>
						<li class="divider-vertical"></li>
						<li><a href="http://twitter.com/VidaliSN">Twitter</a></li>
						<li class="divider-vertical"></li>
					</nav>
			</div><!-- /.nav-collapse -->
		</div>
	  </div><!-- /navbar-inner -->
	</header>
	<hr>
      <div class="row-fluid">

		<div class="span8 semi-transparent">
			<div class="center">
			  <h1>HOLA</h1>
			  <p>Vidali es una nueva red distribuída con la que compartir contenidos con gente que comparte gustos y aficiones. 
				Tu eres el dueño de tus datos, ¡usalos como quieras!</p>
			</div>
		  <hr>
		  <h4>Conecta</h4>
          <p><img src="http://127.0.0.1/Vidali/vdl-themes/default/img/world.png"> Una comunidad te espera</p>

          <h4>Comparte</h4>
          <p><img src="http://127.0.0.1/Vidali/vdl-themes/default/img/users.png"> El contenido como principal punto de unión entre usuarios.</p>

          <h4>Controla</h4>
          <p><img src="http://127.0.0.1/Vidali/vdl-themes/default/img/www.png"> Tu controlas tu información. ¡Son tus datos!</p>
        </div>


        <div class="span4 semi-transparent">
			<ul id="option" class="nav nav-tabs">
			  <li class="active"><a href="#register">Registrarse</a></li>
			  <li><a href="#login">Iniciar sesión</a></li>
			</ul>
			<div class="tab-content">
				<div id="register" class="tab-pane fade active in">
					<form id="form_login" method="post" name="vdl-login" onsubmit="doLogin(); return false;" autocomplete="on">
						<input id="user" class="pad"  name="user" class="input" type="text" placeholder="Elije tu nick" autofocus="autofocus">
						<input id="user" class="pad"  name="user" class="input" type="text" placeholder="Email" autofocus="autofocus">
						<input id="user" class="pad"  name="user" class="input" type="text" placeholder="Repetir Email" autofocus="autofocus">
						<input id="password" class="pad"  name="password" class="input" type="password" placeholder="Contrase&ntilde;a">
						<label class="string optional" for="user_remember_me">
							<div class="btn-group" data-toggle="buttons-checkbox">
								<button type="button" class="btn"><i class="icon-ok"></i></button>
							</div> Acepto los Términos y condiciones de uso.
						</label>
						<label class="string optional" for="user_remember_me">
							<div class="btn-group" data-toggle="buttons-checkbox">
								<button type="button" class="btn"><i class="icon-ok"></i></button>
							</div>
							Colaboro aceptando publicidad en el sitio.
						</label>
						<button class="btn btn-success pad" value="ok" type="submit">Registrarse</button>
					</form>
				</div>
				<div id="login" class="tab-pane fade">
					<form method="post" action="/Vidali1/vdl-include/session_start.php" autocomplete="on">
						<input id="user" class="pad"  name="user" class="input" type="text" placeholder="Email" autofocus="autofocus">
						<input id="password" class="pad"  name="password" class="input" type="password" placeholder="Contrase&ntilde;a">
						<label class="string optional" for="user_remember_me">
							<input type="checkbox" id="remember" name="remember" value="1"> Recordar mi sesión
						</label>
						<label class="string optional" for="forgotten_password">
							<a href="#"> He olvidado mi contraseña</a>
						</label>
						<button class="btn btn-success pad" value="ok" type="submit">Iniciar sesi&oacute;n</button>
					</form>
				</div>
			</div>
		</div>

          
	</div>
        
	<br>
      <hr>

      <div class="footer">
        <p>&copy; Vidali . 2013</p>
      </div>

    </div> <!-- /container -->
</body>

	<script>
		$('#option a').click(function (e) {
		  e.preventDefault();
		  $(this).tab('show');
		})
	</script>
</html>