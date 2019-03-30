<?php
include('include/include.php');
session_start();
//add controller to session if not already cached
if (!$_SESSION[_CONTROLLER]) {
	$controller = new ActionController($options);
	$_SESSION[_CONTROLLER] = $controller;
}
//release control to controller for further processing
$controller = &$_SESSION[_CONTROLLER];
$controller->process($mappings, $_REQUEST);
?>
