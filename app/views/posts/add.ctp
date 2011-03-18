<h2>Add Post</h2>
<?php
echo $this->Form->create('Post', array('action' => 'add'));
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Add Post');
?>
