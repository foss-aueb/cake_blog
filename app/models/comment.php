<?php

class Comment extends AppModel {
	var $name = 'Comment';
	
		var $validate = array(
			'body'  => array(
				'rule' => '/.+/', 
				'message' => 'Καλά τι τρέχει με σ\'ένα φίλε!'
			),
		);
}