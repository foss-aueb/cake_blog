<?php

class PostsController extends AppController {

	var $name = 'Posts';
	var $components =  array('Session');
	
	function beforeFilter() {
		parent:beforeFilter();
		$this->set('some_var', 'contents of some var');
	}
	
	function index() {
		if (isset($this->params['requested'])) {
			/** set vars for Path Element **/
			$this->set('some_var', 'Data from the controller');
		} else {
			$this->set('posts', $this->Post->find('all',
				array(
					'order' => 'Post.created DESC'
					)
				)
			);
		}
	}
	
	function view($id) {					
		
		if (! empty($this->data)) {
			$this->Post->id = $this->data['Comment']['post_id'];
			$this->Post->Comment->post_id = $this->data['Comment']['post_id'];
			if ($this->Post->Comment->save($this->data)) {
				$this->Session->setFlash('Comment added.');
				$this->redirect(array('controller' => 'posts', 'action' =>'view' , $this->data['Comment']['post_id']));
			}
		} 
		
		$this->Post->id = $id;

		/** read uses the conditions from the object it refers to **/
		$rec = $this->Post->read();
		/** while find operation needs the param array **/
		$coms = $this->Post->Comment->find('all',
			array(
				'conditions' => array('Comment.post_id' => $id),
				'order' => 'Comment.created DESC'
			)
		);
		$this->set('post', $rec);
		$this->set('count_comments', count($rec['Comment']));
		$this->set('referer', $this->referer());
		$this->set('comments', $coms);
		
	}
	
	function add() {
		if (!empty($this->data)) {
			if ($this->Post->save($this->data)) {
				$this->Session->setFlash('Post saved.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	
	function edit($id) {
		$this->Post->id = $id;
		if (empty($this->data)) {
			$this->data = $this->Post->read();
		} else {
			if ($this->Post->save($this->data)) {
				$this->Session->setFlash('Post updated.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	
	function delete($id) {
		/** delete uses the cascade defined inside db schema **/
		$this->Post->id = $id;
		$this->Post->delete($id, true);
		$this->Session->setFlash('Post and comments deleted.');
		$this->redirect(array('action' => 'index'));
	}
}
