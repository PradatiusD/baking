<?php // echo '<pre>'; print_r($users); echo '</pre>'; ?>

<h1>Users</h1>
<p><?php echo $this->Html->link('Add User', array('action' => 'add')); ?></p>
<table>
<tr>
	<th>Id</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Get Email</th>
	<th>Get Number</th>
	<th>Options</th>
</tr>

<?php foreach ($users as $user): ?>
<tr>
	<td><?php echo $user['User']['id']; ?></td>
	<td><?php echo $user['User']['first_name']; ?></td>
	<td><?php echo $user['User']['last_name']; ?></td>
	<td class="ajax-email"><?php 
	echo $this->Html->link(
		'See Email',
		array(
			'action' => 'get', $user['User']['id'].'.json', 
			'controller'=>'emails'
		)
	);
	?>
	<td class="ajax-phone_number"><?php 
	echo $this->Html->link(
		'See Phone',
		array(
			'action' => 'get', $user['User']['id'].'.json', 
			'controller'=>'phone_numbers'
		)
	);
	?>
	</td>
 	<td>
		<?php
			echo $this->Html->link(
				'Edit', array('action' => 'edit', $user['User']['id'])
			);
		?>
 		<?php
			echo $this->Form->postLink(
			'Delete',
			array('action' => 'delete', $user['User']['id']),
			array('confirm' => 'Are you sure?')
                );
		?>
 	</td>
</tr>
<?php endforeach; ?>
<?php unset($users); ?>
</table>


<script>

	(function($){
		function getAjaxData(selector, alertMsg, dataCall) {

			$(selector).click(function(e){
				e.preventDefault();

				var dataURL = $(this).find('a').attr('href');

				$.getJSON(dataURL, function(data){

					var msg = alertMsg;

					console.log(data)

					for (var i = 0; i < data.length; i++) {
						msg += '\n' + eval(dataCall);
					}

					alert(msg)
				});

			});
		}

		getAjaxData('.ajax-phone_number', 'Phone number(s) for this person are:', 'data[i].PhoneNumber.phone');
		getAjaxData('.ajax-email', 'Emails(s) for this person are:','data[i].Email.email');


	})(jQuery)
</script>