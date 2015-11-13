

$(function () { 
	$("#categoria").on("click",function(){
		$.get('http://localhost:8000/zonngo/data/items.json', function(data) {
			$(this).append('<option value=1>'+"Hola Mundo"+'</option>');
		});
	});

});