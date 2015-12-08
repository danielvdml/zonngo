<!DOCTYPE html>
<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="../img/zonngo_.png"  sizes="16x16">
		<meta charset="UTF-8">
		<title>Calculador de Precios</title>
		<style type="text/css" media="screen">
			.navbar-negro {
			   background-color: #232f3e;
				-ms-background-color: #232f3e;
				-webkit-background-color: #232f3e;
				opacity: 0.8;
				-ms-opacity: 0.8;
				-webkit-opacity: 0.8;
			}
			.dark{
				background-color: #ffffff;
			}
			.list-white{
				color: #ffffff;
				font-size:12px

			}
			.list-white:hover {
				color: #428bca
			}
			
		</style>
	</head>
	<body>
		
		<nav class="navbar navbar-negro  " role="navigation" style="position:fixed;width:100%;z-index:100" >
			<div class="navbar-header">
				<div class="container-fluid">
					<div class="col-xs-2">
						<div class="nav navbar-nav navbar-left " style="padding-left:20%;">
							<a class="navbar-brand" href={{route("index")}} style="padding-left:0px;padding-right:0px;padding-top:20px;">
								
								{!!HTML::image("img/z2.png","alt",["class"=>"img-responsive","height"=>"80%"])!!}
								
							</a>
						</div>
					</div>
					<div class="col-xs-7">
						<ul class="nav navbar-nav navbar-right">
							<li style="width:100%">
								<div role="search" style="padding:20px;">
									<div class="input-group input-group-md">
										<input type="text" id="tags" class="form-control " placeholder="Buscar ...">
										<span class="input-group-btn">
											<button id="search"class="btn btn-default" type="button">
											<span class=" glyphicon glyphicon-search"></span>
											</button>
										</span>
									</div>
								</div>
							</li>
						</ul>
					</div>
					
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" style="padding-top:20px;">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<div class="col-xs-3">
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href={{route("Nosotros.index")}}>Nosotros</a></li>
								<li><a href={{route("Registrar.index")}}>Registrarse</a></li>
								<li><a href={{route("Ingresar.index")}}>Ingresar</a></li>
							</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>

		
		<div style="background-color: white;top:80px">
			<div class="row">
				<div class="container">
					<div>
						<h1 style="text-align:center">
							Usamos distintas formas para comunicarnos
						</h1>
						<ul style="list-style:none" >
							<li  style="text-align:center;padding-top:20px;font-size:20px"><strong>Ubicación :</strong> Calle Los Pinos 250, San Isidro, Lima, Perú</li>
							<li  style="text-align:center;padding-top:20px;font-size:20px"><strong>Correo :</strong> contacto@zonngo.com</li>
						</ul>
					</div>
				</div>
			</div>
		</div>


	<link rel="stylesheet" href="../css/bootstrap.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<link rel="stylesheet" href="../js/jquery-ui.min.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69401607-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>