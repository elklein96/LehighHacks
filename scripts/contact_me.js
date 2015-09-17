$(function() {

    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
        },
        submitSuccess: function($form, event) {
            var reader = new FileReader();
            var firstHackathon;   
            $("#Field7").is(':checked') ? firstHackathon = true : firstHackathon = false;
            console.log(reader.readAsArrayBuffer($('#Field6').get(0).files[0]));
            var data = {"firstName": $('#Field1').val(), "lastName": $('#Field2').val(), "email": $('#Field3').val(), "phone": $('#Field4').val(), "school": $('#Field5').val(), "resume": $('#Field6').val(), "first": firstHackathon}

            $.ajax({
                url:    "./scripts/register.php",
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