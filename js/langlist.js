$(function(){
	$('#data').hide();
	$('#loader').show();
	$.ajax({
		url : 'lib/langlist.php',
		type : "POST",
		dataType : 'JSON',
		async : false,
		success : function(data){
			$('#data').show();
			$('#loader').hide();
			display_lang(data);
			$('#langcount').html('<h3 class="text-info">' + (data.length)+ ' Languages </h3>')
		},
		error : function(data){
			console.log(data);
		}
	})
})

function display_lang(data){
	if(("tr").length > 0 ){
    	$("tr").remove();
    }
    //console.log('1');
	$('table').append('<tr>');
		for(var i=0; i < data.length ; i++){
			var tr = $("table tr:last");
			if(tr.find('td').length == 3){
				$('table').append('<tr>');
				var tr = $("table tr:last");
			}
			$(tr).append(values(data[i]));
		} 
}

function values(data){
	var td = "<td><a href='language.php?" + data[3]+"'>" + 
			 "<div class='row-fluid'>"+
			 "<div class='span4'>"+
			 "<p>" + data[0] + "</p>"+
			 "<p class='muted'>" + data[1] + "</p>"+
			 "</div>"+
			 "<div class='span8'>"+
			 "<p class='text-error'><strong>" + data[2] + "</strong></p>"+
			 "<p class='text-info'>" + data[3] + "</p>"+
			 "</div></a>"+
			 "</td>" ;
	return td;
}