

<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Demo</title>

		
		{!! HTML::style('css/bootstrap.min.css') !!}

		<link rel="stylesheet" href="js/jquery-ui.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<style type="text/css">
				tr {
					width: 100%;
					display: inline-table;
				}
				#table-usado,#table-nuevo{
						height:200px;
				}
				#body-usado,#body-nuevo{
				overflow-y: scroll;
				height: 150px;
				width: 100%;
				position: absolute;
				}
		</style>
	</head>
	<body>
		<div id="url" hidden="true" >{{route("demoView")}}</div>
		<div style="background-color: white;">
			
			<div class="row">
				<div class="container-fluid">
					<div class="ui-widget">
						<div class="col-sm-offset-3 col-sm-6" style="padding-top:20px;">
							<input type="search" name="" id="tags" class="form-control"  placeholder="Buscar...">
						</div>
					</div>
					<!-- <form  class="ui-filterable">
									<input data-type="search" id="tags" placeholder="Buscar...">
					</form>
				<ul id="items" data-role="listview" data-filter="true" data-filter-reveal="true" data-input="#tags"></ul> -->
			</div>
		</div>
		<div class="row" style="padding-bottom:75px;padding-top:25px;">
			<div class="container-fluid">
				<div class="col-sm-2">
					<div class="form-horizontal" role="form">
						<div class="form-group">
							<div>
								<div  style="padding:10px">
									<select id="categoria"  class="form-control"  >
										<option value="">--Categoria--</option>
										
									</select>
								</div>
							</div>
							<div>
								<div style="padding:10px">
									<select id="marca" class="form-control"  >
										<option value="">--Marca--</option>
										<!-- <option value="">Iphone</option> -->
									</select>
								</div>
							</div>
							<div>
								<div style="padding:10px">
									<select id="modelos" class="form-control" >
										<option value="">--Modelos--</option>
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
								<!-- <img src="../img/iphone-5.jpg" class="img-responsive" alt="Image"> -->
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="col-xs-offset-1 col-xs-10">
							<table id="table-nuevo" class="table table-striped">
								<thead>
									<tr>
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
								<!-- <img src="../img/iphone-5.jpg" class="img-responsive" alt="Image"> -->
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="col-xs-offset-1 col-xs-10">
							<table id="table-usado" class="table table-striped">
								<thead>
									<tr>
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
		</div>
	</div>


	{!! HTML::script('js/jquery.min.js') !!}
	{!! HTML::script('js/jquery-ui.min.js') !!}
	{!! HTML::script('js/bootstrap.min.js') !!}
	
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
			Data=[];
			items=[];
			url=document.getElementById("url").innerHTML;
			console.log(url+"/getListCategory");
			$.get(url+"/getListCategory", function(data) {
				data.forEach(function(i){
					$("#categoria").append('<option value='+i["categoria"]+'>'+i["categoria"]+'</option>');
				});
			});

			$("#categoria").on("change",function(){
				
			});	

			$("#marca").on("click",function(){
			});	

			$("#modelos").on("click",function(){
			
			});

			$("#tags").autocomplete({
				source:items
			});

			$("#tags").on("keyup", function(){
				
			});

				
		})
	</script>

	
</body>
</html>