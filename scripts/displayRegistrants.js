var json = '';
var preview = false;
var currentMovie = 0;

$(document).ready(function () {
  $.ajax({
    url:    "http://108.24.150.90/LehighHacks/img_aggregator.php",
    type:   "POST",
    data:   {
        data:  "data"
    },
    success: function(data) {
      $('#loading').hide();
      
      if(data.indexOf("Error") > -1){
        $('#registrant-wrapper').append('<p class="text-danger message"><br><br><br>'+data.replace('Error', '')+'</p>');
      }
      else{
        console.log("success");
        json = $.parseJSON(data);
        for(var i=0; i<json.length; i++){
          console.log(json[i]);
          $("#registrant-wrapper").append('<div class="pic" id="pic'+i+'"><img class="data" id="data'+i+'" src="'+json[i].pic+'"></div>');
        }
      }
    }
  });
});

$(document).on('click', '.registrant', function () {
  var start = 0;
  var end = 0;
  currentRegistrant = parseInt($(this).attr('id').replace('registrant', ''));

  $( '.registrant' ).removeClass('selected');

  $( '.registrant' ).each(function( index ) {
    if($('#registrant'+(index+1)).length){
      if( $('#registrant'+index).offset().top != $('#registrant'+(index+1)).offset().top ){
        start = end;
        end = index+1;
        $( '.registrant' ).slice(start, index+1).wrapAll("<div class='row-wrapper' style='display:block;overflow:hidden;'></div>");
      }
    }
  });
  $( '.registrant' ).slice(end).wrapAll("<div class='row-wrapper' style='display:block;overflow:hidden;'></div>");

  if(!preview){
    $(this).addClass('selected');
    $(this).parent().after("<div id='preview'><div class='poster-container' style='padding-top:1.5%;'><img class='poster-big' src='"+json[currentRegistrant].registrant+"'></div></div>");
    $('#preview').hide();

    $( "#preview" ).animate({
        down: "-=50",
        height: "toggle"
    }, {duration: 750, queue: false,complete: function() {}
    });
    preview = true;
  }
  else{
    $( "#preview" ).animate({
        up: "+=75",
        height: "toggle"
    }, {duration: 500, queue: false,complete: function() {$('#preview').remove(); $( '.registrant' ).unwrap();}
    });
    preview = false;
  }

});