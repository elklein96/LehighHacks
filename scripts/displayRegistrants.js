var json = '';
var preview = false;
var currentRegistrant = 0;

$(document).ready(function () {
  $.ajax({
    url:    "http://108.24.150.90/LehighHacks/registrant_aggregator.php",
    type:   "POST",
    data:   {
        data:  "data"
    },
    success: function(data) {
      $('#loading').hide();
      
      if(data.indexOf("Error") > -1){
        $('#record-wrapper').append('<p class="text-danger message"><br><br><br>'+data.replace('Error', '')+'</p>');
      }
      else{
        console.log("success");
        json = $.parseJSON(data);
        for(var i=0; i<json.length; i++){
          console.log(json[i]);
          //$("#record-table").append('<div class="registrant" id="registrant'+i+'"><div class="data" id="data'+i+'"><h3 class="section-heading">'+json[i].firstName+' '+json[i].lastName+'</h3></div></div>');
          $("#record-table").append('<tr>'+'<th class="center">'+json[i].firstName+'</th><th class="center">'+json[i].lastName+'</th><th class="center">'+json[i].email+'</th><th class="center">'+json[i].phone+'</th></tr>');
        }
      }
    }
  });
});