<?php

class Post extends AppModel {
	var $name = 'Post';
	
	var $hasMany = array(
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'post_id'
		)
	);
	
	var $validate = array(
		'title' => array('rule' => '/.+/', 'message' => 'Καλά μαλάκας είσαι;'),
		'body'  => array('rule' => '/.+/', 'message' => 'Βάλε και τίποτα μέσα!'),
	);
	
}