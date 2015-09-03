<?php

require("/var/www/html/scripts/library/sendgrid-php.php");

try {
	$m = new Mongo();
	$db = $m->LehighHacks;
	$collection = $db->registrants;

	$sendgrid = new SendGrid('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');

	if(isset($_POST['data']))
		addToMongo($_POST['data']);
	else
		error_log("No data received");

} catch(MongoConnectionException $e){
	echo "Error Cannot connect to MongoDB.";
}

function addToMongo($document){
	global $collection;

	$email = $document['email'];

	$emailQuery = array('email' => $email);
	if($collection->find($emailQuery)->count() == 0){
		echo("added-user");
		$collection->insert($document);
		sendEmail($email);
	}
	else
		echo("user-exists");
}

function sendEmail($recipient){
	$email = new SendGrid\Email();
	$email
	    ->addTo($recipient)
	    ->setFrom('donotreply@lehighhacks.com')
	    ->setSubject('Thanks for registering!')
	    ->setHtml('<strong>Hello World!</strong>');

	$sendgrid->send($email);
}

?>
