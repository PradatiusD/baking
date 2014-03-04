<?php // echo '<pre>'; print_r($this->html); echo '</pre>' ?>

<h1>Users</h1>
<table>
<tr>
	<th>Id</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Get Number</th>
</tr>

<?php foreach ($users as $user): ?>
<tr>
	<td><?php echo $user['User']['id']; ?></td>
	<td><?php echo $user['User']['first_name']; ?></td>
	<td><?php echo $user['User']['last_name']; ?></td>
	<td class="ajax"><?php 
        echo $this->Html->link(
            'See Phone',
            array(
            	'action' => 'get', $user['User']['id'].'.json', 
            	'controller'=>'phone_numbers'
            )
        );
 ?></td>
</tr>
<?php endforeach; ?>
<?php unset($users); ?>
</table>


<script>
	(function($){
		$('.ajax').click(function(e){
			e.preventDefault();

			var dataURL = $(this).find('a').attr('href');

			$.getJSON(dataURL, function(data){

				var msg = 'Phone number(s) for this person are:';

				for (var i = 0; i < data.length; i++) {
					msg += '\n' + data[i].PhoneNumber.phone;
				}

				alert(msg)
			});

		})
	})(jQuery)
</script>