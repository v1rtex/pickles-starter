<?php

class json extends Module
{
	public function __default()
	{
		return array(
			'status' => 'success',
			'intro'  => 'Hi there! I\'m a PICKLES module that doesn\'t have a template.',
			'more'   => 'By default I\'m displayed as JSON.',
			'final'  => 'I come in super handy when it comes to making AJAX calls.',
			'ps'     => 'That "status" stuff up there is used by pickles.js to determine if a script was successful ;)',
		);
	}
}

?>
