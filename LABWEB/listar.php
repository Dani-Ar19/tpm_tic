<!DOCTYPE html>
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Emerald 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120902

-->
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Laboratorio Programaci&oacute;n III</title>
	<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
	<style>
		table{
			border: 1px solid black ;
			width: 700px;
            height: 50px;

		}
		td,th{
			border: 1px solid black ;
            padding:4px;
            text-align: center;
		}
		.encabezado{
			background-color: rgba(11, 17, 44, 0.479);
			
			color:white;
		
			
			font-size: 16px;
			
			
		}
		.cont{
			width: 700px;
			height: 200px;

		}
	</style>
	
</head>

<body>
	<div id="wrapper">
		<div id="header-wrapper" class="container">
			<div id="header" class="container">
				<div id="logo">
					<h1><a href="#">Usuarios</a></h1>
				</div>
				<div id="menu">
					<ul>
						<li class="current_page_item"><a href="index.php">Homepage</a></li>
						<li><a href="agregar.php">Nuevo</a></li>
						<li><a href="listar.php">Listar</a></li>
						<li><a href="borrar.php">eliminar</a></li>
					</ul>
				</div>
			</div>
			<div><img src="images/img03.png" width="1000" height="40" alt="" /></div>
		</div>
		<!-- end #header -->
		<div id="page">
			<div id="cont">
				<div class="post" id=cont>
					<h2>Sistema de Administraci&oacute;n de Usuarios</h2>
					<p class="meta"><span class="date"><?php echo date("d - m - Y"); ?></span></p>
					<div style="clear: both;">&nbsp;</div>
					<div class="entry" id="cont">
						<h3>Listar Usuarios</h3>
						<br>

						<?php
						// // Se establece la conexión a la base de datos
						$dbconn = pg_connect("host=localhost dbname=usuariosdb user=danielam password=19demayo")
							or die('No se ha podido conectar: ' . pg_last_error());
						// // Se recuperan los usuarios
						// // Si devuelve falso es por que fallo la consulta
						$result = pg_query($dbconn, 'SELECT nick, nombre, apellido, email, direccion, genero, telefono FROM usuarios.usuario ORDER BY apellido');
						?>
						
							

						<table class="mitab">
                            <tr class="encabezado">
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>E-mail</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Género</th>
                                <th>Nick</th>
                            
                            </tr>
                            <?php while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {?>
                            <tr>
                                <td> <?php echo  $line["nombre"] ; ?></td>
                                <td> <?php echo  $line["apellido"]; ?></td>
                                <td> <?php echo $line["email"]; ?></td>
                                <td> <?php echo $line["direccion"]; ?></td>
                                <td> <?php echo $line["telefono"]; ?></td>
                                <td> <?php echo  $line["genero"]; ?></td>
                                <td> <?php echo $line["nick"] ; ?></td>
                            </tr>
                            <?php } ?>
                            
                        </table> 
						 	



                             



						
						</table>
						<?php
						// // se cierra la conexión a la base de datos
						 if ($dbconn) {
							pg_close($dbconn);
						 }
						?>
					</div>
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
			<!-- end #content -->
			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
		<div class="container"><img src="images/img03.png" width="1000" height="40" alt="" />

		</div>
		<!-- end #page -->
	</div>
	<div id="footer-content"></div>
	<div id="footer">
		<p>Copyright (c) 2012 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>.</p>
	</div>
	<!-- end #footer -->
</body>

</html>