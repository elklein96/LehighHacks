<?php

try {
	$m = new Mongo();
	$db = $m->LehighHacks;
	$collection = $db->registrants;

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
		error_log("Added data");
		$collection->insert($document);
	}
	else
		error_log("User already exists");
}

?>
