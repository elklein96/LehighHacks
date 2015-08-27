$(function() {

    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
        },
        submitSuccess: function($form, event) {
            var firstHackathon;   
            $("#Field6").is(':checked') ? firstHackathon = true : firstHackathon = false;
            var data = {"firstName": $('#Field1').val(), "lastName": $('#Field2').val(), "email": $('#Field3').val(), "school": $('#Field4').val(), "resume": $('#Field5').val(), "first": firstHackathon}

            $.ajax({
                url:    "./scripts/register.php",
                type:   "POST",
                data:   {
                    data: data
                },
                success: function(data) {
                    if(data.indexOf("user-exists" > -1)){
                        $('#success').append('<p class="lead">Hey, '+$('#Field1').val()+'! Looks like we already have that email registered!</p>').hide().fadeIn(750); 
                    }
                    else{
                        $('#success').append('<p class="lead">Thanks for registering, '+$('#Field1').val()+'!</p>').hide().fadeIn(750);
                        $('#submitButton').prop("disabled",true);
                    }
                },
                error: function(data) {
                    $('#success').append('<p class="lead">Sorry, '+$('#Field1').val()+', but it looks like we are having trouble right now. Try again later!</p>').hide().fadeIn(750);
                }
            });
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