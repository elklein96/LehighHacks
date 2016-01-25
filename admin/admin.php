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
                            <th class="center"><b>First Name</b></th>
                            <th class="center"><b>Last Name</b></th>
                            <th class="center"><b>Email</b></th>
                            <th class="center"><b>Phone Number</b></th>
                        </tr>
                    </thead>
                    <tbody id="record-table">
                    </tbody>
                </table>
        	</div>
	        <div id="footer"><br></div>
	    </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../scripts/displayRegistrants.js"></script>

</body>

</html>
