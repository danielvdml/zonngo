jQuery(document).ready(function($) {
	urlIndex=$("#urlIndex").val();
	$("#tags").keyup(function(event) {
		keyword=$("#tags").val();
		if(keyword.length>3){
			$("#body-Medicamentos").html("<div class='col-xs-offset-4 col-xs-3'><img src='"+urlIndex.replace("/index.php","")+"/img/Loading.gif'></div>");
		}
		url=$("#urlMed").val();
		if(event.which==13){
			// $("#body-Medicamentos tr").remove();
			
			$.get(url+"/"+keyword, function(data) {	
				$("#body-Medicamentos").html("");
				data["Medicamentos"].forEach(function(i){
					$("#body-Medicamentos").append("<tr  style='cursor:pointer'><td class='col-xs-3'>"+i["Medicamento"]+"</td><td class='col-xs-3'>"+i["Marca"]+"</td><td class='col-xs-3'>"+i["Estab"]+"</td><td class='col-xs-3'>"+i["MontoEmpaque"]+"</td></tr>");
				});
				data["Ubicacion"].forEach(function(i){
					$("#SelectUbicacion").append("<option value='"+i["Ubicacion"]+"'>"+i["Ubicacion"]+"</option>")
				});
			});
		}
	});
});