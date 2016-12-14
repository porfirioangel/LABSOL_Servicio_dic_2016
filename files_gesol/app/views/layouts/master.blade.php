<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GESOL</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	@yield('head')	
</head>
<body>
	<div class="container">
		<div class="col-sm-12 col-md-12">
			<div id="dependencias">
				<img src="img/labsol.png"  width="206" height="79" align="right" padding="10px">
				<img src="img/cozcyt.png"  width="291" height="98">
			</div>
		</div>
		<div class="col-sm-12 col-md-12">
			<div id="cabecera">
				@yield('cabecera')
				
			</div>
		</div>
		
		<div class="col-sm-12 col-md-12">
			<div id="contenido">
				@yield('contenido')
			</div>
		</div>
		
		<div class="col-sm-12 col-md-12">
			<div id="pie">
				@yield('pie')
			</div>
		</div>
		
	</div>
	
	
</body>
</html>