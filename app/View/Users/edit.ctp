<!-- File: /app/View/Users/edit.ctp -->

<?php
	echo $this->Form->create('User');
	echo $this->Form->input('User.first_name');
	echo $this->Form->input('User.last_name');
	echo $this->Form->input('PhoneNumber.phone');
	echo $this->Form->end('Save User');
?>