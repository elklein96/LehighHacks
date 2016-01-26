var json = '';
var currentRecord = 0;

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
          $("#record-table").append('<tr class="record" id="record'+i+'">'+'<th class="center">'+json[i].firstName+'</th><th class="center">'+json[i].lastName+'</th><th class="center">'+json[i].email+'</th><th class="center">'+json[i].phone+'</th></tr>');
        }
      }
    }
  });
});

$(document).on('click', '.record', function () {
  currentRecord = parseInt($(this).attr('id').replace('record', ''));

  $('#adminModal').modal('toggle');

  $("#firstname-label").val(json[currentRecord].firstName);
  $("#lastname-label").val(json[currentRecord].lastName);
  $("#email-label").val(json[currentRecord].email);
  $("#phone-label").val(json[currentRecord].phone);
  $("#suggestions-label").val(json[currentRecord].suggestions);
  $("#diet-label").val(json[currentRecord].diet);
  $("#resume-frame").attr("src", json[currentRecord].resume);
});