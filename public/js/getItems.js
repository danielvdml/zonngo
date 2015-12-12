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
		var S="";
		$(document).ready(function(){
			
			url=$("#urlIndex").val();
			Data=[];
			items=[];
			categoria="";
			marca="";
			$.get(url+'/getList_', function(data) {
				Data=data;
				
				// for(i  in data["Modelos"]){
				// 	items.push(i["Marca"]+" "+i["Modelo"]);
				// }
				data["Modelos"].forEach(function(i){
					items.push(i["Marca"]+" "+i["Modelo"]);
				});	

				$("#categoria").append('<option value="--Categoria--">--Categoria--</option>');			
				data["Categorias"].forEach(function(i){
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
				$(".Principal").hide();
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

					dist_nuevo=[];
					cant_nuevo=[];
					dist_usado=[];
					cant_usado=[];
					index=0;

					data["productos"].forEach(function(i){
						$("#body-"+i["Condicion"]).append("<tr class='"+i["Origen"]+"'><td><img src='http://"+window.location.host+S+"/img/"+i["Origen"]+".png' height='30px'></td><td><a target='_blank' href='"+i["Link"]+"''>"+i["Titulo"]+"</a></td><td>"+i["Precio"]+"</td></tr>");
						// $("#body-"+i["Condicion"]).append("<tr><td><img src='http://"+window.location.host+"/zonngo/public/img/"+i["Origen"]+".png' height='30px'></td><td><a target='_blank' href='"+i["Link"]+"''>"+i["Titulo"]+"</a></td><td>"+i["Precio"]+"</td></tr>");
						if(i["Condicion"]=="nuevo"){
							if(HeightNuevo<250){
								nuevo=nuevo+1;
								HeightNuevo=nuevo*80;
							}else{
								HeightNuevo=250;
							}
							$("#body-nuevo").css({
								"height": HeightNuevo.toString()+"px"
							});
							$("#body-nuevo").css({
								"height": (HeightNuevo+100).toString()+"px"
							});

							////inicio indexado
							
							val=parseInt(i["Precio"]);
							re=val%100;
							Q=parseInt(val/100);
							
							if(val>=((Q*100)+75) && val<=((Q+1)*100+25)){
								index=parseInt((val/100)+1)*100;
							}else if(val>=((Q*100)+25) && val<=((Q*100)+75)){
								index=parseInt(val/100)*100+50;
							}

							if(dist_nuevo.indexOf(index)>=0){
								cant_nuevo[dist_nuevo.indexOf(index)]=cant_nuevo[dist_nuevo.indexOf(index)]+1;
							}else{
								cant_nuevo.push(1);
								dist_nuevo.push(index);
							}
							
							/////fin indexado							
						}
						if(i["Condicion"]=="usado"){
							if(HeightUsado<250){
								usado=usado+1;
								HeightUsado=usado*80;
							}else{
								HeightUsado=250;
							}
							$("#body-usado").css({
								"height": HeightUsado.toString()+"px"
							});
							$("#body-usado").css({
								"height": (HeightUsado+100).toString()+"px"
							});
							////inicio indexado
							
							val=parseInt(i["Precio"]);
							re=val%100;
							Q=parseInt(val/100);
							
							if(val>=((Q*100)+75) && val<=((Q+1)*100+25)){
								index=parseInt((val/100)+1)*100;
							}else if(val>=((Q*100)+25) && val<=((Q*100)+75)){
								index=parseInt(val/100)*100+50;
							}
							
							if(dist_usado.indexOf(index)>=0){
								cant_usado[dist_usado.indexOf(index)]=cant_usado[dist_usado.indexOf(index)]+1;
							}else{
								cant_usado.push(1);
								dist_usado.push(index);
							}
							
							/////fin indexado
						}
						
					});
					
					var Nuevo={"dist":dist_nuevo,"val":cant_nuevo};
					var Usado={"dist":dist_usado,"val":cant_usado};
					console.log(Nuevo);
					console.log(Usado);
					grafico(data["estadistica"][0]["Modelo"],Nuevo,Usado);
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
				$(".Principal").hide();
				modelo=$("#modelos").val().replace(/-/g," ");
				$.get(url+'/getListItems/'+categoria+"/"+marca+"/"+modelo, function(data) {

					$("#CheckTiendas li").remove();

					data["Tiendas"].forEach(function(i){
						$("#CheckTiendas").append('<li class="checkbox"><label><input type="checkbox" class="prueba" checked value="'+i["Origen"]+'">'+"<img height='30px' src='http://"+window.location.host+S+"/img/"+i["Origen"]+".png'></label></li>");
					});
					
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

					dist_nuevo=[];
					cant_nuevo=[];
					dist_usado=[];
					cant_usado=[];
					index=0;
					data["productos"].forEach(function(i){

						$("#body-"+i["Condicion"]).append("<tr class='"+i["Origen"]+"'><td><img src='http://"+window.location.host+S+"/img/"+i["Origen"]+".png' height='30px'></td><td><a target='_blank' href='"+i["Link"]+"''>"+i["Titulo"]+"</a></td><td>"+i["Precio"]+"</td></tr>");
						if(i["Condicion"]=="nuevo"){
							if(HeightNuevo<250){
								nuevo=nuevo+1;
								HeightNuevo=nuevo*80;
							}else{
								HeightNuevo=250;
							}
							$("#body-nuevo").css({
								"height": HeightNuevo.toString()+"px"
							});
							$("#body-nuevo").css({
								"height": (HeightNuevo+75).toString()+"px"
							});
							////inicio indexado
							
							val=parseInt(i["Precio"]);
							re=val%100;
							Q=parseInt(val/100);
							
							if(val>=((Q*100)+75) && val<=((Q+1)*100+25)){
								index=parseInt((val/100)+1)*100;
							}else if(val>=((Q*100)+25) && val<=((Q*100)+75)){
								index=parseInt(val/100)*100+50;
							}

							if(dist_nuevo.indexOf(index)>=0){
								cant_nuevo[dist_nuevo.indexOf(index)]=cant_nuevo[dist_nuevo.indexOf(index)]+1;
							}else{
								cant_nuevo.push(1);
								dist_nuevo.push(index);
							}
							
							/////fin indexado
						}
						if(i["Condicion"]=="usado"){
							if(HeightUsado<250){
								usado=usado+1;
								HeightUsado=usado*80;
							}else{
								HeightUsado=250;
							}
							$("#body-usado").css({
								"height": HeightUsado.toString()+"px"
							});
							$("#body-usado").css({
								"height": (HeightUsado+75).toString()+"px"
							});
							////inicio indexado
							
							val=parseInt(i["Precio"]);
							re=val%100;
							Q=parseInt(val/100);
							
							if(val>=((Q*100)+75) && val<=((Q+1)*100+25)){
								index=parseInt((val/100)+1)*100;
							}else if(val>=((Q*100)+25) && val<=((Q*100)+75)){
								index=parseInt(val/100)*100+50;
							}
							
							if(dist_usado.indexOf(index)>=0){
								cant_usado[dist_usado.indexOf(index)]=cant_usado[dist_usado.indexOf(index)]+1;
							}else{
								cant_usado.push(1);
								dist_usado.push(index);
							}
							
							/////fin indexado
						}
						
					});
					var Nuevo={"dist":dist_nuevo,"val":cant_nuevo};
					var Usado={"dist":dist_usado,"val":cant_usado};
					console.log(Nuevo);
					console.log(Usado);
					grafico(data["estadistica"][0]["Modelo"],Nuevo,Usado);
					
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
			$("#tags").on("keyup", function(event){
				if(event.which==13){
					$("#panel-items").css({
						"display": 'block'
					});
					search_();
				}
			});	
			$("#search").on('click', function() {
				search_();
			});
			$('.checkbox').on('click',  function() {
				// console.log("HOlaMund");
				var Tienda=$(this).find('input');
				for (var i = 0; i < Tienda.length; i++) {
					if(Tienda[i].checked){
						$("tr."+Tienda[i].value).each(function(index, el) {
							$(this).show();
						});
					}else{
						$("tr."+Tienda[i].value).each(function(index, el) {
							$(this).hide();
						});
					}
				};
			});


			function search_(){
				$(".principal").hide();
				$keyword=$("#tags").val();
				$('#categoria').val("--Categoria--");
				$('#marca').val("--Marca--");
				$("#modelos").val("--Modelo--");
						
				$.get(url+'/getItems/'+$keyword, function(data) {
					$("#CheckTiendas li").remove();
					data["Tiendas"].forEach(function(i){
						$("#CheckTiendas").append('<li class="checkbox"><label><input type="checkbox" class="prueba" checked value="'+i["origen"]+'">'+"<img height='30px' src='http://"+window.location.host+S+"/img/"+i["origen"]+".png'></label></li>");
					});
					
					$("#body-usado tr").remove();
					$("#body-nuevo tr").remove();
					$("#body-usado h2").remove();
					$("#body-nuevo h2").remove();
					nuevo=0;
					usado=0;
					HeightNuevo=0;
					HeightUsado=0;
					data["productos"].orderByNumber("Precio",1);
					
					dist_nuevo=[];
					cant_nuevo=[];
					dist_usado=[];
					cant_usado=[];
					index=0;
					data["productos"].forEach(function(i){
						$("#body-"+i["Condicion"]).append("<tr class='"+i["Origen"]+"'><td><img src='http://"+window.location.host+S+"/img/"+i["Origen"]+".png' height='30px'></td><td><a target='_blank' href='"+i["Link"]+"''>"+i["Titulo"]+"</a></td><td>"+i["Precio"]+"</td></tr>");
						
						if(i["Condicion"]=="nuevo"){
							if(HeightNuevo<250){
								nuevo=nuevo+1;
								HeightNuevo=nuevo*80;
							}else{
								HeightNuevo=250;
							}
							$("#body-nuevo").css({
								"height": HeightNuevo.toString()+"px"
							});
							// $("#body-nuevo").css({
							// 	"height": (HeightNuevo+75).toString()+"px"
							// });
							$("#table-nuevo").css({
								"height": (HeightNuevo+75).toString()+"px"
							});
							////inicio indexado
							
							val=parseInt(i["Precio"]);
							re=val%100;
							Q=parseInt(val/100);
							
							if(val>=((Q*100)+75) && val<=((Q+1)*100+25)){
								index=parseInt((val/100)+1)*100;
							}else if(val>=((Q*100)+25) && val<=((Q*100)+75)){
								index=parseInt(val/100)*100+50;
							}

							if(dist_nuevo.indexOf(index)>=0){
								cant_nuevo[dist_nuevo.indexOf(index)]=cant_nuevo[dist_nuevo.indexOf(index)]+1;
							}else{
								cant_nuevo.push(1);
								dist_nuevo.push(index);
							}
							
							/////fin indexado
						}
						if(i["Condicion"]=="usado"){
							if(HeightUsado<250){
								usado=usado+1;
								HeightUsado=usado*80;
							}else{
								HeightUsado=250;
							}
							$("#body-usado").css({
								"height": HeightUsado.toString()+"px"
							});
							// $("#body-usado").css({
							// 	"height": (HeightUsado+75).toString()+"px"
							// });
							$("#table-usado").css({
								"height": (HeightUsado+75).toString()+"px"
							});
							////inicio indexado
							
							val=parseInt(i["Precio"]);
							re=val%100;
							Q=parseInt(val/100);
							
							if(val>=((Q*100)+75) && val<=((Q+1)*100+25)){
								index=parseInt((val/100)+1)*100;
							}else if(val>=((Q*100)+25) && val<=((Q*100)+75)){
								index=parseInt(val/100)*100+50;
							}
							
							if(dist_usado.indexOf(index)>=0){
								cant_usado[dist_usado.indexOf(index)]=cant_usado[dist_usado.indexOf(index)]+1;
							}else{
								cant_usado.push(1);
								dist_usado.push(index);
							}
							
							/////fin indexado
						}
						
					});
					var Nuevo={"dist":dist_nuevo,"val":cant_nuevo};
					var Usado={"dist":dist_usado,"val":cant_usado};
					console.log(Nuevo);
					console.log(Usado);
					grafico(data["estadistica"][0]["Modelo"],Nuevo,Usado);

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
			}		
			function grafico(Equipo,Nuevos,Usados){
				// Nuevos={"dist":[800,900,1000,1100,1200],"val":[10,15,25,23,16]}
				$(function () {
				    $('#grafico-nuevo').highcharts({
				        chart: {
				            zoomType: 'xy'
				        },
				        title: {
				            text: 'Distribución de precios del '+Equipo+' Nuevos en el Mercado'
				        },
				        subtitle: {
				            text: 'Nuevos'
				        },
				        xAxis: [{
				            categories: Nuevos["dist"],
				            crosshair: true
				        }],
				        yAxis: [{ // Primary yAxis
				            labels: {
				                format: '{value}',
				                style: {
				                    color: Highcharts.getOptions().colors[1]
				                }
				            },
				            title: {
				                text: 'Cantidades',
				                style: {
				                    color: Highcharts.getOptions().colors[1]
				                }
				            }
				        }],
				        tooltip: {
				            shared: true
				        },
				        legend: {
				            layout: 'vertical',
				            align: 'left',
				            x: 0,
				            verticalAlign: 'top',
				            y: 100,
				            floating: true,
				            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
				        },
				        series: [{
				            name: 'Cantidades por intervalo de precio',
				            type: 'column',
				            color:"#FF7500",
				            data: Nuevos["val"],
				            tooltip: {
				                valueSuffix: ''
				            }
				        }]
				    });
					$('#grafico-usado').highcharts({
				        chart: {
				            zoomType: 'xy'
				        },
				        title: {
				            text: 'Distribución de precios del '+Equipo+' Usados en el Mercado'
				        },
				        subtitle: {
				            text: 'Usados'
				        },
				        xAxis: [{
				            categories: Usados["dist"],
				            crosshair: true
				        }],
				        yAxis: [{ // Primary yAxis
				            labels: {
				                format: '{value}',
				                style: {
				                    color: Highcharts.getOptions().colors[1]
				                }
				            },
				            title: {
				                text: 'Cantidades',
				                style: {
				                    color: Highcharts.getOptions().colors[1]
				                }
				            },
				        }],
				        tooltip: {
				            shared: true
				        },
				        legend: {
				            layout: 'vertical',
				            align: 'left',
				            x: 0,
				            verticalAlign: 'top',
				            y: 100,
				            floating: true,
				            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
				        },
				        series: [{
				            name: 'Cantidades por intervalo de precio',
				            type: 'column',
				            color:"#f5af02",
				            data: Usados["val"],
				            tooltip: {
				                valueSuffix: ''
				            }
				        }]
				    });
				});
			}										
		})
