$(function(){
	$.ajax({
		url: 'php/langdetailapi.php',
		type: 'GETs',
		dataType: 'json',
		success : function(data){
			//console.log(data[2]['langname_eng']);
			for (var i = 0; i < data.length; i++) {
				$('#languages').append('<option>' + data[i]['langname_eng'] + '</option>');
			};
		},
		error: function(data){

		}
	})
	
	

	$('#tool,#language,#req_button').hide();
	$( "#query" ).change(function() {
		//alert($('#query').val());
		$('#tool,#language').hide();
		$('#query_preview').text();
		var query = $('#query').val();
		$('#'+query).show();
		$('#req_button').show();
	});


	//example : languageapi.php?query=language&language=Gujarati&format=json
	$('#req_button').click(function(event) {
		var query = $('#query').val();
		var format = $('#format').val();
		var language = $('#languages').val();
		var tools = $('#tools').val();
		

		var querystart = '/languageapi.php?query=';
		var and = '&';

		
		
		if($('#language').attr('style') == 'display: none; '){
			tool_query = '';
			for(var i=0;i<tools.length ; i++){
				if(i==0){
					tool_query = tool_query + tools[i];
				}
				else{
					tool_query =  tool_query + '|' + tools[i];
				}
			}
			final_query = 'languageapi.php?query='+ query+"&tool="+tool_query +'&format='+ format;
		}
		else{
			final_query = 'languageapi.php?query='+ query+"&language="+language +'&format='+ format;
		}

		$('#query_preview').text('/'+final_query);


		$.ajax({
			url: final_query,
			type: 'GET',
			dataType: '',
		})
		.done(function(data) {
			console.log("success");
			$('#result_preview').text(data);
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});
})