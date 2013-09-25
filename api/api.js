/**
 * js file for API console
 * @author - Harsh Kothari (harshkothari410@gmail.com)
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * global $:false (for jshint)
 */
$(function(){
	$.ajax({
		url: 'php/langdetailapi.php',
		type: 'GETs',
		dataType: 'json',
		success : function(data){
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

		
		
		if($('#language').is( ":hidden" ) == true){
			tool_query = '';
			for(var i=0;i<tools.length ; i++){
				if(i==0){
					if(tools[i] == 'ULS Webfonts'){
						tools[i] = 'jquery_webfonts';
					}
					tool_query = tool_query + tools[i];
				}
				else{
					if(tools[i] == 'ULS Webfonts'){
						tools[i] = 'jquery_webfonts';
					}
					tool_query =  tool_query + '|' + tools[i];
				}
			}
			final_query = 'languageapi.php?query='+ query+"&tool="+tool_query +'&format='+ format;
		}
		else{
			final_query = 'languageapi.php?query='+ query+"&language="+language +'&format='+ format;
		}

		$('#query_preview').text('/'+final_query);


		var q = 
		["$.ajax({",
		"	url: http://192.252.213.68/lcmd/api/"+final_query+",",
		"	type: 'GET',",
		"	dataType: 'jsonp', //Use JSONP for cross domain data transfer",
		"})",
		".done(function(data) {",
		"	//do whatever you want to do with data",
		"})",
		".fail(function() {",
		"})",
		".always(function() {",
		"});"].join('\n');

		$('#example').text(q);


		$.ajax({
			url: final_query,
			type: 'GET',
			dataType: '',
		})
		.done(function(data) {
			$('#result_preview').text(data);
		})
		.fail(function() {
		})
		.always(function() {
		});
		
	});
})