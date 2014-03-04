<h1>Add A User</h1>
<p><?php echo $this->Html->link('Go back to index', array('action' => 'index')); ?></p>
<?php
	echo $this->Form->create('User');
	echo $this->Form->input('User.first_name');
	echo $this->Form->input('User.last_name');
	echo $this->Form->input('PhoneNumber.phone');
	echo $this->Form->end('Save User');
?>

