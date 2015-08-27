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
                    $('#success').append('<p class="lead">Thanks for registering, '+$('#Field1').val()+'!</p>').hide().fadeIn(750);
                    $('#submitButton').prop("disabled",true);
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