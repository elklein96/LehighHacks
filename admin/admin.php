<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="LehighHacks">
    <meta name="author" content="">

    <title>LehighHacks Admin</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="../scripts/displayRegistrants.js"></script>

</head>

<body>
    <div class="container">
	    <div id="page-wrapper">
	        <br>
      		<div id="record-wrapper">
                <h3>LehighHacks Registrants</h3>
                <p><button type="button" class="btn btn-default" id="refresh-button" style:"display:inline;">Refresh</button>  <button type="button" class="btn btn-danger" id="delete-button" style:"display:inline;">Delete Selected</button></p>
	          	<table class="table table-bordered table-hover table-striped center">
                    <thead>
                        <tr>
                            <th class="center"></th>
                            <th class="center">First Name</th>
                            <th class="center">Last Name</th>
                            <th class="center">Email</th>
                            <th class="center">Phone Number</th>
                        </tr>
                    </thead>
                    <tbody id="record-table">
                    </tbody>
                </table>
                <div id="loading" class="center">
                    <p class="message" style="font-size:200%;"><br style="font-size:400%;"><i class="fa fa-cog fa-5x fa-spin"></i></p>
                </div>
        	</div>
	        <div id="footer"><br></div>
	    </div>
    </div>

    <div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="modal-title" class="modal-title">LehighHacks Hacker</h4>
                </div>
                <div class="modal-body">
                    <p>
                        <p class="data-field-name">First Name: </p><input readonly id="firstname-label" class="form-control col-lg-8 data-field" placeholder="First Name"></input>
                        <p class="data-field-name">Last Name: </p><input readonly id="lastname-label" class="form-control col-lg-8 data-field" placeholder="Last Name"></input>
                        <p class="data-field-name">Email: </p><input readonly id="email-label" class="form-control col-lg-8 data-field" placeholder="Email"></input>
                        <p class="data-field-name">Phone: </p><input readonly id="phone-label" class="form-control col-lg-8 data-field" placeholder="Phone"></input>
                        <p class="data-field-name">Suggestions: </p><input readonly id="suggestions-label" class="form-control col-lg-8 data-field" placeholder="Suggestions"></input>
                        <p class="data-field-name">Dietary Restrictions: </p><input readonly id="diet-label" class="form-control col-lg-8 data-field" placeholder="Dietary Restrictions"></input>
                        <p class="data-field-name">Resume: </p><iframe src="" id="resume-frame" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <button id="resumeDownloadButton" type="button" class="btn btn-default" style="display:inline">Download Resume</button>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
