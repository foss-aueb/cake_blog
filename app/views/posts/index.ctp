<h2>Blog posts</h2>
<table>
<tr>
<th>Title</th>
<th colspan="2">Actions</th>
<th>Created</th>
<th>Modified</th>
</tr>
<?php foreach ($posts as $post): ?>
<tr>
<td>
<?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?>
</td>
<td>
<?php echo $this->Html->link(
'Delete',
array('action' => 'delete', $post['Post']['id']), null, 'Are you sure?')?>
</td>
<td>
<?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id']));?>
</td>
<td>
<?php echo $post['Post']['created']; ?>
</td>
<td>
<?php echo $post['Post']['modified']; ?>
</td>
<?php endforeach; ?>
</table>

<?php echo $this->Html->link('+Add Post', array('action' => 'add'));?>