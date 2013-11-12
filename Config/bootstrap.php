<?php

	Configure::write('predictionIO', array(
		'appkey' => 'your-key',
		'host' => 'localhost:8000',
		'userModel' => 'User',
		'engine' => ''
	));

	$files = array(
		App::pluginPath('PredictionIO') . 'vendor' . DS . 'autoload.php',
		APP . 'Vendor' . DS . 'autoload.php',
		APP . 'vendor' . DS . 'autoload.php',
	);

	foreach ($files as $file) {
		if (file_exists($file)) {
			require_once $file;
			break;
		}
	}
