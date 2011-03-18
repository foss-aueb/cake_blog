<h2><?php echo $post['Post']['title']; ?></h2>
<p><?php echo $post['Post']['body']; ?></p>
<?php if ($count_comments != 0): ?>
	<h1><?php echo $count_comments; ?> Comments 
	<a id="a_toggle" href="#" onclick="toggle('table_toggle', 'a_toggle')">hide</a></h1>
	<table id='table_toggle'>
	<?php foreach ($comments as $comment): ?>
		<tr>
		<td><?php echo $comment['Comment']['body']; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
	<script type="text/javascript">
		function toggle(param1, param2) {
			var elem = document.getElementById(param1);
			var text = document.getElementById(param2);
			if (elem.style.display == 'none') {
				elem.style.display = 'table';
				text.innerHTML = 'hide';
			}
			else {
				elem.style.display = 'none';
				text.innerHTML = 'show';
			}
		}
	</script>
<?php endif; ?>

<h1>Leave Comment</h1>
<?php
echo $this->Form->create('Comment', array(
	'url' => '/posts/view/' . $post['Post']['id'])
);
echo $this->Form->input('body');
echo $this->Form->input('post_id', array('type' => 'hidden', 'value' => $post['Post']['id']));
echo $this->Form->end('Submit Comment');

?>
