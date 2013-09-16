$(function(){
	$('.example-twitter-oss .typeahead').typeahead({
		name: 'Language ISO list',
		prefetch: { 
			url : 'data/isodropdown.json',
			ttl : 2000
		},
		limit: 10
	});

	$('.typeahead').on('typeahead:autocompleted', function (e, datum) {
		flag = langCheck( datum.value );
		isoEngname( datum.value );
	});

	$('.typeahead').on('typeahead:selected', function (e, datum) {
		flag = langCheck( datum.value );
		isoEngname( datum.value );
	});
})

function langCheck(iso) {
	$.ajax({
		url: '/lib/isocheck.php',
		type: 'POST',
		dataType: 'json',
		data: {isoName : iso},
		success : function(data){
			console.log(data);
		}
		error : function(data){
			console.log(data);
		}
	})	
}

function isoEngname(iso) {
	console.log(iso);
	var engName = null;
	$.getJSON('data/isolist.json', function(json, textStatus) {
		console.log(json[iso]);
		engName = json[iso];
		$('#langname_eng').val(engName);
	});
}