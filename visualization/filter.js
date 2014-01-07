$(function() {
	$(':checkbox').change(function(){
		$('#data').hide();
		$('#loader').show();
		$this = $(this);
		var parameter = $this.attr('id');
		if(this.checked){
			
			filterdata($this.val());
			//langCount(data);

			filtershow($this.attr('id'),$this.closest('label').text());
			filterLabel();
			$(':checkbox').each(function(){
				if($(this).attr('id') != parameter)
					$(this).val($(this).val() + ' ' + parameter);
			})

			$(':checkbox').each(function(){
				if($(this).attr('id') == parameter)
					$(this).prop('checked', true);
			})
		}
		else{
			var q = $this.val().replace($this.attr('id'),'');
			if(q[0] == ' '){
				q = $this.val().replace($this.attr('id') + ' ','');
			}

			filterdata(q);
			//langCount(data);
			
			$(':checkbox').each(function(){
				if($(this).attr('id') != parameter)
					$(this).val($(this).val().replace(' '+parameter,''));
			})

			$(':checkbox').each(function(){
				if($(this).attr('id') == parameter)
					$(this).prop('checked', false);
			})

			$('#filtershow').find('#' + parameter).parent().remove();
			filterLabel();
		}
	});

	//For remove the filter binding click event
	$('#filtershow').on('click','.closeFilter',function(){
		$('#data').hide();
		$('#loader').show();
		$this = $(this);
		var parameter = $this.attr('id');
		//uncheck the checkbox
		$(':checkbox').each(function(){
			if($(this).attr('id') == parameter){
				$(this).prop('checked', false);	
				var q = $(this).val().replace(parameter,'');
				if(q[0] == ' '){
					q = $(this).val().replace(parameter + ' ','');
				}
				filterdata(q);
				//langCount(data);
			}
			else
				$(this).val($(this).val().replace(' '+parameter,''));		
		})

		$this.parent().fadeIn().remove();
		filterLabel();
	})
})

//AJAX call for data fetching
function filterdata(value){
	$.ajax({
		url : '../lib/filter.php',
		dataType : 'JSON',
		data : 'query=' + value,
		type : 'POST',
		async : 'false',
		success : function(data){
			$('#data').show();
			$('#loader').hide();
			//langCount(data);
			var a = data.length;
			var b = 462 - a;
			tests({'Yes' : a,'No':b});
		},
		error : function(data){
			$('#langcount').html('<h3 class="text-info">' + (data.length)+ ' Languages </h3>');
			//display_lang(data);
		}
	})
}

//Filter show as a tab
function filtershow(id,text){
	var filter = '<div class="alert fade in span3">' +
			'<button type="button" class="close closeFilter" data-dismiss="alert" id = "'+ id+'" >&times;</button> ' +
			'<strong>'+ text +'</strong>' +
			'</div>';
	$('#filtershow').append(filter);
}

//Filter label hide - show
function filterLabel(){
	if($('#filtershow > div').length)
		$('#filterLabel').show();
	else
		$('#filterLabel').hide();
}

//Showing number of language, display_lang function call, label show
function langCount(data){
	$('#langlist > div').remove();
		if(data != null){
			display_lang(data);
			$('#langcount').html('<h3 class="text-info">' + (data.length)+ ' Languages </h3>');
		}
		else{
			$('#langcount').html('<h3 class="text-info">' + '0' + ' Languages </h3>');
			var filter = '<div class="alert alert-error">' +
				'<strong>Oooops ! No Language found</strong>' +
				'</div>';
			$('#langlist').remove('tr').html(filter); //Insert div of no language found
		}
}
