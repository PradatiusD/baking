<h1><?php echo $post['Post']['title'] ?></h1>
<small><?php echo $post['Post']['created'] ?></small>
<p><?php echo $post['Post']['body'] ?></p>

<?php 
	echo $this->Html->link('back', array('controller' => 'posts', 'action' => 'index'));
?>

<?php
	echo $this->Form->postLink(
		'Delete',
		array('action' => 'delete', $post['Post']['id']),
		array('confirm' => 'Are you sure?')
	);
	
	echo $this->Html->link(
		'Edit', array('action' => 'edit', $post['Post']['id'])
	);
?>