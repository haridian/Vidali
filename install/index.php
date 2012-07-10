<?php 
/*	Vidali, Social Network Open Source.
This file is part of Vidali.

Vidali is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Vidali is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Foobar.  If not, see <http://www.gnu.org/licenses/>.*/
?>
<html id="todo" xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Vidali</title>
	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
	<link rel="shortcut icon" href="../vdl-themes/default/img/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="../vdl-themes/default/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="../vdl-themes/default/css/bootstrap-responsive.css" />
	<link rel="stylesheet" type="text/css" href="../vdl-themes/default/css/style.css" />
	<script type="text/javascript" src="../vdl-themes/default/js/jquery.js" ></script>
	<script type="text/javascript" src="../vdl-themes/default/js/bootstrap.js" ></script>
	<script type="text/javascript" src="../vdl-themes/default/js/bootstrap-dropdown.js" ></script>
	<link rel="stylesheet" href="../vdl-themes/default/js/jquery-ui.css" id="theme" />
	<script type="text/javascript" src="../vdl-themes/default/js/less.js"></script>
	<script type="text/javascript" src="../vdl-themes/default/js/script_default.js"></script>
</head>
 <body>
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
		<div class="span2"><a class="brand" href="#"><img src="../vdl-themes/default/img/logo.png"></a></div>
		<ul class="nav pull-right">
			<li><a href="http://vdli.wordpress.com/">Blog</a></li>
			<li><a href="https://github.com/vidali/Vidali/wiki">Wiki</a></li>
			<li><a href="https://github.com/vidali/Vidali">Github</a></li>
			<li><a href="http://twitter.com/VidaliSN">Twitter</a></li>
		</ul>
        </div>
      </div>
    </div>
<section>
<div class="container-fluid">
	<div class="row-fluid">
		<form class="span4" action="install.php" method="post">
			<h2>Base de datos:</h2><br/>
				Direccion de la BD:<br/>
				<input id ="db_dir" name="db_dir" type="text" autofocus /><br/>
				Nombre de la BD:<br/>
				<input id ="db_name" name="db_name" type="text" /><br/>
				Usuario de la BD:<br/>
				<input id ="db_uname" name="db_uname" type="text" /><br/>
				Contraseña de la BD:<br/>
				<input id ="db_upass" name="db_upass" type="password" /><br/>
			<h2>Usuario Administrador:</h2><br/>
				Nick:<br/>
				<input id ="nickname" name="nickname" type="text" /><br/>
				Contraseña:<br/>
				<input id ="password" name="password" type="password" /><br/>
				Nombre:<br/>
				<input id ="name" name="name" type="text" /><br/>
				Email:<br/>
				<input id="email" name="email" type="email"><br/>
				Ubicación:<br/>
				<input id="location" name="location" type="text"><br/>
				Sexo:<br/>
				<input id="sex" name="sex" type="radio" value="1">Male
				<input id="sex" name="sex" type="radio" value="2"> Female<br/>
				Fecha de Nacimiento:<br/> <h3>(yyyy-mm-dd)</h3>
				<input id="birthdate" name="birthdate" type="date"><br/>
				Descripción:<br/><textarea id="bio" name="bio" rows="5" cols="20" placeholder="Describete!" ></textarea><br/>
<?php	
/*			<h2>Otra Configuración (NO IMPLEMENTADO DE MOMENTO):</h2>
				Nivel de privacidad:<input id="priv" name="priv" type="radio" value="low">low
				<input id="priv" name="priv" type="radio" value="medium"> medium
				<input id="priv" name="priv" type="radio" value="high"> high<br/>
				Metodo de registro de usuarios:<input id="musers" name="musers" type="radio" value="on"> Libre
				<input id="musers" name="musers" type="radio" value="off"> Invitación
				<input id="musers" name="musers" type="radio" value="off"> Cerrado<br/>
				Ruta de la carpeta principal:<input id ="basedir" name="basedir" type="text" /><br/>*/?>
				<input type="submit" value="Comenzar!">
		</form>
		<div class="span8">
			<h1>Bienvenido al instalador de Vidali</h1><br/>
			<p>
				Hola, este es el instalador de Vidali, por favor rellena el formulario para
				completar la instalación.
				<br/>
				Recuerda eliminar la carpeta install en el servidor una vez haya finalizado la instalación.
				<br/>
				Proximamente se ampliarán las opciones iniciales de configuración de la red.
				<br/>
				<br/>
				Ten en cuenta las siguientes consideraciones al usar Vidali:
				<br/>
				<ul>
					<li>Se trata de una versión ALFA, por lo que no se recomienda su uso en entornos de producción.</li>
					<li>El código está en continuo cambio, por lo que se recomienda actualizar los archivos con frecuencia.</li>
					<li>El proyecto cuenta con pocos desarrolladores, por favor, contribuye a mejorarlo.</li>
					<li>Disfruta de Vidali y sobretodo comparte tu ideas!.</li>
				</ul>
			</p>
		</div>
		<div class="clear"></div>
	</div>
</div>
</section>
    <footer class="footer">
      <div class="container">
        <p class="pull-right"><img src="../vdl-themes/default/img/html5.png"><img src="../vdl-themes/default/img/agpl.png"></p>
        <p>Powered by Vidali.</p>
      </div>
    </footer>
</body>
</html>
