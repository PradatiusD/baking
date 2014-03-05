<!-- File: /app/View/Users/edit.ctp -->

<?php
	echo $this->Form->create('User');
	echo $this->Form->input('User.first_name');
	echo $this->Form->input('User.last_name');
	echo $this->Form->input('PhoneNumber.0.phone', array('label'=>'Primary Phone Number'));
	echo $this->Form->hidden('PhoneNumber.0.user_id');
	echo $this->Form->input('PhoneNumber.1.phone', array('label'=>'Secondary Phone Number'));
	echo $this->Form->hidden('PhoneNumber.1.user_id');
	echo $this->Form->end('Save User');
?>