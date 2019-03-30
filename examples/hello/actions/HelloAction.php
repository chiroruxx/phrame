<?php
/*
 * The HelloAction class contains the business logic for a particular action.
 *
 * @author	Arnold Cano
 * @version	$Id: HelloAction.php,v 1.3 2002/11/11 20:18:04 arcano Exp $
 */
class HelloAction extends Action
{
	/**
	 * Perform business logic to say "Hello" to a person.
	 *
	 * @access	public
	 * @param	ActionMapping	$actionMapping
	 * @param	ActionForm		$actionForm
	 * @return	ActionForward
	 */
	function perform($actionMapping, $actionForm) {
		$person = new Person();
		$name = $actionForm->get('name');
		//get ActionForward depending on if errors were generated
		if ((!$person->setName($name)) || ($_SESSION[_ERRORS])) {
			$actionForward = $actionMapping->get('index');
		} else {
			$actionForward = $actionMapping->get('hello');
			//put Person in the session
			$_SESSION['person'] = $person;
		}
		return $actionForward;
	}
}
?>
