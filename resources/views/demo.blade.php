<!DOCTYPE html>
<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		
		<link rel="icon" type="image/png" href="http://zonngo.com/img/zonngov4.png"  sizes="16x16">
		<title>Calculador de Precios :D</title>
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
				-ms-background-color: #ffffff;
				-webkit-background-color: #ffffff;
			}
			.list-white{
				color: #ffffff;
				-ms-color: #ffffff;
				-webkit-color: #ffffff;
				font-size:12px
			}
			.list-white:hover {
				color: #428bca
			}
			span{
				background-color: white;
				-ms-background-color: white;
				-webkit-background-color: white;
			}
			.filtro{
			}
			
		</style>
		{!!HTML::style("css/Productos.css")!!}
		{!!HTML::style("css/bootstrap.css")!!}
		{!!HTML::style("css/estilos.css")!!}
		
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
								<li class="active" style="padding-top:10px"><a href={{route("Nosotros.index")}}>Nosotros</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		</nav>
	
	<div class="paneles" style="background-color: white;padding-top:80px">
		<div class="row" style="padding-bottom:75px;padding-top:25px;padding-left:20px;padding-right:20px;">
			<div class="container-fluid" style="padding:6px;">
				
				<div class="side-filtros col-xs-12 col-sm-2 col-lg-offset-1 col-lg-2" >
					<h5 class="filtro">Filtro por Marca</h5>
					<div class="form-horizontal" role="form">
						<div class="form-group">
							<div>
								<div  style="padding:10px">
									<select id="categoria"  class="form-control"  >
									</select>
								</div>
							</div>
							<div>
								<div style="padding:10px">
									<select id="marca" class="form-control"  >
										<option value="--Marca--">--Marca--</option>
									</select>
								</div>
							</div>
							<div>
								<div style="padding:10px">
									<select id="modelos" class="form-control" >
										<option value="--Modelo--">--Modelo--</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<h5 class="filtro">Filtro por Tienda </h5>
					<div id="CheckTiendas" class="checkbox" >
						@foreach($Tiendas as $Tienda)
						<li class="checkbox">
							<label >
								<input type="checkbox" checked value={{$Tienda->Origen}}  >
								{!!HTML::image('img/'.$Tienda->Origen.'.png','alt',["height"=>"30px"])!!}
							</label>
						</li>
						@endforeach
					</div>
				</div>
				<div class="principal col-xs-12 ">
					<div id="slider">
						<ul class="bjqs">
							<li>
								{!!HTML::image("img/celulares.png","alt",["title"=>"Calculamos el precio de tu equipo móvil en tiempo real"])!!}
							</li>
							<li>
								{!!HTML::image("img/samsung.png","alt",["title"=>"Busca tu equipo favorito y te mostramos donde lo tienen al menor precio!!"])!!}
								
							</li>
							<li>
								{!!HTML::image("img/farmacos.png","alt",["title"=>"Proximamente  te traeremos el precio y lugar de los fármacos que necesitas"])!!}
								
							</li>
						</ul>
					</div>
				</div>
				
				<div class="panel-items-nuevo col-xs-12 col-sm-5 col-lg-4" style="padding:25px">
					
					<div class="col-xs-12" style="padding:5px;">
						<div class="Producto-nuevo panel panel-primary " style="border-color:#ff7500">
							<div class="Producto-nuevo panel-heading " style="border-color:#ff7500;background-color:#ff7500">
								
								<h3 class="panel-title">Artículo Nuevo <a href="" id="nuevo-desc"></a></h3>
							</div>
							<div class="panel-body " >
								<div class="table-responsive">
									<table class="table table-bordered table-hover" style="border-color:#ff7500">
										<thead>
											<tr>
												<th colspan="2" style="text-align:center">Promedio:<strong id="nuevo-prom">S/.00.00</strong></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center">Mín:<strong id="nuevo-min">S/.00.00</strong></td>
												<td style="text-align:center">Máx:<strong id="nuevo-max">S/.00.00</strong></td>
											</tr>
										</tbody>
									</table>
								</div>
								
							</div>
						</div>
					</div>
					<div class="col-xs-12" style="padding:5px;">
						
						<table id="table-nuevo" class="table table-striped " 	>
							<thead>
								<tr>
									<th>Origen</th>
									<th>Enlace</th>
									<th>Costo</th>
								</tr>
							</thead>
							<tbody id="body-nuevo">
								
							</tbody>
						</table>
						<!-- </div> -->
					</div>
				</div>
				<div class="panel-items-usado col-xs-12 col-sm-5 col-lg-4"  style="padding:25px">
					<div class="col-xs-12" style="padding:5px;">
						<div class="Producto-usado panel panel-primary" style="border-color:#f5af02">
							<div class=" Producto-usado panel-heading" style="border-color:#f5af02;background-color:#f5af02">
								
								<h3 class="panel-title">Artículo Usado <a href="" id="usado-desc"></a></h3>
							</div>
							<div class="panel-body" >
								<div class="table-responsive">
									<table class="table table-bordered table-hover" style="border-color:#f5af02">
										<thead>
											<tr>
												<th colspan="2" style="text-align:center">Promedio:<strong id="usado-prom">S/.00.00</strong></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center">Mín:<strong id="usado-min">S/.00.00</strong></td>
												<td style="text-align:center">Máx:<strong id="usado-max">S/.00.00</strong></td>
											</tr>
										</tbody>
									</table>
								</div>
								
							</div>
						</div>
					</div>
					<div class="col-xs-12" style="padding:5px;">
						
						<table id="table-usado" class="table table-striped" >
							<thead>
								<tr>
									<th>Origen</th>
									<th>Enlace</th>
									<th>Costo</th>
								</tr>
							</thead>
							<tbody id="body-usado" >
							</tbody>
						</table>
					</div>
				</div>
				<div class="panel-items-nuevo col-xs-12 col-sm-offset-3 col-sm-8 " style="padding:25px">
					<div id="grafico"></div>
				</div>
				
			</div>
		</div>
	</div>
	
	
	
	<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> -->
	<!--
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	-->
	<style type="text/css">
			tr {
				width: 100%;
				-webkit-display: inline-table;
				display: inline-table;
				-webkit-display: inline-table;
			}
			
			#body-usado,#body-nuevo{
				-webkit-overflow-y: scroll;
				overflow-y: scroll;
				-webkit-width: 100%;
				width: 100%;
				-webkit-position: absolute;
				position: absolute;
			}
	</style>
	<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> -->
	
	
	
	<!-- {!!HTML::style("js/jquery-ui.min.css")!!} -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	
	<!-- 	{!!HTML::script("js/jquery.min.js")!!}
	{!!HTML::script("js/jquery-ui.min.js")!!} -->
	{!!HTML::script("js/bjqs.min.js")!!}
	{!!HTML::script("js/bootstrap.min.js")!!}
	{!!HTML::script("js/script.js")!!}
	{!!HTML::script("js/getItems.js")!!}
	{!!HTML::script("js/highcharts/highcharts.js")!!}
	{!!HTML::script("js/highcharts/highcharts-more.js")!!}
	<script>	
		$(function () {
		   
		});
	</script>
	
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