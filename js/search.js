$(function(){
  $('.switch').bootstrapSwitch();

  var langdetail_var = ["langcode_iso", "langcode_wmf", "langname_eng", "langname_autonym", "langname_html", "macro_lang", "wmf_proj_status", "fallback_code", "narayam", "jquery_ime", "webfonts", "jquery_webfonts", "i18n_mw_core", "jquery_i18n", "jquery_uls", "translate", "dictionary", "spellchecker", "glossary" ,"f_or_i"];
  
  var langdetail = ["Language Code(ISO)", "Language Code(WMF)", "Language Name", "Language Name(Autonym)", "Language Code(HTML)", "Macro Language", "WMF Project Status", "Fallback code", "Narayam", "jquery.ime", "Webfonts", "jquery.webfonts", "i18n mw core", "jquery.i18n", "jquery.uls", "Translate", "Dictionary", "Spellchecker", "Glossary" ,"Feature/Incubator"];
  
  
  $("#input").typeahead({
    source : function(query,process){
     $.ajax({
      url : "lib/langsearchshow.php",
      type : "POST",
      data: "query=" + query ,
      dataType : "JSON",
      async : false,
      success : function(data){
               //console.log(data);
               process(data);
             },
             error : function(data){
              console.log(data);
            }
          })
   },
    
     updater:function(lang) { 
         $('#lang1,#lang2').show();
         //console.log(lang); 
         
         $("#title").slideUp('slow');
         
         $("#slideright").animate({
            marginLeft : '-600px',
        },'slow')
         
         $("#legend").hide();
         
         $("#slideleft").animate({
            marginRight : '-600px',
            marginTop : '-60px'
            
        },'slow')
         

         var add = "<td><div class='button-toolbar '><a class='btn edit dropdown-toggle' data-toggle='modal' data-placement='right' title='Edit' href='' data-dismiss='modal'><i class='icon-pencil' ></i></a></div></td>";
         
         $.ajax({
            url: "lib/langsearchajax.php",
            type : "POST",
            data: "query=" + lang,
            async : false,
            dataType : "JSON",
            success : function(data) { 
                
               if(("tr").length > 0 ){
                  $("tr").remove();
              }
              for (var i=0;i<6;i++){
                  $('#language1').append("<tr id='"+langdetail_var[i]+"'><td>" + langdetail[i] + "</td><td>" + data[i]+ "</td>"+add+"</tr>");

              }
              
              for (var i=6;i<data.length;i++){
                  $('#language2').append("<tr id='"+langdetail_var[i]+"'><td>" + langdetail[i] + "</td><td>" + data[i]+ "</td>"+add+"</tr>")
              }
              //console.log(data);
          },
          error: function(args) { console.log(args); }
      })
         $('.edit').tooltip();

				//event on clicking the button
             
             $('.edit').click(function(){
                $('#myModal').modal('show');
                $this = $(this);
    				//console.log($this);
    				$tr = $this.closest('tr');
    				//console.log($tr);
    				$td1 = $tr.find('td').first();
    				$td2 = $td1.next();
    				//console.log($td1);
    				$('#oldname').html("Current value of "+$td1.text() + " : <span style='color:red;'> <b>" + $td2.text()+ "</b></span>");
    				$('#newvalue').text('New value of ' + $td1.text());
    				$('#myModalLabel').text($td1.text());
    				$('#save').attr('id',$tr.attr('id'));

    			})
             

             $('#save').click(function(){
                $('#myModal').modal('hide');
                $this = $(this);
                var newid = $this.attr('id');
                var oldval = $td2.text();
                var newval = $('#changeval').val();
                $('#changeval').val(null);
                $td2.text(newval);
                //console.log(newval);
                $('#boxbutton').after("<div class='alert alert-success' align='center' id='successalert'> The value of " + $td1.text() + " is changed to " + newval + " from " + oldval +"</div>");
                $('#successalert').hide();
                $('#successalert').slideDown('slow').delay(3000).slideUp('slow');

            })

             return lang;
         }
         
     });
    
    $('.switch').on('switch-change', function (e, data) {
      switching(data);
    })
});





// This is function to implement switching functionalty
// input : 
// output : Change the class of output as well as value
// 
function switching(data){
  var $this = $(data.el);
  var value = data.value;
  var $valdiv = $this.parent().parent().siblings('.span3');
  var val = $valdiv.attr('value');
  if(value == false){
    //console.log(1);
    $valdiv.attr('value','no');
    $valdiv.children().removeClass('icon-ok').addClass('icon-remove');
    //console.log($valdiv);
  }
  else{
    //console.log(2);
    $valdiv.attr('value','yes');
    $valdiv.children().removeClass('icon-remove').addClass('icon-ok');
  }
}