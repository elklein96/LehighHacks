<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="LehighHacks">
    <meta name="author" content="">

    <title>LehighHacks</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="static-background">
        <section id="register">
            <div class="content-section-a">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2>Register</h2>
                            <hr class="star-primary">
                        </div>
                    </div>
                    <div class="row">
                        <form id="form1" name="form1" class="form-horizontal" accept-charset="UTF-8" action="javascript:void(0);" enctype="multipart/form-data">

                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default animated fadeInUp">
                                    <div class="panel-body">

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="Field2">Your Name</label>
                                            <div class="col-sm-4">
                                                <input id="Field1" name="Field1" type="text" class="form-control" placeholder="First name" value="" size="8" tabindex="1" required="" required data-validation-required-message="What's your name?">
                                            </div>
                                            <div class="col-sm-5">
                                                <input id="Field2" name="Field2" type="text" class="form-control" placeholder="Last name" value="" size="14" tabindex="2" required="" required data-validation-required-message="What's your name?">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="Field4">Your Email</label>
                                            <div class="col-sm-9">
                                                <input id="Field3" name="Field3" type="email" spellcheck="false" class="form-control" placeholder="john.doe@lehigh.edu" value="" maxlength="255" tabindex="3" required="" required data-validation-required-message="What's your email?">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="Field4">Phone Number</label>
                                            <div class="col-sm-9">
                                                <input id="Field4" name="Field4" type="text" class="form-control" placeholder="555-123-4567" value="" tabindex="4" required="" required data-validation-required-message="What's your phone number?">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="Field4">Major</label>
                                            <div class="col-sm-9">
                                                <input id="Field9" name="Field9" type="text" class="form-control" placeholder="Computer Engineering" value="" tabindex="5" required="" required data-validation-required-message="What's your major?">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="Field4">Dietary Restrictions</label>
                                            <div class="col-sm-9">
                                                <input id="Field8" name="Field8" type="text" class="form-control" placeholder="Vegetarian, Kosher, N/A, etc..." value="" tabindex="7" required="" required data-validation-required-message="Do you have food restrictions?">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="Field4">Goals</label>
                                            <div class="col-sm-9">
                                                <textarea id="Field5" name="Field5" type="text" class="form-control" placeholder="I want to explore IoT and hardware hacks" value="" size="14" tabindex="8" rows="3" required="" required data-validation-required-message="What do you want to gain from this event?"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="Field5">First Hackathon?</label>
                                            <div class="col-sm-9">
                                                <input id="Field7" name="Field7" type="checkbox" tabindex="10" value="true">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 text-center form-buttons">
                                <button id="submitButton" type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>

                          <div style="display:none;">
                            <label for="comment">Do Not Fill This Out</label>
                            <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
                            <input type="hidden" id="idstamp" name="idstamp" value="+gixPvNWHIDRPC8DBxImXpJzbDl+8mIrJgFKaCQ3gAM=">
                          </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                        <br>
                            <div id="success"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/scripts/bootstrap.min.js"></script>
    <script src="/scripts/contact_me.js"></script>
    <script src="/scripts/jqBootstrapValidation.min.js"></script>
    <script src="/scripts/main.min.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-54842516-3', 'auto');
        ga('send', 'pageview');
    </script>

</body>

</html>
