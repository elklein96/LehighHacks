<?php

try {
	$m = new Mongo();
	$db = $m->LehighHacks;
	$collection = $db->registrants;
	$id = uniqid();

	error_log("fire");

	if(isset($_POST['data']))
		addToMongo(array('data'=>$_POST['data']), $id);
	else
		error_log("No data received");

} catch(MongoConnectionException $e){
	echo "Error Cannot connect to MongoDB.";
}

function addToMongo($document, $id){
	global $collection;

	error_log($document);

	$idQuery = array('id' => $id);
	if($collection->find($idQuery)->count() == 0){
		error_log("Added data");
		$collection->insert($document);
	}
	else
		error_log("Data already exists");
}

?>
