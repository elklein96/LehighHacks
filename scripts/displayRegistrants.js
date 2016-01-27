var json = '';
var currentRecord = 0;

$(document).ready(function () {
  loadRecords();
});

$(document).on('click', '.record', function () {
  currentRecord = parseInt($(this).attr('id').replace('record', ''));

  $('#adminModal').modal('toggle');

  $("#firstname-label").val(json[currentRecord].firstName);
  $("#lastname-label").val(json[currentRecord].lastName);
  $("#email-label").val(json[currentRecord].email);
  $("#phone-label").val(json[currentRecord].phone);
  $("#suggestions-label").val(json[currentRecord].suggestions);
  $("#diet-label").val(json[currentRecord].dietary);
  $("#resume-frame").attr("src", json[currentRecord].resume);
});

$(document).on('click', '#resumeDownloadButton', function () {
  downloadURI(json[currentRecord].resume, json[currentRecord].firstName+"-"+json[currentRecord].lastName+"-Resume");
});

function downloadURI(uri, name) {
  var link = document.createElement("a");
  link.download = name;
  link.href = uri;
  link.click();
}

$(document).on('click', '.delete-record', function () {
  currentRecord = parseInt($(this).attr('id').replace('radio', ''));

  $(document).on('click', '.delete-button', function () {
    $.ajax({
      type:   "POST",
      url:    "http://108.24.150.90/LehighHacks/register.php",
      data:   {
          remove:  json[currentRecord].email
      },
      success: function(data) {
        loadRecords();
      }
    });
  });
});

function loadRecords(){
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
          $("#record-table").append('<tr class="record" id="record'+i+'">'+'<th class="center"><input type="radio" class="delete-record" id="radio'+i+'"></th><th class="center">'+json[i].firstName+'</th><th class="center">'+json[i].lastName+'</th><th class="center">'+json[i].email+'</th><th class="center">'+json[i].phone+'</th></tr>');
        }
      }
    }
  });
}
