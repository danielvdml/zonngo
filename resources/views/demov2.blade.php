<!DOCTYPE html>
<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		{!!HTML::style("css/Productos.css")!!}
		<link rel="icon" href="../img/zonngo_.png"  sizes="16x16">
		<title>Calculador de Precios</title>
		<style type="text/css" media="screen">
			.navbar-negro {
			background-color: #000000;
			border-color: #080808;
			margin: 0 auto;
			border-radius: 0px;
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
			.tienda{
			    display: -webkit-flex; /* Safari */
			    -webkit-flex-flow: row-reverse wrap; /* Safari 6.1+ */
			    display: flex;
			    flex-flow: row-reverse wrap;
			}
						
		</style>
	</head>
	<body>
		
		<nav class="navbar navbar-negro" role="navigation" style="position:fixed;width:100%;z-index:100" >
			<div class="navbar-header">

				<a class="navbar-brand" href={{route("index")}}>
					<img src="../img/zonngo.png" alt="Image" height="65px">
				</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				</button>
				
				<ul class="nav navbar-nav navbar-left col-xs-9">
					<li style="width:100%">
						<div role="search" style="padding:30px;">
							<div class="input-group input-group-lg">
								<div class="input-group-btn">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorías <span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li><a href="#">Celulares</a></li>
										<li><a href="#">Inmuebles</a></li>
										<li><a href="#">Fármacos</a></li>
										<!-- <li role="separator" class="divider"></li>
										<li><a href="#">Separated link</a></li> -->
									</ul>
								</div>
								<input type="text" id="tags" class="form-control " placeholder="Buscar ...">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button">
									<span class=" glyphicon glyphicon-search"></span>
									</button>
								</span>
							</div>
						</div>
					</li>
				</ul>
			</div>
			
		</nav>
	
		

	
	
	<div class="container-fluid"style="background-color: white;padding-top:120px">
		<div class="row">
				<!-- 	<div class="row" style="padding-bottom:75px;padding-top:25px;padding-left:20px;padding-right:20px;">
			<div class="container-fluid">
				<div class="col-sm-2">
					<div class="form-horizontal" role="form">
						<div class="form-group">
							<div>
								<div  style="padding:10px">
									<select id="categoria"  class="form-control"  >
										<option value="--Categoria--">--Categoria--</option>
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
				</div>
				<div class="col-sm-5">
					<div class="col-xs-12">
						<div class="panel panel-primary">
							<div class="panel-heading">
								
								<h3 class="panel-title">Artículo Nuevo <a href="" id="nuevo-desc"></a></h3>
							</div>
							<div class="panel-body">
								<table class="table table-bordered table-hover">
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
								<img src="../img/iphone-5.jpg" class="img-responsive" alt="Image">
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="col-xs-offset-1 col-xs-10">
							<table id="table-nuevo" class="table table-striped">
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
						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="col-xs-12">
						<div class="panel panel-primary">
							<div class="panel-heading">
								
								<h3 class="panel-title">Artículo Usado <a href="" id="usado-desc"></a></h3>
							</div>
							<div class="panel-body">
								<table class="table table-bordered table-hover">
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
					<div class="col-xs-12">
						<div class="col-xs-offset-1 col-xs-10">
							<table id="table-usado" class="table table-striped">
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
				</div>
			</div>
				</div> -->


			<div class="col-xs-2 col-sm-offset-1 col-sm-2">
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-left">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tiendas <b class="caret"></b></a>
							<ul class="dropdown-menu Tiendas">
								@foreach($Tiendas as $Tienda)
									<li class="checkbox">
										<label>
											<input type="checkbox" value={{$Tienda->Origen}}>
											{!!HTML::image('img/'.$Tienda->Origen.'.png','alt',['class'=>'product-img'])!!}
										</label>
									</li>
								@endforeach
							</ul>
						</li>
					</ul>
				</div>
				<!-- <ul class="Tiendas">
					@foreach($Tiendas as $Tienda)
						<li class="checkbox">
							<label>
								<input type="checkbox" value={{$Tienda->Origen}}>
								{!!HTML::image('img/'.$Tienda->Origen.'.png','alt',['class'=>'product-img'])!!}
							</label>
						</li>
					@endforeach
				</ul> -->
				<ul class="Marcas">
					@foreach($Marcas as $Marca)
						<li class="checkbox">
							<label>
								<input type="checkbox" value={{$Marca->Marca}}>{{$Marca->Marca}}
							</label>
						</li>
					@endforeach
				</ul>
			</div>

			<div class="col-xs-10 col-sm-offset-3 col-sm-8" style="margin:0 auto">
				@foreach($Productos as $Producto)
						<div class=" tienda col-xs-12 col-sm-6 col-md-4 col-lg-3">
							<a class="enlace" href={{$Producto->Link}} target="_blank" >
								@if($Producto->Condicion=="nuevo")
								<div class="Producto-nuevo">
								@else
								<div class="Producto-usado">
								@endif
									<div class="imagen">
										
									</div>
									<div class="detalle">
										<div class="titulo">
												{{$Producto->Titulo}}
										</div>
										<div class="precio">
											S/.{{$Producto->Precio}}.00
										</div>
										<div class="tienda">
											{!!HTML::image('img/'.$Producto->Origen.'.png','alt',['class'=>'product-img'])!!}
											
										</div>
									</div>
								</a>
							</div>
						</div>				
				@endforeach
			</div>
		</div>
	</div>


	<link rel="stylesheet" href="../css/bootstrap.css">
	
	<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> -->
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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
	<script type="text/javascript">
		Array.prototype.orderByNumber=function(property,sortOrder){
		// Primero se verifica que la propiedad sortOrder tenga un dato válido.
		if (sortOrder!=-1 && sortOrder!=1) sortOrder=1;
		this.sort(function(a,b){
		// La función de ordenamiento devuelve la comparación entre property de a y b.
		// El resultado será afectado por sortOrder.
		return (a[property]-b[property])*sortOrder;
		})
		}
		exCat=true;
		exMod=true;
		exMar=true;
		
		jQuery(document).ready(function(){
			url=window.location;
			Data=[];
			items=[];
			categoria="";
			marca="";
			$.get(url+'/getList_', function(data) {
				Data=data;
				
				Data["Modelos"].forEach(function(i){
					items.push(i["Marca"]+" "+i["Modelo"]);
				});
				Data["Categorias"].forEach(function(i){
					c=i["Categoria"];
					$("#categoria").append('<option value="'+c+'">'+c+'</option>');
				});
			});

			$("#categoria").on("change",function(){
				$("#marca option").remove();
				categoria=$("#categoria").val();
				
				Data["Marcas"].forEach(function(i){
					if(categoria==i["Categoria"]){
						c=i["Marca"];
						$("#marca").append('<option value="'+c+'"">'+c+'</option>');
						}
				});
				$("#marca").append('<option value="--Marca--">--Marca--</option>');
				// $.get(url+'/getListMarca/'+categoria, function(data) {
					// 	data.forEach(function(i){
						// 		c=i["Marca"].replace(/ /g,"-");
						// 		$("#marca").append('<option value='+c+'>'+i["Marca"]+'</option>');
					// 	});
				// });
			});
			$("#marca").on("change",function(){
				$("#modelos option").remove();
				marca=$("#marca").val();
				
				Data["Modelos"].forEach(function(i){
					if(i["Marca"]==marca){
						c=i["Modelo"];
						$("#modelos").append('<option value="'+c+'"">'+c+'</option>');
					}
				});
				$("#modelos").append('<option value="--Modelo--">--Modelo--</option>');
				// marca=$("#marca").val().replace(/-/g," ");
				// $.get(url+'/getListModelo/'+categoria+'/'+marca, function(data) {
					// 	data.forEach(function(i){
						// 		c=i["Modelo"];
						// 		$("#modelos").append('<option value="'+c+'"">'+i["Modelo"]+'</option>');
					// 	});
				// });
				modelo=$("#modelos").val();
				$.get(url+'/getListItems/'+categoria+"/"+marca+"/"+modelo, function(data) {
					for (var i=0;i<data["estadistica"].length;i++) {
						$("#"+data["estadistica"][i]["Condicion"]+"-desc").text(data["estadistica"][i]["Modelo"]);
						$("#"+data["estadistica"][i]["Condicion"]+"-prom").text("S/."+data["estadistica"][i]["Promedio"]+".00");
						$("#"+data["estadistica"][i]["Condicion"]+"-min").text("S/."+data["estadistica"][i]["Min"]+".00");
						$("#"+data["estadistica"][i]["Condicion"]+"-max").text("S/."+data["estadistica"][i]["Max"]+".00");
					}
					data["productos"].orderByNumber("Precio",1);
					$("#body-usado tr").remove();
					$("#body-nuevo tr").remove();
					$("#body-usado h2").remove();
					$("#body-nuevo h2").remove();
					nuevo=0;
					usado=0;
					HeightNuevo=0;
					HeightUsado=0;
					data["productos"].forEach(function(i){
						// $("#body-"+i["Condicion"]).append("<tr><td><img src='http://"+window.location.host+"/img/"+i["Origen"]+".png' height='30px'></td><td><a target='_blank' href='"+i["Link"]+"''>"+i["Titulo"]+"</a></td><td>"+i["Precio"]+"</td></tr>");
						$("#body-"+i["Condicion"]).append("<tr><td><img src='http://"+window.location.host+"/zonngo/public/img/"+i["Origen"]+".png' height='30px'></td><td><a target='_blank' href='"+i["Link"]+"''>"+i["Titulo"]+"</a></td><td>"+i["Precio"]+"</td></tr>");
						if(i["Condicion"]=="nuevo"){
							if(HeightNuevo<300){
								nuevo=nuevo+1;
								HeightNuevo=nuevo*80;
							}else{
								HeightNuevo=300;
							}
							$("#body-nuevo").css({
								"height": HeightNuevo.toString()+"px"
							});
							$("#table-nuevo").css({
								"height": (HeightNuevo+100).toString()+"px"
							});
						}
						if(i["Condicion"]=="usado"){
							if(HeightUsado<300){
								usado=usado+1;
								HeightUsado=usado*80;
							}else{
								HeightUsado=300;
							}
							$("#body-usado").css({
								"height": HeightUsado.toString()+"px"
							});
							$("#table-usado").css({
								"height": (HeightUsado+100).toString()+"px"
							});
						}
						
					});
					
					for (var i=0;i<data["estadistica"].length;i++) {
						$("#"+data["estadistica"][i]["Condicion"]+"-desc").text(data["estadistica"][i]["Modelo"]);
						$("#"+data["estadistica"][i]["Condicion"]+"-prom").text("S/."+data["estadistica"][i]["Promedio"]+".00");
						$("#"+data["estadistica"][i]["Condicion"]+"-min").text("S/."+data["estadistica"][i]["Min"]+".00");
						$("#"+data["estadistica"][i]["Condicion"]+"-max").text("S/."+data["estadistica"][i]["Max"]+".00");
					}
					
					if(data["estadistica"].length==1){
						if(data["estadistica"][0]["Condicion"]=="nuevo"){
							$("#usado-desc").text(data["estadistica"][0]["Modelo"]);
							$("#usado-prom").text("S/. 00.00");
							$("#usado-min").text("S/. 00.00");
							$("#usado-max").text("S/. 00.00");
							$("#body-usado").append("<h2>Buscando ...</h2>");
						}else if(data["estadistica"][0]["Condicion"]=="usado"){
							$("#nuevo-desc").text(data["estadistica"][0]["Modelo"]);
							$("#nuevo-prom").text("S/. 00.00");
							$("#nuevo-min").text("S/. 00.00");
							$("#nuevo-max").text("S/. 00.00");
							$("#body-nuevo").append("<h2>Buscando ...</h2>");
							}
					}
				});
				
			});
			$("#modelos").on("change",function(){
				modelo=$("#modelos").val().replace(/-/g," ");
				$.get(url+'/getListItems/'+categoria+"/"+marca+"/"+modelo, function(data) {
					for (var i=0;i<data["estadistica"].length;i++) {
						$("#"+data["estadistica"][i]["Condicion"]+"-desc").text(data["estadistica"][i]["Modelo"]);
						$("#"+data["estadistica"][i]["Condicion"]+"-prom").text("S/."+data["estadistica"][i]["Promedio"]+".00");
						$("#"+data["estadistica"][i]["Condicion"]+"-min").text("S/."+data["estadistica"][i]["Min"]+".00");
						$("#"+data["estadistica"][i]["Condicion"]+"-max").text("S/."+data["estadistica"][i]["Max"]+".00");
					}
					data["productos"].orderByNumber("Precio",1);
					$("#body-usado tr").remove();
					$("#body-nuevo tr").remove();
					$("#body-usado h2").remove();
					$("#body-nuevo h2").remove();
					nuevo=0;
					usado=0;
					HeightNuevo=0;
					HeightUsado=0;
					data["productos"].forEach(function(i){
						// $("#body-"+i["Condicion"]).append("<tr><td><img src='http://"+window.location.host+"/img/"+i["Origen"]+".png' height='30px'></td><td><a target='_blank' href='"+i["Link"]+"''>"+i["Titulo"]+"</a></td><td>"+i["Precio"]+"</td></tr>");
						$("#body-"+i["Condicion"]).append("<tr><td><img src='http://"+window.location.host+"/zonngo/public/img/"+i["Origen"]+".png' height='30px'></td><td><a target='_blank' href='"+i["Link"]+"''>"+i["Titulo"]+"</a></td><td>"+i["Precio"]+"</td></tr>");
						if(i["Condicion"]=="nuevo"){
							if(HeightNuevo<300){
								nuevo=nuevo+1;
								HeightNuevo=nuevo*60;
							}else{
								HeightNuevo=300;
							}
							$("#body-nuevo").css({
								"height": HeightNuevo.toString()+"px"
							});
							$("#table-nuevo").css({
								"height": (HeightNuevo+100).toString()+"px"
							});
						}
						if(i["Condicion"]=="usado"){
							if(HeightUsado<300){
								usado=usado+1;
								HeightUsado=usado*60;
							}else{
								HeightUsado=300;
							}
							$("#body-usado").css({
								"height": HeightUsado.toString()+"px"
							});
							$("#table-usado").css({
								"height": (HeightUsado+100).toString()+"px"
							});
						}
						
					});
					
					for (var i=0;i<data["estadistica"].length;i++) {
						$("#"+data["estadistica"][i]["Condicion"]+"-desc").text(data["estadistica"][i]["Modelo"]);
						$("#"+data["estadistica"][i]["Condicion"]+"-prom").text("S/."+data["estadistica"][i]["Promedio"]+".00");
						$("#"+data["estadistica"][i]["Condicion"]+"-min").text("S/."+data["estadistica"][i]["Min"]+".00");
						$("#"+data["estadistica"][i]["Condicion"]+"-max").text("S/."+data["estadistica"][i]["Max"]+".00");
					}
					
					if(data["estadistica"].length==1){
						if(data["estadistica"][0]["Condicion"]=="nuevo"){
							$("#usado-desc").text(data["estadistica"][0]["Modelo"]);
							$("#usado-prom").text("S/. 00.00");
							$("#usado-min").text("S/. 00.00");
							$("#usado-max").text("S/. 00.00");
							$("#body-usado").append("<h2>Sin Items</h2>");
						}else if(data["estadistica"][0]["Condicion"]=="usado"){
							$("#nuevo-desc").text(data["estadistica"][0]["Modelo"]);
							$("#nuevo-prom").text("S/. 00.00");
							$("#nuevo-min").text("S/. 00.00");
							$("#nuevo-max").text("S/. 00.00");
							$("#body-nuevo").append("<h2>Sin Items</h2>");
							}
					}
				});
			});
			$("#tags").autocomplete({
				source:items
			});
			$("#tags").on("keyup", function(){
				$keyword=$("#tags").val();
				$('#categoria').val("--Categoria--");
				$('#marca').val("--Marca--");
				$("#modelos").val("--Modelo--");
				$.get(url+'/getItems/'+$keyword, function(data) {
					$("#body-usado tr").remove();
					$("#body-nuevo tr").remove();
					$("#body-usado h2").remove();
					$("#body-nuevo h2").remove();
					nuevo=0;
					usado=0;
					HeightNuevo=0;
					HeightUsado=0;
					data["productos"].orderByNumber("Precio",1);
					data["productos"].forEach(function(i){
						$("#body-"+i["Condicion"]).append("<tr><td><img src='http://"+window.location.host+"/zonngo/public/img/"+i["Origen"]+".png' height='30px'></td><td><a target='_blank' href='"+i["Link"]+"''>"+i["Titulo"]+"</a></td><td>"+i["Precio"]+"</td></tr>");
						// $("#body-"+i["Condicion"]).append("<tr><td><img src='http://"+window.location.host+"/img/"+i["Origen"]+".png' height='30px'></td><td><a target='_blank' href='"+i["Link"]+"''>"+i["Titulo"]+"</a></td><td>"+i["Precio"]+"</td></tr>");
						
						if(i["Condicion"]=="nuevo"){
							if(HeightNuevo<300){
								nuevo=nuevo+1;
								HeightNuevo=nuevo*60;
							}else{
								HeightNuevo=300;
							}
							$("#body-nuevo").css({
								"height": HeightNuevo.toString()+"px"
							});
							$("#table-nuevo").css({
								"height": (HeightNuevo+100).toString()+"px"
							});
						}
						if(i["Condicion"]=="usado"){
							if(HeightUsado<300){
								usado=usado+1;
								HeightUsado=usado*60;
							}else{
								HeightUsado=300;
							}
							$("#body-usado").css({
								"height": HeightUsado.toString()+"px"
							});
							$("#table-usado").css({
									"height": (HeightUsado+100).toString()+"px"
							});
						}
						
					});
					for (var i=0;i<data["estadistica"].length;i++) {
						$("#"+data["estadistica"][i]["Condicion"]+"-desc").text(data["estadistica"][i]["Modelo"]);
						$("#"+data["estadistica"][i]["Condicion"]+"-prom").text("S/."+data["estadistica"][i]["Promedio"]+".00");
						$("#"+data["estadistica"][i]["Condicion"]+"-min").text("S/."+data["estadistica"][i]["Min"]+".00");
						$("#"+data["estadistica"][i]["Condicion"]+"-max").text("S/."+data["estadistica"][i]["Max"]+".00");
					}
					
					if(data["estadistica"].length==1){
						if(data["estadistica"][0]["Condicion"]=="nuevo"){
							$("#usado-desc").text(data["estadistica"][0]["Modelo"]);
							$("#usado-prom").text("S/. 00.00");
							$("#usado-min").text("S/. 00.00");
							$("#usado-max").text("S/. 00.00");
							$("#body-usado").append("<h2>Buscando ...</h2>");
						}else if(data["estadistica"][0]["Condicion"]=="usado"){
							$("#nuevo-desc").text(data["estadistica"][0]["Modelo"]);
							$("#nuevo-prom").text("S/. 00.00");
							$("#nuevo-min").text("S/. 00.00");
							$("#nuevo-max").text("S/. 00.00");
							$("#body-nuevo").append("<h2>Buscando ...</h2>");
							}
					}
				});
		});
																	
	})
	</script>
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