/**
 * js file for language show
 * @author - Harsh Kothari (harshkothari410@gmail.com)
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * global $:false (for jshint)
 */
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
    /*
	$('table').append('<tr>');
		for(var i=0; i < data.length ; i++){
			var tr = $("table tr:last");
			if(tr.find('td').length == 3){
				$('table').append('<tr>');
				var tr = $("table tr:last");
			}
			$(tr).append(values(data[i]));
		} 
		*/
		var j = 0;
		$('#data').append('<div id="data1" class="row-fluid"  align="center">');
		for (var i = 0; i < data.length; i++) {
			
			if (j == 3){
				$('#data').append('<div id="data1" class="row-fluid"  align="center">');
				$('div#data1').last().append(valuePrint(data[i]));
				j = 0;
			}
			else{
				$('div#data1').last().append(valuePrint(data[i]));	
			}
			//$('#data').append(valuePrint(data[i]));
			j = j + 1;
		};
		

}

function valuePrint(data){
	var div = "<div class='span4 row-fluid well' id='boxed' align='center'>" + 
			 "<a id='"+data[1]+"' href='#' class='ind_lang'>" + 
			 "<div class='row-fluid'>"+
			 "<div class='span4'>"+
			 "<p>" + data[0] + "</p>"+
			 "<p class='muted'>" + data[1] + "</p>"+
			 "</div>"+
			 "<div class='span8'>"+
			 "<p class='text-error'><strong>" + data[2] + "</strong></p>"+
			 "<p class='text-info'>" + data[3] + "</p>"+
			 "</div></a>"+
			"</div>";
	return div;
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