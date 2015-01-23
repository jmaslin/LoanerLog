<?php
		
	$dbName = 'loanerdb';

	$m = new MongoClient(); // Connect
	$db = $m->selectDB($dbName);

	$collection = $db->assets;

	$document = array(
			'_id'		=> 'dell-laptop',
			'name'	=> 'Dell Latitude 7440',
			'type'	=> 'laptop',
			'image'	=> 'laptop.png',
			'items' => array(
				'id' => '12345'
			)
	);



	// $collection->insert(
	// 	array(
	// 		"_id"				=> "BGF5XY1",
	// 		"type_id"		=> "dell-laptop",
	// 		"add_date"	=> 1421741189,
	// 		"status"		=> "ok"
	// 	)
	// );

	$cursor = $collection->find(); // Find everything in collection

	foreach($cursor as $document) {
		echo $document['items'];
		if (isset($document['type']))
		echo $document['type'] . '<br>';
	}

?>

<!-- CurentUser obj vaue on each item? -->