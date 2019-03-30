<?php
/*
 * This is the application error handler.
 *
 * @access	public
 * @param	string	$number
 * @param	string	$message
 * @param	string	$file
 * @param	string	$line
 * @param	string	$context
 */
function handleError($number, $message, $file, $line, $context)
{
/*
	switch ($number) {
		case E_USER_ERROR:
			break;
		case E_USER_WARNING:
			break;
		case E_USER_NOTICE:
			break;
	}
*/
	if (!$_SESSION[_ERRORS]) {
		$errors = new Stack();
		$_SESSION[_ERRORS] = $errors;
	}
	$errors = &$_SESSION[_ERRORS];
	$errors->push($message);
}
?>
