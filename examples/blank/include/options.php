<?php
//set options for the controller
$options = array(
	_CACHE => 0,
	//set to E_ALL to get controller errors (debug use only)
	_ERROR_REPORTING => E_USER_ERROR | E_USER_WARNING | E_USER_NOTICE,
	_ERROR_HANDLER => "handleError",
);
?>
