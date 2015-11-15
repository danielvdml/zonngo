<!DOCTYPE html>
<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="../img/zonngo_.png"  sizes="16x16">
		<meta charset="UTF-8">
		<title>Calculador de Precios</title>
		<style type="text/css" media="screen">
			.navbar-negro {
			    background-color: #000000;
			    border-color: #080808;
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
	
		<nav class="navbar navbar-negro" role="navigation" >
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar dark"></span>
					<span class="icon-bar dark"></span>
					<span class="icon-bar dark"></span>
				</button>
				<a class="navbar-brand" href={{route("index")}}><img src="../img/zonngo.png" alt="Image" height="65px"></a>
			</div>

			
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse" style="padding-top:20px;">
				<ul class="nav navbar-nav navbar-right" style="font-size:Raleway">
					<li><a class="list-white" href={{route("index")}}>¿QUE NECESITAS?</a></li>
					<li><a class="list-white" href={{route("contacto.index")}}>CONTÁCTANOS</a></li>
					<li><a class="list-white" href={{route("demo")}}>CALCULADOR DE PRECIOS</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->

		</nav>

		
		<div style="background-color: white;">
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