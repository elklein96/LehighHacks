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

</head>

<body>
    <div class="container">
	    <div id="page-wrapper">
	        <br>
      		<div id="record-wrapper">
	        	<div id="loading">
	        		<p class="message" style="font-size:200%;"><br style="font-size:400%;"><i class="fa fa-cog fa-5x fa-spin"></i></p>
	          	</div>
	          	<table class="table table-bordered table-hover table-striped center">
                    <thead>
                        <tr>
                            <th class="center">First Name</th>
                            <th class="center">Last Name</th>
                            <th class="center">Email</th>
                            <th class="center">Phone Number</th>
                        </tr>
                    </thead>
                    <tbody id="record-table">
                    </tbody>
                </table>
        	</div>
	        <div id="footer"><br></div>
	    </div>
    </div>

    <div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="modal-title" class="modal-title">Edit Media</h4>
                </div>
                <div class="modal-body">
                    <p>
                        <p class="data-field-name">First Name: </p><textarea readonly id="firstname-label" class="form-control col-lg-8 data-field" placeholder="Title">
                        <p class="data-field-name">Last Name: </p><textarea readonly id="lastname-label" class="form-control col-lg-8 data-field" placeholder="Director">
                        <p class="data-field-name">Email: </p><textarea readonly id="email-label" class="form-control col-lg-8 data-field" placeholder="Year">
                        <p class="data-field-name">Phone: </p><textarea readonly id="phone-label" class="form-control col-lg-8 data-field" placeholder="Genre">
                        <p class="data-field-name">Suggestions: </p><textarea readonly id="suggestions-label" class="form-control col-lg-8 data-field" placeholder="Enter URL to new poster">
                        <p class="data-field-name">Dietary Restrictions: </p><textarea readonly id="diet-label" class="form-control col-lg-8 data-field" placeholder="Plot">
                    </p>
                    <button id='refresh-media-button' type='button' class='btn btn-warning' style='display:inline;'>Refresh Media</button>
                    <button id='delete-button' type='button' class='btn btn-danger' style='display:inline;'>Delete Media</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id="admin-save-button" type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../scripts/displayRegistrants.js"></script>

</body>

</html>
