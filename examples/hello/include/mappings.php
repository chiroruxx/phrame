<?php
//build mapping information to pass into controller
$mappings = array(
	_ACTION_FORMS => array(
		'form' => array(
			_TYPE => 'HelloForm'
		)
	),
	_ACTION_MAPPINGS => array(
		'sayHello' => array(
			_TYPE => 'HelloAction',
			_NAME => 'form',
			_INPUT => 'index.php?view=views/index.xsl',
			_VALIDATE => 1,
			_ACTION_FORWARDS => array(
				'hello' => array(
					_PATH => 'index.php?view=views/hello.xsl',
					_REDIRECT => 0
				),
				'index' => array(
					_PATH => 'index.php?view=views/index.xsl',
					_REDIRECT => 0
				)
			)
		)
	)
);
?>
