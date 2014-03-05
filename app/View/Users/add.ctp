<h1>Add A User</h1>
<p><?php echo $this->Html->link('Go back to index', array('action' => 'index')); ?></p>
<?php
	
	echo $this->Form->create('User');
	echo $this->Form->input('User.first_name');
	echo $this->Form->input('User.last_name');
	echo $this->Form->input('PhoneNumber.0.phone', array('label'=>'Primary Phone Number'));
	echo $this->Form->hidden('PhoneNumber.0.user_id', array('type'=>'text'));
	echo $this->Form->input('PhoneNumber.1.phone', array('label'=>'Secondary Phone Number'));
	echo $this->Form->hidden('PhoneNumber.1.user_id', array('type'=>'text'));
	echo $this->Form->end('Add User');
?>

