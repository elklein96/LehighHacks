$(function() {

    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
        },
        submitSuccess: function($form, event) {
            var reader = new FileReader();
            var firstHackathon, resumeData;   
            $("#Field7").is(':checked') ? firstHackathon = true : firstHackathon = false;
            reader.readAsDataURL(($("#Field6"))[0].files[0]);

            reader.onload = loaded;

            function loaded(evt) {  
                var resumeData = evt.target.result;
                var data = {"firstName": $('#Field1').val(), "lastName": $('#Field2').val(), "email": $('#Field3').val(), "phone": $('#Field4').val().replace(/(-)/g, ""), "suggestions": $('#Field5').val(), "resume": resumeData, "dietary": $('#Field8').val(), "first": firstHackathon, "major": $('#Field9').val(), "referral": $('#Field10').val(), "checkedIn": "false"};
                $.ajax({
                    url:    "http://108.24.144.16/LehighHacks/register.php",
                    type:   "POST",
                    data:   {
                        data: data
                    },
                    success: function(data) {
                        $('#success').empty();
                        if(data.indexOf("user-exists") > -1){
                            $('#success').append('<p class="lead">Hey, '+$('#Field1').val()+'! Looks like we already have that email registered!</p>').hide().fadeIn(750); 
                        }
                        if(data.indexOf("added-user") > -1){
                            $('#success').append('<p class="lead">Thanks for registering, '+$('#Field1').val()+'!</p>').hide().fadeIn(750);
                            $('#submitButton').prop("disabled",true);
                        }
                    },
                    error: function(data) {
                        $('#success').append('<p class="lead">Sorry, '+$('#Field1').val()+', but it looks like we are having trouble right now. Try again later!</p>').hide().fadeIn(750);
                    }
                });
            }
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});

$('#name').focus(function() {
    $('#success').html('');
});