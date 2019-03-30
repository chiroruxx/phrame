<?php
/*
 * This HelloForm class handles all form data.
 *
 * @author	Arnold Cano
 * @version	$Id: HelloForm.php,v 1.3 2002/11/11 20:18:05 arcano Exp $
 */
class HelloForm extends ActionForm
{
	/**
	 * Validate the form data (overriden from superclass).
	 *
	 * @access	public
	 * @return	boolean
	 */
	function validate()
	{
		$isValid = TRUE;
		if (!$this->get('name')) {
			trigger_error('Enter your name');
			$isValid = FALSE;
		}
		return $isValid;
	}
}
?>
