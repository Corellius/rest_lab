<?php
 
Host: 52.0.190.75

$_SERVER['REQUEST_METHOD']

$_SERVER['REQUEST_URI']

	$resource = array_shift($paths)

	if($resource == 'corals') {
		$item = array_shift($paths);

		if (empty($item)) {
			$this->handle_base($method)l
		} else {
			$this->handle_item($method, $item);
		}

	switch($method) {
		case 'PUT':
			$this->create_item($item);
			break;
		
		case 'DELETE':
			$this->delete_item($item);
			break;
		
		case 'GET':
			$this->display_item($item);
			break;

		default:
			header('HTTP/1.1 405 Method Not Allowed');
			header('Allow: GET, PUT, DELETE');
			break;
		}


