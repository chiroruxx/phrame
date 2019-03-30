<?php
define('MAX', 20);
/*
 * A Person class represents an individual person.
 *
 * @author	Arnold Cano
 * @version	$Id: Person.php,v 1.3 2002/11/11 20:18:14 arcano Exp $
 */
class Person
{
	/**
	 * @var	string
	 */
	var $_name;
	
	/**
	 * Person constructor.
	 *
	 * @access	public
	 * @param	string	$name
	 */
	function Person($name = NULL)
	{
		$this->_name = $name;
	}
	/**
	 * Get the Person name.
	 *
	 * @access	public
	 * @return	string
	 */
	function getName()
	{
		return $this->_name;
	}
	/**
	 * Set the Person name.
	 *
	 * @access	public
	 * @param	string	$name
	 * @return	boolean
	 */
	function setName($name)
	{
		$isValid = TRUE;
		if (strlen($name) > MAX) {
			trigger_error('Name > '.MAX.' characters');
			$isValid = FALSE;
		} else {
			$this->_name = $name;
		}
		return $isValid;
	}
}
?>
